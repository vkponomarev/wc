<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $url
 * @property int $status_id
 * @property int $sort
 */
class Blog extends \yii\db\ActiveRecord
{
    public $tags_array;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url'], 'required'],
            [['text'], 'string'],
            [['url'], 'unique'],
            [['status_id', 'sort'], 'integer'],
            [['sort'], 'integer','min'=>1,'max'=>99],
            [['title', 'url'], 'string', 'max' => 150],
            [['tags_array'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'url' => 'Url',
            'status_id' => 'Status ID',
            'sort' => 'Sort',
            'tags_array' => 'Теги',
            'author.username'=> 'Автор',
            'tagsAsString'=> 'Теги',
        ];
    }
    public static function getStatusList() {
        return ['off','on'];
    }

    public function getStatusName() {
        $list = self::getStatusList();
        return $list[$this->status_id];
    }
    public function getAuthor(){
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function getBlogHasTag(){
        return $this->hasMany(BlogHasTag::className(),['blog_id'=>'id']);
    }
    public function getTags(){
        return $this->hasMany(Tag::className(),['id'=>'tag_id'])->via('blogHasTag');
    }

    public function getTagsAsString(){

        $arr = ArrayHelper::map($this->tags,'id','name');
        return implode(', ',$arr);

    }


    public function afterFind(){
       $this->tags_array = $this->tags;
    }



    public function afterSave($insert, $changedAttributes){

        parent::afterSave($insert, $changedAttributes);

        $arr = \yii\helpers\ArrayHelper::map($this->tags,'id','id');

        foreach ($this->tags_array as $one){

            if (!in_array($one,$arr)){

                $model = new BlogHasTag();
                $model->blog_id =$this->id;
                $model->tag_id = $one;
                $model->save();

            }

            if (isset($arr[$one])){

                unset($arr[$one]);

            }
            BlogHasTag::deleteAll(['id'=>$arr]);
        }

    }

}

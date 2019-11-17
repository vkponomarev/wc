<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog_has_tag".
 *
 * @property int $id
 * @property int $blog_id
 * @property int $tag_id
 */
class BlogHasTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_has_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['blog_id', 'tag_id'], 'required'],
            [['blog_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'blog_id' => 'Blog ID',
            'tag_id' => 'Tag ID',
        ];
    }

    public function getBlogTag(){
        return $this->hasOne(Tag::className(),['id'=>'tag_id']);
    }

}

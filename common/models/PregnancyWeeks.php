<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pregnancy_weeks".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $active
 */
class PregnancyWeeks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pregnancy_weeks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'active'], 'required'],
            [['name', 'url', 'active'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'active' => 'Active',
        ];
    }

    public function getPregnancyWeeksText(){
        return $this->hasMany(PregnancyWeeksText::className(),['pregnancy_weeks_id'=>'id']);
    }

    public function getLanguages(){
        return $this->hasMany(Languages::className(),['id'=>'languages_id'])->via('pregnancyWeeksText');
  }

    public function getPregnancyWeeksTextId(){
        return $this->hasMany(PregnancyWeeksText::className(),['pregnancy_weeks_id'=>'id']);
    }


    public function translateButtons($model){

        $text='';
        $allLanguages=ArrayHelper::map(Languages::getAllLanguages(),'id','url');
        $allLanguagesInverse=ArrayHelper::map(Languages::getAllLanguages(),'url','id');
        $onLanguages=ArrayHelper::map($model->languages,'url','id');
        $onPagesText=ArrayHelper::map($model->pregnancyWeeksTextId,'languages_id','id');

        foreach ($allLanguages as $one) {


            if (isset($onLanguages[$one])) {

                $text .= '<a class="btn btn-success" href="/pregnancy-weeks-text/update?id=' . $onPagesText[$onLanguages[$one]] . '&languages=' .$onLanguages[$one]. '&pages=' .$model->id. '"><span class="fa fa-check"></span> ' . $one . ' </a> ';

            } else {

                $text .= '<a class="btn btn-primary" href="/pregnancy-weeks-text/create?languages=' . $allLanguagesInverse[$one] . '&pregnancyWeeks='. $model->id .'"><span class="fa fa-times"></span> ' . $one . ' </a> ';
            }

        }

        return $text;

    }


}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pregnancy_weeks_text".
 *
 * @property int $id
 * @property int $pregnancy_weeks_id
 * @property int $languages_id
 * @property string $menu_name
 * @property string $title
 * @property string $h1
 * @property string $description
 * @property string $keywords
 * @property string $text1
 * @property string $text2
 * @property int $active
 */
class PregnancyWeeksText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pregnancy_weeks_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pregnancy_weeks_id', 'languages_id', 'menu_name', 'title', 'h1', 'description', 'keywords', 'text1', 'text2', 'active'], 'required'],
            [['pregnancy_weeks_id', 'languages_id', 'active'], 'integer'],
            [['description', 'text1', 'text2'], 'string'],
            [['menu_name', 'title', 'h1', 'keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pregnancy_weeks_id' => 'Pregnancy Weeks ID',
            'languages_id' => 'Languages ID',
            'menu_name' => 'Menu Name',
            'title' => 'Title',
            'h1' => 'H1',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'text1' => 'Text1',
            'text2' => 'Text2',
            'active' => 'Active',
        ];
    }
}

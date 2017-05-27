<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Pets".
 *
 * @property integer $petID
 * @property integer $categoryID
 * @property string $name
 * @property string $description
 * @property string $cost
 * @property string $picture
 * @property string $datePosted
 *
 * @property Categories $category
 */
class Pets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Pets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryID'], 'integer'],
            [['name', 'description', 'cost', 'picture', 'datePosted'], 'required'],
            [['description'], 'string'],
            [['cost'], 'number'],
            [['datePosted'], 'safe'],
            [['name', 'picture'], 'string', 'max' => 255],
            [['categoryID'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categoryID' => 'categoryID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'petID' => 'Pet ID',
            'categoryID' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
            'cost' => 'Cost',
            'picture' => 'Picture',
            'datePosted' => 'Date Posted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['categoryID' => 'categoryID']);
    }
}

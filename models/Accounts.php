<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Accounts".
 *
 * @property integer $accountID
 * @property string $eMail
 * @property string $password
 * @property string $firstName
 * @property string $lastName
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eMail', 'password', 'firstName', 'lastName', 'address', 'city', 'state', 'zip', 'phone'], 'required'],
            [['eMail', 'password', 'firstName', 'lastName', 'address', 'city', 'state', 'zip', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'accountID' => 'Account ID',
            'eMail' => 'E Mail',
            'password' => 'Password',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone' => 'Phone',
        ];
    }
}

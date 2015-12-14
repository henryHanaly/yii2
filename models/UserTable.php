<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_table".
 *
 * @property integer $user_id
 * @property string $email
 * @property string $date
 * @property string $session
 * @property string $password
 * @property string $desc
 */
class UserTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'date', 'session', 'password', 'desc'], 'required'],
            [['date'], 'safe'],
            [['email', 'session', 'password', 'desc'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'date' => 'Date',
            'session' => 'Session',
            'password' => 'Password',
            'desc' => 'Desc',
        ];
    }
}

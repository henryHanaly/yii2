<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_table".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $user_name
 * @property string $post
 * @property string $last_update
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_name', 'post', 'last_update'], 'required'],
            [['user_id'], 'integer'],
            [['last_update'], 'safe'],
            [['user_name'], 'string', 'max' => 32],
            [['post'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'post' => 'Post',
            'last_update' => 'Last Update',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thread_table".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $description
 * @property string $date
 */
class ThreadTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thread_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'date'], 'required'],
            [['user_id'], 'integer'],
            [['date'], 'safe'],
            [['title', 'description'], 'string', 'max' => 32]
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
            'title' => 'Title',
            'description' => 'Description',
            'date' => 'Date',
        ];
    }
    
    public function findById(){
        return ThreadTable::findOne($id);
    }
    
    public function getPost(){
        return $this->hasMany(ThreadTable::className(), ['thread_id'=> 'id']);
    }
    
}

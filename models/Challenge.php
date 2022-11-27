<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "challenge".
 *
 * @property int $id_challenge
 * @property string $title
 * @property string $description
 * @property int $id_tema
 * @property int $id_chat
 * @property int $id_vicrory
 * @property string $data_create
 * @property string $data_close
 */
class Challenge extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'challenge';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'data_close'], 'required'],
            [['description'], 'string'],
            [[ 'data_close', 'data_create'], 'safe'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_challenge' => 'Id Challenge',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'data_create' => 'Дата создания',
            'data_close' => 'Дедлайн',
        ];
    }
}

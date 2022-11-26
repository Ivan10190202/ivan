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
            [['title', 'description', 'id_tema', 'id_chat', 'id_vicrory', 'data_create', 'data_close'], 'required'],
            [['description'], 'string'],
            [['id_tema', 'id_chat', 'id_vicrory'], 'integer'],
            [['data_create', 'data_close'], 'safe'],
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
            'id_tema' => 'Категория',
            'id_vicrory' => 'Ставка',
            'data_close' => 'Дедлайн',
        ];
    }
}

<?php

namespace app\models;

use yii\base\Model;

class Note extends Model
{
    public $id;
    public $tutor_id;
    public $message;
    public $created_at;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['tutor_id','required','message'=>'Need to tag tutor id'],
            ['message','required','message'=>'Message must not empty'],
            ['id', 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'message' => 'Message',
            'tutor_id' => 'Tutor ID',
            'created_at' => 'Created at',
        ];
    }

    public function getMaterial()
    {
        return $this->hasMany(Material::className(), ['tutor_id' => 'id']);
    }

    public static function find()
    {
        return new LessonQuery(get_called_class());
    }
}

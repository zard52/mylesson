<?php

namespace app\models;

use yii\base\Model;

class Material extends Model
{
    public $id;
    public $lesson_id;
    public $title;
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['lesson_id','required','message'=>'Need to tag lesson id'],
            ['title','required','message'=>'Title must not empty'],
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

    public static function find()
    {
        return new LessonQuery(get_called_class());
    }
}

<?php

namespace app\models;

use yii\base\Model;

class Material extends Model
{
    public $id;
    public $note_id;
    public $title;
    public $description;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['note_id','required','message'=>'Need to tag lesson id'],
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
        return new MaterialQuery(get_called_class());
    }
}

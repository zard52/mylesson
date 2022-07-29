<?php

namespace app\controllers;

use Yii;
use app\models\Note;
use app\models\Material;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

class NoteController extends Controller
{
    public function actionIndex($id)
    {
        $model = Note::findOne($id);//->where(['=', 'lesson_id', $id]);

        if ($model === null) {
            throw new NotFoundHttpException;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $model,
        ]);

        // return $model;

        // return $this->render('index', [
        //     'model' => $model,
        // ]);

        return $dataProvider;
    }
}

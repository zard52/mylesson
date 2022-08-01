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
        return $this->render('index', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionTest($id)
    {
        $model = $this->findModel($id);
        echo "<pre>";
        var_dump($model);
        echo "</pre>";
    }

    protected function findModel($id)
    {
        if (($model = Note::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\Lesson;
use app\models\Note;
use app\models\search\SearchLesson;

class ScheduleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $searchModel = new SearchLesson();

        $tutor_id = Yii::$app->user->identity->id;
        if (($dataProvider = $searchModel->searchByTutor($tutor_id)) !== null) {

            return $this->render('index', [
                'dataProvider' => $dataProvider,
                // 'notes' => $notes
            ]);
        }
    }

    public function actionView($id)
    {   
        $query = Note::find();

        $notes = $query->orderBy('id')
        ->where(['=', 'lesson_id', $id])
        ->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'notes' => $notes,
        ]);
        
    }

    protected function findModel($id)
    {
        if (($model = Lesson::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}

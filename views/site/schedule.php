<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use marekpetras\calendarview\CalendarView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchLesson */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Schedule';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tutor_id',
            'student_id',
            'start',
            'end',
            'status',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, \app\models\Lesson $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //     }
            // ],
        ],
    ]); ?>
    <!-- https://www.yiiframework.com/extension/yii2-calendarview -->
    <!-- https://github.com/philippfrenzel/yii2fullcalendar -->

</div>




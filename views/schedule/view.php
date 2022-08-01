<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lesson */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lesson-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tutor_id',
            'student_id',
            'start',
            'end',
            'status',
        ],
    ]) ?>
    <h5>Notes</h5>
    <?php foreach($notes as $note){
        echo "<p>$note->message</p>";
    }; ?>
    <h5>Materials</h5>
        
    <?php foreach($materials as $material){ ?>
    <?= Html::button($material->title, ['class' => 'btn btn-success','href'=>$material->link]) ?>
    <?php }; ?>

</div>

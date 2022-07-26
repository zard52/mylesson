<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Schedule';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    
    <p>
        content:
    </p>
    <?php
        $this->widget('CMaskedTextField',array(
            'mask'=>'99/99/9999'
        ));
    ?>
    <code><?= __FILE__ ?></code>
</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Authors $model */

$this->title = 'Update Authors: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Авторы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="authors-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Authors $model */

$this->title = 'Create Authors';
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

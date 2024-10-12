<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\BooksSearch $model */
/** @var yii\widgets\ActiveForm $form */

    
//print_r($searchModel);


$weekends = false;
$author_name = '';
$date = '';

$params = Yii::$app->request->getQueryParams();

if(isset($params['weekends'])==1) $weekends = true;
if(isset($params['author_name'])==1) $author_name = $params['author_name'];
if(isset($params['date'])==1) $date = $params['date'];

?>

<div class="books-search">
    
    
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    
    <div class="row">
        <div class="col-md-3">
            <?= Html::textInput('author_name',$author_name,array('class'=>'form-control')) ?>
        </div>
    
        <div class="col-md-12">
            <?= Html::input('date','date',$date) ?>
            <?= Html::checkbox('weekends', $weekends, ['label' => 'Только выходные дни']) ?>
        </div>
        
    
    
    </div>
    
    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['onclick' => "window.location.href = '" . Url::to('index.php?r=admin/books'). "'",'class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

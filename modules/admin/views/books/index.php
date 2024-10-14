<?php

use app\models\Books;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use aki\vue\Vue;
use yii\web\JsExpression;

/** @var yii\web\View $this */
/** @var app\models\BooksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php /* Vue::begin([
    'id' => "vue-app",
    'data' => [
        'message' => "hello world!!",
        'seen' => true,
        'todos' => [
            ['text' => "akbar joudi"],
            ['text' => "aref mohhamdzadeh"]
        ]
    ],
    'methods' => [
        'reverseMessage' => new yii\web\JsExpression("function(){"
                . "this.message = this.message.split('').reverse().join(''); "
                . "}"),
    ],
    'watch' => [
        'message' => new JsExpression('function(newval, oldval){
            console.log(newval)
        }'),
    ]
]); ?>

    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">Reverse Message</button>

    <p v-if="seen">Now you see me</p>


    <ol>
        <li v-for="todo in todos">
          {{ todo.text }}
        </li>
    </ol>

    <p>{{ message }}</p>
    <input v-model="message">


<?php Vue::end(); */ ?>
    
    


<div class="books-index">


    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['searchModel' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'label' => 'Автор',
                'format' => 'html',
                'value' => function($data) {
                    return $data->authors->name;
                }
            ],
            'name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Books $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => 'Дата перевода',
                'format' => 'html',
                'value' => function($data) {
                    return $data->date;
                }
            ],
        ],
    ]); ?>


</div>

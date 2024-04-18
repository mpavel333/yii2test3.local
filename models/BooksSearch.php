<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Books;

/**
 * BooksSearch represents the model behind the search form of `app\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        //print_r($params);

        $query = Books::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // подключаю таблицу из модели, один к одному
        // https://www.yiiframework.com/doc/guide/2.0/en/db-active-record#declaring-relations
        $query->joinWith('authors'); 

        // фильтрация по фамилии
        if(isset($params['author_name']) && !empty($params['author_name'])){
            $query->where(['like', 'authors.name', '%'.$params['author_name'].'%', false]);
        }


        return $dataProvider;
    }
}

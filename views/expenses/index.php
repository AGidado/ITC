<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpensesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expenses-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Expenses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'expense_date',
            'expense_value',
            'expense_reason:ntext',

            ['class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'template' => '{view}{Upate}{Delete}',
                'view' =>function ($url, $model) {
                    return Html::a('View', $url, ['title' => 'View',]);
                },
                'update' => function($url, $model)  {
                    return Html::a('Update', $url, ['title' => 'Update',]);
                },
                'delete' =>function ($url, $model) {
                    return Html::a('Delete', $url, ['title' => 'Delete',]);
                },
                
            
            ],
        
        ],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showOnEmpty'=>false,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'contentOptions'=>['style'=>'color:red','fontweight:bold'],
                'header'=>'employee Id',
                'label'=>'E-Id',
            ],
            [
                'attribute'=>'designation',
                'header'=>'Designation profile',
                'filter'=>['developer'=>'developer','designer'=>'designer'],
            ],
            'salary',
            'name',
           
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{update}{view}{delete}',
            ],
            
        ],
        'showFooter'=>true,
        
    ]); ?>


</div>

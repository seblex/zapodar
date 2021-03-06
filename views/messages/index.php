<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Обращения пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            'phone',
            'text:ntext',
            'created_at',
            [
                /**
                 * Название поля модели
                 */
                'attribute' => 'sost',
                /**
                 * Формат вывода.
                 * В этом случае мы отображает данные, как передали.
                 * По умолчанию все данные прогоняются через Html::encode()
                 */
                'format' => 'raw',
                /**
                 * Переопределяем отображение фильтра.
                 * Задаем выпадающий список с заданными значениями вместо поля для ввода
                 */
                'filter' => [
                    0 => 'Новое',
                    1 => 'В работе',
                    2 => 'Отработано',
                ],
                /**
                 * Переопределяем отображение самих данных.
                 * Вместо 1 или 0 выводим Yes или No соответственно.
                 * Попутно оборачиваем результат в span с нужным классом
                 */
                'value' => function ($model, $key, $index, $column) {
                    $active = $model->{$column->attribute};
                    if($active == 0){
                        return \yii\helpers\Html::tag(
                            'span',
                            'Новое',
                            [
                                'class' => 'label label-' . ('success'),
                            ]
                        );
                    }
                    if($active == 1){
                        return \yii\helpers\Html::tag(
                            'span',
                            'В работе',
                            [
                                'class' => 'label label-' . ('primary'),
                            ]
                        );
                    }
                    if($active == 2){
                        return \yii\helpers\Html::tag(
                            'span',
                            'Отработано',
                            [
                                'class' => 'label label-' . ('danger'),
                            ]
                        );
                    }
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php
use yii2-content-180201158\theme\helpers\Html;
use yii2-content-180201158\theme\widgets\Portlet;
use yii\data\ActiveDataProvider;



$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
Portlet::begin();//['title' => $this->title]
echo $this->render('index');
Portlet::end();

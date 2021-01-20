<?php
use yii2-content-180201158\theme\helpers\Html;
use yii2-content-180201158\theme\widgets\Portlet;
use yii2-content-180201158\AirCron\messages\AirCron;


$this->title = 'AirCron';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;




Portlet::begin(['title' => $this->title,'subTitle' => '&nbsp;Kontrol Paneli','icon' => 'glyphicon glyphicon-th']);
echo $this->render('index');

Portlet::end();




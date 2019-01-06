<?php

namespace frontend\controllers;
use yii\web\Controller;

class BasicController extends Controller{
    public function actionIndex(){
        		//BAĞLANTI
			$db = new yii\db\Connection([
		'dsn' => 'mysql:host=localhost;dbname=kouosl',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
	]);
    }
    public function actionMerhaba(){
        echo "Merhaba";
    }
    }
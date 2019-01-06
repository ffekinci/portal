<?php

namespace frontend\controllers;
use yii\web\Controller;

/**
 * Test controller
 */
class TestController extends Controller {

    public function actionIndex(){
        // root of directory yii2
        // /var/www/html/<yii2>
        $rootyii = realpath(dirname(__FILE__).'/../../');
		echo $rootyii;
 
        // create file <jam:menit:detik>.txt
        
    }

}
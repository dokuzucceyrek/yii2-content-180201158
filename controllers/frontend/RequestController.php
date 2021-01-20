<?php
namespace yii2-content-180201158\AirCron\controllers\frontend;


/**
 * Default controller for the `AirCron` module
 */
class RequestController extends \yii2-content-180201158\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
			 if (isset($_GET['RequestController']))
            return $this->render('_RequestController');
        return $this->render('_RequestController');
    }
}

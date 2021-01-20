<?php
namespace yii2-content-180201158\AirCron\controllers\api;


/**
 * Default controller for the `AirCron` module
 */
class RequestHandler extends \yii2-content-180201158\base\controllers\api\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_RequestHandler');
    }
}

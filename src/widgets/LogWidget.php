<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */

namespace readly24\logs\widgets;

use Yii;
use Faker\Provider\Base;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\data\BaseDataProvider;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use readly24\logs\Log;

class LogWidget extends Widget
{
    use Log;

    /**
     * @return string|void
     */
    public function run()
    {
        return $this->render($this->view,[
            'model' => $this->model,
            'provider' => $this->provider
        ]);
    }
}
<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */

namespace readly24\logs\widgets;

use readly24\logs\Log;
/**
 * Class LogListWidget
 */
class LogListWidget extends \yii\widgets\ListView {

    use Log  {
        setProvider as public setProviderLog;
        getProvider as public getProviderLog;
    }

    /**
     * @param $value
     * @return \yii\data\BaseDataProvider|\yii\data\DataProviderInterface
     */
    public function setProvider($value)
    {
        try{
            $this->setProviderLog($value);
            return $this->dataProvider = $this->_provider;
        }
        catch (Exception $exception){
            Yii::error($exception->getMessage());
        }
        return $this->dataProvider;
    }

    /**
     * @return \yii\data\DataProviderInterface
     */
    public function getProvider(){
        $this->getProviderLog();
        return $this->dataProvider;
    }
}
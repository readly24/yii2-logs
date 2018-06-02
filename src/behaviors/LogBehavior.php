<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */

namespace readly24\logs\behaviors;


use jakharbek\logs\models\Logs;
use yii\base\Behavior;

/**
 * @property $owner ActiveRecord | Model
 */
class LogBehavior extends Behavior
{
    public function createLog($message)
    {
        Logs::create($message,$this->owner);
    }
}
<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */

namespace jakharbek\logs;

use jakharbek\logs\models\Logs;


/**
 * Interface LogInterface
 * @package common\modules\logs\interfaces
 */
interface LogInterface
{
    /**
     * @param Logs $log
     * @return mixed
     */
    public function logRender(Logs $log);

    /**
     * @return mixed
     */
    public function getLogs();

}
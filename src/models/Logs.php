<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */

namespace readly24\logs\models;

use readly24\logs\LogInterface;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Class Logs
 * @package common\modules\logs\models
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'logs';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'log_id'  => Yii::t( 'main', 'Log ID' ),
            'message' => Yii::t( 'main', 'Message' ),
        ];
    }

    /**
     * @param $message
     * @param ActiveRecord $model
     * @return bool
     */
    public static function create($message,ActiveRecord $model)
    {
        if(empty($message)){return false;}
        if(!($model instanceof ActiveRecord)){return false;}
        $log = new self();
        $log->message = $message;
        if ($log->save()) {
            $model->link('logs', $log);
            return true;
        }

        return false;
    }

    /**
     * @param LogInterface|null $model
     * @return mixed
     */
    public function render(LogInterface $model = null){
        if($model == null){return $this->messsage;}
        $model_render = $model->logRender($this);
        if($model_render){
            return $model_render;
        }
        return $this->message;
    }

}

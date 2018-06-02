<?php
/**
 *  @author Jakhar <jakharbek@gmail.com>
 *  @author O`tkir   <https://t.me/Utkir24>
 *  @author Nazrullo <narzikk@mail.ru>
 *  @company Adigital Team <info@rasmiy.uz>
 *  @package Logs
 */
namespace readly24\logs\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Class LogsSearch
 * @package common\modules\logs\models
 */
class LogsSearch extends Logs
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['log_id'], 'integer'],
            [['message'], 'safe'],
        ];
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * @param $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Logs::find();

        $dataProvider = new ActiveDataProvider( [
			'query' => $query,
			'sort'  => false,
            'pagination' => [
                'pageSize' => 20,
            ],
		] );

        $this->load($params);

        if (!$this->validate())
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'log_id' => $this->log_id,
        ]);


        $query->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}

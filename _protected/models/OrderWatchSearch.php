<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderWatch;

/**
 * OrderWatchSearch represents the model behind the search form about `app\models\OrderWatch`.
 */
class OrderWatchSearch extends OrderWatch
{

    public $order;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'date_added', 'shipping_zone', 'firstname', 'lastname', 'email', 'telephone', 'fax'], 'required'],
            [['customer_id', 'order_id'], 'integer'],
            [['date_added'], 'safe'],
            [['total'], 'number'],
            [['shipping_zone'], 'string', 'max' => 128],
            [['firstname', 'lastname', 'telephone', 'fax', 'customer_group'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 96]
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OrderWatch::find();

        // $query->joinWith(['order']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // $dataProvider->sort->attributes['order'] = [
        //     // The tables are the ones our relation are configured to
        //     // in my case they are prefixed with "tbl_"
        //     'asc' => ['order.order_id' => SORT_ASC],
        //     'desc' => ['order.order_id' => SORT_DESC],
        // ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'customer_id' => $this->customer_id,
            'customer_group_id' => $this->customer_group_id,
            'shipping_zone_id' => $this->shipping_zone_id,
            'total' => $this->total,
            'order_status_id' => $this->order_status_id,
            'date_added' => $this->date_added,
        ]);

        $query->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'shipping_firstname', $this->shipping_firstname])
            ->andFilterWhere(['like', 'shipping_lastname', $this->shipping_lastname])
            ->andFilterWhere(['like', 'shipping_city', $this->shipping_city])
            ->andFilterWhere(['like', 'shipping_zone', $this->shipping_zone]);

        return $dataProvider;
    }
}

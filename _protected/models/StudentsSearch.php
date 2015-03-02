<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Students;

/**
 * StudentsSearch represents the model behind the search form about `app\models\Students`.
 */
class StudentsSearch extends Students
{
    public $class;
    public $room;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_id', 'room_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'firstname', 'lastname', 'code', 'dob', 'citizenid'], 'safe'],
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
        $query = Students::find();

        $query->joinWith(['class', 'room']);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['school_class'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['school_class.name' => SORT_ASC],
            'desc' => ['school_class.name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['school_room'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with ""
            'asc' => ['school_room.name' => SORT_ASC],
            'desc' => ['school_room.name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dob' => $this->dob,
            'class_id' => $this->class_id,
            'room_id' => $this->room_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'citizenid', $this->citizenid]);

        return $dataProvider;
    }
}

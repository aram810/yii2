<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "student".
 *
 * @property string $id
 * @property string $firstname
 * @property string $lastname
 * @property integer $age
 * @property string $country
 * @property string $city
 */
class Student extends ActiveRecord
{
    public $ageValues;
    
    /**
     * Student constructor.
     */
    public function __construct()
    {
        $this->ageValues = range(15, 35);
        parent::__construct();
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname'], 'required'],
            [['age'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 32],
            [['country', 'city'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'age' => 'Age',
            'country' => 'Country',
            'city' => 'City',
        ];
    }
}

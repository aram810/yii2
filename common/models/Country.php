<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "country".
 *
 * @property string $id
 * @property string $code
 * @property string $name
 * @property integer $enabled
 */
class Country extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['enabled'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'enabled' => 'Enabled',
        ];
    }

    public static function getCountries()
    {
        return self::find()
            ->select('name')
            ->orderBy('name')
            ->indexBy('code')
            ->column();
    }

}
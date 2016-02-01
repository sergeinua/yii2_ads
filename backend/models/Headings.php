<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "headings".
 *
 * @property integer $id
 * @property integer $record_state
 * @property string $name
 * @property integer $parent_id
 */
class Headings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'headings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_state', 'parent_id'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'record_state' => 'Состояние',
            'name' => 'Название',
            'parent_id' => 'Родительская категория',
        ];
    }


}

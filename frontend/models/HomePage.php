<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "home_page".
 *
 * @property integer $id
 * @property string $file_name
 * @property integer $position
 * @property string $record_state
 */
class HomePage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'record_state'], 'integer'],
            [['file_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'position' => 'Position',
            'record_state' => 'Record State',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "record_state".
 *
 * @property integer $id
 * @property integer $status
 * @property string $text
 */
class RecordState extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record_state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['text'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'text' => 'Text',
        ];
    }
}

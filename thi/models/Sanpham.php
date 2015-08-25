<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $id
 * @property string $maso
 * @property string $loai
 * @property string $name
 * @property string $mota
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['maso', 'loai', 'name', 'mota'], 'required'],
            [['mota'], 'string'],
            [['maso', 'loai'], 'string', 'max' => 50],
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
            'maso' => 'Maso',
            'loai' => 'Loai',
            'name' => 'Name',
            'mota' => 'Mota',
        ];
    }
}

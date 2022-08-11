<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "silsilah".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $sex
 * @property string|null $nama_bapak
 * @property int|null $level_silsilah
 */
class Silsilah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'silsilah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_silsilah', 'nama_bapak'],'integer'],
            [['nama'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 1],
            [['nama', 'level_silsilah','sex'],'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'sex' => 'Sex',
            'nama_bapak' => 'Nama Bapak',
            'level_silsilah' => 'Level Silsilah',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SilsilahQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SilsilahQuery(get_called_class());
    }
}

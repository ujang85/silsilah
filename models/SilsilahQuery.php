<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Silsilah]].
 *
 * @see Silsilah
 */
class SilsilahQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Silsilah[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Silsilah|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

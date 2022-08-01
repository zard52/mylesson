<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Material]].
 *
 * @see Note
 */
class MaterialQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * {@inheritdoc}
     * @return Material[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Material|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

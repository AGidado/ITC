<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expenses".
 *
 * @property int $id
 * @property string $expense_date
 * @property float $expense_value
 * @property string $expense_reason
 */
class Expenses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expenses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['expense_date', 'expense_value', 'expense_reason'], 'required'],
            [['expense_date'], 'safe'],
            [['expense_value'], 'number'],
            [['expense_reason'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'expense_date' => 'Expense Date',
            'expense_value' => 'Expense Value',
            'expense_reason' => 'Expense Reason',
        ];
    }
}

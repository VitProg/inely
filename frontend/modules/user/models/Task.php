<?php

namespace frontend\modules\user\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property string $name
 * @property integer $category
 * @property integer $author
 * @property integer $is_done
 * @property string $priority
 * @property string $time
 * @property string $is_done_date
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'author', 'is_done'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['priority'], 'string', 'max' => 12],
            [['time'], 'string', 'max' => 25],
            [['is_done_date'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'author' => 'Автор',
            'is_done' => 'Статус',
            'priority' => 'Важность',
            'time' => 'Срок выполнения',
            'is_done_date' => 'Дата выполнения',
            'tasks_cat.name' => 'Категория',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks_cat()
    {
        return $this->hasOne(TaskCat::className(), ['id' => 'category']);
    }
}
<?php

/**
 * Этот файл является частью проекта Inely.
 *
 * @link http://github.com/hirootkit/inely
 *
 * @author hirootkit <admiralexo@gmail.com>
 */

namespace backend\models;

use yii\base\Model;
use Yii;

class TaskForm extends Model
{
    /**
     * Посредник между созданием узла дерева [[make()]] и установкой отношений [[afterCreate()]].
     *
     * @param array    $data левые и правые индексы новой ветки
     *
     * @return int|bool значение первичного ключа только что созданной строки
     */
    public function make($data)
    {
        $task = new Task();
        $task->setAttributes($data, false);

        if ($task->save()) {
            return $task->afterCreate($data);
        }

        return null;
    }
}

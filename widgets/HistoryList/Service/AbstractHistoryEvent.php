<?php
namespace app\widgets\HistoryList\Service;

use app\models\History;

abstract class AbstractHistoryEvent implements IHistoryEvent
{
    protected $model;

    public function __construct(History $model)
    {
        $this->model = $model;
    }

    public function getModel(): History
    {
        return $this->model;
    }
}

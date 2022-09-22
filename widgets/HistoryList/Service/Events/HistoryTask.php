<?php

namespace app\widgets\HistoryList\Service\Events;

use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistoryTask extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/task';
    }

    public function getBodyText(): string
    {
        return $this->model->eventText . ':' . ($this->model->title ?? '');
    }
}

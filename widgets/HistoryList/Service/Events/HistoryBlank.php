<?php

namespace app\widgets\HistoryList\Service\Events;

use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistoryBlank extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/blank';
    }

    public function getBodyText(): string
    {
        return $this->model->eventText;
    }
}

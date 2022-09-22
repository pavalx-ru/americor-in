<?php

namespace app\widgets\HistoryList\Service\Events;

use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistorySms extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/sms';
    }

    public function getBodyText(): string
    {
        return $this->model->sms->message ?: '';
    }
}

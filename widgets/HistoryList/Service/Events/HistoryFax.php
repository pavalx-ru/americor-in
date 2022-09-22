<?php

namespace app\widgets\HistoryList\Service\Events;

use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistoryFax extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/fax';
    }

    public function getBodyText(): string
    {
        return $this->model->sms->message ?: '';
    }
}

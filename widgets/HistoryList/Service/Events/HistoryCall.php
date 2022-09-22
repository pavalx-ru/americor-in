<?php

namespace app\widgets\HistoryList\Service\Events;

use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistoryCall extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/call';
    }

    public function getBodyText(): string
    {
        $call = $this->model->call;
        return (
            $call ?
                $call->totalStatusText . ($call->getTotalDisposition(false) ? " <span class='text-grey'>" . $call->getTotalDisposition(false) . "</span>" : "") :
                '<i>Deleted</i> '
        );
    }
}

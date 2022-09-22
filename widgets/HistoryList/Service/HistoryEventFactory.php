<?php

namespace app\widgets\HistoryList\Service;

use app\models\History;
use app\widgets\HistoryList\Service\Events\HistoryBlank;
use app\widgets\HistoryList\Service\Events\HistoryCall;
use app\widgets\HistoryList\Service\Events\HistoryCustomerChangeQuality;
use app\widgets\HistoryList\Service\Events\HistoryCustomerChangeType;
use app\widgets\HistoryList\Service\Events\HistoryFax;
use app\widgets\HistoryList\Service\Events\HistorySms;
use app\widgets\HistoryList\Service\Events\HistoryTask;

class HistoryEventFactory
{
    public static function get(History $model): IHistoryEvent
    {
        switch ($model->event) {
            case History::EVENT_CREATED_TASK:
            case History::EVENT_COMPLETED_TASK:
            case History::EVENT_UPDATED_TASK:
                return new HistoryTask($model);
            case History::EVENT_INCOMING_SMS:
            case History::EVENT_OUTGOING_SMS:
                return new HistorySms($model);
            case History::EVENT_OUTGOING_FAX:
            case History::EVENT_INCOMING_FAX:
                return new HistoryFax($model);
            case History::EVENT_CUSTOMER_CHANGE_TYPE:
                return new HistoryCustomerChangeType($model);
            case History::EVENT_CUSTOMER_CHANGE_QUALITY:
                return new HistoryCustomerChangeQuality($model);
            case History::EVENT_INCOMING_CALL:
            case History::EVENT_OUTGOING_CALL:
                return new HistoryCall($model);
            default:
                return new HistoryBlank($model);
        }
    }
}

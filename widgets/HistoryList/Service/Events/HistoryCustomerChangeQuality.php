<?php

namespace app\widgets\HistoryList\Service\Events;

use app\models\Customer;
use app\widgets\HistoryList\Service\AbstractHistoryEvent;

final class HistoryCustomerChangeQuality extends AbstractHistoryEvent
{
    public function getView(): string
    {
        return 'events/customer_change_quality';
    }

    public function getBodyText(): string
    {
        return \Yii::t(
            '',
            ':text :old to :new',
            [
                ':text' => $this->model->eventText,
                ':old' => Customer::getQualityTextByQuality($this->model->getDetailOldValue('type')) ?? 'not set',
                ':new' => Customer::getQualityTextByQuality($this->model->getDetailNewValue('type')) ?? 'not set',
            ]
        );
    }
}

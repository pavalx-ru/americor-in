<?php
/**
 * @var IHistoryEvent $history
 */

use app\widgets\HistoryList\Service\IHistoryEvent;
use app\models\Sms;

$model = $history->getModel();

echo $this->render('common/_item_common', [
    'user' => $model->user,
    'body' => $history->getBodyText(),
    'footer' => $model->sms->direction === Sms::DIRECTION_INCOMING ?
        Yii::t('app', 'Incoming message from {number}', [
            'number' => $model->sms->phone_from ?? '',
        ]) : Yii::t('app', 'Sent message to {number}', [
            'number' => $model->sms->phone_to ?? '',
        ]),
    'iconIncome' => $model->sms->direction === Sms::DIRECTION_INCOMING,
    'footerDatetime' => $model->ins_ts,
    'iconClass' => 'icon-sms bg-dark-blue',
]);

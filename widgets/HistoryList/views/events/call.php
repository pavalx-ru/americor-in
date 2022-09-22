<?php
/**
 * @var IHistoryEvent $history
 */

use app\models\Call;
use app\widgets\HistoryList\Service\IHistoryEvent;


$model = $history->getModel();
$call = $model->call;
$answered = $call && (int)$call->status === Call::STATUS_ANSWERED;

echo $this->render('common/_item_common', [
    'user' => $model->user,
    'content' => $call->comment ?? '',
    'body' => $history->getBodyText(),
    'footerDatetime' => $model->ins_ts,
    'footer' => isset($call->applicant) ? "Called <span>{$call->applicant->name}</span>" : null,
    'iconClass' => $answered ? 'md-phone bg-green' : 'md-phone-missed bg-red',
    'iconIncome' => $answered && (int)$call->direction === Call::DIRECTION_INCOMING,
]);

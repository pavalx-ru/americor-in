<?php
/**
 * @var IHistoryEvent $history
 */

use app\widgets\HistoryList\Service\IHistoryEvent;

$model = $history->getModel();
$task = $model->task;

echo $this->render('common/_item_common', [
    'user' => $model->user,
    'body' => $history->getBodyText(),
    'iconClass' => 'fa-check-square bg-yellow',
    'footerDatetime' => $model->ins_ts,
    'footer' => isset($task->customerCreditor->name) ? "Creditor: " . $task->customerCreditor->name : '',
]);

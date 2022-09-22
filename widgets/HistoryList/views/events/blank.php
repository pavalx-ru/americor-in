<?php
/**
 * @var IHistoryEvent $history
 */

use app\widgets\HistoryList\Service\IHistoryEvent;

$model = $history->getModel();

echo $this->render('common/_item_common', [
    'user' => $model->user,
    'body' => $history->getBodyText(),
    'bodyDatetime' => $model->ins_ts,
    'iconClass' => 'fa-gear bg-purple-light',
]);

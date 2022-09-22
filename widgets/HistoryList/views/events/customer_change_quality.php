<?php
/**
 * @var IHistoryEvent $history
 */

use app\models\Customer;
use app\widgets\HistoryList\Service\IHistoryEvent;

$model = $history->getModel();

echo $this->render('common/_item_statuses_change', [
    'model' => $model,
    'oldValue' => Customer::getTypeTextByType($model->getDetailOldValue('type')),
    'newValue' => Customer::getTypeTextByType($model->getDetailNewValue('type')),
]);

<?php
/**
 * @var IHistoryEvent $history
 */

use app\models\Customer;
use app\widgets\HistoryList\Service\IHistoryEvent;

$model = $history->getModel();

echo $this->render('common/_item_statuses_change', [
    'model' => $model,
    'oldValue' => Customer::getQualityTextByQuality($model->getDetailOldValue('quality')),
    'newValue' => Customer::getQualityTextByQuality($model->getDetailNewValue('quality')),
]);

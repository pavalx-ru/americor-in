<?php
/**
 * @var $model HistorySearch
 */

use app\models\search\HistorySearch;
use app\widgets\HistoryList\Service\HistoryEventFactory;


$history = HistoryEventFactory::get($model);

echo $this->render($history->getView(), ['history' => $history]);

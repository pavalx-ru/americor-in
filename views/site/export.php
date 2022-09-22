<?php

/**
 * @var yii\web\View $this
 * @var History $model
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var string $exportType
 * @var string $filename
 */

use app\models\History;
use app\widgets\Export\Export;
use app\widgets\HistoryList\Service\HistoryEventFactory;

?>

<?= Export::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'ins_ts',
            'label' => Yii::t('app', 'Date'),
            'format' => 'datetime'
        ],
        [
            'label' => Yii::t('app', 'User'),
            'value' => static function (History $model) {
                return isset($model->user) ? $model->user->username : Yii::t('app', 'System');
            }
        ],
        [
            'label' => Yii::t('app', 'Type'),
            'value' => static function (History $model) {
                return $model->object;
            }
        ],
        [
            'label' => Yii::t('app', 'Event'),
            'value' => static function (History $model) {
                return $model->eventText;
            }
        ],
        [
            'label' => Yii::t('app', 'Message'),
            'value' => static function (History $model) {
                return strip_tags(HistoryEventFactory::get($model)->getBodyText());
            }
        ]
    ],
    'exportType' => $exportType,
    'batchSize' => Export::BATCH_SIZE,
    'filename' => $filename
]);

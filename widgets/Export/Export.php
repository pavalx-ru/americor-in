<?php

namespace app\widgets\Export;

use kartik\export\ExportMenu;
use Yii;

class Export extends ExportMenu
{
    public const BATCH_SIZE = 2000;
    public $exportType = self::FORMAT_CSV;

    public function init(): void
    {
        if (empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        if (empty($this->exportRequestParam)) {
            $this->exportRequestParam = 'exportFull_' . $this->options['id'];
        }

        $_POST[Yii::$app->request->methodParam] = 'POST';
        $_POST[$this->exportRequestParam] = true;
        $_POST[$this->exportTypeParam] = $this->exportType;
        $_POST[$this->colSelFlagParam] = false;

        parent::init();
    }
}
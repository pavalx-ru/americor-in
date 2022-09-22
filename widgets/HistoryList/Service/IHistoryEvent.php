<?php

namespace app\widgets\HistoryList\Service;

use app\models\History;

interface IHistoryEvent
{
    public function getView(): string;
    public function getBodyText(): string;
    public function getModel(): History;
}
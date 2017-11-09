<?php

namespace hafizhassan\yii2\audit\controllers;

use hafizhassan\yii2\audit\components\panels\RendersSummaryChartTrait;
use hafizhassan\yii2\audit\components\web\Controller;
use hafizhassan\yii2\audit\models\AuditEntry;
use Yii;

/**
 * DefaultController
 * @package hafizhassan\yii2\audit\controllers
 */
class DefaultController extends Controller
{
    use RendersSummaryChartTrait;

    /**
     * Module Default Action.
     * @return mixed
     */
    public function actionIndex()
    {
        $chartData = $this->getChartData();
        return $this->render('index', ['chartData' => $chartData]);
    }

    protected function getChartModel()
    {
        return AuditEntry::className();
    }
}

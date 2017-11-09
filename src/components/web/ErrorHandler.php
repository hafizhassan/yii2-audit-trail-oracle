<?php
/**
 * Error handler version for web based modules
 */

namespace hafizhassan\yii2\audit\components\web;

use hafizhassan\yii2\audit\components\base\ErrorHandlerTrait;

/**
 * ErrorHandler
 * @package hafizhassan\yii2\audit\components\web
 */
class ErrorHandler extends \yii\web\ErrorHandler
{
    use ErrorHandlerTrait;
}
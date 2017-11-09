<?php
/**
 * Console compatible error handler
 */

namespace hafizhassan\yii2\audit\components\console;

use hafizhassan\yii2\audit\components\base\ErrorHandlerTrait;

/**
 * ErrorHandler
 * @package hafizhassan\yii2\audit\components\console
 */
class ErrorHandler extends \yii\console\ErrorHandler
{
    use ErrorHandlerTrait;
}
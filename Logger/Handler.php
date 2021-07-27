<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Logger;

use Monolog\Logger;

/**
 * Class Handler
 * @package RLTSquare\DeliveryTime\Logger
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/deliverytime.log';
}

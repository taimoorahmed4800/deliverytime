<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Quote\Model\QuoteFactory;

/**
 * Class PlaceOrder
 * @package RLTSquare\DeliveryTime\Observer
 */
class PlaceOrder implements ObserverInterface
{
    /**
     * @var \Magento\Customer\Model\Session
     */
    protected $quoteFactory;
    /**
     * @var \RLTSquare\DeliveryTime\Logger\Logger
     */
    protected $_logger;
    /**
     * PlaceOrder constructor.
     * @param QuoteFactory $quoteFactory
     */
    public function __construct(
        \RLTSquare\DeliveryTime\Logger\Logger $logger,
        QuoteFactory $quoteFactory
    ) {
        $this->quoteFactory = $quoteFactory;
        $this->_logger = $logger;
    }

    /**
     * @param Observer $observer
     */
    public function execute(
        Observer $observer
    )
    {
        try {
            $order = $observer->getOrder();
            $quoteId = $order->getQuoteId();
            $quote  = $this->quoteFactory->create()->load($quoteId);
            $order->setDeliveryDate($quote->getDeliveryDate());
            if($quote->getHouseCode()) {
                $order->setHouseCode($quote->getHouseCode());
            }
            if($quote->getDeliveryComment()) {
                $order->setDeliveryComment($quote->getDeliveryComment());
            }
            if($quote->getDeliveryTime()) {
                $order->setDeliveryTime($quote->getDeliveryTime());
            }
            $order->save();
        } catch (\Exception $e) {
            $this->_logger->info($e->getMessage());
        }
    }
}

<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Controller\Index;
use Magento\Framework\App\Action\Context;
use Magento\Checkout\Model\Cart;
use Magento\Framework\App\Action\Action;
use Magento\Checkout\Model\Session;
use Magento\Quote\Model\QuoteRepository;

/**
 * Class SaveInQuote
 * @package RLTSquare\DeliveryTime\Controller\Index
 */
class SaveInQuote extends Action
{
    /**
     * SaveInQuote constructor.
     * @param Context $context
     * @param Session $checkoutSession
     * @param QuoteRepository $quoteRepository
     */
    public function __construct(
        Context $context,
        Session $checkoutSession,
        QuoteRepository $quoteRepository
    )
    {
        $this->checkoutSession = $checkoutSession;
        $this->quoteRepository = $quoteRepository;
        parent::__construct($context);
    }

    /**
     *
     */
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $quoteId = $this->checkoutSession->getQuoteId();
        $quote = $this->quoteRepository->get($quoteId);
        $quote->setDeliveryDate($data['date']);
        if($data['housecode']) {
            $quote->setHouseCode($data['housecode']);
        }
        if($data['comment']) {
            $quote->setDeliveryComment($data['comment']);
        }
        if($data['time']) {
            $quote->setDeliveryTime($data['time']);
        }
        $quote->save();
    }
}

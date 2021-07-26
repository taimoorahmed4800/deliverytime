<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Block\Order;
/**
 * Abstract block for display sales (quote/order/invoice etc.) items
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
class DeliveryTime extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \RLTSquare\DeliveryTime\Helper\Data
     */
    protected $helper;

    /**
     * DeliveryTime constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \RLTSquare\DeliveryTime\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \RLTSquare\DeliveryTime\Helper\Data $helper,
        array $data = []
    ){
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function IsEnabled()
    {
        return $this->helper->IsEnabled();
    }

    /**
     * @return mixed
     */
    public function IsHouseCodeEnable()
    {
        return $this->helper->IsHouseCodeEnable();
    }

    /**
     * @return mixed
     */
    public function IsDeliveryCommentEnable()
    {
        return $this->helper->IsDeliveryCommentEnable();
    }

    /**
     * @return mixed
     */
    public function getDateFormat()
    {
        return $this->helper->getDateFormat();
    }

    /**
     * @return mixed
     */
    public function getDaysOff()
    {
        return $this->helper->getDaysOff();
    }

    /**
     * @return string
     */
    public function getDateOff()
    {
        $daysoff = explode('"', $this->helper->getDateOff());
        $dates = [];
        foreach ($daysoff as $key => $value) {
            $parse = explode("-", $value);
            if ( isset($parse['1']) ) {
                $dates[] = $value;
            }
        }
        return implode(",", $dates);
    }

    /**
     * @return mixed
     */
    public function getDeliveryTimeEnable()
    {
        return $this->helper->getDeliveryTimeEnable();
    }

    /**
     * @return array
     */
    public function getDeliveryTimeFields()
    {
        $DeliveryTimeField = explode('"', $this->helper->getDeliveryTimeFields());
        $Time = [];
        foreach ($DeliveryTimeField as $key => $value) {
            if ( $value == 'type' ) {
                $Time[] = $DeliveryTimeField[$key+2]."h".$DeliveryTimeField[$key+6]."-".$DeliveryTimeField[$key+10]."h".$DeliveryTimeField[$key+14];
            }
        }
        return $Time;
    }
}

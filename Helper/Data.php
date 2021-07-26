<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Helper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package RLTSquare\DeliveryTime\Helper
 */
class Data extends AbstractHelper
{
    /**
     *
     */
    const XML_ENABLED = 'deliverytime/general/enabled';
    /**
     *
     */
    const XML_HOME_SECURITY_CODE_ENABLED = 'deliverytime/general/home_security_code';
    /**
     *
     */
    const XML_DELIVERY_COMMENT_ENABLED = 'deliverytime/general/delivery_comment';
    /**
     *
     */
    const XML_DATE_FORMAT_ENABLED = 'deliverytime/general/date_format';
    /**
     *
     */
    const XML_DAY_OFF_ENABLED = 'deliverytime/general/day_off';
    /**
     *
     */
    const XML_DATE_OFF = 'deliverytime/general/date_off';
    /**
     *
     */
    const XML_DELIVERYTIME_ENABLED = 'deliverytime/cancel_order_conditions/delivery_time';
    /**
     *
     */
    const XML_DELIVERYTIME_FIELDS = 'deliverytime/cancel_order_conditions/conditions_payment_methods';

    /**
     * @return mixed
     */
    public function IsEnabled()
    {
        return $this->scopeConfig->getValue(self::XML_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function IsHouseCodeEnable()
    {
        return $this->scopeConfig->getValue(self::XML_HOME_SECURITY_CODE_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function IsDeliveryCommentEnable()
    {
        return $this->scopeConfig->getValue(self::XML_DELIVERY_COMMENT_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getDateFormat()
    {
        return $this->scopeConfig->getValue(self::XML_DATE_FORMAT_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getDaysOff()
    {
        return $this->scopeConfig->getValue(self::XML_DAY_OFF_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getDateOff()
    {
        return $this->scopeConfig->getValue(self::XML_DATE_OFF, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getDeliveryTimeEnable()
    {
        return $this->scopeConfig->getValue(self::XML_DELIVERYTIME_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getDeliveryTimeFields()
    {
        return $this->scopeConfig->getValue(self::XML_DELIVERYTIME_FIELDS, ScopeInterface::SCOPE_STORE);
    }
}

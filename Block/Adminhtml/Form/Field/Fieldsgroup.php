<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field;
/**
 * Class Fieldsgroup
 * @package RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field
 */
class Fieldsgroup extends \Magento\Framework\View\Element\Html\Select
{
    /**
     * Fieldsgroup constructor.
     * @param \Magento\Framework\View\Element\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    /**
     * Get Banktransfer additional data
     *
     * @return setInputName
     */
    public function setInputName($value)
    {
        return $this->setName($value);
    }
    /**
     * Get Paymet methods
     *
     * @return set html array
     */
    public function _toHtml()
    {
        if (!$this->getOptions()) {
            $options = [];
            $options[0] = '00';
            $options[1] = '01';
            $options[2] = '02';
            $options[3] = '03';
            $options[4] = '04';
            $options[5] = '05';
            $options[6] = '06';
            $options[7] = '07';
            $options[8] = '08';
            $options[9] = '09';
            $options[10] = '10';
            $options[11] = '11';
            $options[12] = '12';
            $options[13] = '13';
            $options[14] = '14';
            $options[15] = '15';
            $options[16] = '16';
            $options[17] = '17';
            $options[18] = '18';
            $options[19] = '19';
            $options[20] = '20';
            $options[21] = '21';
            $options[22] = '22';
            $options[23] = '23';
            foreach ($options as $groupId => $groupLabel) {
                $this->addOption($groupId, addslashes($groupLabel));
            }
        }
        return parent::_toHtml();
    }
}

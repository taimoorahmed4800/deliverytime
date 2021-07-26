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
 * Class SelectGroup
 * @package RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field
 */
class SelectGroup extends \Magento\Framework\View\Element\Html\Select
{
    /**
     * SelectGroup constructor.
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
     * set day and hour
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
            $options[24] = '24';
            $options[25] = '25';
            $options[26] = '26';
            $options[27] = '27';
            $options[28] = '28';
            $options[29] = '29';
            $options[30] = '30';
            $options[31] = '31';
            $options[32] = '32';
            $options[33] = '33';
            $options[34] = '34';
            $options[35] = '35';
            $options[36] = '36';
            $options[37] = '37';
            $options[38] = '38';
            $options[39] = '39';
            $options[40] = '40';
            $options[41] = '41';
            $options[42] = '42';
            $options[43] = '43';
            $options[44] = '44';
            $options[45] = '45';
            $options[46] = '46';
            $options[47] = '47';
            $options[48] = '48';
            $options[49] = '49';
            $options[50] = '50';
            $options[51] = '51';
            $options[52] = '52';
            $options[53] = '53';
            $options[54] = '54';
            $options[55] = '55';
            $options[56] = '56';
            $options[57] = '57';
            $options[58] = '58';
            $options[59] = '59';
            foreach ($options as $groupId => $groupLabel) {
                $this->addOption($groupId, addslashes($groupLabel));
            }
        }
        return parent::_toHtml();
    }
}

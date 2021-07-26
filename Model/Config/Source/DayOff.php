<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Model\Config\Source;

/**
 * Class DayOff
 * @package RLTSquare\DeliveryTime\Model\Config\Source
 */
class DayOff implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Sunday')],
            ['value' => 1, 'label' => __('Monday')],
            ['value' => 2, 'label' => __('Tuesday')],
            ['value' => 3, 'label' => __('Wednesday')],
            ['value' => 4, 'label' => __('Thursday')],
            ['value' => 5, 'label' => __('Friday')],
            ['value' => 6, 'label' => __('Saturday')]
        ];
    }
}

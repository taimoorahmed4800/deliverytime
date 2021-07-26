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
 * Class DateFormat
 * @package RLTSquare\DeliveryTime\Model\Config\Source
 */
class DateFormat implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array[]
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'dd/mm/yy', 'label' => __('Day/Month/Year ('.date('d/m/Y').')')],
            ['value' => 'dd-mm-yy', 'label' => __('Day-Month-Year ('.date('d-m-Y').')')],
            ['value' => 'dd.mm.yy', 'label' => __('Day.Month.Year ('.date('d.m.Y').')')],
            ['value' => 'mm/dd/yy', 'label' => __('Month/Day/Year ('.date('m/d/Y').')')],
            ['value' => 'mm-dd-yy', 'label' => __('Month-Day-Year ('.date('m-d-Y').')')],
            ['value' => 'mm.dd.yy', 'label' => __('Month.Day.Year ('.date('m.d.Y').')')],
            ['value' => 'yy/mm/dd', 'label' => __('Year/Month/Day ('.date('Y/m/d').')')],
            ['value' => 'yy-mm-dd', 'label' => __('Year-Month-Day ('.date('Y-m-d').')')],
            ['value' => 'yy.mm.dd', 'label' => __('Year.Month.Day ('.date('Y.m.d').')')],
            ['value' => 'dd M, yy', 'label' => __('Short d M, y ('.date('d M, Y').')')],
            ['value' => 'dd MM, yy', 'label' => __('Medium d MM, Y ('.date('d F, Y').')')],
            ['value' => 'DD, dd MM, yy', 'label' => __('Full DD, d MM, yy ('.date('l, d F, Y').')')]
        ];
    }
}

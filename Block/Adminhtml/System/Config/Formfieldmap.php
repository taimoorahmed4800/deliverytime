<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Block\Adminhtml\System\Config;

/**
 * Class Formfieldmap
 * @package RLTSquare\DeliveryTime\Block\Adminhtml\System\Config
 */
class Formfieldmap extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray
{
    /**
     * @var
     */
    protected $_groupRenderer;
    /**
     * @var
     */
    protected $_hoursRenderer;
    /**
     * @var
     */
    protected $_minutesRenderer;
    /**
     * @var
     */
    protected $_selectRenderer;
    /**
     * @var
     */
    protected $_isenableselectRenderer;
    /**
     * @var array
     */
    protected $_columns = [];
    /**
     * @var bool
     */
    protected $_addAfter = true;
    /**
     *  set block to field
     *
     * @return block
     */
    protected function _getGroupRenderer()
    {
        if (!$this->_groupRenderer) {
            $this->_groupRenderer = $this->getLayout()->createBlock(
                \RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field\Fieldsgroup::class,
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );
            $this->_groupRenderer->setClass('formfields_group_select');
        }
        return $this->_groupRenderer;
    }

    /**
     * @return mixed
     */
    protected function _getToHours()
    {
        if (!$this->_hoursRenderer) {
            $this->_hoursRenderer = $this->getLayout()->createBlock(
                \RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field\Fieldsgroup::class,
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );
            $this->_hoursRenderer->setClass('formfields_tohours');
        }
        return $this->_hoursRenderer;
    }

    /**
     * @return mixed
     */
    protected function _getToMinutes()
    {
        if (!$this->_minutesRenderer) {
            $this->_minutesRenderer = $this->getLayout()->createBlock(
                \RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field\SelectGroup::class,
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );
            $this->_minutesRenderer->setClass('formfields_tominutes');
        }
        return $this->_minutesRenderer;
    }
    /**
     *  set block to field
     *
     * @return block
     */
    protected function _getSelectRenderer()
    {
        if (!$this->_selectRenderer) {
            $this->_selectRenderer = $this->getLayout()->createBlock(
                \RLTSquare\DeliveryTime\Block\Adminhtml\Form\Field\SelectGroup::class,
                '',
                ['data' => ['is_render_to_js_template' => true]]
            );
            $this->_selectRenderer->setClass('formfields_option_select');
        }
        return $this->_selectRenderer;
    }
    /**
     *  set fields of dynamic rows
     *
     *
     */
    protected function _prepareToRender()
    {
        $this->addColumn('type', ['label' => __('From'), 'class' => 'required-entry', 'renderer' => $this->_getGroupRenderer()]);
        $this->addColumn('unit', ['label' => __(''),'class' => 'required-entry', 'renderer' => $this->_getSelectRenderer()]);
        $this->addColumn('tohours', ['label' => __('To'), 'class' => 'required-entry', 'renderer' => $this->_getToHours()]);
        $this->addColumn('tominutes', ['label' => __(''),'class' => 'required-entry', 'renderer' => $this->_getToMinutes()]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }
    /**
     *  set fields saved data
     *
     * @return block
     */
    public function renderCellTemplate($columnName)
    {
        return parent::renderCellTemplate($columnName);
    }
    /**
     *  set fields saved data
     *
     *
     */
    protected function _prepareArrayRow(\Magento\Framework\DataObject $row)
    {
        $optionExtraAttr = [];
        $optionExtraAttr['option_' . $this->_getGroupRenderer()->calcOptionHash($row->getData('type'))] =
            'selected="selected"';
        $optionExtraAttr['option_' . $this->_getSelectRenderer()->calcOptionHash($row->getData('unit'))] =
            'selected="selected"';
        $optionExtraAttr['option_' . $this->_getToHours()->calcOptionHash($row->getData('tohours'))] =
            'selected="selected"';
        $optionExtraAttr['option_' . $this->_getToMinutes()->calcOptionHash($row->getData('tominutes'))] =
            'selected="selected"';
        $row->setData(
            'option_extra_attrs',
            $optionExtraAttr
        );
    }
}

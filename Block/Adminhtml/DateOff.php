<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Block\Adminhtml;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;
use Magento\Framework\Registry;

/**
 * Class DateOff
 * @package RLTSquare\DeliveryTime\Block\Adminhtml
 */
class DateOff extends AbstractFieldArray
{
    /**
     * @var
     */
    private $holidaysRenderer;
    /**
     * @var
     */
    private $dateRenderer;

    /**
     * DateOff constructor.
     * @param Context $context
     * @param Registry $coreRegistry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     *
     */
    protected function _prepareToRender()
    {
        $this->addColumn(
            'select_date',
            [
                'label' => __('Date'),
                'id' => 'select_date',
                'class' => 'daterecuring',
                'style' => 'width:200px'
            ]
        );
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }

    /**
     * @param DataObject $row
     */
    protected function _prepareArrayRow(DataObject $row): void
    {
        $options = [];
        $row->setData('option_extra_attrs', $options);
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = parent::_getElementHtml($element);
        $script = '<script type="text/javascript">
        require(["jquery", "jquery/ui", "mage/calendar"], function (jq) {
            jq(function(){
                function bindDatePicker() {
                    setTimeout(function() {
                        jq(".daterecuring").datepicker( { dateFormat: "dd-mm-yy" } );
                        }, 50);
                    }
                    bindDatePicker();
                    jq("button.action-add").on("click", function(e) {
                        bindDatePicker();
                        });
                        });
                        });
                        </script>
                        <script>
                        require(["jquery","jquery/jquery.cookie"], function($){
                            $(document).ready(function(){
                                var loop = true;
                                setInterval(function(){
                                    if(loop) {
                                        if($(".formfields_option_select").length) {
                                            loop = false;
                                            $(".formfields_option_select").css("margin-top", "33px");
                                            $(".formfields_option_select").css("position", "absolute");
                                            $(".formfields_option_select").css("width", "80px");
                                            $(".formfields_option_select").css("margin-left", "-105px");
                                            $(".formfields_tominutes").css("margin-top", "33px");
                                            $(".formfields_tominutes").css("position", "absolute");
                                            $(".formfields_tominutes").css("width", "80px");
                                            $(".formfields_tominutes").css("margin-left", "-105px");
                                            $(".formfields_group_select").parent("td").css("padding-bottom", "19%");
                                        }
                                    }
                                    }, 300);
                                    });
                                    $(".col-actions-add").click(function() {
                                        $(".formfields_option_select").css("margin-top", "33px");
                                        $(".formfields_option_select").css("position", "absolute");
                                        $(".formfields_option_select").css("width", "80px");
                                        $(".formfields_option_select").css("margin-left", "-105px");
                                        $(".formfields_tominutes").css("margin-top", "33px");
                                        $(".formfields_tominutes").css("position", "absolute");
                                        $(".formfields_tominutes").css("width", "80px");
                                        $(".formfields_tominutes").css("margin-left", "-105px");
                                        $(".formfields_group_select").parent("td").css("padding-bottom", "19%");
                                        });
                                        });
                                        </script>';
        $html .= $script;
        return $html;
    }
}

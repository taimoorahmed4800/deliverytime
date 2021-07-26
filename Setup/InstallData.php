<?php
/**
 *
 * @category : RLTSquare
 * @Package  : RLTSquare_DeliveryTime
 * @Author   : RLTSquare <support@rltsquare.com>
 * @copyright Copyright 2021 © rltsquare.com All right reserved
 * @license https://rltsquare.com/
 */
namespace RLTSquare\DeliveryTime\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Customer\Model\Customer;
use Magento\Customer\Setup\CustomerSetupFactory;

/**
 * Class InstallData
 * @package RLTSquare\DeliveryTime\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var CustomerSetupFactory
     */
    private $customerSetupFactory;
    /**
     * Constructor
     *
     * @param \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory
     */
    public function __construct(
        CustomerSetupFactory $customerSetupFactory
    ) {
        $this->customerSetupFactory = $customerSetupFactory;
    }
    /**
     * {@inheritdoc}
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();
// add delivery date
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'delivery_date',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Date'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'delivery_date',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Date'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'delivery_date',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Date'
            ]
        );
// add house code
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'house_code',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'house_code'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'house_code',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'house_code'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'house_code',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'house_code'
            ]
        );
// add delivery_comment
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'delivery_comment',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'delivery_comment'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'delivery_comment',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'delivery_comment'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'delivery_comment',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'delivery_comment'
            ]
        );
// Delivery Time
        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'delivery_time',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Time'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'delivery_time',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Time'
            ]
        );
        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order_grid'),
            'delivery_time',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'visible'  => true,
                'default' => null,
                'comment' => 'Delivery Time'
            ]
        );
    }
}

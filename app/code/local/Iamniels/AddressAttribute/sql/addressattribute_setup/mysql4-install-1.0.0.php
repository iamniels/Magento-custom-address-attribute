<?php
// @var $setup Mage_Eav_Model_Entity_Setup
$setup = $this;

$setup->startSetup();

$setup->addAttribute('customer_address', 'building', array(
    'type'              => 'varchar',
    'input'             => 'text',
    'label'             => 'Building',
    'visible'           => true,
    'required'          => false,
    'unique'            => false,
    'sort_order'        => 75, // Positions of the other attributes are listed in
    'position'          => 75, // Mage_Customer_Model_Resource_Setup
    'is_user_defined'   => 1,
    'is_system'         => 0,
    'validate_rules'    => array(
        'max_text_length'   => 255,
        ),
    )
);

// Change the column name into your own attribute name
$setup->run("
    ALTER TABLE {$this->getTable('sales_flat_quote_address')} ADD COLUMN `building` VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL;
    ALTER TABLE {$this->getTable('sales_flat_order_address')} ADD COLUMN `building` VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL;
");

$eavConfig = Mage::getSingleton('eav/config');

$store = Mage::app()->getStore(Mage_Core_Model_App::ADMIN_STORE_ID);
$attribute = $eavConfig->getAttribute('customer_address', 'building');
$attribute->setWebsite($store->getWebsite());
        
$usedInForms = array(
    'adminhtml_customer_address',
    'customer_address_edit',
    'customer_register_address'
);
$attribute->setData('used_in_forms', $usedInForms);
$attribute->save();    
    
$setup->endSetup();

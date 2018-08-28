<?php
/**
 * Checks if table exists in db, if not create table
 * If exception is thrown it is logged in error.log from var/log
 *
 * @author   Abrudean Sergiu <sergiu.abrudean@evozon.com>
 * @category Evozon
 * @package  Evozon_Modul
 * @var Evozon_Modul_Model_Resource_Setup $installer
 *
 */
$installer = $this;
$installer->startSetup();

try {
    if ($installer->getConnection()->isTableExists('evozon_modul/modelu') !== true) {
        $table = $installer->getConnection()
            ->newTable($installer->getTable('evozon_modul/modelu'))
            ->addColumn('banner_id',
                Varien_Db_Ddl_Table::TYPE_INTEGER, 10, [
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true,
                    'identity' => true,
                ])
            ->addColumn('category_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, [
                'unsigned' => true,
                'nullable' => false,
            ])
            ->addColumn('text', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, [
                'nullable' => false,
                'default' => 'Hello!',
            ])
            ->addForeignKey(
                $installer->getFkName($installer->getTable('evozon_modul/modelu'), 'category_id',
                    $installer->getTable('catalog/category'),
                    'entity_id'),
                'category_id',
                $installer->getTable('catalog/category'),
                'entity_id',
                Varien_Db_Ddl_Table::ACTION_CASCADE,
                Varien_Db_Ddl_Table::ACTION_CASCADE
            );
        $installer->getConnection()->createTable($table);
    }
} catch (\Zend_Db_Exception $exception) {
    Mage::logException($exception);
}
$installer->endSetup();


<?php
/**
 * Insert into db/tabela_modelumeu
 *
 * @author   Abrudean Sergiu <sergiu.abrudean@evozon.com>
 * @category Evozon
 * @package  Evozon_Modul
 *
 */
$installer = $this;
$installer->startSetup();
$banners = [
    [
        'category_id' => 1,
        'text' => 'PROMOTII EXCEPTIONALE DOAR LA NOI!'
    ],
    [
        'category_id' => 1,
        'text' => 'DA DA DA NA NA NA'
    ]
];
foreach ($banners as $banner) {
    Mage::getModel('evozon_modul/modelu')
        ->setData($banner)
        ->save();
}
$installer->endSetup();

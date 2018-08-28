<?php
/**
 * Insert randomly into db/tabela_modelumeu
 *
 * @author   Abrudean Sergiu <sergiu.abrudean@evozon.com>
 * @category Evozon
 * @package  Evozon_Modul
 *
 */
$installer = $this;
$installer->startSetup();
$texte   = [
    'Va vrem banii!!!',
    'Nu vreau banii tai, nu sunt pe interes!',
    'Daca nu ai bani du-te la alt magazin, saracule',
    'PROMOTII EXCEPTIONALE DOAR LA NOI!',
    'DA DA DA NA NA NA',
    'Obiecte de valoare doar la noi, se stie!',
    'Ai bani, ai haine'
];
$idArray = [
    1,
    2,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20,
    21,
    22,
    23,
    24,
    25,
    26,
    27,
    28,
    29,
    40
];
foreach ($idArray as $categoryId) {
    for ($i = 0; $i < rand(1, 4); $i++) {
        $banner = [
            'category_id' => $categoryId,
            'text' => $texte[rand(0, 6)]
        ];
        Mage::getModel('evozon_modul/modelu')
            ->setData($banner)
            ->save();
    }
}

$installer->endSetup();

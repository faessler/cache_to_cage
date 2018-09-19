<?php

// Set backend skin
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY . '_skin'] = [];
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY . '_skin']['name'] = $_EXTKEY . ' skin';
$GLOBALS['TBE_STYLES']['skins'][$_EXTKEY . '_skin']['stylesheetDirectories'] = [
    'structure' => 'EXT:' . $_EXTKEY . '/Resources/Public/Css/Backend/',
    'visual' => 'EXT:' . $_EXTKEY . '/Resources/Public/Css/Backend/',
];
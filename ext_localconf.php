<?php

// Hook for manipulating cacheActions
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['additionalBackendItems']['cacheActions']['cageCache'] = Faessler\CacheToCage\Hooks\Backend\Toolbar\cageCache::class;


// Register cache/cage icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'whiteCage',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:cache_to_cage/Resources/Public/Icons/white.png']
);
$iconRegistry->registerIcon(
    'grayCage',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:cache_to_cage/Resources/Public/Icons/gray.png']
);
$iconRegistry->registerIcon(
    'greenCage',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:cache_to_cage/Resources/Public/Icons/green.png']
);
$iconRegistry->registerIcon(
    'redCage',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:cache_to_cage/Resources/Public/Icons/red.png']
);

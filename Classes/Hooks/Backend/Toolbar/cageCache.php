<?php
namespace Faessler\CacheToCage\Hooks\Backend\Toolbar;

use TYPO3\CMS\Backend\Toolbar\ClearCacheActionsHookInterface;

/**
 * Clear Cache hook for the Backend.
 *
 * @hook TYPO3_CONF_VARS|SC_OPTIONS|additionalBackendItems|cacheActions
 */
class cageCache implements ClearCacheActionsHookInterface {
    /**
     * Modifies CacheMenuItems array.
     *
     * @param array $cacheActions
     * @param array $optionValues
     */
    public function manipulateCacheActions(&$cacheActions, &$optionValues)
    {
        $cacheActions[0]['title'] = 'LLL:EXT:cache_to_cage/Resources/Private/Language/locallang.xlf:flushPageCachesTitle';
        $cacheActions[0]['description'] = 'LLL:EXT:cache_to_cage/Resources/Private/Language/locallang.xlf:flushPageCachesDescription';
        $cacheActions[0]['iconIdentifier'] = 'greenCage';

        $cacheActions[1]['title'] = 'LLL:EXT:cache_to_cage/Resources/Private/Language/locallang.xlf:flushAllCachesTitle2';
        $cacheActions[1]['description'] = 'LLL:EXT:cache_to_cage/Resources/Private/Language/locallang.xlf:flushAllCachesDescription2';
        $cacheActions[1]['iconIdentifier'] = 'redCage';
    }
}

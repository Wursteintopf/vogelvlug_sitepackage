<?php
defined('TYPO3_MODE') || die();
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'vogelvlug_sitepackage';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Vogelvlug Sitepackage'
    );
});

<?php
namespace Vogelvlug\VogelvlugSitepackage\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class CurrentYearViewHelper extends AbstractViewHelper
{
    public function render() {
        return date('Y');
    }
}

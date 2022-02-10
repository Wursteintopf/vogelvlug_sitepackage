<?php
namespace Vogelvlug\VogelvlugSitepackage\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class SplitViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('stringToSplit', 'string', 'The String To be Split', true);
        $this->registerArgument('as', 'string', 'Name of the return variable', true);
    }

    public function render() {
        $this->templateVariableContainer->add($this->arguments['as'], explode(',',$this->arguments['stringToSplit']));
        $output = $this->renderChildren();
        $this->templateVariableContainer->remove('returnArray');
        return $output;
    }
}

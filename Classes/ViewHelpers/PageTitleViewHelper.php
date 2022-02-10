<?php
namespace Vogelvlug\VogelvlugSitepackage\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Connection;

class PageTitleViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        $this->registerArgument('pageId', 'string', 'Page Id to fetch Title', true);
    }

    public function render() {
        if ($this->arguments['pageId'] == '')
        {
            return '';
        }
        else
        {
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('pages')->createQueryBuilder();
            $result = $queryBuilder
                ->select('title')
                ->from('pages')
                ->where($queryBuilder->expr()->eq('uid', $this->arguments['pageId']))
                ->execute()
                ->fetch();

            return $result['title'];
        }
    }
}

<?php

namespace Bmack\IssueTester;

use TYPO3\CMS\Workspaces\Event\AfterDataGeneratedForWorkspaceEvent;

final class DataGeneratorWorkspaceListener
{
    public function __invoke(AfterDataGeneratedForWorkspaceEvent $event)
    {
        $data = $event->getData();
        foreach ($data as &$itm) {
            $itm['expanded'] = true;
            if ($itm['table'] === 'tt_content') {
                $itm['expanded'] = false;
            }
        }
        $event->setData($data);
    }
}
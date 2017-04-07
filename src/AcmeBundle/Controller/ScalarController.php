<?php

namespace AcmeBundle\Controller;

use AcmeBundle\Entity\DirectIndustryStatisticsEntry;
use AcmeBundle\Service\EntityHandler\StatisticsEntityHandler;

class ScalarController extends BaseController
{
    /**
     * @return StatisticsEntityHandler
     */
    protected function getEntityHandler(): StatisticsEntityHandler
    {
        return $this->get('acme_bundle.entity_handler.direct_industry_statistics_entry');
    }

    /**
     * @return string
     */
    protected function getEntityName(): string
    {
        return DirectIndustryStatisticsEntry::class;
    }
}

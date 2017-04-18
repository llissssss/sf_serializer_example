<?php

namespace AcmeBundle\Controller;

use AcmeBundle\Entity\DirectIndustryStatisticsEntry;
use AcmeBundle\Entity\ScalarValues;
use AcmeBundle\Service\EntityHandler\StatisticsEntityHandler;

class ScalarController extends BaseController
{
    /**
     * @return string
     */
    protected function getEntityName(): string
    {
        return ScalarValues::class;
    }

    /**
     * @return StatisticsEntityHandler
     */
    protected function getSerializer(): Serializer
    {
        $this->container->get('acme_bundle.serialization.serializer');
    }
}

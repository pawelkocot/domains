<?php

namespace DomainsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route(service="controller.dashboard")
 */
class DashboardController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }
}
<?php

declare(strict_types=1);

/*
 * This file is part of Contao Page Gone Bundle.
 *
 * (c) Hamid Peywasti 2025 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ContaoPageGoneBundle\Controller\Page;

use Contao\CoreBundle\DependencyInjection\Attribute\AsPage;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\PageModel;
use Contao\PageRegular;
use Symfony\Component\HttpFoundation\Response;

#[AsPage(type: 'error_410')]
class Error410Controller
{
    private ContaoFramework $framework;

    /**
     * Constructor with dependency injection
     */
    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }

    public function __invoke(PageModel $pageModel): Response
    {
        // Initialize Contao framework
        $this->framework->initialize();

        // Use PageRegular to render the page as a regular page
        $pageRegular = new PageRegular();
        $response = $pageRegular->getResponse($pageModel);

        // Set the 410 Gone status
        $response->setStatusCode(Response::HTTP_GONE);

        return $response;

        // Return a simple 410 Gone response
        // return new Response('Resource permanently gone', Response::HTTP_GONE);
    }
}
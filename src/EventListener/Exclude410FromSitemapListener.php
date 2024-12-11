<?php

declare(strict_types=1);

/*
 * This file is part of Contao Page Gone Bundle.
 *
 * (c) Hamid Peywasti 2025 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ContaoPageGoneBundle\EventListener;

use Contao\CoreBundle\Event\ContaoCoreEvents;
use Contao\CoreBundle\Event\SitemapEvent;
use Contao\PageModel;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener(ContaoCoreEvents::SITEMAP)]
class Exclude410FromSitemapListener
{
    public function __invoke(SitemapEvent $event): void
    {
        $sitemap = $event->getDocument(); // SimpleXMLElement for the sitemap

        // Get the <urlset> node (root element containing <url> elements)
        $urlSet = $sitemap->childNodes->item(0);

        if (!$urlSet || !$urlSet->childNodes) {
            return; // No URLs to process
        }
    }
}
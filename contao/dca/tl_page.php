<?php

declare(strict_types=1);

/*
 * This file is part of Contao Page Gone Bundle.
 *
 * (c) Hamid Peywasti 2025 <hamid@respinar.com>
 *
 * @license MIT
 */

// Define the palette for error_410
$GLOBALS['TL_DCA']['tl_page']['palettes']['error_410'] = '{title_legend},title,type;{routing_legend},alias,requireItem,routePath,routePriority,routeConflicts;{meta_legend},pageTitle,robots,description,serpPreview;{canonical_legend:hide},canonicalLink,canonicalKeepParams;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{cache_legend:hide},includeCache;{chmod_legend:hide},includeChmod;{expert_legend:hide},cssClass,sitemap,hide,guests,noSearch;{tabnav_legend:hide},accesskey;{publish_legend},published,start,stop';
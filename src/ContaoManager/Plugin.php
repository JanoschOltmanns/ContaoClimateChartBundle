<?php
/*
 * This file is part of contao climate charts bundle.
 *
 * (c) Janosch Oltmanns
 *
 * @license LGPL-3.0-or-later
 */
namespace JanoschOltmanns\ContaoClimateChartBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use JanoschOltmanns\ContaoClimateChartBundle\ContaoClimateChartBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoClimateChartBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}

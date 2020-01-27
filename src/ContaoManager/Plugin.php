<?php

/*
 * This file is part of bytesystems/contao-news-homesite
 *
 * (c) 2020 bytesystems ITS GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    bits_homesite
 * @author     Daniel Heim
 * @copyright  2020 bytesystems ITS GmbH
 * @license    LICENSE LGPL-3.0
 *
 */

namespace bits\ContaoNewsHomesite\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoNewsHomesiteBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}

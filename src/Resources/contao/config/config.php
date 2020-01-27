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

$GLOBALS['TL_HOOKS']['generatePage'][] = [
    'bits\\ContaoNewsHomesite\\Classes\\NewsHomesite',
    'onGeneratePage',
];

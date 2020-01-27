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

\Contao\CoreBundle\DataContainer\PaletteManipulator::create()->addField(
    'homesite',
    'alias',
    \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER
)->applyToPalette('default', 'tl_news');

$GLOBALS['TL_DCA']['tl_news']['fields']['homesite'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_news']['homesite'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory' => false,
        'decodeEntities' => true,
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(255) NOT NULL default ''",
];

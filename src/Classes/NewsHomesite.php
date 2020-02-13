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

namespace bits\ContaoNewsHomesite\Classes;

use Contao\Frontend;
use Contao\LayoutModel;
use Contao\NewsModel;
use Contao\PageModel;
use Contao\PageRegular;

class NewsHomesite extends Frontend
{
    public function onGeneratePage(PageModel $objPage, LayoutModel $objLayout, PageRegular $objPageRegular)
    {
        if (!$this->Input->get('items')) {
            return; // no news
        }

        $news = NewsModel::findOneBy(
            ['alias=?', 'published=?'],
            [$this->Input->get('items'), 1]
        );

        if (null === $news) {
            return; // not found
        }

        if ($news->homesite == $objPage->domain) {
            $objPage->canonical = "TREFFER";
        }
        else{
            $objPage->canonical = "KEIN_TREFFER";
        }
    }
}

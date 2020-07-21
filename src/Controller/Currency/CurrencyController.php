<?php

namespace App\Controller\Currency;

use App\Controller\Api\JsonUrl;
use App\Controller\Controller;
use App\Entity\ConstInfo;

/**
 * @author Mauro Ribeiro
 * @since 2020-06-12
 */
class CurrencyController extends Controller
{
    public function show()
    {
        $currency = JsonUrl::getInfoCurrency();

        return parent::show(ConstInfo::CURRENCY_HTML, array(
                'info' => $currency,
                'title_page' => ConstInfo::CURRENCY_TITLE,
            )
        );
    }
}
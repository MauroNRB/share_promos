<?php

namespace App\Controller\Games;

use App\Controller\Api\JsonUrl;
use App\Controller\Controller;
use App\Entity\ConstInfo;

/**
 * @author Mauro Ribeiro
 * @since 2020-06-10
 */
class PromotionController extends Controller
{
    public function show()
    {
        $info = JsonUrl::getInfoGames();

        return parent::show(ConstInfo::GAMES_HTML, array(
                'info' => $info,
                'title_page' => ConstInfo::GAMES_PROMOTION_TITLE,
                'types' => array(
                    'deals_aggregator'
                ),
            )
        );
    }
}
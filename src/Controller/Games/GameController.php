<?php

namespace App\Controller\Games;

use App\Controller\Api\JsonUrl;
use App\Controller\Controller;
use App\Entity\ConstInfo;

/**
 * @author Mauro Ribeiro
 * @since 2020-06-10
 */
class GameController extends Controller
{
    public function show()
    {
        $info = JsonUrl::getInfoGames();

        return parent::show(ConstInfo::GAMES_HTML, array(
                'info' => $info,
                'title_page' => ConstInfo::GAMES_TITLE,
                'types' => array(
                    'free_games',
                    'deals_aggregator'
                ),
            )
        );
    }
}
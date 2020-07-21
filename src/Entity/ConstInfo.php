<?php

namespace App\Entity;


class ConstInfo
{
    /** Rotas de HTML  */
    public const INDEX_HTML = 'index.html.twig';
    public const GAMES_HTML = 'game/games.html.twig';
    public const CURRENCY_HTML = 'currency/currency.html.twig';

    /** Rotas de URL */
    public const INDEX_URL = 'index';
    public const GAMES_URL = 'games';
    public const GAMES_PROMOTION_URL = 'game_promotion';
    public const GAMES_FREE_URL = 'game_promotion';
    public const CURRENCY_URL = 'currency';

    /** Sufixo dos Titulos */
    public const GAMES_TITLE = ' - Games';
    public const GAMES_FREE_TITLE = ' - Games Grátis';
    public const GAMES_PROMOTION_TITLE = ' - Promoção dos Games';
    public const CURRENCY_TITLE = ' - Cotação';
}
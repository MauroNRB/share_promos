<?php


namespace App\Controller\Api;

/**
 * @author Mauro Ribeiro
 * @since 2020-07-21
 */
class JsonUrl
{
    const GAMES_URL_JSON = "https://gx.opera-api.com/api/v1/games?country=br&language=pt";
    const CURRENCY_URL_JSON = "https://economia.awesomeapi.com.br/json/all";

    /**
     * @author Mauro Ribeiro
     * @since 2020-06-10
     */
    public function getInfoGames()
    {
        $operaGX = null;
        $operaGX = self::jsonDecodeUrl(self::GAMES_URL_JSON);
        $operaGX = $operaGX['sections'];

        return $operaGX;
    }

    /**
     * @author Mauro Ribeiro
     * @since 2020-06-12
     */
    public function getInfoCurrency()
    {
        $currency = null;
        $currency = self::jsonDecodeUrl(self::CURRENCY_URL_JSON);

        return $currency;
    }

    protected function jsonDecodeUrl($url = null)
    {
        $data = null;
        $data = file_get_contents($url);
        $data = json_decode($data, true);

        return $data;
    }
}
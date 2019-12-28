<?php


namespace Bitcoin;


class Api extends Bitcoin {
    const API_URL = 'https://api.coinlore.com/api/ticker/?id=90';

    protected function getUsdPrice(\Cache $cache) {
        $apiResponse = file_get_contents(self::API_URL);
        $priceUsd = json_decode($apiResponse, true)[0]['price_usd'] ?? null;
        if (!is_null($priceUsd)) {
            $cache->save('bitcoinPrice', $priceUsd);
        }
        return $priceUsd;
    }
}

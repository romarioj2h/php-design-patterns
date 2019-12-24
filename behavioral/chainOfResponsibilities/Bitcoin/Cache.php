<?php


namespace Bitcoin;


class Cache extends BitcoinResolver {

    protected function getUsdPrice(\Cache $cache) {
        return $cache->get('bitcoinPrice');
    }
}

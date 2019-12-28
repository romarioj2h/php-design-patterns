<?php


namespace Bitcoin;


class Cache extends Bitcoin {

    protected function getUsdPrice(\Cache $cache) {
        return $cache->get('bitcoinPrice');
    }
}

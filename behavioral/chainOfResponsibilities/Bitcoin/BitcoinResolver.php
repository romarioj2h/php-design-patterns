<?php


namespace Bitcoin;


abstract class BitcoinResolver {

    /**
     * @var BitcoinResolver
     */
    private $successor;

    public function __construct(BitcoinResolver $bitcoinResolver = null) {
        $this->successor = $bitcoinResolver;
    }

    final public function resolve(\Cache $cache) {
        $usdPrice = $this->getUsdPrice($cache);
        echo get_class($this);

        if ($usdPrice === null && $this->successor !== null) {
            echo " can't found it\n";
            $usdPrice = $this->successor->resolve($cache);
        } else {
            echo " found it\n";
        }

        return $usdPrice;
    }

    abstract protected function getUsdPrice(\Cache $cache);
}

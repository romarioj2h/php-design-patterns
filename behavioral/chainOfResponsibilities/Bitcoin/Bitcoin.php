<?php


namespace Bitcoin;


abstract class Bitcoin {

    /**
     * @var Bitcoin
     */
    private $successor;

    public function __construct(Bitcoin $bitcoin = null) {
        $this->successor = $bitcoin;
    }

    final public function getPrice(\Cache $cache) {
        $usdPrice = $this->getUsdPrice($cache);
        echo get_class($this);

        if ($usdPrice === null && $this->successor !== null) {
            echo " can't found it\n";
            $usdPrice = $this->successor->getPrice($cache);
        } else {
            echo " found it\n";
        }

        return $usdPrice;
    }

    abstract protected function getUsdPrice(\Cache $cache);
}

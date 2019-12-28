<?php


namespace Elements;


use Visitors\Visitor;

class Head implements Visitable {
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    const LEVEL_3 = 3;
    const LEVEL_4 = 4;
    const LEVEL_5 = 5;
    const LEVEL_6 = 6;

    /**
     * @var string
     */
    private $text;
    /**
     * @var int
     */
    private $level;

    public function __construct(string $text, int $level) {
        $this->text = $text;
        $this->level = $level;
    }

    function accept(Visitor $visitor) {
        $visitor->visitHead($this);
    }

    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getLevel(): int {
        return $this->level;
    }

}

<?php


namespace Elements;


use Visitors\Visitor;

class Paragraph implements Visitable {

    /**
     * @var string
     */
    private $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    function accept(Visitor $visitor) {
        $visitor->visitParagraph($this);
    }

    /**
     * @return string
     */
    public function getText(): string {
        return $this->text;
    }

}

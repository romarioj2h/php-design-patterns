<?php


namespace Visitors;


use Elements\Bold;
use Elements\Head;
use Elements\Paragraph;

class MarkdownVisitor implements Visitor {

    /**
     * @var string
     */
    private $markdown = '';

    function visitHead(Head $head) {
        $headLevel = str_repeat("#", $head->getLevel());
        $this->markdown .= "{$headLevel} {$head->getText()}  \n";
    }

    function visitParagraph(Paragraph $paragraph) {
        $this->markdown .= $paragraph->getText() . "  \n";
    }

    function visitBold(Bold $bold) {
        $this->markdown .= "**{$bold->getText()}**  \n";
    }

    /**
     * @return string
     */
    public function getMarkdown(): string {
        return $this->markdown;
    }
}

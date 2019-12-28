<?php

namespace Visitors;

use Elements\Bold;
use Elements\Head;
use Elements\Paragraph;

class LoggerVisitor implements Visitor {

    function visitHead(Head $head) {
        echo "HEAD: {$head->getText()} WITH LEVEL {$head->getLevel()}\n";
    }

    function visitParagraph(Paragraph $paragraph) {
        echo "PARAGRAPH: {$paragraph->getText()}\n";
    }

    function visitBold(Bold $bold) {
        echo "BOLD: {$bold->getText()}\n";
    }
}

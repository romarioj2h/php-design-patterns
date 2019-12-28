<?php


namespace Visitors;


use Elements\Bold;
use Elements\Head;
use Elements\Paragraph;

interface Visitor {

    function visitHead(Head $head);

    function visitParagraph(Paragraph $paragraph);

    function visitBold(Bold $bold);
}

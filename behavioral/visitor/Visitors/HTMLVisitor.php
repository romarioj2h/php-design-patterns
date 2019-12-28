<?php


namespace Visitors;


use Elements\Bold;
use Elements\Head;
use Elements\Paragraph;

class HTMLVisitor implements Visitor {

    /**
     * @var string
     */
    private $html = '';

    function visitHead(Head $head) {
        $this->html .= "<h{$head->getLevel()}>{$head->getText()}</h{$head->getLevel()}>\n";
    }

    function visitParagraph(Paragraph $paragraph) {
        $this->html .= "<p>{$paragraph->getText()}</p>\n";
    }

    function visitBold(Bold $bold) {
        $this->html .= "<b>{$bold->getText()}</b>\n";
    }

    /**
     * @return string
     */
    public function getHtml(): string {
        return "<html>
<head></head>
<body>
{$this->html}</body>
</html>";
    }
}

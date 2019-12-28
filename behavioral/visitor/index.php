<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include $class_name . '.php';
});

$markdown = new \Visitors\MarkdownVisitor();
$html = new \Visitors\HTMLVisitor();
$logger = new \Visitors\LoggerVisitor();

$head = new \Elements\Head('My title', \Elements\Head::LEVEL_4);
$paragraph1 = new \Elements\Paragraph('I think I\'ll use it to format all of my documents from now on.');
$paragraph2 = new \Elements\Paragraph('I think I\'ll use it to format all of my documents from now on.');
$bold = new \Elements\Bold('Romario Huebra');

echo "LOGGER:\n";

$head->accept($logger);
$paragraph1->accept($logger);
$paragraph2->accept($logger);
$bold->accept($logger);

echo "\n\n";

$head->accept($html);
$paragraph1->accept($html);
$paragraph2->accept($html);
$bold->accept($html);

echo "HTML:\n{$html->getHtml()}\n\n";

$head->accept($markdown);
$paragraph1->accept($markdown);
$paragraph2->accept($markdown);
$bold->accept($markdown);

echo "MARKDOWN:\n{$markdown->getMarkdown()}\n\n";

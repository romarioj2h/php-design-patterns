<?php


namespace Elements;


use Visitors\Visitor;

interface Visitable {

    function accept(Visitor $visitor);
}

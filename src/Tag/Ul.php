<?php

namespace JulianoDesenv\Solid\Tag;

class Ul
{
    public function render($content)
    {
        return '<ul>'. $content .'</ul>';
    }
}

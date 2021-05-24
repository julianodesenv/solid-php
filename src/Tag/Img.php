<?php

namespace JulianoDesenv\Solid\Tag;

class Img
{
    public function render($src)
    {
        return '<img src="'.$src.'">';
    }
}

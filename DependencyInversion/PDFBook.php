<?php

namespace Exercises\DependencyInversion;

class PDFBook implements EBookInterface
{
    public function read()
    {
        return "reading a pdf book.";
    }
}
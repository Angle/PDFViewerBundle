<?php

namespace Angle\PDFViewerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AnglePDFViewerBundle extends Bundle
{
    public function getPath(): string
    {
        return __DIR__;
    }
}
<?php

namespace Angle\PDFViewerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PDFViewerController extends AbstractController
{
    /**
     * Render the default PDF viewer page
     * @return Response
     */
    public function view(): Response
    {
        return $this->render('@AnglePDFViewer/view.html.twig');
    }
}

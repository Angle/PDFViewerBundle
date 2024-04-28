# Angle PDF Viewer Bundle
PDF in-browser viewer using the [PDF.js](https://github.com/mozilla/pdf.js) library to render documents with HTML5.

Current build using PDF.js release [v4.0.379](https://github.com/mozilla/pdf.js/releases/tag/v4.0.379).


## Installation
Install composer dependency:

```
composer require anglemx/pdf-viewer-bundle
```

Make sure that the Bundle has been enabled and auto-wired in the `bundles.php` file.

```php
// config/bundles.php

return [
    // ...
    Angle\PDFViewerBundle\AnglePDFViewerBundle::class => ['all' => true],
    // ...
];
```


### Configure routing
As per the [official Symfony documentation](https://symfony.com/doc/5.x/bundles/override.html#routing):

> Routing is never automatically imported in Symfony.

This means that your application will need to explicitly import the routes to enable the bundle's controller.

```yaml
angle_pdf_viewer:
  resource: "@AnglePDFViewerBundle/Resources/config/routes.yaml"
```

## Usage
```php
return $this->redirectToRoute('angle_pdf_viewer_view', ['file' => '/path/to/file']);
```

```twig
<a href="{{ path('angle_pdf_viewer_view', {'file': '/path/to/file'}) }}">View PDF</a>
```

## Quick Test
Try to access the following URL after installing:
```
/_pdf?file=/bundles/anglepdfviewer/vendor/pdfjs/web/compressed.tracemonkey-pldi-09.pdf
```
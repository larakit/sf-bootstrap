<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-jquery')
    ->jsPackage('js/bootstrap.min.js')
    ->cssPackage('css/bootstrap.min.css');
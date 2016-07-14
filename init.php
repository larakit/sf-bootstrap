<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
    ->usePackage('larakit/sf-jquery')
    ->setSourceDir('public')
    ->jsPackage('bootstrap.min.js')
    ->cssPackage('bootstrap.min.css');
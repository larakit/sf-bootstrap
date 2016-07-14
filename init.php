<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-jquery')
    ->jsPackage('bootstrap.min.js')
    ->cssPackage('bootstrap.min.css');
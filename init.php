<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
                            ->usePackage('larakit/sf-jquery')
                            ->js('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js')
                            ->css('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css');
\Larakit\Page\PageDnsPrefetch::register('//cdnjs.cloudflare.com');

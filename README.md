# larakit/sf-bootstrap

### Установка пакета 
~~~bash
composer require larakit/sf-bootstrap
~~~
Ничего дополнительно инициализировать не надо, добавив этот пакет в зависимости в composer.json, он сам установится и пропишется на всех страницах автоматически.

### Отключение пакета на некоторых роутах
В файле  ./app/Http/staticfiles.php добавьте
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
    ->addExclude('home')
    ->addExclude('admin.*');
~~~    
тогда пакет не будет включен на главной странице и на всех страницах админки.

### Изменение состава подключаемой статики пакета
Если вы использовали какой-то пакет, который за собой потянул этот пакет, но вас не устраивает версия библиотеки, подключаемая по умолчанию (например не хотите использовать CDN, а хотите отдавать со своего сайта), то вместо базового способа инициализации пакета
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
    ->css('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css')
    ->js('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js')
~~~
вы можете переопределить его, вызвав инициализацию пакета еще раз
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap')
  //очистить список подключенных JS и CSS
  ->clearJs()
  ->clearCss()
  //добавить свои
  ->js('/bootstrap.min.js')
  ->css('/bootstrap.min.css');
~~~

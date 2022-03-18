<?php
#автоматическая загрузка классов, их файлов подключение
spl_autoload_register(function ($classname){
    require_once 'core/' . $classname . '.php';
});

#логическая функциональность
# $obj = new user()
#автозагрузчик работает таким образом
#в аргумент $classname будет передано слово user
#это означает , что в папке core должен лежать файл user.php


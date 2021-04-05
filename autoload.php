<?php
spl_autoload_register(function ($filename) {
    if (file_exists('controllers/' . $filename . '.php')) {
        require 'controllers/' . $filename . '.php';
    } elseif (file_exists('models/' . $filename . '.php')) {
        require 'models/' . $filename . '.php';
    } elseif (file_exists('core/' . $filename . '.php')) {
        require 'core/' . $filename . '.php';
    }
});

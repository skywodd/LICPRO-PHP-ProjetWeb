<?php

/*
 * This file is part of LICPRO-PHP-ProjetWeb.
 *
 * LICPRO-PHP-ProjetWeb is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * LICPRO-PHP-ProjetWeb is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

/* Include autoloader */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/config.php';

use ProjetWeb\Controllers\MainPageController;
use ProjetWeb\Controllers\ErrorPageController;
use ProjetWeb\Controllers\ProductDetailsController;

/* Twig setup */
$loader = new Twig_Loader_Filesystem(__DIR__ . '/web/templates');
$twig = new Twig_Environment($loader, array(
    // 'cache' => __DIR__ . '/cache',
    'cache' => false,
));
$twig->addGlobal('baseUrl', BASE_URL);

/* Get the URL path */
$requestUrl = $_SERVER['REQUEST_URI'];

/* Strip GET variables from the URL */
if (($pos = strpos($requestUrl, '?')) !== false) {
    $requestUrl = substr($requestUrl, 0, $pos);
}

/* Strip base url */
$baseUrlLen = strlen(BASE_URL);
if (substr($requestUrl, 0, $baseUrlLen) == BASE_URL) {
    $requestUrl = substr($requestUrl, $baseUrlLen);
}
$requestUrl = ltrim($requestUrl, '/');

/* Split request URL into token */
$tokens = explode('/', $requestUrl);

/* Handle command */
$handler = null;
switch ($tokens[0]) {

    case '':
        $handler = new MainPageController();
        break;

    case 'product':
        $handler = new ProductDetailsController();
        break;

    default:
        $handler = new ErrorPageController();
        break;
}

/* Do the job */
array_shift($tokens);
$handler->handle($twig, $tokens);

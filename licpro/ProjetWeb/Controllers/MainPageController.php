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

namespace ProjetWeb\Controllers;

use ProjetWeb\Models\Product;

/**
 * Description of Controller
 *
 * @author skywodd
 */
class MainPageController extends ControllerBase {

    public function handle($templateEngine, $params = null) {

        $products = [
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1),
            new Product('Nom', 1.0, 1, 'Description', 1, 1)
        ];

        $template = $templateEngine->loadTemplate('index.html');
        echo $template->render(array('pageTitle' => 'DriveCommunautaire', 'products' => $products));
    }

}

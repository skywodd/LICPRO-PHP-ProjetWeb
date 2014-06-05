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

namespace ProjetWeb\Database;

use ProjetWeb\Models\Product;

/**
 * Description of ProductAccessLayer
 *
 * @author skywodd
 */
class ProductAccessLayer {

    public static function getProducts($limit, $from = 0) {
        
        $mysqli = DatabaseConnection::getDatabaseConnexion();
        $res = $mysqli->query('SELECT * FROM Product LIMIT '. intval($from) .  ',' . intval($limit));
        if (!$res) {
            throw new Exception($mysqli->error, $mysqli->errno);
        }

        $products = [];
        while ($row = $res->fetch_assoc()) {
            $products[] = new Product($row['name'], $row['price'], $row['quantity'], $row['description'], $row['idSeller'], $row['idProduct']);
        }
        $res->free();

        return $products;
    }

}

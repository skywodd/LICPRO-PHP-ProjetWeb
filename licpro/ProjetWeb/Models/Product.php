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

namespace ProjetWeb\Models;

/**
 * Data model class for all products.
 *
 * @author skywodd
 */
class Product {

    /**
     * Product ID in the database.
     *
     * @var int
     */
    private $_id;

    /**
     * Product name.
     *
     * @var string
     */
    private $_name;

    /**
     * Product price.
     *
     * @var float
     */
    private $_price;

    /**
     * Available product quantity.
     *
     * @var int
     */
    private $_quantity;

    /**
     * Product description.
     *
     * @var string
     */
    private $_description;

    /**
     * Product seller user ID.
     *
     * @var int
     */
    private $_sellerId;

    /**
     * Complete constructor of the Product class.
     *
     * @param string $name Product name.
     * @param float $price Product price.
     * @param int $quantity Available product quantity.
     * @param string $description Product description.
     * @param int $sellerId Product seller user ID.
     * @param int $id Product ID in the database (optionnal, only for ORM use).
     */
    function __construct($name, $price, $quantity, $description, $sellerId, $id = -1) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_price = $price;
        $this->_quantity = $quantity;
        $this->_description = $description;
        $this->_sellerId = $sellerId;
    }

    public function getId() {
        return $this->_id;
    }

    public function getName() {
        return $this->_name;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getQuantity() {
        return $this->_quantity;
    }

    public function getDescription() {
        return $this->_description;
    }

    public function getSellerId() {
        return $this->_sellerId;
    }

    public function _setId($id) {
        // For internal use only
        $this->_id = $id;
        return $this;
    }

    public function setName($name) {
        $this->_name = $name;
        return $this;
    }

    public function setPrice($price) {
        $this->_price = $price;
        return $this;
    }

    public function setQuantity($quantity) {
        $this->_quantity = $quantity;
        return $this;
    }

    public function setDescription($description) {
        $this->_description = $description;
        return $this;
    }

    public function setSellerId($sellerId) {
        $this->_sellerId = $sellerId;
        return $this;
    }

}

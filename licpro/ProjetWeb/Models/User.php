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
 * Data model class for all users.
 *
 * @author skywodd
 */
class User {

    /**
     * User ID in the database.
     *
     * @var int
     */
    private $_id;

    /**
     * True if the user is a seller, false if the user is a buyer.
     *
     * @var bool
     */
    private $_isSeller;

    /**
     * User email address.
     *
     * @var string
     */
    private $_email;

    /**
     * User password.
     *
     * @var string
     */
    private $_password;

    /**
     * Display name.
     *
     * @var string
     */
    private $_displayName;

    /**
     * User gender or seller type.
     *
     * @var string
     */
    private $_titleOrGender;

    /**
     * Complete constructor of the User class.
     *
     * @param bool $isSeller Set to true if the user is a seller, or to false if the user is a buyer.
     * @param string $email User email address.
     * @param string $password User password.
     * @param string $displayName Display name.
     * @param string $titleOrGender User gender or seller type.
     * @param int $id User ID in the database (optionnal, only for ORM use).
     */
    function __construct($isSeller, $email, $password, $displayName, $titleOrGender, $id = -1) {
        $this->_id = $id;
        $this->_isSeller = $isSeller;
        $this->_email = $email;
        $this->_password = $password;
        $this->_displayName = $displayName;
        $this->_titleOrGender = $titleOrGender;
    }

    public function getId() {
        return $this->_id;
    }

    public function isSeller() {
        return $this->_isSeller;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getPassword() {
        return $this->_password;
    }

    public function getDisplayName() {
        return $this->_displayName;
    }

    public function getTitleOrGender() {
        return $this->_titleOrGender;
    }

    public function _setId($id) {
        $this->_id = $id;
        return $this;
    }

    public function setIsSeller($isSeller) {
        $this->_isSeller = $isSeller;
        return $this;
    }

    public function setEmail($email) {
        $this->_email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->_password = $password;
        return $this;
    }

    public function setDisplayName($displayName) {
        $this->_displayName = $displayName;
        return $this;
    }

    public function setTitleOrGender($titleOrGender) {
        $this->_titleOrGender = $titleOrGender;
        return $this;
    }

}

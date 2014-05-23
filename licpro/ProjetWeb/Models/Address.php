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
 * Data model class for all user addresses.
 *
 * @author skywodd
 */
class Address {

    /**
     * Address ID in the database.
     *
     * @var int
     */
    private $_id;

    /**
     * User ID associated with this address.
     *
     * @var int
     */
    private $_userId;

    /**
     * Address title.
     *
     * @var string
     */
    private $_title;

    /**
     * Display name (destinator).
     *
     * @var string
     */
    private $_displayName;

    /**
     * Address line.
     *
     * @var string
     */
    private $_address;

    /**
     * Zip code.
     *
     * @var int
     */
    private $_zipCode;

    /**
     * Phone number.
     *
     * @var string
     */
    private $_phoneNumber;

    /**
     * Complete constructor of the Address class.
     *
     * @param int $userId User ID associated with this address.
     * @param string $title Address title.
     * @param string $displayName Display name (destinator).
     * @param string $address Address line.
     * @param int $zipCode Zip code.
     * @param string $phoneNumber Phone number.
     * @param int $id Address ID in the database (optionnal, only for ORM use).
     */
    function __construct($userId, $title, $displayName, $address, $zipCode, $phoneNumber, $id = -1) {
        $this->_id = $id;
        $this->_userId = $userId;
        $this->_title = $title;
        $this->_displayName = $displayName;
        $this->_address = $address;
        $this->_zipCode = $zipCode;
        $this->_phoneNumber = $phoneNumber;
    }

    public function getId() {
        return $this->_id;
    }

    public function getUserId() {
        return $this->_userId;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getDisplayName() {
        return $this->_displayName;
    }

    public function getAddress() {
        return $this->_address;
    }

    public function getZipCode() {
        return $this->_zipCode;
    }

    public function getPhoneNumber() {
        return $this->_phoneNumber;
    }

    public function _setId($id) {
        // For internal use only
        $this->_id = $id;
        return $this;
    }

    public function setUserId($userId) {
        $this->_userId = $userId;
        return $this;
    }

    public function setTitle($title) {
        $this->_title = $title;
        return $this;
    }

    public function setDisplayName($displayName) {
        $this->_displayName = $displayName;
        return $this;
    }

    public function setAddress($address) {
        $this->_address = $address;
        return $this;
    }

    public function setZipCode($zipCode) {
        $this->_zipCode = $zipCode;
        return $this;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->_phoneNumber = $phoneNumber;
        return $this;
    }

}

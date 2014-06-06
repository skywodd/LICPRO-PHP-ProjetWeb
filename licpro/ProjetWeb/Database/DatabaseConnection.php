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

/**
 * Database connection layer.
 *
 * @author skywodd
 */
class DatabaseConnection {

    /**
     * Database connexion instance.
     *
     * @var mysqli
     */
    private static $databaseConnection;

    public static function openDatabase($serverHostname, $username, $password, $databaseName) {
        $mysqli = new \mysqli($serverHostname, $username, $password, $databaseName);
        if($mysqli->connect_errno) {
            throw new \Exception('Cannot open database errno=' . $mysqli->connect_errno . ' error=' . $mysqli->connect_error);
        }
        DatabaseConnection::$databaseConnection = $mysqli;
    }

    public static function closeDatabase() {
        if(DatabaseConnection::$databaseConnection) {
            DatabaseConnection::$databaseConnection->close();
        }
    }

    public static function getDatabaseConnexion() {
        return DatabaseConnection::$databaseConnection;
    }

}

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

/**
 * Abstract base class for all controllers.
 *
 * @author skywodd
 */
abstract class ControllerBase {

    /**
     * Handle the command.
     *
     * @param Twig\Twig_Environment $templateEngine Template engine instance.
     * @param array $params Controller's parameters.
     */
    public abstract function handle($templateEngine, $params = null);

}

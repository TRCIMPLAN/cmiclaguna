<?php
/**
 * TrcIMPLAN Sitio Web - Imprenta
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace Blog;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio = 'Blog';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                   = 'Análisis Publicados';
        $this->descripcion              = 'Análisis que amplían y desarrollan contextos específicos de interés.';
        $this->claves                   = 'IMPLAN, CANACO, Torreón, Análisis';
        $this->encabezado_color         = '#808080';
        // Opción de navegación a poner como activa
        $this->nombre_menu              = 'Análisis Publicados';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas          = '\\Base\\PaginasDetallados';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio               = 'blog';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser un entero grande
        $this->nivel                    = 10000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>

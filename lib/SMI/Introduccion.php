<?php
/**
 * TrcIMPLAN Sitio Web - Introduccion
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

namespace SMI;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Introducción al Sistema Metropolitano de Indicadores';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-05-15T08:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'introduccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Introducción al Sistema Metropolitano de Indicadores del IMPLAN Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Gomez Palacio, Lerdo, Matamoros, La Laguna';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Indicadores > Introducción al SMI';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SMI/Introduccion.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array();
    } // constructor

} // Clase Introduccion

?>

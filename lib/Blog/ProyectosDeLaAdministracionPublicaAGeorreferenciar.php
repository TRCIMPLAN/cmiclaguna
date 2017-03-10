<?php
/**
 * TrcIMPLAN Sitio Web - ProyectosDeLaAdministracionPublicaAGeorreferenciar
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
 * Clase ProyectosDeLaAdministracionPublicaAGeorreferenciar
 */
class ProyectosDeLaAdministracionPublicaAGeorreferenciar extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Proyectos de la administración pública que se van a georreferenciar';
    //~ $this->autor                      = '';
        $this->fecha                      = '2017-03-10T13:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'proyectos-de-la-administracion-publica-que-se-van-a-georreferenciar';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el presente año 2017 se van a georrefenciar estas obras del Municipio de Torreón.';
        $this->claves                     = 'IMPLAN, Torreon, ';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProyectosDeLaAdministracionPublicaAGeorreferenciar.md';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // Para el Organizador
        $this->categorias                 = array('Infraestructura');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ProyectosDeLaAdministracionPublicaAGeorreferenciar

?>

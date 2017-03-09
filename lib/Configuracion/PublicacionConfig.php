<?php
/**
 * TrcIMPLAN CMIC Laguna - Publicacion Config
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
 * @package TrcIMPLANCMICLaguna
 */

namespace Configuracion;

/**
 * Clase PublicacionConfig
 */
class PublicacionConfig {

    public $sitio_url                 = 'http://www.trcimplan.gob.mx/cmiclaguna';
    public $fecha                     = '1980-01-01T08:00';
    public $autor                     = 'guivaloz';
    public $aparece_en_pagina_inicial = TRUE;
    public $para_compartir            = TRUE;
    public $imagen;
    public $imagen_previa;
    public $imagen_id;
    public $icono;
    public $region_nivel              = 0;
    public $estado                    = 'publicar';
    public $poner_imagen_en_contenido = TRUE;
    public $include_extra_directorio  = '';

} // Clase PublicacionConfig

?>

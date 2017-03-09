<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Movilidad
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

namespace SMICategorias;

/**
 * Clase Movilidad
 */
class Movilidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Movilidad';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo                   = 'movilidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Sistema Metropolitano de Indicadores - Categoría Movilidad';
        $this->claves                    = 'IMPLAN, Indicadores, Categoría, Movilidad';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores > Indicadores por Categoría';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array();
        $this->fuentes                   = array();
        $this->regiones                  = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen                    = '../imagenes/categorias/movilidad.jpg';
        $this->imagen_previa             = '../imagenes/categorias/movilidad.jpg';
        $this->imagen_id                 = 'categorias-movilidad';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML en el esquema
        $this->contenido->articleBody = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Flujo de Pasajeros del o Hacia el Extranjero</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">14.44 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">14.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">4421</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">1682</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">362</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">164</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">6509</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">17</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">29</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">No disponible</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">55</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.38 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.72 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.65 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.82 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.82 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Muertes por Accidentes Relacionados con Transporte</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">11.5569</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">18.9430</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">18.2451</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">5.4425</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">13.8053</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">94 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">91 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">89 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Terrestre</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">No tiene</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">No tiene</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disponibilidad de Banqueta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">83 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">66 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">60 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">81 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Flujo de Pasajeros Aéreos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">301.7549</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">0.0000</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-flujo-de-pasajeros-aereos.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, IMCO">158.6023</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Líneas de Autobús</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">11</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-lineas-de-autobus.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">13</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">211</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">405</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">304</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">170</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">271</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Peatones</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">12.06 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">16.89 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">21.32 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">23.45 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">16.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Avanzada</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.00 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">50.42 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">64.65 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.00 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-red-carretera-avanzada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">75.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sistema de Transporte Masivo</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Automóviles</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.87 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">26.39 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">25.61 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">19.06 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">29.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Bicicleta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">5.80 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">10.57 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">9.23 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">9.84 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">8.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Modos No Motorizados</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">17.86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">27.46 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">30.55 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">33.29 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">24.47 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Transporte Colectivo Privado</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">6.21 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.76 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.07 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">12.64 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.68 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">36.68 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.99 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">33.52 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">31.08 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.91 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Ocupadas Temporalmente</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">2.9 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">3.3 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">3.6 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">2.8 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">3.0 %</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Movilidad

?>

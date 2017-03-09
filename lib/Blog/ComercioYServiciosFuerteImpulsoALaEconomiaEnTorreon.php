<?php
/**
 * TrcIMPLAN Sitio Web - Comercio y Servicios: fuerte impulso a la economía en Torreón
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * Clase ComercioYServiciosFuerteImpulsoALaEconomiaEnTorreon
 */
class ComercioYServiciosFuerteImpulsoALaEconomiaEnTorreon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Comercio y Servicios: fuerte impulso a la economía en Torreón';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2016-11-22T12:15';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'comercio-y-servicios-fuerte-impulso-a-la-economia-en-torreon';
        $this->imagen          = 'comercio-y-servicios-fuerte-impulso-a-la-economia-en-torreon/imagen.jpg';
        $this->imagen_previa   = 'comercio-y-servicios-fuerte-impulso-a-la-economia-en-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Durante los primeros tres trimestres de 2016 se han registrado 1,735 empresas en la ventanilla universal del Municipio de Torreón, con una inversión estimada de más de 500 millones de pesos y más de 10,000 empleos. El sector terciario fue el principal receptor de inversión en el tercer trimestre.';
        $this->claves          = 'IMPLAN, Torreon, Comercio, Servicios, Economia';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/ComercioYServiciosFuerteImpulsoALaEconomiaEnTorreon.md';
        // Para el Organizador
        $this->categorias      = array('Empleo', 'Empresas');
        $this->fuentes         = array('IMSS', 'Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase ComercioYServiciosFuerteImpulsoALaEconomiaEnTorreon

?>

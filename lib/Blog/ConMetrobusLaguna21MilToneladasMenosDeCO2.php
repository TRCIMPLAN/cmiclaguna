<?php
/**
 * Sitio Web - Con Metrobús Laguna, 21 mil toneladas menos de CO2
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
 * Clase ConMetrobusLaguna21MilToneladasMenosDeCO2
 */
class ConMetrobusLaguna21MilToneladasMenosDeCO2 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Con Metrobús Laguna, 21 mil toneladas menos de CO2';
        $this->autor           = 'Lic. Adriana Vargas Flores';
        $this->fecha           = '2016-07-01T19:30';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'con-metrobus-laguna-21-mil-toneladas-menos-de-co2';
        $this->imagen          = 'con-metrobus-laguna-21-mil-toneladas-menos-de-co2/imagen.jpg';
        $this->imagen_previa   = 'con-metrobus-laguna-21-mil-toneladas-menos-de-co2/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La disminución en tiempo de traslados en 15 minutos y el uso de un sistema que no produce emisiones contaminantes, es parte de los beneficios de la implementación del Metrobús en La Laguna. El proyecto contempla también beneficios económicos y una movilidad más equitativa.';
        $this->claves          = 'IMPLAN, Torreon, Metrobus, Laguna, Bioxido de Carbono, CO2, Contaminacion';
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
        $this->contenido_archivo_markdown = 'lib/Blog/ConMetrobusLaguna21MilToneladasMenosDeCO2.md';
        // Para el Organizador
        $this->categorias      = array('Movilidad', 'Vialidad');
        $this->fuentes         = array('IMCO');
        $this->regiones        = array('Torreón', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ConMetrobusLaguna21MilToneladasMenosDeCO2

?>

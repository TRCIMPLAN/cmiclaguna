<?php
/**
 * Sitio Web - Se recupera la Inversión extranjera en La Laguna
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
 * Clase SeRecuperaLaInversionExtranjeraEnLaLaguna
 */
class SeRecuperaLaInversionExtranjeraEnLaLaguna extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Se recupera la Inversión extranjera en La Laguna';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2016-08-24T14:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'se-recupera-la-inversion-extranjera-en-la-laguna';
        $this->imagen          = 'se-recupera-la-inversion-extranjera-en-la-laguna/imagen.jpg';
        $this->imagen_previa   = 'se-recupera-la-inversion-extranjera-en-la-laguna/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'Coahuila ocupa el décimo lugar en México al captar el 3.1% de la inversión extranjera nacional. Torreón y su Zona Metropolitana han registrado más empresas de capital extranjero desde 2014, pero aún falta mucho camino por recorrer ya que en 2015 ciudades como San Luis Potosí y Saltillo presentaron una mejor posición.';
        $this->claves          = 'IMPLAN, Torreon, Inversion, Extranjera, Crecimiento';
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
        $this->contenido_archivo_markdown = 'lib/Blog/SeRecuperaLaInversionExtranjeraEnLaLaguna.md';
        // Para el Organizador
        $this->categorias      = array('Doing Business', 'Empresas', 'Macroeconomía', 'Mercados');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'La Laguna');
    } // constructor

} // Clase SeRecuperaLaInversionExtranjeraEnLaLaguna

?>

<?php
/**
 * Plataforma de Conocimiento - Schema CreativeWork
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase SchemaCreativeWork
 *
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 * http://schema.org/CreativeWork
 */
class SchemaCreativeWork extends SchemaThing {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // public $is_visible;      // Boolean. Use true for use invisible meta tags.
    // En SchemaThing
    // public $big_heading;     // Boolean. Use true to use a big heading for the web page.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style or Hex color.
    // public $headline_icon;   // Text. Font Awsome icon.
    // public $content;         // Text. HTML content to put INSIDE.
    // public $extra;           // Text. Additional HTML to put ASIDE.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $image_show;      // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // En SchemaCreativeWork
    public $author;             // Organization or Person. The author of this content.
    public $contentLocation;    // Place. The location of the content.
    public $datePublished;      // Date. Date of first broadcast/publication. In ISO 8601, example 2007-04-05T14:30
    public $producer;           // Organization or Person. The person or organization who produced the work.

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/CreativeWork"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        if (is_object($this->contentLocation) && ($this->contentLocation instanceof SchemaPlace)) {
            $this->contentLocation->onTypeProperty = 'contentLocation';
            $this->contentLocation->identation     = $this->identation + 1;
            $this->contentLocation->is_article     = FALSE;
            $a[]                                   = $this->contentLocation->html();
        }
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaCreativeWork

?>

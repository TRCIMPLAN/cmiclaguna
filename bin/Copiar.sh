#!/bin/bash

#
# Plataforma de Conocimiento - Copiar
#
# Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="$HOME/Documentos/GitHub/TrcIMPLAN/cmiclaguna"
PLATAFORMA_DIR="$HOME/Documentos/GitHub/MovimientoLibre/movimientolibre.github.io"

echo "[Destruir] Inicia..."

# Verificar
if [ ! -d $PLATAFORMA_DIR ]; then
    echo "Error: No se encuentra el directorio $PLATAFORMA_DIR"
    exit $E_FATAL
fi
if [ ! -d $SITIO_WEB_DIR ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR"
    exit $E_FATAL
fi
cd $SITIO_WEB_DIR
if [ ! -d "lib" ]; then
    echo "Error: No se encuentra el directorio $SITIO_WEB_DIR/lib."
    exit $E_FATAL
fi

# Crear directorio css
cd $SITIO_WEB_DIR
if [ ! -d bin ]; then
    echo "  Creando por primera vez el directorio bin..."
    mkdir bin
fi

# Crear directorio css
cd $SITIO_WEB_DIR
if [ ! -d css ]; then
    echo "  Creando por primera vez el directorio css..."
    mkdir css
    cd $SITIO_WEB_DIR/css
    cp -rf $PLATAFORMA_DIR/css/* .
fi

# Crear directorio imagenes
cd $SITIO_WEB_DIR
if [ ! -d imagenes ]; then
    echo "  Creando por primera vez el directorio imagenes..."
    mkdir imagenes
    cd $SITIO_WEB_DIR/imagenes
    cp -rf $PLATAFORMA_DIR/imagenes/* .
fi

# Eliminar
echo "  Eliminando archivos de la Plataforma del Conocimiento..."
cd $SITIO_WEB_DIR
rm -rf fonts
rm -rf img
rm -rf js
rm -rf less
rm -rf scss
cd $SITIO_WEB_DIR/bin
rm -f  Crear.php
cd $SITIO_WEB_DIR/lib
rm -rf Base
rm -rf Michelf

# Copiar
echo "  Copiando archivos de la Plataforma del Conocimiento..."
cd $SITIO_WEB_DIR
cp -r $PLATAFORMA_DIR/fonts .
cp -r $PLATAFORMA_DIR/img .
cp -r $PLATAFORMA_DIR/js .
cp -r $PLATAFORMA_DIR/less .
cp -r $PLATAFORMA_DIR/scss .
cd $SITIO_WEB_DIR/bin
cp $PLATAFORMA_DIR/bin/Crear.php .
cd $SITIO_WEB_DIR/lib
cp -r $PLATAFORMA_DIR/lib/Base .
cp -r $PLATAFORMA_DIR/lib/Michelf .

# Mostrar mensaje de término
echo "[Destruir] Terminó."
exit $EXITO

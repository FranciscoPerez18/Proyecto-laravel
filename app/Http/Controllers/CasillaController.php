<?php

espacio de nombres  App \ Http \ Controllers ;

use  Illuminate \ Http \ Request ;
usar  App \ Modelos \ Casilla ;


clase  CasillaController  extiende  Controlador
{
    /**
     * Mostrar una lista del recurso.
     *
     * @return \Illuminate\Http\Respuesta
     */
     índice de función  pública ()
    {
        $ casillas = Casilla :: todos ();
        volver  a ver ( 'casilla/list' , compact ( 'casillas' ));
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     *
     * @return \Illuminate\Http\Respuesta
     */
     función  pública crear ()
    {
        //
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     *
     * @param \Illuminate\Http\Request $solicitud
     * @return \Illuminate\Http\Respuesta
     */
     tienda de función  pública ( Solicitud $ solicitud ) 
    {
        //
    }

    /**
     * Mostrar el recurso especificado.
     *
     * @param int $id
     * @return \Illuminate\Http\Respuesta
     */
     espectáculo de función  pública ( $ id )
    {
        echo  "Elemento $id" ; /// "Elemento" . identificación de $
    }

    /**
     * Mostrar el formulario para editar el recurso especificado.
     *
     * @param int $id
     * @return \Illuminate\Http\Respuesta
     */
     editar función  pública ( $ id )
    {
        echo  "Elemento $id para editar" ;
    }

    /**
     * Actualizar el recurso especificado en el almacenamiento.
     *
     * @param \Illuminate\Http\Request $solicitud
     * @param int $id
     * @return \Illuminate\Http\Respuesta
     */
     actualización de función  pública ( Solicitud $ solicitud , $ id ) 
    {
        echo  "Elemento $id actualizado" ;
    }

    /**
     * Eliminar el recurso especificado del almacenamiento.
     *
     * @param int $id
     * @return \Illuminate\Http\Respuesta
     */
     función  pública destruir ( $ id )
    {
        echo  "El elemento $id ha sido eliminado" ;
    }
}
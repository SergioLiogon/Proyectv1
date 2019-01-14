<?php 

 namespace ProyectoV1\Http\Controllers;

 use ProyectoV1\Http\Controllers\Controller;

 class PruebaController extends Controller {

    public function prueba ($param){
        return 'Esto dentro de prueba controller '.$param;
    }
 }
<?php
/**
 * Created by PhpStorm.
 * User: ajaramillo
 * Date: 14/12/2017
 * Time: 08:25 AM
 */

namespace Ajaramillo;


use PHPUnit\Runner\Exception;

class CalculadoraIsr
{
    const iva = 1.16;

    function calculaIva( $importe = null ){
        if( $importe == null ){
            throw new \Exception("Se requiere parametro");
        }
        if( is_array($importe)){
            $importeTotal = array_sum($importe);
            $importeIva = $importeTotal * self::iva;
        }else {
            $importeIva = $importe * self::iva;
        }
        return $importeIva;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: ajaramillo
 * Date: 14/12/2017
 * Time: 07:58 AM
 */

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_if_calculator_exists(){
        $calculadora = new \Ajaramillo\CalculadoraIsr();
        $this->assertInstanceOf(Ajaramillo\CalculadoraIsr::class,$calculadora);
    }

    /**
     * @test
     */
    public function test_if_regresa_iva()
    {
        $calculadora = new \Ajaramillo\CalculadoraIsr();
        $importe = 100;
        $importeIva = $calculadora->calculaIva( $importe );
        $this->assertEquals(116,$importeIva);
    }

    /**
     * @test
     */
    public function test_if_regresa_array_cantidades()
    {
        $calculadora = new \Ajaramillo\CalculadoraIsr();
        $arrMontos = ["100","200"];
        $sumIvaMontos = $calculadora->calculaIva( $arrMontos );
        $this->assertEquals(348, $sumIvaMontos);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Se requiere parametro
     */
    public function test_if_parametro_requerido()
    {
        $calculadora = new \Ajaramillo\CalculadoraIsr();
        $calculadora->calculaIva();
    }
}

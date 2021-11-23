<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }
    public function tambah()
    {
        $a = 5;
        $b = 10;
        $c = $a + $b;

        return $c;
    }
    public function kurang()
    {
        $a = 5;
        $b = 10;
        $c = $a - $b;

        return $c;
    }
    public function kali()
    {
        $a = 5;
        $b = 10;
        $c = $a * $b;

        return $c;
    }
    public function bagi()
    {
        $a = 5;
        $b = 10;
        $c = $a / $b;

        return $c;
    }
    public function div()
    {
        $a = 16;
        $b = 8;
        $c = $a / $b;

        return $c;
    }
    public function mod()
    {
        $a = 18;
        $b = 8;
        $c = $a % $b;

        return $c;
    }
}

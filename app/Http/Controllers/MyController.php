<?php

namespace App\Http\Controllers;

use App\Models\User;

class MyController extends Controller{

    public function __construct(){

    }

    public function my($name){
        // return "My name is ".$name;
        return response($name)
                ->header('name', $name)
                ->header('age', 30)
                ->header('city', 'Dhaka');
    }

    public function jsonResponse(){
        // $myArray = [
        //     'name' => 'ridwan'
        // ];

        // $simple = array("Volvo", "BMW", "Toyota");
        $associative = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        // $multiDimensional = array (
        //     array("Volvo",22,18),
        //     array("BMW",15,13),
        //     array("Saab",5,2),
        //     array("Land Rover",17,15)
        //   );

        return response()->json($associative);
    }

}
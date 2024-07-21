<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
     //   return 'I am product Controller';
     return view('frontend/product');
    }

    public function find($prod_name){

        //method 1
        //echo 'Product: '.$prod_name;
        // $data['name']=$prod_name;
        // $data['prod_list']=['Nokia', 'Samsung', 'Apple'];

        //method 2
        $data = [
            'name'=> $prod_name,
            'prod_list'=> ['Nokia', 'Samsung', 'Apple'],
        ];
        return view('frontend/product', $data);
    }
}
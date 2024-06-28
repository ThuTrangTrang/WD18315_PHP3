<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InforController extends Controller{
    public function thongtinsv(){
        $data = [
            [
                'id' => '1',
                'name' =>'Nguyen thi Thu Trang',
                'msv' => 'PH35155',
                'sdt' => '0325224873'
            ],
            [
                'id' => '2',
                'name' =>'Nguyen thi Thu',
                'msv' => 'PH35166',
                'sdt' => '0325224873'
            ],
            [
                'id' => '3',
                'name' =>'Ha Van Hoang',
                'msv' => 'PH35177',
                'sdt' => '0325224873'
            ],
        ];
        return view('thongtinsv')-> with(
            ['thongtinsv' => $data
        
        ]);
    }

}
?>
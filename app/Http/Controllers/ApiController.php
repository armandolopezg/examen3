<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function postales(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','api.zippopotam.us/MX/50000');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $postales = [];

        foreach ($datos['places'] as $postal){
            $postales[]= [
                'codigo'=>$postal['place name'],
                'pais'=>$postal['state'],
                'lugar'=>$postal['longitude'],
                
                
            ];
        }

        return view('postales',['postales'=>$postales]);
    }


    public function postalesdos(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','api.zippopotam.us/MX/50009');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $postalesdos = [];

        foreach ($datos['places'] as $postaldos){
            $postalesdos[]= [
                'codigo'=>$postaldos['place name'],
                'pais'=>$postaldos['state'],
                'lugar'=>$postaldos['longitude'],
                
                
            ];
        }

        return view('postalesdos',['postalesdos'=>$postalesdos]);
    }


    public function postalestres(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','api.zippopotam.us/MX/50010');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $postalestres = [];

        foreach ($datos['places'] as $postaltres){
            $postalestres[]= [
                'codigo'=>$postaltres['place name'],
                'pais'=>$postaltres['state'],
                'lugar'=>$postaltres['longitude'],
                
                
            ];
        }

        return view('postalestres',['postalestres'=>$postalestres]);
    }





    public function postalcuatro(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','api.zippopotam.us/MX/50020');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $postalescuatro = [];

        foreach ($datos['places'] as $postalcuatro){
            $postalescuatro[]= [
                'codigo'=>$postalcuatro['place name'],
                'pais'=>$postalcuatro['state'],
                'lugar'=>$postalcuatro['longitude'],
                
                
            ];
        }

        return view('postalescuatro',['postalescuatro'=>$postalescuatro]);
    }




    public function postalcinco(){
        $api= new \GuzzleHttp\Client();
        $responde = $api->request('GET','api.zippopotam.us/MX/50100');
        $datos= json_decode ($responde->getBody()->getContents(),true);

        $postalescinco = [];

        foreach ($datos['places'] as $postalcinco){
            $postalescinco[]= [
                'codigo'=>$postalcinco['place name'],
                'pais'=>$postalcinco['state'],
                'lugar'=>$postalcinco['longitude'],
                
                
            ];
        }

        return view('postalescinco',['postalescinco'=>$postalescinco]);
    }













}

<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HackersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=["White Hat","Black Hat","Grey Hat","Blue Hat"];
        
        $descripcion=["Los hackers White Hat son un tipo de hackers con experiencia en ciberseguridad.", "Los Black Hat también son expertos en informática, sin embargo, su intención es completamente distinta.","Los hackers Grey Hat se encuentran entre los Black Hat y los White Hat. Este tipo de hackers informáticos trabajan con buenas y con malas intenciones. La intención que hay detrás de la piratería decide el tipo de pirata informático.","Los Blue Hat o script-kiddie son un tipo de hackers informáticos que no tienen intención de aprender."];

        $acciones=["Están autorizados a hackear los sistemas de seguridad informática de gobiernos u organizaciones con el fin de comprobar fallos de ciberseguridad. ","Estos tipos de hackers atacan otros sistemas para obtener acceso a sistemas donde no tienen una entrada autorizada.","La diferencia con los otros hackers es que no quieren robar a las personas ni quieren ayudar a alguien en particular.","Son personas que carecen de conocimientos profundos y de base y solo usan herramientas de forma dañina. Pueden hacer cibervandalismo y propagar software malicioso sin tener demasiado claro el funcionamiento del sistema."];

        for ($x=0; $x<4; $x++)
        {
            DB::table('datos_hackers')->insert([

                'nombre'=>$nombre[$x],

                'descripcion'=>$descripcion[$x],

                'acciones'=>$acciones[$x],


                'created_at'=>date('Y-m-d H:i:s'),

                'updated_at'=>date('Y-m-d H:i:s'),

            ]);
        }        
    }

}

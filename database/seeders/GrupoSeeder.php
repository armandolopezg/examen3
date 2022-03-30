<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=["Fancy Bears","Shadow Brokers","Anonymous","Lazarus Group ","Tarh Andishan"];
        $bio_grupo=["Fancy Bear, es un grupo de hackers vinculados a Rusia.​ Se cree que está asociado con la inteligencia rusa, en especial con el GRU.​​​​​​​​​","The Shadow Brokers es un grupo de piratas informáticos que apareció por primera vez en el verano de 2016.","Anonymous es un pseudónimo utilizado mundialmente por diferentes individuos y colectivos para realizar, en su nombre poniéndose de acuerdo con otros, acciones o publicaciones individuales o concertadas, principalmente ataques cibernéticos contra gobiernos, corporaciones, instituciones y agencias gubernamentales.","Lazarus Group es un grupo de ciberdelincuentes compuesto por un número desconocido de individuos. Aunque no se sabe mucho sobre el grupo, los investigadores les han atribuido muchos ciberataques durante la última década.","Los ataques del grupo de hackers de Tarh Andishan nacieron después de un ataque de gusano creado por Estados Unidos e Israel que dañó una gran cantidad de sus redes informáticas. Ese ataque enfureció tanto al grupo de Tarh Andishan que comenzó a concentrar los ataques de guerra cibernética contra todos los países que podrían ser un todo de estados unidos o israel."];
        $imageng=["https://i.ibb.co/NZbhBNB/01G.jpg","https://i.ibb.co/s30VNzx/02G.jpg","https://i.ibb.co/27XjmB3/03G.jpg","https://i.ibb.co/3v8LVv0/04G.jpg","https://i.ibb.co/dQ3d04v/05G.jpg"];
        $numerodemiembros=[50, 10, 50, 1600, 20];
        $fechadeinicio=["2007-03-10","2016-08-13","2006-12-21","2009-02-10","2014-02-10"];

        for ($x=0; $x<5; $x++)
        {
            DB::table('grupohackers')->insert([

                'nombre'=>$nombre[$x],

                'bio_grupo'=>$bio_grupo[$x],

                'imageng'=>$imageng[$x],

                'numerodemiembros'=>$numerodemiembros[$x],

                'fechadeinicio'=>$fechadeinicio[$x],


                'created_at'=>date('Y-m-d H:i:s'),

                'updated_at'=>date('Y-m-d H:i:s'),

            ]);
        }
    }
}

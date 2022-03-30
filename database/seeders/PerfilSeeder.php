<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\perfilhacker;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=["Kevin Mitnick","Adrian Lamo","Elliot Gunton","Albert Gonzales","Evgeniy Mikhailovich","Matthew Bevan","Richard Pryce","Jeanson James Ancheta","Michael Calce","Alexsey Belan"];
        $edad=[41,50,78,48,40,51,40,36,44,54];
        $bio=['El hacker fue acusado de fraude informático y del robo de millones de dólares en software de importantes compañías tecnológicas.', '​Fue un hacker y periodista estadounidense, conocido por haber delatado a Chelsea Manning, la soldado que presuntamente filtró a WikiLeaks el vídeo que mostraba a soldados estadounidenses asesinando a un fotógrafo de Reuters.','De adolescente, pirateó la empresa TalkTalk. Más tarde, cometió todo tipo de delitos como robar datos personales, piratear cuentas de famosos en Instagram, cometer falsificaciones…
        ','El hacker Alberto González, que ha participado en una trama de cibercrimen que consiguió robar decenas de millones de números de tarjetas de crédito y débito, ha sido sentenciado a cumplir 20 años de cárcel en una prisión estadounidense.
        ','
        Evgeniy Mikhailovich Bogachev es buscado desde 2012 por ser el presunto responsable del troyano Zeus, un software que al estar controlado de forma remota, fue utilizado para realizar multitud de actividades delictivas.
        ','Matthew Bevan y Richard Pryce son un dúo de hackers británicos que piratearon numerosas redes militares en 1996, incluida la de la Base de la Fuerza Aérea Griffiss, la de la Agencia de Sistemas de Información de Defensa y del Instituto Coreano de Investigación Atómica (KARI).
        ','Matthew Bevan y Richard Pryce son un dúo de hackers británicos que piratearon numerosas redes militares en 1996, incluida la de la Base de la Fuerza Aérea Griffiss, la de la Agencia de Sistemas de Información de Defensa y del Instituto Coreano de Investigación Atómica (KARI).
        ','Jeanson James Ancheta ha sido un hacker cuyas principales actuaciones se basaron en la creación de redes de ordenadores zombie o botnets. En 2004 llegó a controlar una red de más de 400.000 ordenadores, que alquiló a empresas de publicidad a cambio de dinero.
        ','Es el caso de MafiaBoy, alias de Michael Calce, un hacker que con tan solo 15 años puso en apuros a empresas de internet como Yahoo!, Amazon, eBay o a la cadena de noticias CNN. Su historia empieza en febrero de 2000.
        ','Era junio de 2013, y las autoridades estadounidenses pensaban que finalmente atraparían a un delincuente escurridizo: el hacker ruso Alexsey Belan, acusado en Nevada y California de realizar intrusiones informáticas contra tres empresas de comercio electrónico de Estados Unidos, que había sido arrestado en Europa.

        '];
        $datoshacker=[1,2,3,1,2,1,4,3,3,1];
        $gruposhacker=[1,5,2,1,3,4,5,1,4,1];
        $imagen=["https://i.ibb.co/G55KK1c/01.jpg","https://i.ibb.co/mqY3S2W/02.jpg", "https://i.ibb.co/9hRWNty/03.jpg","https://i.ibb.co/5xk9FtX/04.jpg","https://i.ibb.co/4TkvRnv/05.jpg","https://i.ibb.co/yX2Rm5Y/6.jpg","https://i.ibb.co/kJXmzvd/7.jpg","https://i.ibb.co/NsrdFhM/8.jpg","https://i.ibb.co/GWcdmGk/9.jpg","https://i.ibb.co/D42LZ2X/10.jpg"];


        foreach($nombre as $key=>$value)
        {
            $nuevoperfil=new perfilhacker();
            $nuevoperfil->nombre=$value;
            $nuevoperfil->edad=$edad[$key];
            $nuevoperfil->datos_hackers_id=$datoshacker[$key];
            $nuevoperfil->grupo_id=$gruposhacker[$key];
            $nuevoperfil->imagen=$imagen[$key];
            $nuevoperfil->bio=$bio[$key];
            $nuevoperfil->save();
        }

    }
}

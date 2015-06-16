<?php

require_once '../src/MeaningCloud/Libs/MeaningCloudAPI.php';

$MeaningCloud = new MeaningCloudAPI('974a83c1957ed9454d88edc681273b25', 'general_es');

$testArray = ['Un grande que siempre va a estar!!!!!....',
            'Sobre todo con el agua en Maldonado...',
            'el agua en Uruguay de no creer pero ya no es potable',
            'Si todos los dias camino....tempranito...me encanta caminar...camino una hora y media o mas todos los dias ...menos los domingos.',
             "El \"sosegate con la delincuencia\" la rompio jajaja que grosa anda clara jajaja",
            'sosegate amistiqui !!! que falta de respeto anda clara!!',
            'Jaja ciego y pico no precisará lentes el susodicho? Jaja',
             "Cómo dicen ahora....\" se te fue la moto \" Anda Clara!!!!!!..... jajjaja",
            'Que bien me vendría uno de esos hoy',
            '¡Ay son unos locos! Nunca había visto chicos tan locos!',
            'Cúando vuelve a tacuarembo??? O todavía no termino xq la verdad no estava enterado y parece estar muy buena',
            'Una porqueria fue en paysandu...',
            'Vaselina para el manya se puede llevar ?',
            'No saben de donde más afanar material ja ja porque no hacen entrevistas propias.',
            'Si fuera LOLA buscan el ADN. En el mango de la cuchilla ahora es uruguayo jubilado ajuste de cuenta vamos bonomi',
            'Que bueno!!! Que importante!!! Mientras resuelven esto el 4% de los niños de Uruguay pasan hambre, el 30 % de la población es víctima de la delincuencia y no sabemos como carajo hacer rendir la plata.',
            'gracias claro ,me regalaste media hora ,solo media hora y me dejaste colgada con todo .',
            'La verdad no pense q la empresa claro fuera tan jodedora se me rompio el cel y me queria cobrar 7000$ para arreglarlo',
            'como mas internet si tienen problema con la cobertura hace casi dos años',
            'de seguro lo van a vender como el Iphone, no incluido en la factura, todo bien pero podrían no? ponele que yo lo reserve y después no lo dan con la factura, es en vano... media pila Claro, en una buena',
            'Eso es una mamada si quieren llegar aun público femenino. Creen una super heroina nueva y no cambien de sexo alos super héroes existentes',
            'Batanga ahora si la cagaste te metiste con Dragón Ball Z',
            'Basadas suena a que recrean exactamente lo que pasó, tal vez la palabra sería inspiradas. !?!?]',
            'Es un chiste? no termino de entender como algunos países quedan atrapados por semejantes dementes. Ej Argentina.',
            'me pueden expicar que mierda tiene que ver una foto de un hincha de cerro detenido, diario de mierda',
            'que raro gobernando con la carreta adelante de los bueyes...record de leyes inconstitucionales en período democrático.El FA puede',
            'Aguanta viejita!!! No te vayas sin verlos juzgados!!!',
            'Pastor porque siento que Dios no me responde. A veces no creo en nada pero siempre creo en el.',
            'es increíble la cantidad de gente que sigue a lo que es un simple humano  que perfecciono el arte de manipulación',
            'si usted ora por mi me sanare de mis crisis de panico me llamo andres y soy de chile Pucon, gracias',
            'Admiro a xq tiene gran capacidad de lavar cerebros y hacerse rico con el mentado Diezmo q ahora hasta contratan cobradores',
            'También tenemos la interné que nos merecemos, UNA MIAARRRRDA! te podes meter la fibra óptica bien metida en el orto',
            'pierdo 1 hr de trabajo y $300 en taxi porque no agrandan bornera ya van 4 veces en 5 meses! 1/2 pila por favor.',
            "qué corrupcio Hacés un contrato por un año y te aumentan... ya van \"dos aumentos\" y falta para que termine....",
            '10 días sin internet, 4 veces me dijeron que venían y no vinieron, q buen servicio se nota que son monopolio',
            'hace 10 días que estoy sin wifi y no me lo han solucionado!',
            'A estas, que estaban en mi cuarto, hay que sumarles las que dejo en el auto  soy su fan n 1 ',
            '#YoCuidoMiRiñón tomando todo el dia mucha agua y sobre todo salus que me encanta',
            'Salus Naranja como estilo de vida, me acompaña en el liceo, fiel compañera!!!',
            'Hoy lleve a mi sobrina de 10 años a ver la famosa fuente del puma. LAMENTABLE. Entramos, no habia nadie que te guiara continua',
            'la agarradera del agua de 5L es para manos de niño, y ademas te parte las manos. En serio. Hagan algo. Gracias :)',
            'que lástima que @Teledocecom ponga a la chanta tarotista en lugar de alguna peli aunque sea vieja, que desperdicio',
            'Viendo @Teledocecom IMPRESIONANTE el despliegue artistico d Tinelli #Showmatch2015',
            'LOS DE @Teledocecom CORTAN A @Erguno QUE ALDEÍTA UN PAÍS QUE NO PRODUCE CONTENIDOS DE TV TAN ACOMPLEJADO',
            '@Teledocecom Pasen Alguna Pelicula Como La Gente. Algo De Terror, Algo Bueno. La Verdad Que De Emocion No Tienen Nada',
            'Odio la novela esta que ponen ahora, tengo que esperar media hora acá por lo menos méteme este es el show @Teledocecom', ];

        foreach ($testArray as $test) {
            echo $test."\n";
            echo "Response : \n";
            $MeaningCloud->getSentimentText($test);
        }

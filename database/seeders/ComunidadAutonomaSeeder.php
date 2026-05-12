<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ComunidadAutonoma;
use Illuminate\Support\Str;


class ComunidadAutonomaSeeder extends Seeder
{
    //Establecemos los datos que van a figurara en la tabla de la base de datos
    public function run(): void
    {

        $comunidades = [
            [
                'id' => 1,
                'nombre' => 'Andalucía',
                'historia' => 'Cruzcampo fue fundada en 1904 en Sevilla por los hermanos Roberto y Tomás Osborne, quienes buscaban crear una cerveza adaptada al clima cálido del sur. Instalaron su fábrica en el barrio de Nervión, junto a un templete conocido como la Cruz del Campo, que dio nombre y alma a la marca. Su innovación clave fue el uso de una cepa de levadura exclusiva que aportaba ese frescor tan característico. Con el tiempo, la fábrica original se transformó en un centro de cultura cervecera, consolidando a la marca como un pilar de la identidad social andaluza y un referente en la hostelería de toda España.',
                'imagen_logo' => 'logos/andalucia.webp',
                'pos_x' => 40,
                'pos_y' => 62
            ],
            [
                'id' => 2,
                'nombre' => 'Aragón',
                'historia' => 'Ambar es la marca insignia de La Zaragozana, una cervecera fundada en 1900 en el barrio de San José, Zaragoza. La empresa nació por iniciativa de un grupo de amigos y empresarios aragoneses, liderados por Ladislao Goizueta, con el objetivo de dotar a la ciudad de una fábrica de cerveza de calidad que aprovechara las excelentes aguas del río Ebro y la abundancia de cebada de la región. Lo que hace única a esta marca es que su producción principal sigue vinculada a su recinto histórico, manteniendo procesos tradicionales como el tostado de su propia malta, lo que le otorga ese sabor equilibrado y carácter aragonés tan reconocido.',
                'imagen_logo' => 'logos/aragon.webp',
                'pos_x' => 54,
                'pos_y' => 31
            ],
            [
                'id' => 3,
                'nombre' => 'Asturias',
                'historia' => 'En Asturias, la cultura cervecera ha convivido históricamente con la sidra, pero marcas como Mahou lograron una implantación profunda durante el siglo XX. La llegada de la cerveza industrial a ciudades como Gijón y Oviedo respondió al crecimiento de la minería y la siderurgia, sectores donde los trabajadores demandaban una bebida refrescante tras las duras jornadas. Aunque no contó con una fábrica de escala nacional propia durante décadas, la región desarrolló un paladar exigente, integrando la cerveza en su rica gastronomía de montaña y mar. Hoy, Asturias vive un renacimiento con microcervecerías que utilizan el agua pura de sus picos para crear recetas únicas.',
                'imagen_logo' => 'logos/asturias.webp',
                'pos_x' => 30,
                'pos_y' => 9
            ],
            [
                'id' => 4,
                'nombre' => 'Baleares',
                'historia' => 'Rosa Blanca fue fundada en 1927 en Palma de Mallorca por la familia Verdera, con la visión de ofrecer una cerveza de la tierra que acompañara el floreciente dinamismo de las islas. Su elaboración se distinguía por el uso de ingredientes locales y un proceso de baja fermentación que resultaba en una cerveza equilibrada y muy aromática. Durante los años 50 y 60, se convirtió en el icono de las terrazas mallorquinas, siendo testigo directo del boom turístico que transformó el archipiélago. Tras un periodo de ausencia, la marca ha sido recuperada para reivindicar el patrimonio industrial insular y su vínculo inseparable con el estilo de vida mediterráneo.',
                'imagen_logo' => 'logos/baleares.webp',
                'pos_x' => 73,
                'pos_y' => 43
            ],
            [
                'id' => 5,
                'nombre' => 'Canarias',
                'historia' => 'Tropical nació en 1924 en Las Palmas de Gran Canaria fruto del empeño de empresarios locales por crear una industria propia que no dependiera de las importaciones peninsulares. Su creación marcó un hito en el abastecimiento del archipiélago, adaptando la receta a las temperaturas suaves y constantes de las islas. Con el tiempo, se fusionó con la Compañía Cervecera de Canarias (CCC), uniendo fuerzas con Dorada de Tenerife. Esta dualidad representa el orgullo de cada provincia, manteniendo una conexión emocional muy fuerte con el consumidor canario. Sus fábricas han sido motor de empleo y modernización técnica en un entorno geográfico único y aislado.',
                'imagen_logo' => 'logos/canarias.webp',
                'pos_x' => 17,
                'pos_y' => 83
            ],
            [
                'id' => 6,
                'nombre' => 'Cantabria',
                'historia' => 'La Cervecera del Norte fundó Estrella del Norte en 1912 en Santander, aprovechando la pujanza portuaria de la ciudad y su conexión comercial con Europa. En una época de gran expansión industrial, la fábrica se convirtió en un símbolo de la modernidad cántabra, compitiendo con las grandes marcas del país. Durante décadas, sus instalaciones en el centro de la ciudad fueron un punto neurálgico para la economía local. Aunque la concentración del mercado llevó al cierre de la planta original, la memoria de Estrella del Norte sigue viva como el primer gran proyecto cervecero de Cantabria, sentando las bases para la actual y vibrante escena de cervezas artesanales de la región.',
                'imagen_logo' => 'logos/cantabria.webp',
                'pos_x' => 39,
                'pos_y' => 9
            ],
            [
                'id' => 7,
                'nombre' => 'Castilla y León',
                'historia' => 'Castilla y León, el gran granero de España, ha sido históricamente la proveedora de la mejor cebada y lúpulo para todo el país. Aunque la región no consolidó una gran marca industrial única en el siglo XX, ciudades como Valladolid o León albergaron fábricas locales que abastecían a las ferias y mercados castellanos. Su identidad cervecera es profundamente agrícola; el cultivo del lúpulo en la provincia de León, por ejemplo, es responsable de casi toda la producción nacional. En los últimos años, esta herencia se ha transformado en un sector artesanal puntero, donde los maestros cerveceros locales elaboran productos de alta gama vinculados directamente a la pureza de sus campos de cereal.',
                'imagen_logo' => 'logos/castilla-y-leon.webp',
                'pos_x' => 35,
                'pos_y' => 26
            ],
            [
                'id' => 8,
                'nombre' => 'Castilla-La Mancha',
                'historia' => 'La tradición cervecera de Castilla-La Mancha está intrínsecamente ligada a su papel como potencia agrícola. Durante gran parte del siglo XX, el mercado manchego fue territorio de las grandes cerveceras madrileñas y andaluzas, pero la región siempre fue el origen de la materia prima: la malta de cebada. El paisaje de llanuras y molinos ha sido el escenario de una evolución que, en el siglo XXI, ha dado lugar a proyectos pioneros de producción integral. Hoy, la comunidad destaca por albergar algunas de las fábricas más tecnológicamente avanzadas de Europa, uniendo la tradición del campo con una capacidad industrial capaz de abastecer a millones de consumidores bajo estándares de sostenibilidad.',
                'imagen_logo' => 'logos/castilla-la-mancha.webp',
                'pos_x' => 45,
                'pos_y' => 45
            ],
            [
                'id' => 9,
                'nombre' => 'Cataluña',
                'historia' => 'Estrella Damm nació en 1876 de la mano de August Kuentzmann Damm y su esposa Melanie, quienes emigraron desde Alsacia huyendo de la guerra franco-prusiana. Se instalaron en Barcelona para elaborar una cerveza adaptada al gusto mediterráneo, más ligera que las centroeuropeas. El éxito de su receta original, que incluía arroz para suavizar el sabor, permitió la construcción de La Bohemia, una fábrica monumental que marcó el paisaje industrial de la ciudad. Hoy, tras once generaciones, sigue siendo una empresa independiente que abandera el estilo de vida mediterráneo y el compromiso con la cebada de proximidad y el sector cultural catalán.',
                'imagen_logo' => 'logos/cataluña.webp',
                'pos_x' => 67,
                'pos_y' => 24
            ],
            [
                'id' => 10,
                'nombre' => 'Comunidad Valenciana',
                'historia' => 'Turia nació en 1935 en Valencia gracias al espíritu emprendedor de ocho amigos que decidieron unir fuerzas para fabricar una cerveza con carácter propio. Tras el parón de la Guerra Civil, la marca resurgió con fuerza en los años 40, convirtiéndose en el refresco predilecto de las barracas y las fiestas populares. Su producto estrella, la Turia Märzen, destaca por su color tostado y notas de cereal, una rareza en un mercado dominado por las cervezas rubias. Este perfil distintivo ha permitido a la marca sobrevivir a los cambios de moda, siendo hoy un emblema de la revitalización del diseño y la gastronomía valenciana, muy ligada a la huerta y el clima mediterráneo.',
                'imagen_logo' => 'logos/valencia.webp',
                'pos_x' => 57,
                'pos_y' => 45
            ],
            [
                'id' => 11,
                'nombre' => 'Extremadura',
                'historia' => 'Extremadura es una región donde la cerveza ha sabido ganar terreno gracias a su extraordinaria capacidad de producción cerealista. Históricamente, el consumo extremeño dependía de las marcas colindantes de Madrid o Andalucía, pero la identidad local se ha forjado a través de la calidad de sus materias primas. En las vegas del Guadiana se cultiva una cebada de excelente calidad que nutre a la industria nacional. En las últimas décadas, este potencial ha cristalizado en el surgimiento de marcas locales que apuestan por ingredientes autóctonos, como la bellota o la miel, creando una cultura cervecera propia que marida perfectamente con su reconocida despensa gastronómica de ibéricos y quesos.',
                'imagen_logo' => 'logos/extremadura.webp',
                'pos_x' => 29,
                'pos_y' => 48
            ],
            [
                'id' => 12,
                'nombre' => 'Galicia',
                'historia' => 'Estrella Galicia fue fundada en 1906 en A Coruña por José María Rivera Corral tras su regreso de México, donde descubrió el potencial del sector cervecero. Bajo el nombre La Estrella de Galicia, el proyecto nació con un fuerte carácter familiar y una obsesión por la calidad de las materias primas, especialmente el agua de la ciudad herculina. A diferencia de otros grupos, la familia Rivera ha mantenido la independencia de la compañía durante más de un siglo, convirtiendo a la marca en un símbolo del orgullo gallego. Su resistencia a la estandarización industrial le ha permitido conservar un sabor auténtico, intenso y muy apreciado, extendiendo su prestigio mucho más allá de las fronteras gallegas.',
                'imagen_logo' => 'logos/galicia.webp',
                'pos_x' => 21,
                'pos_y' => 16
            ],
            [
                'id' => 13,
                'nombre' => 'La Rioja',
                'historia' => 'La Rioja es mundialmente conocida por su vino, pero su relación con la cerveza es una historia de convivencia y complementariedad. Durante el siglo XX, el consumo cervecero fue ganando peso como una alternativa refrescante en los meses de verano y en el contexto del tapeo logroñés. Al no contar con una gran planta industrial histórica, la región se ha especializado en el siglo XXI en la creación de cervezas de autor. Estos proyectos utilizan la sabiduría de los maestros bodegueros riojanos, aplicando técnicas de crianza en barrica y selección de levaduras para crear productos que borran la línea entre la viticultura y la cervecería, aportando un valor gastronómico único.',
                'imagen_logo' => 'logos/la-rioja.webp',
                'pos_x' => 46,
                'pos_y' => 21
            ],
            [
                'id' => 14,
                'nombre' => 'Madrid',
                'historia' => 'Mahou fue fundada en 1890 en la calle Amaniel de Madrid por los hijos de Casimiro Mahou, un emprendedor de origen francés que sentó las bases de un imperio industrial. La fábrica original no solo producía cerveza, sino también pinturas y hielo, reflejando el dinamismo de la capital en pleno cambio de siglo. La marca se convirtió rápidamente en el alma de las tabernas madrileñas, innovando con la introducción de los primeros barriles de aluminio en España. Su historia es la historia de la modernización de Madrid, pasando de ser un negocio local a liderar el mercado nacional, siempre ligada a la cultura del encuentro, la vida nocturna y el castizo tapeo madrileño.',
                'imagen_logo' => 'logos/madrid.webp',
                'pos_x' => 40,
                'pos_y' => 37
            ],
            [
                'id' => 15,
                'nombre' => 'Murcia',
                'historia' => 'Estrella de Levante fue fundada en 1963 en la pedanía murciana de Espinardo por un grupo de empresarios que vieron la necesidad de crear una cerveza local para el sureste español. Su nacimiento coincidió con el desarrollo del regadío y el turismo en la costa, convirtiéndose rápidamente en la cerveza del Levante. La fábrica se diseñó con tecnología puntera para la época, incluyendo su propia maltería para controlar todo el proceso de calidad. Hoy, la marca es un pilar fundamental de la vida social murciana, participando activamente en sus fiestas y festivales, y destacando por su compromiso con la gestión del agua, un recurso vital en su entorno geográfico.',
                'imagen_logo' => 'logos/murcia.webp',
                'pos_x' => 52,
                'pos_y' => 58
            ],
            [
                'id' => 16,
                'nombre' => 'Navarra',
                'historia' => 'La historia cervecera de Navarra tiene sus raíces en las primeras fábricas industriales que surgieron en Pamplona a finales del siglo XIX, como La Cruz Blanca. Estas empresas nacieron para satisfacer a una burguesía creciente y a una población urbana que empezaba a frecuentar los cafés de la Plaza del Castillo. Aunque estas fábricas originales cerraron con el tiempo, Navarra ha mantenido su tradición a través de una de las escenas de cerveza artesana más potentes de España. La calidad del agua de los Pirineos y la tradición de cooperativismo agrícola han facilitado que los cerveceros navarros sean hoy referentes en innovación, exportando sus recetas especiales a mercados internacionales.',
                'imagen_logo' => 'logos/navarra.webp',
                'pos_x' => 51,
                'pos_y' => 16
            ],
            [
                'id' => 17,
                'nombre' => 'País Vasco',
                'historia' => 'La Salve nació en 1886 en Bilbao, fundada por José Schumann y Cordés cerca de la ría, en un recodo donde los barcos solían saludar a la Virgen de Begoña. Esta ubicación estratégica permitió a la marca crecer junto a la pujante industria naval y siderúrgica vasca. Durante casi un siglo, fue la cerveza de referencia en Vizcaya hasta su desaparición en los años 70. Sin embargo, en 2014, un grupo de emprendedores recuperó la marca con el objetivo de devolver a Bilbao su fábrica de cerveza. La nueva etapa combina la receta histórica con una imagen moderna, vinculando de nuevo la cerveza a la innovación, la gastronomía y el diseño industrial vasco.',
                'imagen_logo' => 'logos/pais-vasco.webp',
                'pos_x' => 46,
                'pos_y' => 11
            ],
        ];

        foreach ($comunidades as $datos) {
            // Usamos updateOrCreate para asegurarnos de que el ID es exactamente el que le indicamos
            ComunidadAutonoma::updateOrCreate(
                ['id' => $datos['id']], // Busca el id exacto
                [ // Los datos que debe insertar o actualizar
                    'nombre'      => $datos['nombre'],
                    'slug'        => Str::slug($datos['nombre']),
                    'historia'    => $datos['historia'],
                    'imagen_logo' => $datos['imagen_logo'],
                    'pos_x'       => $datos['pos_x'],
                    'pos_y'       => $datos['pos_y'],
                ]
            );
        }
    }
}

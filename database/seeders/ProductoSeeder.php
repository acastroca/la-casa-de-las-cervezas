<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    //LOs datos que van a figuarra en la tabla de los productos
    public function run(): void
    {
        $productos = [
            // Andalucía (ID: 1)
            [1, 'Cruzcampo Pilsen', 'Cerveza Cruzcampo Pilsen Lager botellín 33 cl', 0.85, 1, 220, '1.webp'],
            [2, 'Alhambra Reserva 1925', 'Cerveza Alhambra Reserva 1925 Lager botellín 33 cl', 1.15, 1, 180, '2.webp'],
            [3, 'Victoria Málaga', 'Cerveza Victoria Málaga Lager botellín 33 cl', 0.90, 1, 200, '3.webp'],
            [4, 'Destraperlo IPA', 'Cerveza Destraperlo IPA botellín 33 cl', 2.95, 1, 80, '4.webp'],
            [5, 'Guadalquibeer Pale Ale', 'Cerveza Guadalquibeer Pale Ale botellín 33 cl', 2.75, 1, 70, '5.webp'],
            [6, 'Alhambra', 'Cerveza Alhambra botellín 25 cl', 2.00, 1, 65, '6.webp'],
            [7, 'Hecatombe IPA', 'Cerveza Hecatombe IPA botellín 33 cl', 3.10, 1, 60, '7.webp'],
            [8, 'Malandar Lager', 'Cerveza DDH Doble IPA Mandalorian', 7.00, 1, 70, '8.webp'],

            // Aragón (ID: 2)
            [9, 'Ambar Especial', 'Cerveza Ambar Especial Lager botellín 33 cl', 0.90, 2, 210, '9.webp'],
            [10, 'Ambar Export', 'Cerveza Ambar Export Lager botellín 33 cl', 1.05, 2, 180, '10.webp'],
            [11, 'Ambar IPA', 'Cerveza Ambar IPA botellín 33 cl', 1.10, 2, 160, '11.webp'],
            [12, 'Cierzo IPA', 'Cerveza Cierzo IPA botellín 33 cl', 3.10, 2, 80, '12.webp'],
            [13, 'Borda Pale Ale', 'Cerveza Drink Drink Pale Ale botellín 33 cl', 2.85, 2, 70, '13.webp'],
            [14, 'Pirineos Bier Blonde', 'Cerveza Pirineos Bier Blonde Ale botellín 33 cl', 2.90, 2, 65, '14.webp'],
            [15, 'Rondadora Amber Ale', 'Cerveza Rondadora Amber Ale botellín 33 cl', 2.75, 2, 60, '15.webp'],
            [16, '1900 SIn Filtrar', 'Cerveza Ambar 1900 Sin Filtrar botellín 33 cl', 1.75, 2, 75, '16.webp'],

            // Asturias (ID: 3)
            [17, 'Ordum Blonde', 'Cerveza Ordum Blonde Ale botellín 33 cl', 2.90, 3, 70, '17.webp'],
            [18, 'Caleya IPA', 'Cerveza Caleya IPA botellín 33 cl', 3.10, 3, 60, '18.webp'],
            [19, 'Cotoya Pale Ale', 'Cerveza Cotoya Pale Ale botellín 33 cl', 2.80, 3, 75, '19.webp'],
            [20, 'Deva Blonde', 'Cerveza Deva Blonde Ale botellín 33 cl', 2.70, 3, 65, '20.webp'],
            [21, 'D\'Eva Stout', 'Cerveza D\'Eva Stout botellín 33 cl', 3.20, 3, 55, '21.webp'],
            [22, 'Red Ale', 'Cerveza Ordum Red Ale botellín 33 cl', 2.75, 3, 60, '22.webp'],
            [23, 'Ordum Stout', 'Cerveza Ordum Stout botellín 33 cl', 2.85, 3, 70, '23.webp'],
            [24, 'Ordum La 21', 'Cerveza Ordum La 21 botellín 33 cl', 2.75, 3, 80, '24.webp'],

            // Baleares (ID: 4)
            [25, 'Rosa Blanca', 'Cerveza Rosa Blanca Lager botellín 33 cl', 0.95, 4, 190, '25.webp'],
            [26, 'Mallorca Beer Blat', 'Cerveza Mallorca Beer Blat botellín 33 cl', 2.10, 4, 150, '26.webp'],
            [27, 'Sullerica Valenta', 'Cerveza Sullerica Valenta botellín 33 cl', 3.00, 4, 60, '27.webp'],
            [28, 'Mallorca Beer Necro', 'Cerveza Mallorca Beer Necro botellín 33 cl', 2.85, 4, 70, '28.webp'],
            [29, 'Toutatis Blonde', 'Cerveza Toutatis Blonde Ale botellín 33 cl', 2.90, 4, 65, '29.webp'],
            [30, 'Sullerica Fosca', 'Cerveza Sullerica Fosca botellín 33 cl', 2.80, 4, 70, '30.webp'],
            [31, 'Forastera Another F***ing IPA', 'Cerveza Forastera Another F***ing IPA botellín 33 cl', 3.10, 4, 50, '31.webp'],
            [32, 'Sullerica Panashé', 'Cerveza Sullerica Panashé botellín 33 cl', 3.20, 4, 55, '32.webp'],

            // Canarias (ID: 5)
            [33, 'Dorada Especial La Original', 'Cerveza Dorada Especial La Original Lager botellín 33 cl', 0.90, 5, 220, '33.webp'],
            [34, 'Dorada Pilsen', 'Cerveza Dorada Pilsen Lager botellín 33 cl', 0.95, 5, 200, '34.webp'],
            [35, 'Jaira IPA', 'Cerveza Jaira IPA botellín 33 cl', 3.10, 5, 60, '35.webp'],
            [36, 'Tacoa Surf Beer', 'Cerveza Tacoa Surf Beer botellín 33 cl', 2.85, 5, 70, '36.webp'],
            [37, 'Malpeis Blond', 'Cerveza Malpeis Blond botellín 33 cl', 3.20, 5, 55, '37.webp'],
            [38, 'Agüita Blonde', 'Cerveza Agüita Blonde Ale botellín 33 cl', 2.75, 5, 75, '38.webp'],
            [39, 'La Armada Citra', 'Cerveza La Armada Citra botellín 33 cl', 2.70, 5, 80, '39.webp'],
            [40, 'Isla Verde Craft Pilsen', 'Cerveza Isla Verde Craft Pilsen botellín 33 cl', 2.85, 5, 65, '40.webp'],

            // Cantabria (ID: 6)
            [41, 'Dougall\'s Leyenda', 'Cerveza Dougall\'s Leyenda Pale Ale botellín 33 cl', 3.10, 6, 80, '41.webp'],
            [42, 'Dougall\'s IPA 4', 'Cerveza Dougall\'s IPA 4 botellín 33 cl', 3.20, 6, 70, '42.webp'],
            [43, 'La Grúa Pale Ale', 'Cerveza La Grúa Pale Ale botellín 33 cl', 2.90, 6, 75, '43.webp'],
            [44, 'Redneck Mississippi Muo', 'Cerveza Redneck Mississippi Muo botellín 33 cl', 2.80, 6, 70, '44.webp'],
            [45, 'Smach IPA', 'Cerveza Smach IPA botellín 33 cl', 3.00, 6, 60, '45.webp'],
            [46, 'Helles Bock', 'Cerveza Dougall\'s Helles Bock botellín 33 cl', 2.75, 6, 65, '46.webp'],
            [47, 'Dougall\'s Raquera', 'Cerveza Dougall\'s Raquera IPA botellín 33 cl', 2.28, 6, 55, '47.webp'],
            [48, 'La Grúa American IPA', 'Cerveza La Grúa American IPA botellín 33 cl', 3.10, 6, 60, '48.webp'],

            // Castilla y Leon (ID: 7)
            [49, 'San Miguel Especial', 'Cerveza San Miguel Especial Lager botellín 33 cl', 0.85, 7, 230, '49.webp'],
            [50, 'Mica Cuarzo', 'Cerveza Mica Cuarzo botellín 33 cl', 2.95, 7, 80, '50.webp'],
            [51, 'Milana Pucela', 'Cerveza Milana Pucela botellín 33 cl', 3.10, 7, 70, '51.webp'],
            [52, 'San Miguel IPA Yakima Valley', 'Cerveza San Miguel IPA Yakima Valley botellín 33 cl', 2.75, 7, 65, '52.webp'],
            [53, 'Castreña Honey IPA', 'Cerveza Castreña Honey IPA botellín 33 cl', 2.70, 7, 75, '53.webp'],
            [54, 'Milana Zorrilla Lager', 'Cerveza Milana Zorrilla Lager botellín 33 cl', 3.20, 7, 55, '54.webp'],
            [55, 'Mica Rural Tostada Amber', 'Cerveza Mica Rural Tostada Amber botellín 33 cl', 2.85, 7, 70, '55.webp'],
            [56, 'San Miguel Selecta', 'Cerveza San Miguel Selecta botellín 33 cl', 3.05, 7, 60, '56.webp'],

            // Castilla La Mancha (ID: 8)
            [57, 'Domus Aurea', 'Cerveza Domus Aurea botellín 33 cl', 3.10, 8, 70, '57.webp'],
            [58, 'Domus IPA', 'Cerveza Domus IPA botellín 33 cl', 3.20, 8, 60, '58.webp'],
            [59, 'La Sagra Lager', 'Cerveza La Sagra Lager botellín 33 cl', 1.05, 8, 180, '59.webp'],
            [60, 'La Sagra India IPA', 'Cerveza La Sagra India IPA botellín 33 cl', 2.95, 8, 80, '60.webp'],
            [61, 'Arriaca IPA', 'Cerveza Arriaca IPA botellín 33 cl', 3.10, 8, 75, '61.webp'],
            [62, 'Arriaca Rubia Lager', 'Cerveza Arriaca Rubia Lager botellín 33 cl', 2.85, 8, 70, '62.webp'],
            [63, 'Domus Toledo', 'Cerveza Domus Toledo botellín 33 cl', 3.25, 8, 60, '63.webp'],
            [64, 'La Sagra Suxinsu', 'Cerveza La Sagra Suxinsu botellín 33 cl', 2.75, 8, 80, '64.webp'],

            // Cataluña (ID: 9)
            [65, 'Estrella Damm', 'Cerveza Estrella Damm Lager botellín 33 cl', 0.85, 9, 240, '65.webp'],
            [66, 'Moritz Original', 'Cerveza Moritz Original Lager botellín 33 cl', 0.95, 9, 200, '66.webp'],
            [67, 'Voll-Damm', 'Cerveza Voll-Damm Doble Malta Lager botellín 33 cl', 1.05, 9, 180, '67.webp'],
            [68, 'Garage IPA', 'Cerveza Garage IPA botellín 33 cl', 3.30, 9, 70, '68.webp'],
            [69, 'La Pirata Viakrucis', 'Cerveza La Pirata Viakrucis IPA botellín 33 cl', 3.20, 9, 65, '69.webp'],
            [70, 'Guineu IPA Amarillo', 'Cerveza Guineu IPA Amarillo botellín 33 cl', 3.10, 9, 75, '70.webp'],
            [71, 'Espiga Blonde', 'Cerveza Espiga Blonde Ale botellín 33 cl', 2.95, 9, 70, '71.webp'],
            [72, 'Moska IPA', 'Cerveza Moska IPA botellín 33 cl', 3.00, 9, 60, '72.webp'],

            // Comunidad Valenciana (ID: 10)
            [73, 'Turia Märzen', 'Cerveza Turia Märzen Lager tostada botellín 33 cl', 0.95, 10, 220, '73.webp'],
            [74, 'Amstel Oro', 'Cerveza Amstel Oro Lager botellín 33 cl', 0.90, 10, 200, '74.webp'],
            [75, 'Tyris IPA', 'Cerveza Tyris IPA botellín 33 cl', 3.10, 10, 75, '75.webp'],
            [76, 'Zeta Hell', 'Cerveza Zeta Hell Lager botellín 33 cl', 2.95, 10, 80, '76.webp'],
            [77, 'Antiga Pale Ale', 'Cerveza Antiga Pale Ale botellín 33 cl', 2.85, 10, 70, '77.webp'],
            [78, 'Turia Stark', 'Cerveza Turia Stark botellín 33 cl', 2.90, 10, 65, '78.webp'],
            [79, 'La Socarrada', 'Cerveza La Socarrada Ale botellín 33 cl', 3.20, 10, 60, '79.webp'],
            [80, 'Birra & Blues IPA', 'Cerveza Birra & Blues IPA botellín 33 cl', 3.15, 10, 70, '80.webp'],

            // Extremadura (ID: 11)
            [81, 'Cerex Pilsen', 'Cerveza Cerex Pilsen botellín 33 cl', 3.10, 11, 70, '81.webp'],
            [82, 'Cerex Cereza', 'Cerveza Cerex Cereza botellín 33 cl', 3.20, 11, 60, '82.webp'],
            [83, 'Ballut Ale Con Miel', 'Cerveza Ballut Ale Con Miel botellín 33 cl', 2.80, 11, 75, '83.webp'],
            [84, 'Ribereña Blonde', 'Cerveza Cerex Ibérica D\'Bellota botellín 33 cl', 2.75, 11, 70, '84.webp'],
            [85, 'Cerex Castaña', 'Cerveza Cerex Castaña Ale botellín 33 cl', 3.30, 11, 55, '85.webp'],
            [86, 'Ballut Rubia', 'Cerveza Ballut Rubia botellín 33 cl', 3.00, 11, 65, '86.webp'],
            [87, 'Jacha Jigo Jiguera', 'Cerveza Jacha Jigo Jiguera botellín 33 cl', 2.85, 11, 80, '87.webp'],
            [88, 'Cerex Russian Imperial Stout', 'Cerveza Cerex Russian Imperial Stout botellín 33 cl', 3.25, 11, 50, '88.webp'],

            // Galicia (ID: 12)
            [89, 'Estrella Galicia', 'Cerveza Estrella Galicia Lager botellín 33 cl', 0.85, 12, 250, '89.webp'],
            [90, '1906 Reserva Especial', 'Cerveza 1906 Reserva Especial Lager botellín 33 cl', 1.10, 12, 200, '90.webp'],
            [91, '1906 Red Vintage', 'Cerveza 1906 Red Vintage Lager botellín 33 cl', 1.15, 12, 180, '91.webp'],
            [92, 'Nós Sálvora IPA', 'Cerveza Nós Sálvora IPA botellín 33 cl', 3.10, 12, 70, '92.webp'],
            [93, 'Santo Cristo American Pale Ale', 'Cerveza Santo Cristo American Pale Ale botellín 33 cl', 2.95, 12, 75, '93.webp'],
            [94, 'Estrella Galicia Steiner', 'Cerveza Estrella Galicia Steiner botellín 33 cl', 3.00, 12, 65, '94.webp'],
            [95, 'Keltius Los Suaves', 'Cerveza Keltius Los Suaves Ale botellín 33 cl', 2.85, 12, 70, '95.webp'],
            [96, 'Menduiña Doppelgänger', 'Cerveza Menduiña Doppelgänger Ale botellín 33 cl', 2.90, 12, 75, '96.webp'],

            // La Rioja (ID: 13)
            [97, 'Rua 1919', 'Cerveza Rua 1919 botellín 33 cl', 3.10, 13, 100, '97.webp'],
            [98, 'La Rua Psycho', 'Cerveza La Rua Psycho botellín 33 cl', 2.80, 13, 90, '98.webp'],
            [99, 'Mateo & Bernabé Parking Beer', 'Cerveza Mateo & Bernabé Parking Beer botellín 33 cl', 2.40, 13, 60, '99.webp'],
            [100, 'Mateo & Bernabé Little Bichos', 'Cerveza Mateo & Bernabé Little Bichos Ale botellín 33 cl', 3.10, 13, 60, '100.webp'],
            [101, 'Ceriux Rubia', 'Cerveza Ceriux Rubia botellín 33 cl', 2.90, 13, 75, '101.webp'],
            [102, 'Ceriux Tostada', 'Cerveza Ceriux Tostada botellín 33 cl', 2.95, 13, 70, '102.webp'],
            [103, 'Samhain IPA', 'Cerveza Samhain IPA botellín 33 cl', 3.00, 13, 50, '103.webp'],
            [104, 'Samhain La Luci', 'Cerveza Samhain La Luci botellín 33 cl', 2.80, 13, 80, '104.webp'],

            // Madrid (ID: 14) 
            [105, 'Mahou Cinco Estrellas', 'Cerveza Mahou Cinco Estrellas Lager botellín 33 cl', 0.85, 14, 260, '105.webp'],
            [106, 'Mahou Maestra', 'Cerveza Mahou Maestra Lager botellín 33 cl', 1.05, 14, 200, '106.webp'],
            [107, 'El Águila Sin Filtrar', 'Cerveza El Águila Sin Filtrar Lager botellín 33 cl', 1.00, 14, 190, '107.webp'],
            [108, 'La Cibeles IPA', 'Cerveza La Cibeles IPA botellín 33 cl', 3.10, 14, 80, '108.webp'],
            [109, 'Oso Brew Ursa', 'Cerveza Oso Brew Ursa botellín 33 cl', 2.90, 14, 70, '109.webp'],
            [110, 'Santa Bárbara Amber Ale', 'Cerveza Santa Bárbara Amber Ale botellín 33 cl', 3.15, 14, 65, '110.webp'],
            [111, 'La Virgen Madrid', 'Cerveza La Virgen Madrid Lager botellín 33 cl', 2.95, 14, 75, '111.webp'],
            [112, 'Cervezas La Quince IPA', 'Cerveza Cervezas La Quince IPA botellín 33 cl', 3.30, 14, 60, '112.webp'],

            // Murcia (ID: 15) 
            [113, 'Estrella de Levante', 'Cerveza Estrella de Levante Lager botellín 33 cl', 0.90, 15, 220, '113.webp'],
            [114, 'Yakka Querida', 'Cerveza Yakka Querida botellín 33 cl', 3.10, 15, 75, '114.webp'],
            [115, 'Yakka Blonde', 'Cerveza Yakka Blonde Ale botellín 33 cl', 2.90, 15, 70, '115.webp'],
            [116, 'Estrella de Levante Punta Este', 'Cerveza Estrella de Levante Punta Este botellín 33 cl', 2.80, 15, 80, '116.webp'],
            [117, 'Cátedra Pale Ale', 'Cerveza Cátedra Pale Ale botellín 33 cl', 2.95, 15, 65, '117.webp'],
            [118, 'Estrella de Levante Verna', 'Cerveza Estrella de Levante Verna Lager botellín 33 cl', 1.05, 15, 180, '118.webp'],
            [119, 'Yakka Doble', 'Cerveza Yakka Doble botellín 33 cl', 3.00, 15, 60, '119.webp'],
            [120, 'Trinitaria India Pale Ale', 'Cerveza Trinitaria India Pale Ale botellín 33 cl', 3.15, 15, 60, '120.webp'],

            // Navarra (ID: 16) 
            [121, 'Naparbier Bardenas', 'Cerveza Naparbier Bardenas botellín 33 cl', 3.20, 16, 80, '121.webp'],
            [122, 'Naparbier Baztan', 'Cerveza Naparbier Baztan botellín 33 cl', 3.30, 16, 70, '122.webp'],
            [123, 'Naparbier Aker', 'Cerveza Naparbier Aker lata 44 cl', 3.40, 16, 60, '123.webp'],
            [124, 'Brew & Roll Irati', 'Cerveza Brew & Roll Irati botellín 33 cl', 2.90, 16, 75, '124.webp'],
            [125, 'Naparbier Paradise', 'Cerveza Naparbier Paradise lata 33 cl', 3.30, 16, 65, '125.webp'],
            [126, 'Naparbier Madness', 'Cerveza Naparbier Madness lata 44 cl', 3.35, 16, 60, '126.webp'],
            [127, 'Brew & Roll Kalman', 'Cerveza Brew & Roll Kalman botellín 33 cl', 2.95, 16, 70, '127.webp'],
            [128, 'Naparbier ZZ+', 'Cerveza Naparbier ZZ+ Double lata 44 cl', 3.50, 16, 50, '128.webp'],

            // Pais Vasco (ID: 17)
            [129, 'Keler Lager', 'Cerveza Keler Lager botellín 33 cl', 0.95, 17, 210, '129.webp'],
            [130, 'La Salve Munich', 'Cerveza La Salve Munich Lager botellín 33 cl', 1.05, 17, 190, '130.webp'],
            [131, 'Basqueland Imparable', 'Cerveza Basqueland Imparable IPA botellín 33 cl', 3.30, 17, 75, '131.webp'],
            [132, 'Laugar Kide', 'Cerveza Laugar Kide botellín 33 cl', 3.25, 17, 70, '132.webp'],
            [133, 'Keler', 'Cerveza Keler botellín 33 cl', 3.20, 17, 65, '133.webp'],
            [134, 'La Salve Lucía', 'Cerveza La Salve Lucía Lager botellín 33 cl', 1.10, 17, 180, '134.webp'],
            [135, 'Laugar Aupa', 'Cerveza Laugar Aupa IPA botellín 33 cl', 3.30, 17, 60, '135.webp'],
            [136, 'Basqueland Zumo', 'Cerveza Basqueland Zumo IPA lata 33 cl', 3.35, 17, 60, '136.webp'],

            // Sin Alcohol / Sin Gluten 
            [137, 'Ambar Sin Gluten', 'Cerveza Ambar Lager especial sin gluten botellín 33 cl', 1.05, 2, 180, '137.webp'],
            [138, 'Estrella Galicia 0,0 Tostada', 'Cerveza Estrella Galicia 0,0 Tostada Lager botellín 33 cl', 0.75, 12, 220, '138.webp'],
            [139, 'Mahou 0,0 Tostada', 'Cerveza Mahou 0,0 Tostada botellín 33 cl', 0.80, 14, 200, '139.webp'],
            [140, 'Daura Damm Sin Gluten', 'Cerveza Daura Damm Lager sin gluten botellín 33 cl', 1.15, 9, 170, '140.webp'],
            [141, 'San Miguel 0,0', 'Cerveza San Miguel 0,0 Lager botellín 33 cl', 0.75, 7, 210, '141.webp'],
            [142, 'Turia 0,0', 'Cerveza Turia 0,0 Tostada botellín 33 cl', 0.85, 10, 180, '142.webp'],
            [143, 'Cruzcampo 0,0', 'Cerveza Cruzcampo 0,0 Lager botellín 33 cl', 0.75, 1, 220, '143.webp'],
            [144, 'Estrella Damm 0,0', 'Cerveza Estrella Damm 0,0 Lager botellín 33 cl', 0.80, 9, 200, '144.webp'],
        ];

        foreach ($productos as $p) {
            $nombreImagen = isset($p[6]) ? $p[6] : 'default.webp';

            DB::table('productos')->updateOrInsert(
                // Establecemos la condición para buscar el id
                ['id' => $p[0]],

                // Los datos que queremos guardar o actualizar
                [
                    'nombre'       => $p[1],
                    'descripcion'  => $p[2],
                    'precio'       => $p[3],
                    'comunidad_id' => $p[4],
                    'stock'        => $p[5],
                    'imagen'       => 'productos/' . $nombreImagen,
                ]
            );
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'manufacturer_id' => 1,
            'imagePath' => 'http://www.tauroalus.lt/uploads/beers/03/28/tauras-skardine-tradicinis_22_2.png',
            'productName' => 'Tradicinis',
            'productDescription' => 'Gaminamas pagal tradicinę receptūrą nuo pat alaus daryklos įkūrimo 1860 m. laikų. Ypatingieji „Taurus” apyniai išskiria šį alų iš kitų šviesiojo alaus rūšių, suteikdami jam aiškiai jaučiamą kartumą ir tirštą putą.',
            'price' => 1
        ]);
        $product->save();

        $product = new Product([
            'manufacturer_id' => 1,
            'imagePath' => 'http://www.tauroalus.lt/uploads/beers/03/28/tauras-skardine-pilsner_22_2.png',
            'productName' => 'Pilsneris',
            'productDescription' => 'Tai lengviausias alus iš „Tauro“ šeimos. Kaip ir priklauso „Pilsner“ tipo alui, „Tauras Pilsneris“ pasižymi švelniu apynių aromatu, lengvu skoniu ir subtiliu kartumu.',
            'price' => 1.1
        ]);
        $product->save();

        $product = new Product([
            'manufacturer_id' => 2,
            'imagePath' => 'http://www.svyturys.lt/uploads/images/dir82/dir4/7_1.php',
            'productName' => 'Ekstra',
            'productDescription' => 'Tai – pirmasis Lietuvos alus, sulaukęs tarptautinio pripažinimo ir apdovanotas Pasaulio alaus taurės Aukso ir Sidabro medaliais bei Stokholmo alaus festivalio Aukso medaliu.',
            'price' => 1.15
        ]);
        $product->save();

        $product = new Product([
            'manufacturer_id' => 2,
            'imagePath' => 'http://www.svyturys.lt/uploads/images/dir18/3_1.php',
            'productName' => 'Baltijos',
            'productDescription' => 'Savo kategorijoje yra iškovojęs Pasaulio alaus taurės Bronzos medalį, o tarptautinės „Sibiro mugės“ metu – „Didįjį aukso medalį“. ',
            'price' => 1
        ]);
        $product->save();

        $product = new Product([
            'manufacturer_id' => 3,
            'imagePath' => 'http://www.utenosalus.lt/image/products/UT_WEB_Produktu_foto_UT_BUTELIS_newnew.png',
            'productName' => 'Lager Beer',
            'productDescription' => 'Tyras vanduo, išgaunamas švariausiame gamtos kampelyje Lietuvoje, rinktinis salyklas ir aukščiausios rūšies apynių produktai mums leido sukurti švelnaus skonio alų. Šis alus – tai UTENOS aludarių pasididžiavimas.',
            'price' => 0.9
        ]);
        $product->save();

        $product = new Product([
            'manufacturer_id' => 3,
            'imagePath' => 'http://www.utenosalus.lt/image/products/UT_WEB_Produktu_foto_TRADICINIS.png',
            'productName' => 'Tradininis',
            'productDescription' => 'Utenos Tradicinis – tamsaus gintaro spalvos, nenuvils nei aromatu, nei skoniu. Šviesus ir karamelinis salyklas, persipynęs su vaisių ir aromatinių apynių natomis. Salstelėjusį aromatą skonyje atsveria gana sausas karčiųjų apynių ir karamelės poskonis.',
            'price' => 0.8
        ]);
        $product->save();
    }
}

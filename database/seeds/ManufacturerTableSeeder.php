<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturer = new Manufacturer([
            'name' => 'Tauras',
            'description' => '1860 m. Vilniaus pakraštyje, šalia Tauro kalno, turtingas pirklys Vilhelmas Šopenas įkūrė didelę alaus daryklą.',
        ]);
        $manufacturer->save();


        $manufacturer = new Manufacturer([
            'name' => 'Švyturys',
            'description' => '1784 metais garbingos vokiečių pirklių šeimos atstovas Johanas Vilhelmas Rainkė (Johann Wilhelm Reincke).',
        ]);
        $manufacturer->save();

        $manufacturer = new Manufacturer([
            'name' => 'Utena',
            'description' => 'Savo sudėtimi Utenos vanduo yra labai panašus į legendinio aludarystės miesto – Pilzeno – vandenį.',
        ]);
        $manufacturer->save();
    }
}

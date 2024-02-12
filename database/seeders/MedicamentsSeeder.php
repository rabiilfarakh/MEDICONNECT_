<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicament;
class MedicamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $medicaments = [
            ['nom' => 'Paracétamol', 'dosage' => '500mg', 'quantite' => 100],
            ['nom' => 'Ibuprofène', 'dosage' => '400mg', 'quantite' => 50],
            ['nom' => 'Aspirine', 'dosage' => '100mg', 'quantite' => 75],
        ];

        // Insertion des données dans la table "medicaments"
        foreach ($medicaments as $medicament) {
            Medicament::create($medicament);
        }
    }
}

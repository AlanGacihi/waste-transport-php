<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResDem;

class ResDemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['demand' => '2018-01-04', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-01-11', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-01-18', 'servid' => 4, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-01-18', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-01-17', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-01-24', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-01-30', 'servid' => 1, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-01-31', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-01', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-08', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-13', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-15', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-22', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-02-27', 'servid' => 1, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-03-02', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-03-01', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-03-04', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-03-08', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-03-15', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-03-21', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-03-29', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-03', 'servid' => 3, 'quantity' => 6, 'user_id' => 1],
            ['demand' => '2018-04-05', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-11', 'servid' => 3, 'quantity' => 19, 'user_id' => 1],
            ['demand' => '2018-04-09', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-10', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-19', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-26', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-04-29', 'servid' => 3, 'quantity' => 5, 'user_id' => 1],
            ['demand' => '2018-05-03', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-06', 'servid' => 3, 'quantity' => 4, 'user_id' => 1],
            ['demand' => '2018-05-10', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-16', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-05-17', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-21', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-05-22', 'servid' => 1, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-24', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-24', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-05-27', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-05-31', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-03', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-04', 'servid' => 3, 'quantity' => 5, 'user_id' => 1],
            ['demand' => '2018-06-04', 'servid' => 1, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-06-06', 'servid' => 4, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-06-07', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-10', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-10', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-06-14', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-17', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-20', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-06-20', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-21', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-24', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-06-25', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-06-27', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-01', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-02', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-02', 'servid' => 4, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-07-05', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-08', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-08', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-07-12', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-15', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-16', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-18', 'servid' => 1, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-19', 'servid' => 4, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-07-19', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-22', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-22', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-26', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-29', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-07-31', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-08-26', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-08-29', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-08-27', 'servid' => 1, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-08-29', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-08-30', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-01', 'servid' => 3, 'quantity' => 4, 'user_id' => 1],
            ['demand' => '2018-09-06', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-09', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-09-10', 'servid' => 1, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-09-13', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-18', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-09-20', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-23', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-24', 'servid' => 4, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-09-27', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-09-29', 'servid' => 3, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-10-04', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-10-10', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-10-10', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-10-15', 'servid' => 3, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-10-18', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-10-22', 'servid' => 3, 'quantity' => 6, 'user_id' => 1],
            ['demand' => '2018-10-25', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-10-31', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-11-01', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-11-04', 'servid' => 3, 'quantity' => 13, 'user_id' => 1],
            ['demand' => '2018-11-05', 'servid' => 1, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-11-07', 'servid' => 4, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-11-15', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-11-17', 'servid' => 3, 'quantity' => 7, 'user_id' => 1],
            ['demand' => '2018-11-22', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-11-26', 'servid' => 3, 'quantity' => 3, 'user_id' => 1],
            ['demand' => '2018-11-29', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-12-06', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-12-13', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-12-19', 'servid' => 4, 'quantity' => 2, 'user_id' => 1],
            ['demand' => '2018-12-20', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],
            ['demand' => '2018-12-26', 'servid' => 5, 'quantity' => 1, 'user_id' => 1],

        ];

        foreach ($data as $item) {
            ResDem::create($item);
        }
    }
}
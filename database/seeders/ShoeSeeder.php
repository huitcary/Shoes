<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoes = [
            [
                'brand_name' => 'Nike',
                'founder' =>' Phil Knight and Bill Bowerman',
                'description' => 'It is known for its durable, stylish, attractive and expensive casual and sports shoes that have flexible and cushioned lift.',
                'color' =>'Black',
                'size' => '9'
            ],
            [
                'brand_name' => 'Adidas',
                'founder' => 'Adolf Dassler',
                'description' => 'Adidas offers an ultra comfy pair of shoes that are stylish, flexible and versatile with a great cushioning system that helps its wearer to run the extra mile effortlessly.',
                'color' =>'black',
                'size' => '10'
            ],
            [
                'brand_name' => 'Jordan',
                'founder' => 'Michael Jordan',
                'description' => 'Air Jordan is a line of basketball shoes and athletic clothing produced by American corporation Nike',
                'color' =>'Black',
                'size' => '10'
            ],
            [
                'brand_name' => 'Reebok',
                'founder' => 'Jeff and Joe Foster',
                'description' => 'Reebok deals in designing, selling, producing and distributing CrossFit, running and fitness footwear as well as sportswear.',
                'color' =>'White',
                'size' => '10'
            ],
            ];
            foreach($shoes as $s){
            Shoe::create($s);
            }
    }
}
<?php

namespace Database\Seeders;

use App\Models\StockItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'company_id' => 1,
                'id' => '1',
                'stock_category_id' => '26',
                'name' => '1201RL',
                'item_code' => '1201RL',
                'slug' => 'round-liner-1201rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2450',
                'min_order_quantity' => '500',
                'tags' => 'Round Liner , 1201RL , 1RL',
                'short_description' => '1 tightly round ground needle for liner with a 5.5mm taper.',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.</p><p>
            
            Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 1 Round Liner
            </li><li> Needle Diameter: #12 (0.35mm)
            </li><li> Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished<div align=\"left\">Ethylene Oxide (EO) gas sterilized and individually packed</div></li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'aiVNL6S4G0w1NvqX1sG1yX1nBTxdV9ZqXd24jmOF.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '2',
                'stock_category_id' => '26',
                'name' => '1203RL',
                'item_code' => '1203RL',
                'slug' => 'round-liner-1203rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '-50',
                'min_order_quantity' => '1000',
                'tags' => 'Round Liner , 1203RL , 3RL',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            </p><p>
            Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 3 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'dKEdhhd1EYg2JFkkagFCXpZ9uZ0rrZI4BnTnPczF.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '6',
                'stock_category_id' => '26',
                'name' => '1205RL',
                'item_code' => '1205RL',
                'slug' => 'round-liner-1205rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2750',
                'min_order_quantity' => '1500',
                'tags' => 'Round Liner , 1205RL , 5RL',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 5 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => '39mRBzyE3OMbE5APphB0nW5qCt3gbhBdhhfe6RMu.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '7',
                'stock_category_id' => '26',
                'name' => '1207RL',
                'item_code' => '1207RL',
                'slug' => 'round-liner-1207rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '-500',
                'min_order_quantity' => '1000',
                'tags' => 'Round Liner , 1207RL , 7RL',
                'short_description' => 'Standard per-made 1207RL needles quality has been made possible through the collaborative efforts with some of today’s top leading artists',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 7 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'UGtkztZ4GUx7YIIkdWrT3gnqaFv0rIudHdFG1cam.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '9',
                'stock_category_id' => '26',
                'name' => '1209RL',
                'item_code' => '1209RL',
                'slug' => 'round-liner-1209rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1050',
                'min_order_quantity' => '200',
                'tags' => 'Round Liner , 1209RL , 9RL',
                'short_description' => '9 tightly round ground needles for liner. Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 9 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'Nf71xoEoURoap10DvZB2em1Klqyz2oHBQISEGcry.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '10',
                'stock_category_id' => '26',
                'name' => '1211RL',
                'item_code' => '1211RL',
                'slug' => 'round-liner-1211rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2700',
                'min_order_quantity' => '200',
                'tags' => 'Round Liner , 12011RL , 11RL',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 11 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '90',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => '9OhrP7arXeZF7ZwDB43L3xZtKykacVNiye3Vkkq2.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '11',
                'stock_category_id' => '26',
                'name' => '1213RL',
                'item_code' => '1213RL',
                'slug' => 'round-liner-1213rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2950',
                'min_order_quantity' => '200',
                'tags' => 'Round Liner , 12013RL , 13RL',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            </p><p>
            Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 13 Round Liner
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li> Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '105',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'Z0euU2phHr5srxiHF8YfQ9b7m93FslGeyzaPKOtP.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '13',
                'stock_category_id' => '26',
                'name' => '1218RL',
                'item_code' => '113',
                'slug' => 'round-liner-1218rl',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1750',
                'min_order_quantity' => '200',
                'tags' => 'Round Liner , 1218RL , 18RL',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the
            collaborative efforts with some of today’s top leading artists. </p><p>These
            needles were meticulously field tested and the feedback we received
            helped us develop a top-quality needle with consistent groupings. </p><p>Each
            grouping is built by hand using 316L surgical stainless pins that
            provide the sharpest durable needle points, lasting skin penetration and
            provide maximum ink retention.</p><p> All Standard per-made needles are
            manufactured using lead free silver bearing solder and a 304 stainless
            steel needle bar to ensure the bars never rust. </p><p>They also go through a
            final cleaning process to remove any traces of dust and maintain the
            best quality look and performance.</p><ol><li>Needle Type: 18 Round Liner</li><li>Needle Diameter: #12 (0.35mm)</li><li>Pin Material: 316L Stainless Steel</li><li>Finish: Polished</li><li>Ethylene Oxide (EO) gas sterilized and individually packed<br></li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '120',
                'unit_price_for' => '0',
                'markup_percentage' => '90',
                'main_image' => 'UaABMT3sM7JElaYhEDvXKmb1N8wNqXZMoC342v6S.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '14',
                'stock_category_id' => '27',
                'name' => '1203RS',
                'item_code' => '1203RS',
                'slug' => 'round-shader-1203rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '5100',
                'min_order_quantity' => '1000',
                'tags' => 'Round Shader , 1203RS , 3RS',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 3 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'j0xSyW6RTjgJX3XMclR3XS3ZLEatl5hI4FeJ3C8w.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '15',
                'stock_category_id' => '27',
                'name' => '1205RS',
                'item_code' => '1205RS',
                'slug' => 'round-shader-1205rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2450',
                'min_order_quantity' => '1000',
                'tags' => 'Round Shader , 1205RS , 5RS',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 5 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'qpGfwf7s9oGwqiGgKbPIFnjGzarcKYDgBD3rULm3.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '16',
                'stock_category_id' => '27',
                'name' => '1207RS',
                'item_code' => '1207RS',
                'slug' => 'round-shader-1207rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2900',
                'min_order_quantity' => '200',
                'tags' => 'Round Shader , 1207RS , 7RS',
                'short_description' => '7 loose round ground needles for shading. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 7 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'NaPEeBNIIsjUG1BcSQVExGWMbFEFmXazFFmLTtaj.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '18',
                'stock_category_id' => '27',
                'name' => '1209RS',
                'item_code' => '1209RS',
                'slug' => 'round-shader-1209rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '3600',
                'min_order_quantity' => '200',
                'tags' => 'Round Shader , 1209RS , 9RS',
                'short_description' => '9 loose round ground needles for shading. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 9 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'IuFhzlkr3wurr8nelnMx2EEFwEvbUwvdQcqXn8dZ.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '19',
                'stock_category_id' => '27',
                'name' => '1211RS',
                'item_code' => '1211RS',
                'slug' => 'round-shader-1211rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '3650',
                'min_order_quantity' => '200',
                'tags' => 'Round Shader , 1211RS , 11RS',
                'short_description' => 'Standard per-made 1211RS quality has been made possible through the collaborative efforts with some of today’s top leading artists. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 11 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '86.25',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => '4feGZBospaKw4vvB691l8OiABDFkSjr3PVTcDvCf.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '20',
                'stock_category_id' => '27',
                'name' => '1213RS',
                'item_code' => '1213RS',
                'slug' => 'round-shader-1213rs',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '300',
                'min_order_quantity' => '200',
                'tags' => 'Round Shader , 1213RS , 13RS',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 13 Round Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '105',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'ksNCWGwU03l6UpviIks1zKaCFmRWd9nOgqpwsFiH.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '24',
                'stock_category_id' => '25',
                'name' => '1205M1',
                'item_code' => '1205M1',
                'slug' => 'magnums-1205m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1850',
                'min_order_quantity' => '1000',
                'tags' => 'Magnum , 1205M1 , 5M',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 5 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'MWBJ5a07rCtPlqrn7MA8phBIkkkjcZPk5qR1HEI0.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '25',
                'stock_category_id' => '25',
                'name' => '1207M1',
                'item_code' => '1207M1',
                'slug' => 'magnums-1207m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2150',
                'min_order_quantity' => '1000',
                'tags' => 'Magnum , 1207M1 , 7M',
                'short_description' => '3 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 7 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '2',
                'main_image' => '2yq6mJAjsLAXl40e1VJmKyBkawnyqcFklquDTDg4.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '26',
                'stock_category_id' => '25',
                'name' => '1209M1',
                'item_code' => '1209M1',
                'slug' => 'magnums-1209m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2800',
                'min_order_quantity' => '200',
                'tags' => 'Magnum , 1209M1 , 9M',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 9 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'jgwuuwl83Dl0rqeWXOx5G09rYul4QirS5m6TQB7d.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '27',
                'stock_category_id' => '25',
                'name' => '1211M1',
                'item_code' => '1211M1',
                'slug' => 'magnums-1211m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1850',
                'min_order_quantity' => '200',
                'tags' => 'Magnum , 1211M1 , 11M',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            </p><p>
            These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 11 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '90',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'PSjhGKpyEwEyLTiRoME6VDwKjF3oW0MGvIfL6tWP.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '28',
                'stock_category_id' => '25',
                'name' => '1213M1',
                'item_code' => '1213M1',
                'slug' => 'magnums-1213m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1950',
                'min_order_quantity' => '200',
                'tags' => 'Magnum , 1213M1 , 13M',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            </p><p>
            Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 13 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li> Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '105',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => '9kqzYCCrzU8Sb2fo9JizriByfwCS7uEm0WC6YSLW.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '29',
                'stock_category_id' => '25',
                'name' => '1215M1',
                'item_code' => '1215M1',
                'slug' => 'magnums-1215m1',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2050',
                'min_order_quantity' => '200',
                'tags' => 'Magnum , 1215M1 , 15M',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 15 Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '115',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'nQILp1EgS53hxR1SZ11F9UgXhHNLpuexqZO3EXFm.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '31',
                'stock_category_id' => '14',
                'name' => '1205F',
                'item_code' => '1205F',
                'slug' => 'flat-shader-1205f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '800',
                'min_order_quantity' => '500',
                'tags' => 'Flat , 1205F , 5F',
                'short_description' => '5 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.</p><p>
            
            Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 5 Flat Shader
            Needle </li><li>Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '2',
                'main_image' => 'aGCpsYe6XuWcOJKip8o54cybkkMCHmp8qd6zuZ8A.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '33',
                'stock_category_id' => '14',
                'name' => '1207F',
                'item_code' => '1207F',
                'slug' => 'flat-shader-1207f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1350',
                'min_order_quantity' => '1000',
                'tags' => 'Flat , 1207F , 7F',
                'short_description' => '7 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 7 Flat Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'yyGk5KSFs5n4m83viAEC2IHhbcAMGUQvfcD3EwlF.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '35',
                'stock_category_id' => '14',
                'name' => '1209F',
                'item_code' => '1209F',
                'slug' => 'flat-shader-1209f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1850',
                'min_order_quantity' => '200',
                'tags' => 'Flat , 1209F , 9F',
                'short_description' => 'Commonly used for shading, blending and detail work on straight line work such as lettering. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 9 Flat Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'sJJaqiAV9lGceIap3KAQniDprxfki92h5xoc67T6.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '36',
                'stock_category_id' => '14',
                'name' => '1211F',
                'item_code' => '1211F',
                'slug' => 'flat-shader-1211f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2050',
                'min_order_quantity' => '200',
                'tags' => 'Flat , 1211F , 11F',
                'short_description' => 'Commonly used for shading, blending and detail work on straight line work such as lettering. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 11 Flat Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '90',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'QneWFWVUGg9T7xxcoKEGr2yKLeONhXgRHmpiqZws.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '37',
                'stock_category_id' => '14',
                'name' => '1213F',
                'item_code' => '1213F',
                'slug' => 'flat-shader-1213f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '1150',
                'min_order_quantity' => '100',
                'tags' => 'Flat , 1213F , 13F',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            </p><p>
            All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 13 flat Shader
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '105',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'EDC0noFpx67jqeT8310rdQzsd61ZYHjK05jvCRqg.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '49',
                'stock_category_id' => '2',
                'name' => 'Spirit Thermal Paper',
                'item_code' => 'FTA-033A',
                'slug' => 'consumables-spirit-thermal-paper',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '643',
                'min_order_quantity' => '300',
                'tags' => 'Spirit Thermal Paper , Transfer paper',
                'short_description' => 'Thermal Paper has 4 parts. 1',
                'description' => 'Thermal Paper has 4 parts.
            
            1) Top layer is white. This is the layer that your image will be transferred onto.
            2) Second Layer is not bound and is a milky white. Typically this layer is thrown away.
            3) Third Layer is the Carbon (purple/blue paper). By pressing on this layer the purple/blue coating is transferred to the upper sheet.
            4) Fourth bottom sheet is yellow and holds the original in place when using a stencil copy machine.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '3.13',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'RwHjU2BCVvgXMQwhQpvG7MzUJ8ZQvlyHXqgCX7AL.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '50',
                'stock_category_id' => '2',
                'name' => 'Tip Brush Cleaner',
                'item_code' => 'T50',
                'slug' => 'consumables-tip-brush-cleaner',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '41',
                'min_order_quantity' => '81',
                'tags' => 'tip brush cleaner , tip cleaner , brush cleaner',
                'short_description' => 'Tip brush cleaners are used to clean the inside of you tip. ',
                'description' => '<p>Tip brush cleaners are used to clean the inside of you tip. </p><p>There are 5 different size brushes in one set.</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '13.5',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'QOEyeksRNafqB2uyavSUi0sadfwpNnzkbD5L7RNU.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '60',
                'stock_category_id' => '2',
                'name' => 'Ink Cups Small 8mm',
                'item_code' => 'FIC-001A',
                'slug' => 'consumables-ink-cups-small-8mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '-10',
                'min_order_quantity' => '174',
                'tags' => 'Ink Cups , Small cups',
                'short_description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '5.42',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'rZ6ucPY1InJyoEomAhww82bChK94cgrm0HGKHUHo.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '61',
                'stock_category_id' => '2',
                'name' => 'Ink Cups Medium 11mm',
                'item_code' => 'FIC-001B',
                'slug' => 'consumables-ink-cups-medium-11mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '144',
                'min_order_quantity' => '205',
                'tags' => 'Ink Cups , Medium cups , ink cups',
                'short_description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '7.36',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'KMueHDDJ3bRilxfr01S1yFHHqMhi4Ua4JyS5d018.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '62',
                'stock_category_id' => '2',
                'name' => 'Ink Cups Large 15mm',
                'item_code' => 'FIC-001C',
                'slug' => 'consumables-ink-cups-large-15mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '48',
                'min_order_quantity' => '57',
                'tags' => 'Ink Cups, Large cups',
                'short_description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'description' => 'Ink cups are small plastic cups that are use to hold the ink while tattooing.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '9.03',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'faQfNCrgp9aMl9NaWVLndalgekZgTfHKjmExBdLz.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '63',
                'stock_category_id' => '2',
                'name' => 'Nipples Silicone',
                'item_code' => 'FTA-006A',
                'slug' => 'consumables-nipples-silicone',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '39',
                'min_order_quantity' => '48',
                'tags' => 'Rubber Nipples , Nipples',
                'short_description' => 'nipples are placed on the tattoo gun to hold the needle in place while tattooing',
                'description' => 'nipples are placed on the tattoo gun to hold the needle in place while tattooing',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '16.25',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'jjpCKcoAw25szUrJoikmwma4Vd4ShlRWCcw01pmd.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '64',
                'stock_category_id' => '2',
                'name' => 'O Rings Rubber Black',
                'item_code' => 'FTA-009',
                'slug' => 'consumables-o-rings-rubber-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '774',
                'min_order_quantity' => '21',
                'tags' => 'Rubber O-Rings , O-Rings',
                'short_description' => 'When the bar that turns the tattoo machine on is pressed without an O-ring in place it rattles and doesn\'t make a consistent noise. Once you insert the rubber O-ring into the tattoo machine it changes how the machine runs.',
                'description' => 'When the bar that turns the tattoo machine on is pressed without an O-ring in place it rattles and doesn\'t make a consistent noise. Once you insert the rubber O-ring into the tattoo machine it changes how the machine runs.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '12.5',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'P0EE6rH2vOCg6FLKWAhL4L88tIXSUvqcbssB1Oma.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '67',
                'stock_category_id' => '45',
                'name' => 'Power Supply Digital',
                'item_code' => 'FTP-027',
                'slug' => 'digital-power-supply-digital',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '-1',
                'min_order_quantity' => '10',
                'tags' => 'digital, power supply',
                'short_description' => 'High quality digital power supply. ',
                'description' => '<p>High quality digital power supply. </p><p>
            Full Volts digital display.
            </p><p>Used by professionals all over the world. </p><p>
            6 months guarantee.</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '187.5',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'ocq6Het5SCYjRoriBpiqVwBKOzKMRS8B0XJyIBN3.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '70',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Purple 19mm',
                'item_code' => 'A68',
                'slug' => 'aluminum-grips-purple-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '50',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grip Purple , Aluminium Grip , Grip',
                'short_description' => 'Aluminum Grip Purple',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Purple</p><p>Extra: Back Stem<br></p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'pI1fclxbK9zPtIpbi8hKierECxGqQX7VHovBBxFJ.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '72',
                'stock_category_id' => '2',
                'name' => 'Clip Cord Steel Socket',
                'item_code' => 'C70',
                'slug' => 'clip-cord-steel-socket',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '49',
                'min_order_quantity' => '80',
                'tags' => 'Clipcord Steel Socket , Steel Clipcord , Clipcord',
                'short_description' => 'Clip Cord Steel Socket',
                'description' => 'Clip cord length is 1.8m. This is a solid cord with steel socket. Widely used by professional artists.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '25',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'WwL0lqkwQU9QNzqYDOxkl6HsczGRP526V4ntmALR.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '73',
                'stock_category_id' => '2',
                'name' => 'Practice Skin Clear',
                'item_code' => 'FPS-001',
                'slug' => 'consumables-practice-skin-clear',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '74',
                'min_order_quantity' => '50',
                'tags' => 'Practice Skin , Skin',
                'short_description' => 'A artificial skin that can be used to practice tattoos on.Clean 15x20',
                'description' => 'A artificial skin that can be used to practice tattoos on.Clean 15x20',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '3.44',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'H4OkSdAcnBd6b1jcol1HQjhAWkVOfaXfBTHiViSS.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '74',
                'stock_category_id' => '2',
                'name' => 'Tool Set',
                'item_code' => 'FTA-011',
                'slug' => 'consumables-tool-set',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '17',
                'min_order_quantity' => '10',
                'tags' => 'Tool Set , tools',
                'short_description' => 'A tattoo Tool Set is instruments that you can use to fine tune you own tattoo machine',
                'description' => 'A tattoo Tool Set is instruments that you can use to fine tune you own tattoo machine.&nbsp;<div>Includes:&nbsp;</div><div>3X L-keys (Small, medium, Large)&nbsp;</div><div>2X O-rings&nbsp;</div><div>2X Nipples&nbsp;</div><div>2X Rubber bands</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '7.5',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => '',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '75',
                'stock_category_id' => '47',
                'name' => 'Wrapped Copper Coils',
                'item_code' => 'C73',
                'slug' => 'machine-spares-wrapped-copper-coils',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '20',
                'tags' => 'Coils 10 Wraps , Coils , Wraps , 10 Wraps , 10 Coils',
                'short_description' => 'Coil 10 Wraps',
                'description' => '<p>Professional 2K17 10 wrap copper coil. </p><p>Pure handmade bronze tone copper tattoo.
            </p><p>High quality coils used in most tattoo machines.</p>',
                'weight_gram' => '100',
                'length_cm' => '5',
                'height_cm' => '5',
                'width_cm' => '1',
                'unit_price' => '37.5',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'OkvI8gjN3uELrpdtSCDSncuMOZDeronafvv4fhg1.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '82',
                'stock_category_id' => '2',
                'name' => 'Rubber Bands',
                'item_code' => 'FTA-010',
                'slug' => 'consumables-rubber-bands',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '236',
                'min_order_quantity' => '54',
                'tags' => 'Rubber Bands , Rubber , Bands',
                'short_description' => 'A Rubber Band keeps the needle in place while tattooing.',
                'description' => 'A Rubber Band keeps the needle in place while tattooing.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '12.5',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'SrusSofJLhrzszmadhznEWeUT3Un9OdLslw9AIOI.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '96',
                'stock_category_id' => '2',
                'name' => 'Foot Switch Square Steel Soccet',
                'item_code' => 'FFS-005B',
                'slug' => 'consumables-foot-switch-square-steel-soccet',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '-1',
                'min_order_quantity' => '24',
                'tags' => 'Foot Switch Square , Foot Switch ,',
                'short_description' => 'Square plastic foot switch with steel socket. Widely used by professional artists.',
                'description' => 'Square plastic foot switch with steel socket. Widely used by professional artists.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '37.5',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'umgMUCTUIly9hCjR7vw8xBVxRWX54ZSYUrjqX4mS.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '103',
                'stock_category_id' => '2',
                'name' => 'Foot Switch Round with star pattern',
                'item_code' => 'F101',
                'slug' => 'consumables-foot-switch-round-with-star-pattern',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '74',
                'min_order_quantity' => '24',
                'tags' => 'Foot Switch Round , Foot switch',
                'short_description' => 'Round foot switch with star pattern.',
                'description' => 'Round foot switch with star pattern.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '44.55',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'HlPE3iTF5Ht1IfxlVGAbzdq2NN3f0wTH743ncoXt.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '106',
                'stock_category_id' => '2',
                'name' => 'Grommets Rubber Black',
                'item_code' => 'FTA-086E',
                'slug' => 'consumables-grommets-rubber-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '90',
                'min_order_quantity' => '40',
                'tags' => 'Rubber Grommets , Gromments',
                'short_description' => 'A Grommet is used to hold the needle while tattooing.',
                'description' => 'A Grommet is used to hold the needle while tattooing.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '16.25',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'kFyVNqG9fIbAxXMQqcKZMbBqOeG8KB5wwL1x1Oan.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '107',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Blue 19mm',
                'item_code' => 'A105',
                'slug' => 'aluminum-grips-blue-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '60',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grip Blue , Grip , Blue Grip',
                'short_description' => 'Aluminum Grip Blue',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Blue</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => '7ZyrQv3TAFAZw16dLxFjwT5J8BQbaOTzlBBQxoQq.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '108',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Silver 19mm',
                'item_code' => 'A106',
                'slug' => 'aluminum-grips-silver-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '89',
                'min_order_quantity' => '27',
                'tags' => 'Aluminium Grip Silver , Grip , Silver Grip',
                'short_description' => 'Aluminum Grip Silver',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Silver</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'vobGr9eWIvQ9jprbKGNqZ0FN9WkxFwj5ZsJmZF5z.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '109',
                'stock_category_id' => '12',
                'name' => 'Aluminium Grips Gold Bullet 25mm',
                'item_code' => 'A107',
                'slug' => 'aluminium-grips-aluminium-grips-gold-bullet-25mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '25',
                'tags' => 'Aluminium Grip Gold , Grip , Gold Grip',
                'short_description' => 'Aluminum Grip Gold Bullet',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 25mm</p><p>Grip Color: Gold</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'nIbJIILMsEWYXsVS1sfn8RmzilcdMZ7hAb0JfcOg.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '110',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Red Bullet 25mm',
                'item_code' => 'A108',
                'slug' => 'aluminum-grips-red-bullet-25mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '13',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grip Red , Grip , Gold Grip',
                'short_description' => 'Aluminum Grip Red',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 25mm</p><p>Grip Color: Red</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'dMgJr5gaJ5uJqWNQ7rEaExv2UG3zRUbs810rqXvY.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '111',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Grip Green 19mm',
                'item_code' => 'A109',
                'slug' => 'aluminum-grips-grip-green-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '79',
                'min_order_quantity' => '10',
                'tags' => 'Aluminium Grip Green , Grip , Green Grip',
                'short_description' => 'Aluminum Grip Green',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Green</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'PpZFMrjZs23wMgBvzFhsoC3yNDDRjNj2UGnSkEEm.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '146',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 3R',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-3r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '3071',
                'min_order_quantity' => '1200',
                'tags' => 'disposable, tip 3R',
                'short_description' => 'Disposable tip for 3 Round Liner/Round Shader. Plastic tip that can only be used once.',
                'description' => 'Disposable tip for 3 Round Liner/Round Shader.
            Plastic tip that can only be used once.<br>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'oCddxsTMuhSb74YaZeFoOHMlnxSlhN4afRsKbbCF.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '147',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 11R',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-11r',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '389',
                'min_order_quantity' => '192',
                'tags' => 'disposable, tip, 11R',
                'short_description' => 'Disposable Tip for 11R',
                'description' => 'Disposable Tip for 11 Round liners/Round Shaders.
            Plastic Tip that can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '29.7',
                'unit_price_for' => '50',
                'markup_percentage' => '150',
                'main_image' => 'ASqUKTEtrrFVNdEDQZCSiIS6Gb43rqJQsAh1BHS6.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '148',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 9R',
                'item_code' => 'FTT-003 9RT',
                'slug' => 'disposable-tips-disposable-tip-9r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '914',
                'min_order_quantity' => '660',
                'tags' => 'disposable, tip, 9R',
                'short_description' => 'Disposable Tip for 9 Round liner/Round Shader. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 9 Round liner/Round Shader.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'vaBDvWw9fTi7LjdCQgN0Qn6tGb6ZfbT1EtQKWvz8.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '149',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 5R',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-5r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '2324',
                'min_order_quantity' => '1371',
                'tags' => 'disposable, tip, 5R',
                'short_description' => 'Disposable Tip for 5 Round liner/Round Shader. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 5 Round liner/Round Shader.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'UZDmV4Jhyy0bvnISIwGetQM3Oj1gAkpUiaHylP1T.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '150',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 7R',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-7r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '2521',
                'min_order_quantity' => '873',
                'tags' => 'disposable, tip, 7R',
                'short_description' => 'Disposable Tip for 7 Round liner/Round Shader. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 7 Round liner/Round Shader.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'HanjCTxkaSqscAzExxzk8GbGdsE0wjTODKTcT9dk.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '151',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 7F',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-7f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '2016',
                'min_order_quantity' => '387',
                'tags' => 'disposable, tip, 7F',
                'short_description' => 'Disposable Tip for 7 Flat/Magnum. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 7 Flat/Magnum.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'faOh4sAx8bGfreOmXsEPCiETAqENcZHrfKuKPw2O.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '152',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 9F',
                'item_code' => 'FTT-003 9FT',
                'slug' => 'disposable-tips-disposable-tip-9f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '1318',
                'min_order_quantity' => '381',
                'tags' => 'disposable, tip, 9F',
                'short_description' => 'Disposable Tip for 9 Flat/Magnum. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 9 Flat/Magnum.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => '9SRNnOdJEermLA0xO0UyhBqP8zvAdYFVjF2dUUWH.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '153',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 5F1',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-5f1',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '1639',
                'min_order_quantity' => '327',
                'tags' => 'disposable, tip, 5F',
                'short_description' => 'Disposable Tip for 5 Flat/Magnum. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 5 Flat/Magnum.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.42',
                'unit_price_for' => '50',
                'markup_percentage' => '0',
                'main_image' => 'xrvgmYXBmbvOTuhYT088hItSOOSNqppj948xqX3O.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '154',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 11F',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-11f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '1155',
                'min_order_quantity' => '192',
                'tags' => 'disposable, tip, 11F',
                'short_description' => 'Disposable tip, 11F',
                'description' => 'Disposable Tip for 11 Flat/Magnum.
            Plastic Tip can only be used once.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '29.7',
                'unit_price_for' => '50',
                'markup_percentage' => '150',
                'main_image' => 'POYO6LtxNmN4U0NKvm57uOlxLFVX8o62hp1wW2NR.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '170',
                'stock_category_id' => '47',
                'name' => 'Spring set',
                'item_code' => 'S159',
                'slug' => 'machine-spares-spring-set',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '-9',
                'min_order_quantity' => '4',
                'tags' => 'Spring set',
                'short_description' => '',
                'description' => '<p>Spring set</p><p>Front and post spring. Strong and durable.&nbsp;</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '15',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => '63manDG01YLHIFtEwvNQkyljVOzNNwiiruml2BGG.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '195',
                'stock_category_id' => '23',
                'name' => 'Kuro Sumi Double Sumi 12oz',
                'item_code' => 'O185',
                'slug' => 'kuro-sumi-kuro-sumi-double-sumi-12oz',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '33',
                'tags' => 'Outlining Black',
                'short_description' => '',
                'description' => '<p>Kuro Sumi Black Double Sumi Tattoo Ink - 12oz Imported from Japan, Kuro Sumi Double Sumi tattoo Ink is the standard worldwide in today\'s tattoo industry. </p><p>Used and trusted by thousands of the best tattoo artists of all styles, Kuro Sumi is voted the number one Double Sumi ink in consistency and quality. </p><p>One 12oz Bottle Black Double Sumi Tattoo Ink Most Trusted Outlining Ink On The Market<br></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '216',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'ZFNTXF2HDEscTEDgnksZCWROza6qImlUxEiglapo.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '196',
                'stock_category_id' => '23',
                'name' => 'Kuro Sumi Gray Wash 360ml',
                'item_code' => 'G186',
                'slug' => 'kuro-sumi-kuro-sumi-gray-wash-360ml',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '18',
                'tags' => 'Gray Wash Ink',
                'short_description' => '',
                'description' => '<p>Gray Wash Ink
            Kuro Sumi grey wash is the ink you need to get those professional grey tones like you see in the magazines. </p><p>Used by most top artists from around the world.</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '216',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'htHOHBVd8q7wBiG4Waz4AniL7yhWu3QS8J6EVUez.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '200',
                'stock_category_id' => '2',
                'name' => 'Clip Cord Sleeve',
                'item_code' => 'C190',
                'slug' => 'clip-cord-sleeve',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '38',
                'min_order_quantity' => '10',
                'tags' => 'Clip Cord Sleeve',
                'short_description' => 'Clip Cord Sleeve',
                'description' => '<p>Open on one side, sealed on the other for safety and simple operation. </p><p>Simple to use - slide clip cord into sleeve and poke ends through, and you are ready to safely tattoo.</p><p>125 sleeves per pack</p><p>
            </p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '62.5',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => '71OPq9tteA9fTZbTmGxif1aXAciau3yRhvHZyQKI.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '201',
                'stock_category_id' => '2',
                'name' => 'Machine Cover',
                'item_code' => 'FTA-015',
                'slug' => 'consumables-machine-cover',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '34',
                'min_order_quantity' => '10',
                'tags' => 'Machine Cover',
                'short_description' => 'Machine Covers have an elastic band for a Perfect Fit over your tattoo machine! ',
                'description' => '<p>Machine Covers have an elastic band for a Perfect Fit over your tattoo machine! </p><p>Excellent for extra protection and for the keeping your tattoo machines clean and germ free.</p><p>250 bags per pack</p><p>
            </p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '62.5',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'ryI3aopILEWN2EmiFyKUuJKhQhJj2l8G5lqr9FVk.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '246',
                'stock_category_id' => '2',
                'name' => 'Stainless Steel Ink Cup Holder',
                'item_code' => 'FTA-050',
                'slug' => 'consumables-stainless-steel-ink-cup-holder',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '75',
                'min_order_quantity' => '10',
                'tags' => 'Ink Cup HoldeR, Ink Holder',
                'short_description' => 'Beautiful Stainless Steel Ink Cup Holder. Can Hold 21 ink cup all ranging from small to large cups. Very light and tough.',
                'description' => 'Beautiful Stainless Steel Ink Cup Holder.
            Can Hold 21 ink cup all ranging from small to large cups.
            Very light and tough.',
                'weight_gram' => '80',
                'length_cm' => '23',
                'height_cm' => '2',
                'width_cm' => '5',
                'unit_price' => '23.75',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'HTz2671hHMUkxnpsMGmZ8cF7xv4ts7ZfqI9kvQo5.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '322',
                'stock_category_id' => '12',
                'name' => 'Aluminium Grips Gold 19mm',
                'item_code' => 'A291',
                'slug' => 'aluminium-grips-aluminium-grips-gold-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '61',
                'min_order_quantity' => '20',
                'tags' => 'Light Gold 26mm Ts',
                'short_description' => 'Aluminum Grip Gold',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Gold</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'cY3O2SjtFTqndiJ1JSeYnUk6Dwvwt1lSVUfXRPlu.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '324',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Black 19mm',
                'item_code' => 'A293',
                'slug' => 'aluminum-grips-black-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '99',
                'min_order_quantity' => '33',
                'tags' => 'Black 26mm T, grip, aluminium, tip, back stem, machine',
                'short_description' => 'Aluminum Grips Black 19mm',
                'description' => '<p>
            
            </p><p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Black</p><p>Extra: Back Stem</p>
            
            <br><p></p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'H5dLJ8rwei7yFJFITVvn0grp0mfEBc7RKdWlccHm.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '326',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 13R',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-13r',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '312',
                'min_order_quantity' => '225',
                'tags' => 'disposable, tip, 14Rs',
                'short_description' => 'Disposable Tip for 13 Round liners/Round Shaders.Plastic Tip that can only be used ones.',
                'description' => 'Disposable Tip for 13 Round liners/Round Shaders.Plastic Tip that can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '29.7',
                'unit_price_for' => '50',
                'markup_percentage' => '150',
                'main_image' => '9IDHJYOojnX1Rx6tDV7juqQtbybhENRAxBMZi0Ki.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '329',
                'stock_category_id' => '44',
                'name' => 'Dual Power Supply Black',
                'item_code' => 'FTP-014-1',
                'slug' => 'dual-dual-power-supply-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '15',
                'tags' => 'analogue, power supply',
                'short_description' => 'This Dual Digital Tattoo Power Supply is built for professionals, and is designed to run both a liner and a shader machine from a single power unit. Great for any level of artist. Six month guarantees.',
                'description' => 'This Dual Digital Tattoo Power Supply is built for professionals, and is designed to run both a liner and a shader machine from a single power unit.
            Great for any level of artist.
            Six month guarantees.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '237.5',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'D2tRUok4HZ9tNUopDltauRsk9VBWoRKgHKUqQqGK.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '333',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 3RT',
                'item_code' => 'FDS-010A 3R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-3rt',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '203',
                'min_order_quantity' => '225',
                'tags' => 'Black Rubber 25mm 3RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '5.81',
                'unit_price_for' => '0',
                'markup_percentage' => '100',
                'main_image' => 'pyVfytfDEbv5cscfVUGm6RLy5ESejBtBEMKX9ghZ.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '334',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 5R',
                'item_code' => 'FDS-010A 5R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-5r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '198',
                'min_order_quantity' => '336',
                'tags' => 'Black Rubber 25mm 5RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'ajAF3s2bJBmKLiPepCmDryQyxAaHSuCt4HheNJst.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '335',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 7R',
                'item_code' => 'FDS-010A 7R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-7r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '307',
                'min_order_quantity' => '198',
                'tags' => 'Black Rubber 25mm 7RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'dCZ3fkwn6A38XPbQR2SvUlWuCAf5EbdWwmDA3AM2.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '336',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 9R',
                'item_code' => 'FDS-010A 9R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-9r',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '295',
                'min_order_quantity' => '171',
                'tags' => 'Black Rubber 25mm 9RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '2.9',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'Zpm5gmNjhMw8VXR2D7m2cPAQRMuYpfEK6JDLoDfv.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '337',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 11RT',
                'item_code' => 'FDS-028',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-11rt',
                'stock_unit_id' => '14',
                'expire_date' => null,
                'on_hand' => '495',
                'min_order_quantity' => '60',
                'tags' => 'Black Rubber 25mm 11RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '87.5',
                'unit_price_for' => '20',
                'markup_percentage' => '200',
                'main_image' => 'Uy7k8FTMMjYg64oiOIFEH2zUCjtzuuHbMmvh4x5o.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '384',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 11FT',
                'item_code' => 'FDS-028 11FT',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-11ft',
                'stock_unit_id' => '14',
                'expire_date' => null,
                'on_hand' => '1406',
                'min_order_quantity' => '54',
                'tags' => 'Black Rubber 26mm 11RT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '87.5',
                'unit_price_for' => '20',
                'markup_percentage' => '200',
                'main_image' => 'YIzqGrIv86zJbz7jLUtHPBY9ypm10bC6Cya16Ax9.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '390',
                'stock_category_id' => '47',
                'name' => 'Rear binding post',
                'item_code' => 'R338',
                'slug' => 'machine-spares-rear-binding-post',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '27',
                'min_order_quantity' => '10',
                'tags' => 'Rear binding post, post, rear, binding, post, clipcord,',
                'short_description' => '',
                'description' => 'Rear binding post.
            Bronze post that will connect with the machine and the clipcord.
            Comes with Screws and washers.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '28.68',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'SRC85pOn4NYRt3tfdjB6Vq3wBWb7l1SdxAxEw4ia.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '397',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 19mm 5F',
                'item_code' => 'FDS-009A 5f',
                'slug' => 'disposable-tubes-disposable-tube-black-19mm-5f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '1181',
                'min_order_quantity' => '72',
                'tags' => 'Black Rubber 19mm 5FT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4.75',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'CMPatgzABoiQU1IGxUNLJgRibPEaki1n7973KPue.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '398',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 19mm 7F',
                'item_code' => 'FDS-009A 7F',
                'slug' => 'disposable-tubes-disposable-tube-black-19mm-7f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '242',
                'min_order_quantity' => '123',
                'tags' => 'Black Rubber 19mm 7F',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '2.9',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => '346gG6ynH6oW1HtQwZOYhOTer0a67hZuMLdlu9rV.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '399',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 19mm 9F',
                'item_code' => 'FDS-009A 9F',
                'slug' => 'disposable-tubes-disposable-tube-black-19mm-9f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '190',
                'min_order_quantity' => '141',
                'tags' => 'Black Rubber 19mm 9F',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4.75',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'RKfgyCC2IZjop2ph3orISIihAPGLawXM49T4aPaG.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '401',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 13FT',
                'item_code' => 'FDS-010A 13R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-13ft',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '422',
                'min_order_quantity' => '78',
                'tags' => 'Black Rubber 19mm 13FT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '5.38',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'z0C81TaaHbApLZdBIBvzH5rUEQBceTZaU6xlSmTN.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '402',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 15F',
                'item_code' => 'FDS-010A 15F',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-15f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '739',
                'min_order_quantity' => '63',
                'tags' => 'Black Rubber 19mm 15FT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.19 millimeter grips.(Tattoo gun not included)',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '2.9',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'RT4eR395RIJI9X4ctUZlJi6jPAJeqG6uFY65Mw0n.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '440',
                'stock_category_id' => '2',
                'name' => 'Foot Switch Mini Pedal',
                'item_code' => 'FFS-012A',
                'slug' => 'consumables-foot-switch-mini-pedal',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '62',
                'min_order_quantity' => '5',
                'tags' => 'Mini Pedal, Footswitch, foot switch',
                'short_description' => '',
                'description' => 'Stainless steel Mini Pedal<div>Perfect for any artist how loves effortless control</div><div>This unique foots switch is very sensitive and has a no slip bottom to ensure total control.&nbsp;</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '36.45',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'Qh6xaqtIQ6wnYANMCkkLPwRox0p2EKiuCs8fPTQJ.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '471',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 13RT',
                'item_code' => 'FDS-010A 13R',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-13rt',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '933',
                'min_order_quantity' => '84',
                'tags' => 'Black Rubber 25mm 13RT',
                'short_description' => 'Black Rubber tube 25mm 13RT',
                'description' => 'Black Rubber tube 25mm 13RT',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '5.38',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'ZtcWwuCqMgR2XpTiGKRlHzZ7RVohdYE2bUsyjfA0.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '472',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 13F',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tips-disposable-tip-13f',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '2080',
                'min_order_quantity' => '204',
                'tags' => 'Dispoasble Tip 13F',
                'short_description' => 'Disposable Tip for 13R',
                'description' => 'Dispoasble Tip 13F',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '29.7',
                'unit_price_for' => '50',
                'markup_percentage' => '150',
                'main_image' => 'YMrOAdBgOizHErLtwWuwQHbMBpvl1iE1v9ba0TQC.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '538',
                'stock_category_id' => '2',
                'name' => 'Ink Cup Holder Bloodsucker',
                'item_code' => 'B505',
                'slug' => 'consumables-ink-cup-holder-bloodsucker',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '69',
                'min_order_quantity' => '10',
                'tags' => 'Bloodsucker Ink Cup Holder, ink cup holder, ink, cups, medium, small, large.',
                'short_description' => 'his Tattoo Ink Cups Holder Holds 8 Ink Cups. It is made of high quality material, unique design, beautiful appearance.',
                'description' => '<p>This Tattoo Ink Cups Holder Holds 8 Ink Cups. </p><p>It is made of high quality material, unique design, beautiful appearance. </p><p>The bloodsucker design is made with a lid top for when not using the holder. </p><p>Suitable for all artists.</p><p>This is a limited edition!<br></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '22.5',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => 'A4kvhBQ0ktTcRLDULSZQh0qW7CJVPVwcHXzO7Aca.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '544',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Silver 25mm Bullet',
                'item_code' => 'A505',
                'slug' => 'aluminum-grips-silver-25mm-bullet',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '16',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grips Silver 26mm Bullet, silver, grip, backstem,',
                'short_description' => 'Aluminum Grips Silver 26mm Bullet',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 25mm</p><p>Grip Color: Silver</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'Tdms6fUWVMC4L4u9ElnCWVfHeCiZa9I8RCzFFK32.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '576',
                'stock_category_id' => '49',
                'name' => '1205RM',
                'item_code' => '1205RM',
                'slug' => 'round-magnum-1205rm',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '100',
                'min_order_quantity' => '200',
                'tags' => 'round magnum. 5rm',
                'short_description' => '5 tightly round ground needles for liner. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 5 Round Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '40',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'Cwxb8RfGZUkuhLhr0x7aCMA95zhwMHyFLabLZJKC.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '577',
                'stock_category_id' => '49',
                'name' => '1207RM',
                'item_code' => '1207RM',
                'slug' => 'round-magnum-1207rm',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '200',
                'tags' => '',
                'short_description' => 'Round magnums are a fairly new version of the magnum needle. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 7 Round Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'ZRdctJVOj5zlCPPbTHAnFnPAuusU9U1m0fOBgXVv.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '578',
                'stock_category_id' => '49',
                'name' => '1209RM',
                'item_code' => '1209RM',
                'slug' => 'round-magnum-1209rm',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '200',
                'tags' => 'Round magnums are a fairly new version of the magnum needle. ',
                'short_description' => 'Round magnums are a fairly new version of the magnum needle. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 9 Round Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '65',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => 'HWHvpoBgnWtUlyyXygUuQ7bJG8WbU6IfnKuJXXHT.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '579',
                'stock_category_id' => '49',
                'name' => '1211RM',
                'item_code' => '1211RM',
                'slug' => 'round-magnum-1211rm',
                'stock_unit_id' => '4',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '200',
                'tags' => 'Textured needles hold a LOT more ink. ',
                'short_description' => 'Textured needles hold a LOT more ink. ',
                'description' => '<p>Standard per-made needles quality has been made possible through the collaborative efforts with some of today’s top leading artists.
            
            </p><p>These needles were meticulously field tested and the feedback we received helped us develop a top-quality needle with consistent groupings.
            
            </p><p>Each grouping is built by hand using 316L surgical stainless pins that provide the sharpest durable needle points, lasting skin penetration and provide maximum ink retention.
            
            </p><p>All Standard per-made needles are manufactured using lead free silver bearing solder and a 304 stainless steel needle bar to ensure the bars never rust.
            
            </p><p>They also go through a final cleaning process to remove any traces of dust and maintain the best quality look and performance.
            
            </p><ol><li>Needle Type: 11 Round Magnum
            </li><li>Needle Diameter: #12 (0.35mm)
            </li><li>Pin Material: 316L Stainless Steel
            </li><li>Finish: Polished
            </li><li>Ethylene Oxide (EO) gas sterilized and individually packed</li></ol>',
                'weight_gram' => '200',
                'length_cm' => '18',
                'height_cm' => '2',
                'width_cm' => '7',
                'unit_price' => '90',
                'unit_price_for' => '50',
                'markup_percentage' => '90',
                'main_image' => '83rq5YWcWqdgSSrv1TRziPVfPBxE9bjbnEKe617A.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '610',
                'stock_category_id' => '45',
                'name' => 'Hurricane HP2 Black',
                'item_code' => 'FTP-001-1',
                'slug' => 'digital-hurricane-hp2-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '6',
                'min_order_quantity' => '5',
                'tags' => 'hurrucane hp2, power supply',
                'short_description' => 'Advanced digital micro-processor controlled unit. ',
                'description' => '<div><br><ul><li>Advanced digital micro-processor controlled unit. </li><li>Easily bagged with typical machine or bottle baggies</li><li>Choice of voltage increments: .1v, .2v, .5v ; </li><li>Precision regulated voltage output 0-18v ; 2.3 amp Overload protection built in.</li><li>Liner and shader presets with 2 machine and 4 machine memory modes; </li><li>Stop watch feature to monitor time in session. </li><li>Smart pedal technology: Continuous mode (push on and off) or conventional pedal function. Non volatile memories (holds time and presets even when power is removed)</li><li>Universal input 110-240vac 50/60 Hz&nbsp;</li><li>LCD Display with volts, amps, speed, duty cycle, and follow through. </li><li>Includes 2 mounts - One for desk or workstation use and one for wall mount (Screws for wall not included).</li></ul></div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '487.5',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'YNv4FsZuL2IJp99vlxlcrQKIi6k6ZhIefBX7uJES.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '655',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 7F',
                'item_code' => 'FDS-010A 7F',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-7f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '292',
                'min_order_quantity' => '100',
                'tags' => 'Black Rubber 25mm 7FT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => '<p>Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'lqO89PkBMwRrheIG8yCQyGR8Zz28g07ScWi1wtAO.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '656',
                'stock_category_id' => '37',
                'name' => 'Disposable Tube Black 25mm 9F',
                'item_code' => 'FDS-010A 9F',
                'slug' => 'disposable-tubes-disposable-tube-black-25mm-9f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '10',
                'min_order_quantity' => '30',
                'tags' => 'Black Rubber 25mm 9FT',
                'short_description' => 'Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)',
                'description' => '<p>Disposable grip and tip combination.Packed, sealed and sterilized.25 millimeter grips.(Tattoo gun not included)</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '4',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'jsWsRAHpqgczEwW2lijiourxKw4v0AK7137NiFJq.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '657',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Yellow',
                'item_code' => 'FPD-001-4',
                'slug' => 'consumables-grip-wrap-yellow',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '40',
                'min_order_quantity' => '2',
                'tags' => 'grip, wrap, yellow',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'S9JrNs45WCkIaIgGd9Pn3glxJTyjGnb4m2trN51Y.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '660',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Purple',
                'item_code' => 'FPD-001-6',
                'slug' => 'consumables-grip-wrap-purple',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '15',
                'min_order_quantity' => '2',
                'tags' => 'grip, wrap, purple',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'Hb2ugdYETyTEITWzcqqmNSITpkqkn0wKOMil6gNl.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '661',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Green',
                'item_code' => 'FPD-001-5',
                'slug' => 'consumables-grip-wrap-green',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '13',
                'min_order_quantity' => '2',
                'tags' => 'grip, wrap, green',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'l3EOUcPQRK2TdLl9lpw8QtIHObMEqlcGiep21AC3.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '662',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Black',
                'item_code' => 'FPD-001-1',
                'slug' => 'consumables-grip-wrap-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '38',
                'min_order_quantity' => '5',
                'tags' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'LlcKQ27WYnuePBvnMyze8QdraYJKJ9Y4MyXEOt0R.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '671',
                'stock_category_id' => '2',
                'name' => 'Pigment Mixer White',
                'item_code' => 'FTA-064A White',
                'slug' => 'consumables-pigment-mixer-white',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '48',
                'min_order_quantity' => '10',
                'tags' => 'Pigment, Mixer, Stir Ink',
                'short_description' => 'Included: 1 x Ink Mixer. ',
                'description' => 'Included: 1 x Ink Mixer. <br>This product is for tattoo and cosmetic use. <br><div>An efficient way to mix colors together by pressing the button.</div><div>Available in White en Purple<br></div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '62.5',
                'unit_price_for' => '0',
                'markup_percentage' => '150',
                'main_image' => 'BVStnm1LDrvfWqGxsbr73rRjwQJvPvcSbz7K7f7l.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '681',
                'stock_category_id' => '28',
                'name' => 'Equalizer MX Red',
                'item_code' => 'FCP-035-2',
                'slug' => 'rotary-equaliser-mx-red',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '2',
                'tags' => 'Equaliser, cartridge, rotary',
                'short_description' => 'Equalizer MX rotary - rotary machine in the form of a pen.',
                'description' => '<p>Equalizer MX rotary - rotary machine in the form of a pen.</p>
            
            <p>The advanced gear system guarantees reliability and quiet operation.
            The housing is made of high quality anodized aluminum. Super light
            weight - only 134 grams! (4.7oz)</p>
            
            <p>Compatible with all types of cartridge needles.<br>
            Minimal vibration!</p>
            
            <p>- Stroke : 3.5 mm<br>
            - Fully adjustable feed needle 0-4,5mm<br>
            - Engine : 5W<br>
            - Socket : RCA<br>
            - Shank diameter : 25mm<br>
            - Length: 11.8 cm<br>
            - Recommended voltage 7-12<br>
            - Comes with 1 aluminum grip</p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '625',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'oBDGKQInUhPWCVYdD9Z0zD63VYH1P5whf8jooHsU.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '682',
                'stock_category_id' => '26',
                'name' => 'Clear Hawk 3RL',
                'item_code' => 'YD-V1',
                'slug' => 'round-liner-clear-hawk-3rl',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '82',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 3RL, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'AMt2hxskfCZadvtYVSGmkTMEVwNtZh1Rut9MlA0A.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '683',
                'stock_category_id' => '26',
                'name' => 'Clear Hawk 1RL',
                'item_code' => 'YD-V1',
                'slug' => 'round-liner-clear-hawk-1rl',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 1RL, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'Jk1GDtwIaPHl2nhz7Dc6MWTaBn0mDlB5trMM3twS.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '684',
                'stock_category_id' => '26',
                'name' => 'Clear Hawk 5RL',
                'item_code' => 'YD-V1',
                'slug' => 'round-liner-clear-hawk-5rl',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '38',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 5RL, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'bCZGg0bOvfExmmdcwWZ2kfuG7MWzepnsWIMyCV1e.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '685',
                'stock_category_id' => '26',
                'name' => 'Clear Hawk 7RL',
                'item_code' => 'YD-V1',
                'slug' => 'round-liner-clear-hawk-7rl',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '180',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 7RL, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'gU2nMekhym5djA4sAu4WKn9ua61WiV3eS0uVYjTb.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '686',
                'stock_category_id' => '26',
                'name' => 'Clear Hawk 9RL',
                'item_code' => 'YD-V1',
                'slug' => 'round-liner-clear-hawk-9rl',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '246',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 9RL, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'TiXekjHJFxeLqEQ6RiOWahZZFd1d6OmnMwSIpAgq.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '689',
                'stock_category_id' => '25',
                'name' => 'Clear Hawk 7M1',
                'item_code' => 'YD-V1',
                'slug' => 'magnums-clear-hawk-7m1',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '82',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 7M1, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'QeWpVHTgsQ1tloJpljYwxcoOBPCaYw9TtCKz2wA5.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '690',
                'stock_category_id' => '25',
                'name' => 'Clear Hawk 9M1',
                'item_code' => 'YD-V1',
                'slug' => 'magnums-clear-hawk-9m1',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '22',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 9M1, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'gRdvJIxj10HfHvtPdw91wZOTGpbx9xQzBYd2zSdQ.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '691',
                'stock_category_id' => '25',
                'name' => 'Clear Hawk 11M1',
                'item_code' => 'CH11M1',
                'slug' => 'clear-hawk-11m1',
                'stock_unit_id' => '14',
                'expire_date' => null,
                'on_hand' => '82',
                'min_order_quantity' => '20',
                'tags' => 'Round Liner , 11M1, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '150',
                'length_cm' => '10',
                'height_cm' => '2',
                'width_cm' => '8',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '100',
                'main_image' => 'eIAK00MZpXgeLFJ66LR3C4R6L4t8sJvW7oGM8y3o.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '692',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Camo',
                'item_code' => 'FPD-002-1',
                'slug' => 'consumables-grip-wrap-camo',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '26',
                'min_order_quantity' => '5',
                'tags' => 'grip, wrap, camo',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '12.5',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'MOi7DFZTlLvjqKMfjGX4PIYpGbbxIUxhnj1mKlv9.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '693',
                'stock_category_id' => '2',
                'name' => 'Skin 3D Practice Skin lips',
                'item_code' => 'FPS-012C',
                'slug' => 'consumables-skin-3d-practice-skin-lips',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '30',
                'min_order_quantity' => '150',
                'tags' => 'Practice Skin , Skin, Lips, 3D',
                'short_description' => 'The best quality, the best price, the best service.',
                'description' => '1. It can be used for starters and experienced tattoo trainers or AEMI permanent makeup artists and masters<br>2. Help you to improve your technology or skills without practicing leather<br>3.
            It can be washed to comer true re-use.Water or PMU Cleanser can take
            off the ink or pigment and practice it again. It\'s very economical and
            environmentally friendly .<br>4. Exercise the skin of a semi permanent makeup new learner or a permanent school student.<br>5. Materials: Silicone, Soft, artificial skin,Inkness natural rubber, soft, easy to color,artificial skin<br><br>The best quality, the best price, the best service.<br>The
            practice of skin is made of advanced science and technology materials
            and produced according to the skin of the people. Its thickness and
            flexibility to control the depth of needle penetration, but also enable
            students to find their own mistakes in a timely manner, and promptly
            corrected, so as to quickly improve students\' skills.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '23.75',
                'unit_price_for' => '0',
                'markup_percentage' => '3',
                'main_image' => 'e0uMMg2yxBB1b6D6QfdfLOHxOztdZj4dSe2eUtP3.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '694',
                'stock_category_id' => '2',
                'name' => 'Practice Skin 3D Eyes eyebrow',
                'item_code' => 'FPS-012A',
                'slug' => 'consumables-practice-skin-3d-eyes-eyebrow',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '21',
                'min_order_quantity' => '150',
                'tags' => 'Practice Skin , Skin, Eyes, 3D, yebrow',
                'short_description' => 'Practice skin 3d for eyebrows',
                'description' => '1. It can be used for starters and experienced tattoo trainers or AEMI permanent makeup artists and masters<br>2. Help you to improve your technology or skills without practicing leather<br>3.
            It can be washed to comer true re-use.Water or PMU Cleanser can take
            off the ink or pigment and practice it again. It\'s very economical and
            environmentally friendly .<br>4. Exercise the skin of a semi permanent makeup new learner or a permanent school student.<br>5. Materials: Silicone, Soft, artificial skin,Inkness natural rubber, soft, easy to color,artificial skin<br><br>The best quality, the best price, the best service.<br>The
            practice of skin is made of advanced science and technology materials
            and produced according to the skin of the people. Its thickness and
            flexibility to control the depth of needle penetration, but also enable
            students to find their own mistakes in a timely manner, and promptly
            corrected, so as to quickly improve students\' skills.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '23.75',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'fZKhPzw44OeLtvG97ZYLvo66HeOnwraKMLxHyAPl.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '701',
                'stock_category_id' => '27',
                'name' => 'Clear Hawk 3RS',
                'item_code' => 'YD-V1',
                'slug' => 'round-shader-clear-hawk-3rs',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '19',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 3RS, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'fzOvxhFDS6YJ7GlE3T46NEjulctsn0JfXBGfv0Xr.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '702',
                'stock_category_id' => '27',
                'name' => 'Clear Hawk 5RS',
                'item_code' => 'YD-V1',
                'slug' => 'round-shader-clear-hawk-5rs',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '23',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 5RS, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'aWZuhvsQqPrAqc7ZQjz9yLO4HXGaDy9ggFJlWtBa.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '703',
                'stock_category_id' => '27',
                'name' => 'Clear Hawk 7RS',
                'item_code' => 'YD-V1',
                'slug' => 'round-shader-clear-hawk-7rs',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '0',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 7RS, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'hOMnLHt09sCYbofSJDO0RqkIRTclwm7D2UbifBsi.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '704',
                'stock_category_id' => '27',
                'name' => 'Clear Hawk 9RS',
                'item_code' => 'YD-V1',
                'slug' => 'round-shader-clear-hawk-9rs',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '189',
                'min_order_quantity' => '40',
                'tags' => 'Round Liner , 9RS, cartridge, clear hawk',
                'short_description' => 'Highest precision in the control of the needle is reached by the industrial manufacturing of the needle heads. Apart from particular accuracy in punctures, the cartridges guarantee for punctures that don\'t tear.',
                'description' => '<div>Filling
            in the colors is as easy as applying it with the top-class needles -
            either by dipping the running machine into a small pot of color or by
            filling color into the upper opening of the cartridge. What is more, the
            single-use material can quickly be changed and allows for perfect,
            uncomplicated and hygienic work!</div><div>The
            broad and ever growing selection of needle heads of different
            configurations leaves more and more freedom for artistic development.</div><div>Highest
            precision in the control of the needle is reached by the industrial
            manufacturing of the needle heads. Apart from particular accuracy in
            punctures, the cartridges guarantee for punctures that don\'t tear.</div><div>For the artist this means a more exact picture. For the customer this means:
            </div><div>
            less pain</div>
            <div>
            less skin irritation</div>
            <div>
            faster skin-healing process</div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '121.5',
                'unit_price_for' => '20',
                'markup_percentage' => '50',
                'main_image' => 'MIlMOjCInUOLkjrVGOYEI6PtIvdzFJ8UWkKIZwLh.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '725',
                'stock_category_id' => '2',
                'name' => 'Clip Cord Steel Socket Clear',
                'item_code' => 'FCC-044-2',
                'slug' => 'clip-cord-steel-socket-clear',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '51',
                'min_order_quantity' => '80',
                'tags' => 'Clipcord Steel Socket , Steel Clipcord , Clipcord',
                'short_description' => 'Clip Cord Steel Socket Clear',
                'description' => '<p>Clip cord length is 1.8m. This is a solid cord with steel socket with a clear wire. </p><p>Widely used by professional artists.<div><br></div></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '27',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'dEGzOA3BKZCjf9b95H91Cnf5UaPelq8iyZOZnWX6.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '727',
                'stock_category_id' => '45',
                'name' => 'Power Supply RG Gold',
                'item_code' => 'FTP-010-2',
                'slug' => 'digital-power-supply-rg-gold',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '41',
                'min_order_quantity' => '15',
                'tags' => 'analogue, power supply',
                'short_description' => 'This Digital Tattoo Power Supply is built for professionals',
                'description' => '<p>This Digital Tattoo Power Supply is built for professionals, and is designed to run smooth and perfect for everyday tattooing, comes with a power cord .
            Great for any level of artist.</p><p>18V - 2A (35W)<br></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '237.5',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'ImZjrBWoGvYprUuk2kehscVuDp8meFZ1PFuotQiH.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '753',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Red 19mm',
                'item_code' => 'A108',
                'slug' => 'aluminum-grips-red-19mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '53',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grip Red , Grip , Gold Grip',
                'short_description' => 'Aluminum Grip Red',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 19mm</p><p>Grip Color: Red</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => '3TOxFpkBQqIR0AYZ4GWUYsZfk2TfU7VFqR2tB9I3.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '754',
                'stock_category_id' => '12',
                'name' => 'Aluminium Grips Blue Bullet 25mm',
                'item_code' => 'A105',
                'slug' => 'aluminium-grips-aluminium-grips-blue-bullet-25mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '24',
                'min_order_quantity' => '10',
                'tags' => 'Aluminium Grip Blue , Grip , Blue Grip',
                'short_description' => 'Aluminium Grip Blue Bullet',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 25mm</p><p>Grip Color: Blue</p><p>Extra: Back Stem</p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'AxTQusmnuPc18b9B34cViHwEI20HyA4Cbhv3KXPI.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '755',
                'stock_category_id' => '12',
                'name' => 'Aluminum Grips Purple Bullet 25mm',
                'item_code' => 'A68',
                'slug' => 'aluminum-grips-purple-bullet-25mm',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '13',
                'min_order_quantity' => '21',
                'tags' => 'Aluminium Grip Purple , Aluminium Grip , Grip',
                'short_description' => 'Aluminum Grip Purple Bullet',
                'description' => '<p>These grips are light weight and durable</p><p>Grip Material: Aluminium</p><p>Grip Size: 25mm</p><p>Grip Color: Purple</p><p>Extra: Back Stem<br></p>',
                'weight_gram' => '80',
                'length_cm' => '7',
                'height_cm' => '2',
                'width_cm' => '2',
                'unit_price' => '10',
                'unit_price_for' => '1',
                'markup_percentage' => '200',
                'main_image' => 'XtFNpBmpZmFk5sNMaygeOpfYeUNEKE83T7Lk0ldL.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '759',
                'stock_category_id' => '2',
                'name' => 'Tool Set +',
                'item_code' => 'T72',
                'slug' => 'consumables-tool-set-plus',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '6',
                'min_order_quantity' => '10',
                'tags' => 'Tool Set , tools',
                'short_description' => '',
                'description' => 'A tattoo Tool Set is instruments that you can use to fine tune you own tattoo machine.&nbsp;<div>Includes:&nbsp;</div><div>3X L-keys (Small, medium, Large)&nbsp;</div><div>5 x O-rings</div><div>5 x Grommets</div><div>5 x Rubber bands</div><div>1 x Spring set (1 x front and 1 x back spring)</div><div>1 x Tip Brush Cleaner</div><div><br></div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '5.31',
                'unit_price_for' => '0',
                'markup_percentage' => '0',
                'main_image' => '',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '764',
                'stock_category_id' => '19',
                'name' => 'Disposable Tip 5F',
                'item_code' => 'FTT-003',
                'slug' => 'disposable-tip-5f',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '1639',
                'min_order_quantity' => '327',
                'tags' => 'disposable, tip, 5F',
                'short_description' => 'Disposable Tip for 5 Flat/Magnum. Plastic Tip can only be used ones.',
                'description' => 'Disposable Tip for 5 Flat/Magnum.
            Plastic Tip can only be used ones.',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '0.6',
                'unit_price_for' => '50',
                'markup_percentage' => '137',
                'main_image' => 'pkmUKSi49Nt6mdBsJg9fhORFQFoYg9lxkGFG1oOz.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '767',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Red',
                'item_code' => 'FPD-001-2',
                'slug' => 'consumables-grip-wrap-red',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '38',
                'min_order_quantity' => '5',
                'tags' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '2',
                'main_image' => 'DxdTvbGCy15Kyctnpl2TZYS2Iu6s8CsQ81OkbyO5.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '768',
                'stock_category_id' => '2',
                'name' => 'Grip Wrap Blue',
                'item_code' => 'FPD-001-3',
                'slug' => 'consumables-grip-wrap-blue',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '38',
                'min_order_quantity' => '5',
                'tags' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'short_description' => 'This bandage wrap can easily be wrapped around any type of grip, and offers a non-slip handle. ',
                'description' => '<p>This bandage wrap can easily be wrapped around any type of grip,
            and offers a non-slip handle. </p><p>These wraps are self adherent and require
            no tape. </p><p>They are adhesive-free and will not get sticky or leave any
            residue. </p><p>The bandage is soft, non-constricting, safe, will not slip and
            easy to work with.</p><p>
            Width: 5.0CM</p>
            
            Length: 4.5M',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '10',
                'unit_price_for' => '0',
                'markup_percentage' => '200',
                'main_image' => 'pr9lXLOd0ugJV2eeJbDA3pyOLUHd9I7MCLYiDN4Q.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '774',
                'stock_category_id' => '2',
                'name' => 'Pigment Mixer Purple',
                'item_code' => 'FTA-064A Purple',
                'slug' => 'consumables-pigment-mixer-purple',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '48',
                'min_order_quantity' => '10',
                'tags' => 'Pigment, Mixer, Stir Ink',
                'short_description' => 'Included: 1 x Ink Mixer. ',
                'description' => 'Included: 1 x Ink Mixer. <br>This product is for tattoo and cosmetic use. <br><div>An efficient way to mix colors together by pressing the button.</div><div>Available in White en Purple<br></div>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '62.5',
                'unit_price_for' => '0',
                'markup_percentage' => '150',
                'main_image' => 'No0p1MlxRaCNQmgL9htH1P87EbT5RInY3gQEVlUv.jpg',
                'is_active' => '1',
                'is_feature' => '0',
            ],
            [
                'company_id' => 1,
                'id' => '776',
                'stock_category_id' => '10',
                'name' => 'Portable Tattoo Chair',
                'item_code' => 'SMT-MC001',
                'slug' => 'shop-portable-tattoo-chair',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '999',
                'min_order_quantity' => '0',
                'tags' => 'high-quality Stainless steel, leather style vinyl, 5 high-d',
                'short_description' => 'Quality professional portable tattoo chair on sale at very competitive price, 3 year warranty. Nationwide delivery',
                'description' => '<div>Main material: high-quality Stainless steel, leather style vinyl, 5 high-density foam padding, quality hardware</div><div>Main parts are adjustable in length</div><div>The adjustable headrest at any angle</div><div>The chair is folded and portable</div><div>Powder-coated with excellent appearance</div><div>Package: one piece to a carton</div><div>Squeak-proof and designed for easy set-up, no tools needed for assembly&nbsp;</div><div><br></div><div>Includes FREE carry bag worth R299!</div><div><br></div>12-month warranty.<p></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '1800',
                'unit_price_for' => '0',
                'markup_percentage' => '50',
                'main_image' => 'QUrS3VcZzCxUcUKvMtM1Xe126syHrm9h217Sen6p.jpg',
                'is_active' => '1',
                'is_feature' => '1',
            ],
            [
                'company_id' => 1,
                'id' => '777',
                'stock_category_id' => '10',
                'name' => 'Tattoo Bed - Deluxe - Black',
                'item_code' => 'SMT-WT031-BK',
                'slug' => 'shop-tattoo-bed-deluxe-black',
                'stock_unit_id' => '1',
                'expire_date' => null,
                'on_hand' => '999',
                'min_order_quantity' => '0',
                'tags' => 'Face hole, headrest, arm sling, side arm',
                'short_description' => 'Deluxe portable tattoo bed on sale - black. Solid structures imported from Germany. 3-year warranty.',
                'description' => '<p>Deluxe portable massage table on sale - black. Solid structures
            imported from Germany.&nbsp; Money-back guarantee and nationwide delivery.<br></p><p>Dimensions: 186cm (L) x 68cm (W) x 58-85cm (H)<br><br>Working Weight:&nbsp; Up to 270 KG<br>Table Weight: 18 KG<br>Portable: Yes<br>Features: Face hole, headrest, arm sling, side armrests, and height-adjustable<br>Section: 3 section massage table with back lift function<br>Color: Black<br><br>Includes FREE carry bag worth R299!</p>12-month warranty.<p></p>',
                'weight_gram' => '1',
                'length_cm' => '1',
                'height_cm' => '1',
                'width_cm' => '1',
                'unit_price' => '2150',
                'unit_price_for' => '0',
                'markup_percentage' => '35',
                'main_image' => 'seyxi9nciqFmSxiullyvXb8gl4nTaomtSFZprUXB.jpg',
                'is_active' => '1',
                'is_feature' => '1',
            ],
            
            
        ];

        StockItem::insert($items);
    }
}

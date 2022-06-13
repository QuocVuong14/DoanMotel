<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Dell Inspirion XPS 13 9310',
                'description' => 'CPU: Intel Core i7-1165G7RAM: 16GB LPDDR4/4267MHz( onboard)',
                'price' => 19000000,
                'images' => 'https://philong.com.vn/media/product/250-25572-1.png;
                            https://philong.com.vn/media/product/120-25572-2.png;
                            https://philong.com.vn/media/product/120-25572-3.png;
                            https://philong.com.vn/media/product/120-25572-5.jpg',
                'origin' => 'Việt Nam',
                'quantity' => 10,
                'quantity_sold' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Asus Cực rẻ Cực ngon',
                'description' => 'SSD: 150gb, RAM: 12gb, CPU 1.8ghz',
                'price' => 18000000,
                'images' => 'https://philong.com.vn/media/product/250-24445-11.jpg;
                            https://lh3.googleusercontent.com/S71_qDMWaUYHcvHEPGkFEEYXNXpq7pW-9xDVN1C4Y1hHvOQwNjTKhVLv6AJQzL56-Tj_wNq2hmjZeuIBBzHrEXsThsSHRAKc=w500-rw;
                            https://lh3.googleusercontent.com/LQeS2rXABkHG78mRPuLsQu5AoWHQp6WAeiIgEVQkAhPT8zmoNu4koEErssNtLMCnXw5QDpK51kjr8YDLqpFfZETUyaQ4RaQ=w500-rw;
                            https://lh3.googleusercontent.com/V25Aw9J59KHA7djiiwFAtQqKkL8vEyrE8Z3VaRwV7PDxuSnUqWcrhHDm6ObY7FOXw4FRR0Ko9FEpfrIrhJSSu8fk8I3QQUxh=w500-rw',
                'origin' => 'Việt Nam',
                'quantity' => 10,
                'quantity_sold' => 5,
                'category_id' => 3,
            ],
            [
                'name' => 'MSI Pulse GL66',
                'description' => 'Core i7-11800H, Ram 16GB',
                'price' => 25050000,
                'images' => 'https://philong.com.vn/media/product/250-24679-12.png;
                            https://salt.tikicdn.com/cache/280x280/ts/product/37/a4/be/7e045c80d9a765a9943a2c5cb5ea70e3.jpg;
                            https://salt.tikicdn.com/ts/product/37/a4/be/7e045c80d9a765a9943a2c5cb5ea70e3.jpg;
                            https://salt.tikicdn.com/ts/product/6f/33/e5/7b2c76e07755dca5db75745593b695d9.jpg',
                'origin' => '',
                'quantity' => 14,
                'quantity_sold' => 2,
                'category_id' => 5,
            ],
            [
                'name' => 'PC ASUS IGAME K1',
                'description' => 'Intel Core i7 11700K, VGA Asus DUAL RTX3070 8G, SSD KINGMAX 256GB ZEUS',
                'price' => 17000100,
                'images' => 'https://philong.com.vn/media/product/250-24451-pc-philong-k-1-pc.png;
                             https://cf.shopee.vn/file/c088926fefd4be2251a29a70471e78ac;
                             https://cf.shopee.vn/file/5551ffa7b5c643724c8ab39418ca5831;
                             https://cf.shopee.vn/file/75a71ee082afbc87049106830017dd63',
                'origin' => 'Mỹ',
                'quantity' => 0,
                'quantity_sold' => 2,
                'category_id' => 7,
            ],
            [
                'name' => 'LAPTOP LENOVO IDEAPAD SLIM 3 14ALC6 (82KT003TVN)',
                'description' => 'CPU: Ryzen 5-5500U  RAM: 8GB (4GB Onboard + 4GB) DDR4 3200MHz',
                'price' => 15090000,
                'images' => 'https://philong.com.vn/media/product/250-24975-lenovo-ip-3-14alc6-1.png',
                'origin' => 'Mỹ',
                'quantity' => 20,
                'quantity_sold' => 0,
                'category_id' => 6,
            ],
            [
                'name' => 'Asus 0175 cực rẻ Unbelievable',
                'description' => 'SSD: 150gb  RAM: 8GB (4GB Onboard + 4GB) DDR4 3200MHz',
                'price' => 15000000,
                'images' => 'https://anphat.com.vn/media/product/31105_laptop_asus_zenbook_ux334fac_a4060t_1.jpg; 
                            https://2techshop.com/wp-content/uploads/2020/11/ASUS-UX334FAC-A4059T-5.png',
                'origin' => 'Singapore',
                'quantity' => 10,
                'quantity_sold' => 0,
                'category_id' => 3,
            ],
            [
                'name' => 'ACER NITRO 5',
                'description' => 'Ram 8GB, SSD 512GB DDR4 3200MHz',
                'price' => 11990000,
                'images' => 'https://philong.com.vn/media/product/250-24366-1.jpg;
                            https://philong.com.vn/media/product/120-24366-3.jpg',
                'origin' => 'Singapore',
                'quantity' => 15,
                'quantity_sold' => 0,
                'category_id' => 2,
            ],
            [
                'name' => 'Laptop LG Gram 2021 14ZD90P-G.AX51A5',
                'description' => 'Core i5-1135G7, Ram 8Gb, SSd 256GB, màn hình 14',
                'price' => 34000000,
                'images' => 'https://lh3.googleusercontent.com/iqP-pIWHyXmF36ARV6Z7QR7LTaq6vdZ9M_Xf9qsl7qQv2weexZFi74LMbfcdwDj6x6hXqIjIsWkZUpjeHchIQoP642H5xPFH=w500-rw;
                            https://lh3.googleusercontent.com/mGa3H2eqprhoYTm5N-QHVzK7mlGpKh5FEcfyrE2_1EgCYqLP0ZiJ5Yecv7_UyvXlblbWFCDAxomBfUXUer4ZwsyTdPgX6EWe=w500-rw;
                            https://lh3.googleusercontent.com/RErN9AlHg73l6GbH-Kkofz4W4U0KXMIkGbC1Le7Yc8wGff_N7S7TCN9yZdLOw2JLTpzOB5lVZrcRm4uiDzPQK3w1RQsFW6k=w500-rw;
                            https://lh3.googleusercontent.com/vGcskFn5CyS9cXOG4w7jeiBNiNl8KWpGbkJ4JSKYathwh-SDpqJxogTT6rgQiE8h8K0wVrqqdhMEsx2MITXJpXFVctfEjhD3=w500-rw',
                'origin' => 'Singapore',
                'quantity' => 15,
                'quantity_sold' => 0,
                'category_id' => 4,
            ],
            [
                'name' => 'Máy tính để bàn Dell OptiPlex 3070MT',
                'description' => 'RAM DDR4 4GB, HDD 1TB',
                'price' => 24000000,
                'images' => 'https://salt.tikicdn.com/ts/product/d4/e6/06/5e47d76953b43090ad0c0a4996b15e65.png;
                            https://salt.tikicdn.com/ts/product/27/ae/4d/4f9ef563530f142ee77c07a61619530a.jpg; 
                            https://salt.tikicdn.com/ts/product/23/19/48/a05da24eed4ddf608abb67f033447712.jpg; 
                            https://salt.tikicdn.com/ts/product/d8/36/4a/d16c14a0270dbe5bdf92d580b121625e.jpg',
                'origin' => 'Việt Nam',
                'quantity' => 21,
                'quantity_sold' => 0,
                'category_id' => 7,
            ],
            [
                'name' => 'Laptop ACER Aspire',
                'description' => 'A315-56-37DV NX.HS5SV.001',
                'price' => 12000000,
                'images' => 'https://cf.shopee.vn/file/3c072301ac766e62b234c7ade50a3b02; 
                            https://cf.shopee.vn/file/30e227e87612a6de5870364e865fe7da;  
                            https://cf.shopee.vn/file/92115b37b66b0f0a9a793710f908330d;  
                            https://cf.shopee.vn/file/0c7c2a778064bf7af81289c2690ce936',
                'origin' => 'Trung Quốc',
                'quantity' => 20,
                'quantity_sold' => 0,
                'category_id' => 2,
            ]
        ]);



    }
}

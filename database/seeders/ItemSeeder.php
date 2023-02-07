<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'item_name' => "Kailan Baby Conventional",
            'item_desc' => "Baby Kailan adalah sayuran berdaun tebal, datar, mengkilap dan berwarna hijau dengan batang tebal. Tahukah kamu bahwa sayur kailan memiliki kandungan nutrisi yang cukup lengkap bagi tubuh.",
            'price'=> 15800
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Pakchoy Pakcoy",
            'item_desc' => "Buah yang kami kirim setiap harinya, sehingga, sayur yang baru dipanen akan dikirim setiap harinya waktu dini hari. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan.",
            'price'=> 2400
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Selada Keriting",
            'item_desc' => "Daun selada adalah sumber vitamin A dan vitamin K yang sangat tinggi. Selain itu, daun selada juga mengandung berbagai nutrisi penting seperti zat besi, kalium, kalsium, folat, dan serat.",
            'price'=> 8100
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Mix Salad Organik",
            'item_desc' => "Khusus pesanan menggunakan paxel akan masuk ke pengiriman pada pukul 14.00 agar sayuran tidak terlalu lama berada di tempat pengiriman. Dan akan sampai ke tempat pelanggan pada keesokan harinya.",
            'price'=> 2100
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Daun Son",
            'item_desc' => "Daun Son mantap, segar, tulus. Enak di hati.",
            'price'=> 8800
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Kucai",
            'item_desc' => "Kucai biasanya digunakan untuk masakan Tionghoa akan tetapi sering juga digunakan sebagai bahan masakan Indonesia seperti lumpia atau tauge goreng.",
            'price'=> 6800
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Bawang Merah Besar",
            'item_desc' => "Bawang Merah Besar atau sering disebut juga dengan Bawang Merah Batu merupakan jenis produk yang sama dengan bawang merah lokal yang beredar di pasaran.",
            'price'=> 17500
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Jagung Manis",
            'item_desc' => "Jagung dapat diolah menjadi berbagai jenis makanan. Kandungan nutrisi jagung diantaranya adalah karbohidrat, protein, mineral , kalium, tembaga, vit A , B3 , B5 , B9 , C , E dan K.",
            'price'=> 8800
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Bawang Putih",
            'item_desc' => "Bawang putih sering digunakan sebagai bahan bumbu masakan dan juga sebagai obat. Manfaat yang dimiliki bawang putih untuk kesehatan.",
            'price'=> 15000
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Tomat Merah",
            'item_desc' => "Tomat merah memilki rasa manis asam dengan karakter sedikit dingin saat dimakan. Mengonsumsi tomat mampu menjauhkan diri dari beberapa penyakit ganas.",
            'price'=> 15800
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Romaine Lettuce",
            'item_desc' => "Selada Romaine adalah jenis selada yang memiliki kandungan gizi cukup tinggi. Tingginya vitamin, serat, dan mineral yang terkandung di dalamnya.",
            'price'=> 11000
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Brokoli Gundul",
            'item_desc' => "Brokoli merupakan salah satu sayuran hijau dari keluarga tanaman kubis. Hingga kini, sayuran ini terkenal sebagai sumber makanan.",
            'price'=> 21400
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Timun",
            'item_desc' => "Timun yang memiliki kandungan air yang tinggi dan bertekstur renyah, rendah kalori dan tidak mengandung lemak.",
            'price'=> 14100
        ]);
        
        Item::firstOrCreate([
            'item_name' => "Jahe",
            'item_desc' => "Jahe mengandung zat yang dapat meredakan peradangan dan mematikan senyawa penyebab rasa sakit di dalam tubuh.",
            'price'=> 6500
        ]);
    }
}

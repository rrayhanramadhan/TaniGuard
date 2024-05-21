<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artikel::create([
            'judul' => ' Cara Menjaga Sawah Tetap Aman Dari Hama Wereng ',
            'deskripsi' => ' Menjaga sawah dari hama wereng merupakan tantangan penting bagi para petani. Berikut adalah beberapa langkah yang bisa dilakukan untuk mengendalikan hama wereng di sawah:

            1. **Pengamatan Rutin**: Lakukan pengamatan rutin pada sawah untuk mendeteksi keberadaan hama wereng sejak dini. Perhatikan tanda-tanda kerusakan pada tanaman seperti daun yang menguning, bintik-bintik kecoklatan, atau kehadiran wereng dewasa atau telur.
            
            2. **Praktek Pertanian Berkelanjutan**: Terapkan praktik pertanian berkelanjutan seperti rotasi tanaman, tanaman perangkap, dan pertanian terpadu. Rotasi tanaman dapat membantu mengurangi populasi hama wereng dengan mengubah lingkungan tanam secara periodik. Tanaman perangkap dapat menarik hama wereng dan mengurangi tekanan hama pada tanaman utama.
            
            3. **Pengendalian Hayati**: Gunakan musuh alami wereng seperti predator atau parasitoid yang dapat membantu mengendalikan populasi wereng secara alami. Beberapa contoh musuh alami wereng adalah laba-laba, kepik, dan serangga parasitoid seperti Trichogramma spp.
            
            Ingatlah bahwa pengendalian hama wereng merupakan upaya yang berkelanjutan dan terkadang memerlukan kombinasi beberapa metode untuk mencapai hasil yang optimal. Selain itu, perhatikan juga aspek lingkungan dan kesehatan saat memilih metode pengendalian. ',
            
            
            

        ]);
    }
}

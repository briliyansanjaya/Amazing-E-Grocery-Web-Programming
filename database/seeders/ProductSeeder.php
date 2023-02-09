<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(20)->create();

        Product::create([ //1
            'productname' => 'Bakmi Tiga Marga - Bakmi Ayam',
            'productprice' => 70000 ,
            'productdetail' => 'Bakmi premium produksi @bakmitigamarga Diproses dan dikemas secara higienis dengan bahan berkualitas. Tanpa pengawet , pewarna atau zat2 yg merugikan kesehatanDapat disimpan di lemari es pembeku hingga 3product bulan atau di kulkas pendingin hingga 5 hari. 1 pax isi 2 porsi. Mudah dan praktis untuk damasak, kapan saja, dimana saja.',
            'productphoto' => 'Bakmi Tiga Marga - Bakmi Ayam.jpg',
        ]);

        Product::create([ //2
            'productname' => 'Picnic Beef Roll',
            'productprice' => 165000 ,
            'productdetail' => 'Daging sapi segar yang berlapis dengan racikan saos krim istimewa dan sosis, lalu dibungkus dengan balutan kulit pastry. Dilengkapi dengan saos hollandise yang membuat paduan radanya menjadi sempurna.',
            'productphoto' => 'Picnic Beef Roll.jpg',
        ]);

        Product::create([ //3
            'productname' => 'Nasi Uduk Ayam',
            'productprice' => 44000 ,
            'productdetail' => 'Nasi Uduk dengan bihun goreng, tempe orek, bawang goreng dan pilihan topping ayam. Lengkap dengan sambal.Tidak menggunakan bahan pengawet.Disarankan untuk langsung dikonsumsi ketika produk diterima.',
            'productphoto' => 'Nasi Uduk Ayam.jpg',
        ]);

        Product::create([ //4
            'productname' => 'Ikan Sambal Matah Sinar Pagi',
            'productprice' => 64999,
            'productdetail' => 'IKAN SAMBAL MATAH SINAR PAGI Lauk Frozen dengan kemasan Vacuum. Terbuat dari Ikan Cobia (sejenis Tenggiri) yang berasal dari Perairan Bali.Memiliki ciri Segar, Bersih, Daging Putih dan Tebal. Dibumbui dproductg bumbu Sambal Matah Segar dari Bahan2 Premium Berkualitas dan Citarasa Khas Sinar Pagi.',
            'productphoto' => 'Ikan Sambal Matah Sinar Pagi.jpg',
        ]);

        Product::create([ //5
            'productname' => 'Asinan Sayur Matraman Mama Epoy',
            'productprice' => 36299,
            'productdetail' => '100% fresh&natural ingredients tanpa bahan pengawet dan pewarna, dapat disimpan 2 hari dengan suhu kulkas (yang direkomendasikan oleh Mama Epoy), lebih dari itu dapat mengurangi kualitas sayurnya✅lebih baik dproductisajikan saat segar dan dingin✅kemasan siap santap (box+spork), Isi : Selada, Kol, Tahu, Wortel, tauge, ketimun, bumbu kacang dan kerupuk kuning-merah, ukuran M 1000ml 1-2 orang, ukuran L 1500ml 2-4 orang',
            'productphoto' => 'Asinan Sayur Matraman Mama Epoy.jpg',
        ]);

        Product::create([ //6
            'productname' => 'Dimsum Mentai Personal Size - Aburi Kitchen',
            'productprice' => 39000,
            'productdetail' => 'Homemade chicken dim sum topped with special mentai sauce by Aburi KitchenPersonal size isi 6 pcs',
            'productphoto' => 'Dimsum Mentai Personal Size - Aburi Kitchen.jpg',
        ]);

        Product::create([ //7
            'productname' => 'Beef Truffle Steak Sandwich Cottonink Cafe',
            'productprice' => 95000,
            'productdetail' => 'Wagyu Beef Steak slices with our Signature Truffle Sauce in fresh Butter Croissant. HALAL. Porsi sedang. Cocok untuk pilihan easy lunch/ to-go lunch.Croissant freshly made daily.',
            'productphoto' => 'Beef Truffle Steak Sandwich Cottonink Cafe.jpg',
        ]);

        Product::create([ //8
            'productname' => 'LAUKITA AYAM RICA KEMANGI 175gr',
            'productprice' => 62500,
            'productdetail' => 'Masakan Manado identik dengan bumbu dari aneka rempah yang membuat makanan selalu lezat. Ayam Rica Kemangi menjadi satu di antara hidangan nikmat khas Manado yang diminati dari banyak kalangan. Bumbunya mproducteresap hingga daging bikin tiap gigitan jadi berarti, Ayam Rica Kemangi khas Manado ini jadi menu yang sayang kalau dilewatkan. Produk Laukita adalah FROZEN FOOD (makanan beku), sehingga semua pesanan akan dikirim dalam box dan dengan Ice Pack didalamnya.',
            'productphoto' => 'LAUKITA AYAM RICA KEMANGI 175gr.jpg',
        ]);

        Product::create([ //9
            'productname' => 'Kebab Frozen Mini Premium 10 Pcs',
            'productprice' => 30000,
            'productdetail' => 'kebab Frozen Ka Salma Frozen Food merupakan camilan beku yang terbuat dari tortilla crispy yang diisi daging kebab premium,saus dan mayonaise, dikemas dengan box food grade sehingga praktis di simpan dan mproductudah disajikan.',
            'productphoto' => 'Kebab Frozen Mini Premium 10 Pcs.jpg',
        ]);

        Product::create([ //10
            'productname' => 'Kwetiau Goreng Pedas Dengan Daging Ayam',
            'productprice' => 41452,
            'productdetail' => '[Kwetiaw Goreng Pedas Dengan Daging Ayam] Dibuat FRESH setiap hari setelah order masuk. Dikirim dalam kondisi siap dikonsumsi langsung.',
            'productphoto' => 'Kwetiau Goreng Pedas Dengan Daging Ayam.jpg',
        ]);

        Product::create([ //11
            'productname' => 'Ayam Goreng Kuning (Frozen) - Dada',
            'productprice' => 19000,
            'productdetail' => 'Ayam Goreng Kuning Frozen (belum matang) yang super enak, lezat, dan gurih.Terbuat dari ayam kampung pilihan. Dibuat 100% dari rempah-rempah pilihan. Tidak memakai pengawet, perisa/micin, dan pewarna',
            'productphoto' => 'Ayam Goreng Kuning (Frozen) - Dada.jpg',
        ]);

        Product::create([ //12
            'productname' => 'B.T.S Burger',
            'productprice' => 70000,
            'productdetail' => 'B.T.S Beet, Tomato, and Smoked BBQ Sauce Vegan Burger Patty with Bun with BBQ SauceMau coba makan sehat bingung mulainya gimana, cobain deh B.T.S Burger Cottonink Cafe. Plant based patty-nya terbuat dari cproductampuran beet dan wortel. Porsinya tebal dan teksturnya mirip daging.',
            'productphoto' => 'B.T.S Burger.jpg',
        ]);

        Product::create([ //13
            'productname' => 'Nasi Goreng Kambing Kebon Sirih',
            'productprice' => 58000,
            'productdetail' => 'Nasi goreng berempah yang gurih, dipadu daging kambing yang empuk yang potongannya tidak pelit.bikin tidak kuat kalau cuma nyicip nyicip
         product   ',
            'productphoto' => 'Nasi Goreng Kambing Kebon Sirih.jpg',
        ]);

        Product::create([ //14
            'productname' => 'Sate Padang Loka - Original',
            'productprice' => 30000,
            'productdetail' => 'Siapa yang gak kenal Sate Padang?? Di Loka, Sate Padang jadi salah satu menu paling HITS! Rendah kolesterol, rendah lemak untuk yang berusaha makan sehatBahan : Jamur Champignon, Tahu Cina Putih, Cabe, Kproductetumbar, Lada, Kunyit, Jinten, Jahe, Lengkuas, Asam Kandis, Daun Jeruk, Daun Salam, Daun Kunyit, Sereh, Air, Bumbu Kari (Spesial: +lontong)',
            'productphoto' => 'Sate Padang Loka - Original.jpg',
        ]);

        Product::create([ //15
            'productname' => 'Beef Lasagna Medium Size 380 ml',
            'productprice' => 50000,
            'productdetail' => 'Terbuat dari bahan premium. Produk ini bisa jadi pilihan kamu untuk kirim hampers dan juga hidangan acara seperti arisan, acara kantor, ulang tahun, dll Produk kami selalu READY dan dibikin setelah kamu cproductheckout. TIDAK PO jadi kamu pesan hari ini dikirim hari ini juga loh kecuali untuk PAGI HARI',
            'productphoto' => 'Beef Lasagna Medium Size 380 ml.jpg',
        ]);
    }
}

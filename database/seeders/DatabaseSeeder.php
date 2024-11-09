<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = [
            [
                'name' => 'Fiction',
                'slug' => 'fiction'
            ],
            [
                'name' => 'Non-Fiction',
                'slug' => 'non-fiction'
            ],
            [
                'name' => 'Children Books',
                'slug' => 'children-books'
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

        //image, title, price, description
        $books = [
            // 23
            [   
                'category_id' => 2,
                'image' => 'image/23.png',
                'title' => 'Mindset',
                'price' => 50000,
                'description' => 'Buku Mindset membahas tentang bagaimana cara mengubah pola pikir untuk meraih kesuksesan. Dengan pola pikir yang tepat, setiap tantangan dalam hidup bisa dijadikan peluang untuk berkembang.'
            ],
            // 1
            [   
                'category_id' => 1,
                'image' => 'image/1.jpg',
                'title' => 'Orang Orang Biasa',
                'price' => 45000,
                'description' => 'Orang Orang Biasa adalah kisah yang mengangkat tentang kehidupan sehari-hari dan tantangan yang dihadapi oleh orang biasa dalam perjalanan hidup mereka.'
            ],
            // 2
            [   
                'category_id' => 1,
                'image' => 'image/2.jpg',
                'title' => 'Planet Luna',
                'price' => 55000,
                'description' => 'Planet Luna adalah sebuah petualangan imajinatif yang mengajak pembaca menjelajahi dunia fantasi yang penuh dengan misteri dan keajaiban.'
            ],
            // 4
            [   
                'category_id' => 1,
                'image' => 'image/4.jpg',
                'title' => 'Laut Bercerita',
                'price' => 60000,
                'description' => 'Laut Bercerita mengisahkan kehidupan yang penuh dengan perjuangan di pesisir laut. Buku ini menggambarkan tentang keindahan alam dan dinamika kehidupan manusia yang terhubung dengan laut.'
            ],
            // 20
            [   
                'category_id' => 3,
                'image' => 'image/20.jpg',
                'title' => 'Cerita Anak Merpati',
                'price' => 35000,
                'description' => 'Cerita Anak Merpati adalah kisah inspiratif tentang seorang anak yang memimpikan dunia yang lebih baik, dipenuhi dengan kebaikan dan keberanian.'
            ],
            // 29
            [   
                'category_id' => 2,
                'image' => 'image/29.jpg',
                'title' => 'Mohammad Hatta',
                'price' => 75000,
                'description' => 'Buku ini menceritakan tentang hidup dan perjuangan Mohammad Hatta, salah satu bapak proklamator Indonesia yang memiliki visi besar dalam memajukan bangsa.'
            ],
            // 18
            [   
                'category_id' => 3,
                'image' => 'image/18.jpg',
                'title' => 'Adikku Yang Hilang',
                'price' => 40000,
                'description' => 'Adikku Yang Hilang adalah cerita emosional tentang seorang saudara yang berusaha mencari adiknya yang hilang. Buku ini penuh dengan drama dan kisah penuh haru.'
            ],
            // 16
            [   
                'category_id' => 3,
                'image' => 'image/16.jpg',
                'title' => 'Aku Anak Indonesia',
                'price' => 35000,
                'description' => 'Aku Anak Indonesia adalah sebuah buku anak yang mengajarkan kebanggaan terhadap tanah air. Buku ini berisi cerita yang menyentuh tentang semangat nasionalisme.'
            ],
            // 19
            [   
                'category_id' => 3,
                'image' => 'image/19.jpg',
                'title' => 'Cerita Anak Ayam',
                'price' => 32000,
                'description' => 'Cerita Anak Ayam adalah kisah sederhana tentang petualangan ayam muda yang penuh dengan nilai moral dan pelajaran hidup.'
            ],
            // 7
            [   
                'category_id' => 1,
                'image' => 'image/7.jpeg',
                'title' => 'Pergi',
                'price' => 48000,
                'description' => 'Pergi adalah buku yang membawa pembaca pada perjalanan batin yang mendalam, menjelajahi pencarian diri dan pemahaman tentang hidup.'
            ],
            // 12
            [   
                'category_id' => 3,
                'image' => 'image/12.gif',
                'title' => 'Buku Anak Cerdas dan Kreatif',
                'price' => 40000,
                'description' => 'Buku Anak Cerdas dan Kreatif memberikan berbagai aktivitas yang bisa merangsang kreativitas anak-anak, sekaligus mengasah kemampuan berpikir mereka.'
            ],
            // 27
            [   
                'category_id' => 2,
                'image' => 'image/27.jpg',
                'title' => 'Buya Hamka',
                'price' => 80000,
                'description' => 'Buya Hamka adalah buku biografi yang mengulas kehidupan dan karya-karya besar dari seorang ulama, sastrawan, dan pemikir Indonesia yang sangat berpengaruh.'
            ],
            // 9
            [   
                'category_id' => 1,
                'image' => 'image/9.jpg',
                'title' => 'Black Showman dan Pembunuhan di Kota Tak Bernama',
                'price' => 50000,
                'description' => 'Black Showman dan Pembunuhan di Kota Tak Bernama adalah sebuah novel detektif yang penuh dengan misteri dan teka-teki yang menantang pembaca untuk memecahkannya.'
            ],
            // 5
            [   
                'category_id' => 1,
                'image' => 'image/5.jpg',
                'title' => 'Hujan',
                'price' => 47000,
                'description' => 'Hujan menceritakan kisah cinta yang terjalin di tengah-tengah badai kehidupan. Buku ini menyentuh hati dengan cerita yang penuh emosi dan keindahan.'
            ],
            // 13
            [   
                'category_id' => 3,
                'image' => 'image/13.jpg',
                'title' => 'Pintar Berhitung',
                'price' => 30000,
                'description' => 'Pintar Berhitung adalah buku edukasi untuk anak-anak yang mengajarkan konsep dasar matematika dengan cara yang menyenangkan dan mudah dipahami.'
            ],
            // 26
            [   
                'category_id' => 2,
                'image' => 'image/26.jpg',
                'title' => 'Ki Hadjar Dewantara',
                'price' => 60000,
                'description' => 'Ki Hadjar Dewantara adalah biografi yang mengisahkan perjalanan hidup dan kontribusinya yang luar biasa dalam bidang pendidikan di Indonesia.'
            ],
            // 3
            [   
                'category_id' => 1,
                'image' => 'image/3.jpg',
                'title' => 'Mengunyah Rindu',
                'price' => 42000,
                'description' => 'Mengunyah Rindu adalah sebuah cerita tentang kerinduan yang tak terungkapkan. Buku ini menghadirkan perasaan yang mendalam tentang cinta dan kehilangan.'
            ],
            // 17
            [   
                'category_id' => 3,
                'image' => 'image/17.png',
                'title' => 'Antologi Cerita Anak Indonesia',
                'price' => 35000,
                'description' => 'Antologi Cerita Anak Indonesia berisi kumpulan cerita yang mengangkat kearifan lokal dan budaya Indonesia dalam bentuk cerita yang menarik dan edukatif.'
            ],
            // 30
            [   
                'category_id' => 2,
                'image' => 'image/30.jpg',
                'title' => 'B.J. Habibie',
                'price' => 85000,
                'description' => 'B.J. Habibie adalah biografi tentang kehidupan dan perjalanan politik B.J. Habibie yang menginspirasi generasi muda untuk berkontribusi lebih bagi bangsa.'
            ],
            // 10
            [   
                'category_id' => 1,
                'image' => 'image/10.jpg',
                'title' => 'Segala yang Diisap Langit',
                'price' => 75000,
                'description' => '“Segala yang Diisap Langit” adalah sebuah perjalanan spiritual dan filosofis yang menggali kedalaman emosi manusia. Buku ini mengajak pembaca untuk merenung tentang kehidupan dan alam semesta, serta hubungan kita dengan langit yang tak terjangkau. Sebuah karya yang menggugah hati, membahas berbagai aspek eksistensi dengan pencerahan dan kedamaian batin.'
            ],
            // 21
            [   
                'category_id' => 2,
                'image' => 'image/21.png',
                'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
                'price' => 120000,
                'description' => 'Buku ini menawarkan pandangan baru tentang kehidupan dengan sikap “bodo amat” yang penuh kebebasan. Ditulis dengan gaya yang lugas, karya ini mengajak pembaca untuk melepaskan belenggu kecemasan dan ekspektasi sosial, serta menjadi diri sendiri dengan penuh keberanian. Sebuah karya yang menginspirasi untuk menjalani hidup tanpa rasa takut terhadap penilaian orang lain.'
            ],
            // 8
            [   
                'category_id' => 1,
                'image' => 'image/8.jpg',
                'title' => 'Pulang',
                'price' => 65000,
                'description' => '“Pulang” adalah kisah penuh emosi tentang perjalanan hidup yang dipenuhi dengan kehilangan dan harapan. Buku ini menceritakan tentang pencarian diri, penemuan kembali akar, dan menemukan kedamaian dalam perjalanan pulang. Sebuah kisah yang menghangatkan hati, yang akan membawa pembaca merasakan pentingnya keluarga dan rumah sejati.'
            ],
            // 28
            [   
                'category_id' => 2,
                'image' => 'image/28.webp',
                'title' => 'Soekarno',
                'price' => 90000,
                'description' => 'Buku ini adalah biografi mendalam tentang Soekarno, Presiden pertama Indonesia, yang menjadi simbol perjuangan kemerdekaan dan identitas bangsa. Dikenal dengan karismanya yang kuat dan pandangannya yang revolusioner, Soekarno menginspirasi banyak orang di seluruh dunia dengan visi dan tekadnya untuk memperjuangkan kemerdekaan. Sebuah karya yang menggugah rasa cinta tanah air.'
            ],
            // 6
            [   
                'category_id' => 1,
                'image' => 'image/6.jpeg',
                'title' => 'Brianna dan Bottomwise',
                'price' => 85000,
                'description' => '“Brianna dan Bottomwise” adalah sebuah novel yang menceritakan kisah persahabatan antara Brianna, seorang gadis muda yang penuh semangat, dan Bottomwise, seekor makhluk ajaib yang memiliki kebijaksanaan dan kekuatan luar biasa. Dengan latar belakang dunia fantasi yang kaya, buku ini mengajak pembaca untuk menggali lebih dalam tentang keberanian, persahabatan, dan petualangan yang tak terduga.'
            ],
            // 24
            [   
                'category_id' => 2,
                'image' => 'image/24.png',
                'title' => 'I Want to Die but I Want to Eat Tteokpokki',
                'price' => 95000,
                'description' => 'Buku ini mengisahkan perjuangan seseorang yang berada dalam situasi emosional yang penuh kontradiksi. Cerita ini sangat personal, mengangkat tema depresi, kebingungan hidup, dan pencarian arti dalam kesendirian, namun juga dibalut dengan humor dan harapan yang membuat pembaca merasa terhubung. Tteokpokki, makanan favorit, menjadi simbol harapan dan kebahagiaan yang kecil namun berarti dalam kehidupan.'
            ],
            // 25
            [   
                'category_id' => 2,
                'image' => 'image/25.jpg',
                'title' => 'Filosofi Teras',
                'price' => 105000,
                'description' => '“Filosofi Teras” mengajak pembaca untuk mengenal dan memahami kehidupan melalui lensa filsafat Stoikisme. Buku ini mengajarkan cara hidup yang lebih bijak dengan menerima kenyataan, mengendalikan emosi, dan menemukan kebahagiaan dalam kesederhanaan. Karya ini tidak hanya memberikan pengetahuan filsafat, tetapi juga memberikan panduan praktis untuk mencapai kehidupan yang lebih tenang dan terarah.'
            ],
            // 14
            [   
                'category_id' => 3,
                'image' => 'image/14.jpg',
                'title' => 'Membaca dan Menulis',
                'price' => 50000,
                'description' => 'Buku ini memberikan panduan untuk mengasah keterampilan membaca dan menulis yang lebih efektif. Dengan pendekatan yang menyeluruh dan praktis, karya ini cocok bagi siapa saja yang ingin memperbaiki cara mereka memahami teks serta mengembangkan kemampuan menulis dengan cara yang sistematis dan mudah dipahami. Ideal bagi para pelajar, mahasiswa, dan penulis pemula.'
            ],
            // 11
            [   
                'category_id' => 3,
                'image' => 'image/11.jpg',
                'title' => 'Cerita Anak',
                'price' => 40000,
                'description' => '“Cerita Anak” adalah kumpulan cerita yang dirancang khusus untuk anak-anak. Setiap cerita mengandung nilai-nilai moral yang mendidik, yang mengajarkan kebaikan, keberanian, dan persahabatan. Buku ini cocok untuk anak-anak yang sedang dalam tahap perkembangan, memberikan hiburan sekaligus pembelajaran yang menyenangkan dan mendidik.'
            ],
            // 22
            [   
                'category_id' => 2,
                'image' => 'image/22.png',
                'title' => 'Berani Tidak Disukai',
                'price' => 110000,
                'description' => '“Berani Tidak Disukai” adalah buku yang mengajarkan pentingnya hidup sesuai dengan keinginan sendiri tanpa takut pada penilaian orang lain. Dengan pendekatan yang berbasis pada filosofi psikologi, buku ini memberikan wawasan tentang bagaimana membangun kepercayaan diri, menanggapi kritik, dan menciptakan kehidupan yang lebih autentik dan bebas dari ketakutan akan opini orang lain.'
            ],
            // 15
            [   
                'category_id' => 3,
                'image' => 'image/15.jpeg',
                'title' => 'Cepat Pintar Membaca',
                'price' => 55000,
                'description' => 'Buku ini dirancang untuk membantu anak-anak meningkatkan kemampuan membaca mereka dengan cara yang cepat dan menyenangkan. Dilengkapi dengan berbagai teknik dan latihan praktis, buku ini akan membantu anak-anak membangun keterampilan membaca yang lebih baik, yang akan sangat bermanfaat bagi perkembangan akademik mereka di masa depan.'
            ]
        ];
        

        // \App\Models\Book::factory(15)->create();
        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}

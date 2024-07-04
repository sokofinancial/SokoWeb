<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'question' => 'Secara umum, bagaimana sahabat Anda menggambarkan Anda sebagai seseorang pengambil risiko',
                'answers' => [
                    ['answer' => 'Penjudi sejati', 'score' => 4],
                    ['answer' => 'Bersedia mengambil risiko setelah menganalisis dengan memadai', 'score' => 3],
                    ['answer' => 'Berhati-hati', 'score' => 2],
                    ['answer' => 'Menghindari risiko sepenuhnya', 'score' => 1],
                ]
            ],
            [
                'question' => 'Anda sedang mengikuti pertunjukan permainan di TV dan Anda dapat memilih salah satu dari pilihan berikut. Manakah yang Anda pilih?',
                'answers' => [
                    ['answer' => 'Uang tunai Rp1.000.000,00', 'score' => 1],
                    ['answer' => 'Peluang 50% untuk memenangkan Rp5.000.000,00', 'score' => 2],
                    ['answer' => 'Peluang 25% untuk memenangkan Rp10.000.000,00', 'score' => 3],
                    ['answer' => 'Peluang 5% untuk memenangkan Rp100.000.00,00', 'score' => 4],
                ]
            ],
            [
                'question' => 'Anda baru saja berhasil mengumpulkan uang untuk liburan yang diidamkan. Tiga minggu sebelum pergi, Anda kehilangan pekerjaan, yang akan Anda lakukan adalah',
                'answers' => [
                    ['answer' => 'Membatalkan liburan', 'score' => 1],
                    ['answer' => 'Merencanakan liburan yang jauh lebih sederhana', 'score' => 2],
                    ['answer' => 'Tetap liburan sesuai dengan rencana awal karena Anda membutuhkan waktu untuk mencari kerja yang baru', 'score' => 3],
                    ['answer' => 'Memperpanjang liburan karena ini mungkin kesempatan terakhir untuk merasakan liburan mewah', 'score' => 4],
                ]
            ],
            [
                'question' => 'Jika Anda tiba-tiba menerima Rp20.000.000,- untuk diinvestasikan, apa yang akan Anda lakukan?',
                'answers' => [
                    ['answer' => 'Menyimpan dana tersebut di rekening bank, pasar instrumen jangka pendek (pasar uang), atau deposito berjangka', 'score' => 1],
                    ['answer' => 'Menginvestasikan dalam bentuk obligasi berkualitas tinggi atau reksa dana obligasi yang aman', 'score' => 2],
                    ['answer' => 'Menginvestasikan di saham atau reksa dana saham', 'score' => 3],
                ]
            ],
            [
                'question' => 'Menurut pengalaman, seberapa nyaman Anda berinvestasi di saham atau reksa dana saham?',
                'answers' => [
                    ['answer' => 'Tidak nyaman sama sekali', 'score' => 1],
                    ['answer' => 'Agak nyaman', 'score' => 2],
                    ['answer' => 'Sangat nyaman', 'score' => 3],
                ]
            ],
            [
                'question' => 'Ketika Anda memikirkan kata "risiko", manakah dari kata-kata berikut yang pertama kali muncul di pikiran Anda?',
                'answers' => [
                    ['answer' => 'Kerugian', 'score' => 1],
                    ['answer' => 'Ketidakpastian', 'score' => 2],
                    ['answer' => 'Peluang', 'score' => 3],
                    ['answer' => 'Tantangan', 'score' => 4],
                ]
            ],
            [
                'question' => 'Beberapa ahli memprediksi harga aset seperti emas, permata, barang koleksi, dan real estat (aset fisik) akan meningkat nilainya; harga obligasi mungkin turun, tetapi para ahli cenderung setuju bahwa obligasi pemerintah relatif aman. Sebagian besar aset investasi Anda saat ini adalah obligasi pemerintah yang berbunga tinggi. Apa yang akan Anda lakukan?',
                'answers' => [
                    ['answer' => 'Menyimpan obligasi', 'score' => 1],
                    ['answer' => 'Menjual obligasi, lalu menyimpan setengah dari hasil penjualan di rekening pasar uang, dan setengahnya lagi di aset fisik', 'score' => 2],
                    ['answer' => 'Menjual obligasi lalu menyimpan seluruh hasil penjualan di aset fisik', 'score' => 3],
                    ['answer' => 'Menjual obligasi, lalu menyimpan seluruh uang di aset fisik, dan meminjam dana tambahan untuk membeli lebih banyak aset fisik', 'score' => 4],
                ]
            ],
            [
                'question' => 'Berdasarkan opsi probabilitas mendapatkan keuntungan dan kerugian dari empat pilihan investasi di bawah ini, mana yang Anda pilih?',
                'answers' => [
                    ['answer' => 'Keuntungan Rp2.000.000,00 dalam skenario terbaik; keuntungan/kerugian Rp0 dalam skenario terburuk', 'score' => 1],
                    ['answer' => 'Keuntungan Rp8.000.000,00 dalam skenario terbaik; kerugian Rp2.000.000,00 dalam skenario terburuk', 'score' => 2],
                    ['answer' => 'Keuntungan Rp26.000.000,00 dalam skenario terbaik; kerugian Rp8.000.000,00 dalam skenario terburuk', 'score' => 3],
                    ['answer' => 'Keuntungan Rp48.000.000,00 dalam skenario terbaik; kerugian Rp24.000.000,00 dalam skenario terburuk', 'score' => 4],
                ]
            ],
            [
                'question' => 'Selain dari apa yang Anda miliki, Anda telah diberi Rp1.000.000,00. Sekarang Anda diminta untuk memilih di antara:',
                'answers' => [
                    ['answer' => 'Keuntungan pasti sebesar Rp500.000,00', 'score' => 1],
                    ['answer' => 'Peluang 50% untuk keuntungan Rp1.000.000,00 dan peluang 50% untuk tidak mendapatkan apa-apa', 'score' => 3],
                ]
            ],
            [
                'question' => 'Selain dari apa yang Anda miliki, Anda telah diberi Rp2.000.000,00. Sekarang Anda diminta untuk memilih di antara:',
                'answers' => [
                    ['answer' => 'Kerugian pasti sebesar Rp500.000,00', 'score' => 1],
                    ['answer' => 'Peluang 50% untuk kehilangan  Rp1.000.000,00 dan peluang 50% untuk tidak mengalami kerugian', 'score' => 3],
                ]
            ],
            [
                'question' => 'Anggaplah seorang kerabat memberikan warisan sebesar Rp100.000.000,00 dengan syarat di dalam wasiatnya bahwa Anda harus menginvestasikan SELURUH uang dalam SATU pilihan berikut ini. Mana yang akan Anda pilih?',
                'answers' => [
                    ['answer' => 'Rekening tabungan atau reksa dana pasar uang', 'score' => 1],
                    ['answer' => 'Reksa dana campuran, yang alokasinya terdapat saham dan obligasi', 'score' => 2],
                    ['answer' => 'Portofolio dari 15 saham', 'score' => 3],
                    ['answer' => 'Komoditas seperti emas, perak, dan minyak', 'score' => 4],
                ]
            ],
            [
                'question' => 'Jika Anda harus menginvestasikan Rp20.000.000,00, manakah pilihan investasi berikut ini yang paling menarik bagi Anda?',
                'answers' => [
                    ['answer' => '60% dalam investasi berisiko rendah, 30% dalam investasi berisiko sedang, 10% dalam investasi berisiko tinggi', 'score' => 1],
                    ['answer' => '30% dalam investasi berisiko rendah, 40% dalam investasi berisiko sedang, 30% dalam investasi berisiko tinggi', 'score' => 2],
                    ['answer' => '10% dalam investasi berisiko rendah, 40% dalam investasi berisiko sedang, 50% dalam investasi berisiko tinggi', 'score' => 3],
                ]
            ],
            [
                'question' => 'Sahabat dan tetangga tepercaya Anda, seorang ahli geologi berpengalaman, mengumpulkan sekelompok investor untuk mendanai proyek eksplorasi penambangan emas. Proyek ini bisa mengembalikan investasi sebanyak 50 hingga 100 kali lipat jika berhasil. Namun, jika tambangnya tidak berhasil, seluruh investasi akan hangus. Sahabat Anda memperkirakan peluang kesuksesan hanya sebesar 20%. Jika Anda memiliki uang, berapa banyak yang akan Anda investasikan?',
                'answers' => [
                    ['answer' => 'Tidak ada', 'score' => 1],
                    ['answer' => 'Gaji selama satu bulan', 'score' => 2],
                    ['answer' => 'Gaji selama tiga bulan', 'score' => 3],
                    ['answer' => 'Gaji selama enam bulan', 'score' => 4],
                ]
            ],
        ];

        foreach ($questions as $q) {
            $question = Question::create(['question' => $q['question']]);
            foreach ($q['answers'] as $a) {
                $question->answers()->create($a);
            }
        }
    }
}

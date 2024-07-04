<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\DashboardController;
use \App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KuesionerController;
use \App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    // min 8 logos
    $logos = [
        ['id' => 1, 'url' => 'bukalapak.png'],
        ['id' => 2, 'url' => 'pegadaian.png'],
        ['id' => 3, 'url' => 'bisnishack.png'],
        ['id' => 4, 'url' => 'aia.png'],
        ['id' => 5, 'url' => 'universitas-diponegoro.png'],
        ['id' => 6, 'url' => 'bca.png'],
        ['id' => 7, 'url' => 'ojk.png']
    ];
    return view('core/index', compact('logos'));
});

// layanan kami
Route::get('/service', function () {
    return view('core/service');
});
Route::get('webinar', function () {
    return view('core/webinar');
});
Route::get('webinar/{slug}', function () {
    return view('core/view-webinar');
});
Route::get('general-class', function () {
    return view('core/general-class');
});
Route::get('financial-consulting', function () {
    return view('core/financial-consulting');
});
Route::get('seminar-talkshow', function () {
    return view('core/seminar-talkshow');
});
Route::get('seminar-talkshow/{slug}', function () {
    return view('core/view-seminar-talkshow');
});

// tentang
Route::get('/about', function () {
    // min 8 logos
    $logos = [
        ['id' => 1, 'url' => 'bukalapak.png'],
        ['id' => 2, 'url' => 'pegadaian.png'],
        ['id' => 3, 'url' => 'bisnishack.png'],
        ['id' => 4, 'url' => 'aia.png'],
        ['id' => 5, 'url' => 'universitas-diponegoro.png'],
        ['id' => 6, 'url' => 'bca.png'],
        ['id' => 7, 'url' => 'ojk.png']
    ];
    return view('core/about-us', compact('logos'));
});

// kontak
Route::get('/contact', function () {
    return view('core/contact-us');
});

// blog
Route::get('/blog', [BlogController::class, 'indexUser'])->name('blog.indexUser');

Route::get('/blog/{slug}', function () {
    $data = '
    <span class="text-white text-sm my-1">
        Sobat SOKO yang sudah bekerja, bagaimana rasanya ketika mendapatkan gaji pertama? Apakah rasanya membuat
        jantung berdebar dan rasanya sangat menyenangkan?</span>

    <span class="text-white text-sm my-1">Seorang kenalan Minso kemarin bercerita tentang mendapatkan gaji
        pertama, sebut saja namanya Awan
        –karena
        kalau kita sebut Mawar takutnya dikira penjula bakso boraks. Awan ini adalah seorang fresh graduate yang
        baru lulus tahun ini. Tidak lama dari kelulusan, Awan langsung mendapatkan pekerjaan sebagai pegawai
        kontrak
        di sebuah perusahaan surat kabar di kota tempat dia tinggal. Kebetulan Awan memang tinggal dan kuliah di
        kota yang sama.</span>

    <span class="text-white text-sm my-1">Tentu saja Awan merasa senang ketika mendapatkan pekerjaan, sehingga
        tidak perlu lama menganggur.
        Meskipun
        dia tahu bahwa dia hanya pegawai kontrak, Awan tetap bersemangat mengerjakan pekerjaannya.</span>

    <span class="text-white text-sm my-1">Sebulan berselang, Awan mendapatkan hari yang sangat dinantikan semua
        orang. Dia akan mendapatkan gaji.
        Tidak seberapa, tapi Awan tahu gaji itu cukup untuk dirinya sendiri. Gaji Awan ini sekitar 3 juta
        rupiah.
        Cukup besar bagi orang yang baru saja mendapat pekerjaan.</span>

    <span class="text-white text-sm my-1">Ketika waktunya gajian, Awan pergi ke ATM, untuk mengambil uangnya.
        Awan begitu terkejut melihat angkat
        yang
        berderet di layar ATM. Langsung saja Awan ambil semua uang itu. Dia bercerita bahwa rasanya sangat
        menyenangkan, penuh syukur, sekaligus aneh ketika dompetnya penuh dengan uang.</span>

    <span class="text-white text-sm my-1">Ketika di perjalanan pulang, Awan banyak berpikir. Ini merupakan gaji
        pertamanya, apa yang harus Awan
        lakukan?</span>

    <span class="text-white text-sm my-1">Tentu saja Awan ingin segera menghabiskan uang yang baru didapatkannya
        dengan membeli barang-barang yang
        dia
        inginkan. Tapi, di lain sisi Awan juga ingin memberikan sebagian gaji tersebut untuk ibunya. Awan juga
        ingin
        menabung agar uangnya tidak habis begitu saja. Masalahnya, Awan masih bingung, apa yang harus dilakukan
        agar
        uang ini bisa dia gunakan dengan baik?</span>

    <span class="text-white text-sm my-1">Ini yang perlu dilakukan jika kamu juga mengalami hal yang sama
        seperti Awan.</span>
    <span class="text-white text-lg font-bold mt-6 mb-2">Pertama, Sisihkan dahulu uang untuk menabung.
    </span>
    <span class="text-white text-sm my-1">Hal pertama yang perlu dilakukan adalah
        menyisihkan uang untuk
        menabung.
        Mulai
        menabung dari jumlah kecil dulu jika kamu belum terbiasa untuk menabung. Meskipun uang tabungan yang
        kamu
        sisihkan kecil, tidak akan menjadi masalah. Yang terpenting adalah membangun dulu kebiasaan menabung
        kamu
        karena nantinya, kamu perlu menabung untuk kebutuhan lain, seperti tabungan hari tua, tabungan dana
        darurat,
        dan sebagainya. Nantinya, tabungan ini akan memilik banyak manfaat untuk kamu di masa depan.</span>
    <span class="text-white text-lg font-bold mt-6 mb-2">Pertama, Sisihkan dahulu uang untuk menabung.
    </span>
    <span class="text-white text-sm my-1">Hal pertama yang perlu dilakukan adalah
        menyisihkan uang untuk
        menabung.
        Mulai
        menabung dari jumlah kecil dulu jika kamu belum terbiasa untuk menabung. Meskipun uang tabungan yang
        kamu
        sisihkan kecil, tidak akan menjadi masalah. Yang terpenting adalah membangun dulu kebiasaan menabung
        kamu
        karena nantinya, kamu perlu menabung untuk kebutuhan lain, seperti tabungan hari tua, tabungan dana
        darurat,
        dan sebagainya. Nantinya, tabungan ini akan memilik banyak manfaat untuk kamu di masa depan.</span>
    <span class="text-white text-lg font-bold mt-6 mb-2">Pertama, Sisihkan dahulu uang untuk menabung.
    </span>
    <span class="text-white text-sm my-1">Hal pertama yang perlu dilakukan adalah
        menyisihkan uang untuk
        menabung.
        Mulai
        menabung dari jumlah kecil dulu jika kamu belum terbiasa untuk menabung. Meskipun uang tabungan yang
        kamu
        sisihkan kecil, tidak akan menjadi masalah. Yang terpenting adalah membangun dulu kebiasaan menabung
        kamu
        karena nantinya, kamu perlu menabung untuk kebutuhan lain, seperti tabungan hari tua, tabungan dana
        darurat,
        dan sebagainya. Nantinya, tabungan ini akan memilik banyak manfaat untuk kamu di masa depan.</span>
    <span class="text-white text-sm my-1">Nah itu dia tiga hal yang perlu kamu lakukan
        dengan gaji pertama.
        Kalau kamu
        masih bingung untuk mengatur keuangan kamu dan kamu ingin lebih dalam mempelajari soal keuangan, yuk,
        bergabung di kelas SOKO Financial dengan daftar melalui link berikut <a href="#"
        class="text-white underline">https://bit.ly/SOKOINT01</a>.</span>
    ';

    return view('core/view-blog', compact('data'));
});

//kuesioner
Route::get("/kuesioner", [KuesionerController::class, 'home'])->name("kuesioner");
Route::post("/kuesioner", [KuesionerController::class, 'post'])->name("kuesioner.post");
Route::get("/kuesioner/result", [KuesionerController::class, 'result'])->name("kuesioner.result");

Route::get("/kuesioner2", [KuesionerController::class, 'home2'])->name("kuesioner2");
Route::post("/kuesioner2", [KuesionerController::class, 'post2'])->name("kuesioner.post2");
Route::get("/kuesioner/result2", [KuesionerController::class, 'result2'])->name("kuesioner.result2");

### Start Admin ###
Route::get('/admin', function () {
    return view('auth/login');
});

### Start Dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/webinar', [WebinarController::class, 'index'])->name('webinar.index');
        Route::get('/webinar/create', [WebinarController::class, 'create'])->name('webinar.create');
        Route::post('/webinar', [WebinarController::class, 'store'])->name('webinar.store');
        Route::get('/webinar/{slug}', [WebinarController::class, 'detail'])->name('webinar.detail');
        Route::patch('/webinar/{slug}', [WebinarController::class, 'edit'])->name('webinar.detail.edit');
        Route::delete('/webinar/{slug}', [WebinarController::class, 'destroy'])->name('webinar.detail.destroy');

        Route::get('testimoni', [TestimoniController::class, 'index'])->name('testimoni.index');
        Route::get('testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
        Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');
        Route::get('/testimoni/{id}', [TestimoniController::class, 'show'])->name('testimoni.detail');
        Route::patch('/testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.detail.edit');
        Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.detail.destroy');

        Route::get('/partner', [PartnerController::class, 'index'])->name('partner.index');
        Route::get('/partner/create', [PartnerController::class, 'create'])->name('partner.create');
        Route::post('/partner', [PartnerController::class, 'store'])->name('partner.store');
        Route::get('/partner/{slug}', [PartnerController::class, 'detail'])->name('partner.detail');
        Route::patch('/partner/{slug}', [PartnerController::class, 'edit'])->name('partner.detail.edit');
        Route::delete('/partner/{slug}', [PartnerController::class, 'destroy'])->name('partner.detail.destroy');

        Route::get('/kuesioner', [KuesionerController::class, 'list'])->name('kuesioner.list');

        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/users', [UsersController::class, 'store'])->name('users.store');
        Route::get('/users/{id}', [UsersController::class, 'detail'])->name('users.detail');
        Route::patch('/users/{id}', [UsersController::class, 'edit'])->name('users.detail.edit');
        Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.detail.destroy');

        Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blogDetail/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
        Route::get('/blogEdit/{slug}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blogUpdate/{slug}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/blogDelete/{slug}', [BlogController::class, 'destroy'])->name('blog.destroy');
    });
    route::get('/test', [DashboardController::class, 'test']);
});

require __DIR__ . '/auth.php';

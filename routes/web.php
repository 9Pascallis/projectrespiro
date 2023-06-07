<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\SubKategoriController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AllocationController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\ProductionPlanController;
use App\Http\Controllers\KonfirmasiPermintaanController;
use App\Http\Controllers\BudgettingController;
use App\Http\Controllers\BeforeKonfirmController;
use App\Http\Controllers\RequestProductionPlanController;
use App\Http\Controllers\RequestWorksheetController;
use App\Http\Controllers\WorksheetController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\ItemProdukController;
use App\Http\Controllers\BarangMentahController;
use App\Http\Controllers\ScheduleController;













/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login/login');
});


// Template
Route::get('/dashboard', function () {
    return view('layout/dashboard');
});



// Menu Sales
    // Request Production
  

    
    
        Route::get('/dashboard-permintaan', [PermintaanController::class, 'index'])->name('dashboard-permintaan');
        Route::get('/input-permintaan', [PermintaanController::class, 'create'])->name('input-permintaan');
        Route::post('/insert-Permintaan', [PermintaanController::class, 'store'])->name('insert-Permintaan');

        Route::get('/input-warna/{id}', [ItemProdukController::class, 'create'])->name('input-warna');
        Route::post('/insert-warna', [ItemProdukController::class, 'store'])->name('insert-warna');
        Route::get('/hapus-item-produk{id}', [ItemProdukController::class, 'delete'])->name('hapus-item-produk');



        Route::get('/detail-permintaan/{id}', [ItemProdukController::class, 'show'])->name('detail-permintaan');
         


// Menu Supply Chain
        // Confirm Request

        Route::get('/dashboard-konfirmasi', [KonfirmasiPermintaanController::class, 'index'])->name('dashboard-konfirmasi');
        Route::get('/konfirmasi-permintaan/{id}', [KonfirmasiPermintaanController::class, 'create'])->name('konfirmasi-permintaan');
        Route::post('/tambah-konfirmasi', [KonfirmasiPermintaanController::class, 'store'])->name('tambah-konfirmasi');
    
        Route::get('/before-konfirmasi', [BeforeKonfirmController::class, 'index'])->name('before-konfirmasi');


        // Production Plan    
       
            Route::get('/dashboard-production-plan', [ProductionPlanController::class, 'index'])->name('dashboard-production-plan');
            Route::get('/input-production-plan/{id}', [ProductionPlanController::class, 'create'])->name('input-production-plan');
            Route::post('/tambah-productionPlan', [ProductionPlanController::class, 'store'])->name('tambah-data');
            Route::get('/request-production', [RequestProductionPlanController::class, 'index'])->name('request-production');


            Route::get('/budgeting', [BudgettingController::class, 'index'])->name('budgeting');
            Route::get('/filter', [BudgettingController::class, 'filter'])->name('filter');

// Menu Tim Produksi
    // Worksheet



    Route::get('/worksheet', [WorksheetController::class, 'index'])->name('worksheet');
    Route::get('/request-worksheet', [RequestWorksheetController::class, 'index'])->name('request-worksheet');
    Route::get('/input-worksheet/{id}', [WorksheetController::class, 'create'])->name('input-worksheet');
    Route::post('/tambah-worksheet', [WorksheetController::class, 'store'])->name('tambah-worksheet');


    Route::get('/barang-mentah/{id}', [BarangMentahController::class, 'create'])->name('barang-mentah');
    Route::post('/insert-shell-fabric', [BarangMentahController::class, 'shellfabric'])->name('insert-shell-fabric');
    Route::post('/insert-linning', [BarangMentahController::class, 'linning'])->name('insert-linning');
    Route::post('/insert-interlinning', [BarangMentahController::class, 'interlining'])->name('insert-interlinning');
    Route::post('/insert-trimming', [BarangMentahController::class, 'trimming'])->name('insert-trimming');
 

    Route::get('/detail-worksheet/{id}', [WorksheetController::class, 'show'])->name('detail-worksheet');
    

    //  Production Status   
        Route::get('/dashboard-production-status', function () {
            return view('production status/dashboardProductionStatus');
        });
        Route::get('/dashboard-cutting-output', function () {
            return view('production status/dashboardCuttingOutput');
        });
        Route::get('/detail-cutting-output', function () {
            return view('production status/detailCuttingOutput');
        });
        Route::get('/input-cutting-output', function () {
            return view('production status/inputCuttingOutput');
        });


        Route::get('/dashboard-sewing-output', function () {
            return view('production status/dashboardSewingOutput');
        });

        Route::get('/dashboard-sewing-process', function () {
            return view('production status/dashboardSewingProcess');
        });
        Route::get('/detail-sewing-output', function () {
            return view('production status/detailSewingOutput');
        });
        Route::get('/input-sewing-output', function () {
            return view('production status/inputSewingOutput');
        });
        Route::get('/dashboard-schedule', [ScheduleController::class, 'index'])->name('dashboard-schedule');
        Route::get('/input-schedule/{id}', [ScheduleController::class, 'create'])->name('input-schedule');
        Route::get('/tambah-schedule', [ScheduleController::class, 'tambah'])->name('tambah-schedule');
        Route::post('/insert-schedule', [ScheduleController::class, 'store'])->name('insert-schedule');
        Route::get('/edit-schedule/{id}', [ScheduleController::class, 'edit']) ->name('edit-schedule');
        Route::post('/update-schedule/{id}', [ScheduleController::class, 'update']) ->name('update-schedule');


// Menu Evaluation
    // Evaluation
        Route::get('/evaluate', function () {
            return view('evaluation/evaluate');
        });
    
    // History        
        Route::get('/history', function () {
            return view('evaluation/history');
        });

        Route::get('/detail-history', function () {
            return view('evaluation/detailHistory');
        });

        



// Menu Data Master
    // Data Master User
    Route::get('/dashboard-sales', function () {
        return view('master data/User/dashboardSales');
    });
    Route::get('/dashboard-supply-chain', function () {
        return view('master data/User/dashboardSupplyChain');
    });
    Route::get('/dashboard-tim-produksi', function () {
        return view('master data/User/dashboardTimProduksi');
    });

    Route::get('/add-sales', function () {
        return view('master data/User/tambahSales');
    });
    Route::get('/add-supply-chain', function () {
        return view('master data/User/tambahSupplyChain');
    });
    Route::get('/add-tim-produksi', function () {
        return view('master data/User/tambahTimProduksi');
    });


// Data Master
    Route::get('/dashboard-Jenis-Produk', [JenisProdukController::class, 'index'])->name('dashboard-Jenis-Produk');
    Route::get('/tambah-Jenis-Produk', [JenisProdukController::class, 'create'])->name('tambah-Jenis-Produk');
    Route::post('/insert-Jenis-Produk', [JenisProdukController::class, 'store'])->name('insert-Jenis-Produk');
    Route::get('/hapus-Jenis-Produk{id}', [JenisProdukController::class, 'delete'])->name('hapus-Jenis-Produk');



    Route::get('/Sub-Kategori', [SubKategoriController::class, 'index'])->name('Sub-Kategori');
    Route::get('/tambah-Sub-Kategori', [SubKategoriController::class, 'create'])->name('tambah-Sub-Kategori');
    Route::post('/insert-Sub-Kategori', [SubKategoriController::class, 'store'])->name('insert-Sub-Kategori');
    Route::get('/hapus-Sub-Kategori{id}', [SubKategoriController::class, 'delete'])->name('hapus-Sub-Kategori');



    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/tambah-Kategori', [KategoriController::class, 'create'])->name('tambah-Kategori');
    Route::post('/insert-Kategori', [KategoriController::class, 'store'])->name('insert-Kategori');
    Route::get('/hapus-Kategori{id}', [KategoriController::class, 'delete'])->name('hapus-Kategori');


    Route::get('/Allocation', [AllocationController::class, 'index'])->name('Allocation');
    Route::get('/tambah-Allocation', [AllocationController::class, 'create'])->name('tambah-Allocation');
    Route::post('/insert-Allocation', [AllocationController::class, 'store'])->name('insert-Allocation');
    Route::get('/hapus-Allocation{id}', [AllocationController::class, 'delete'])->name('hapus-Allocation');

    Route::get('/Warna', [WarnaController::class, 'index'])->name('Warna');
    Route::get('/tambah-Warna', [WarnaController::class, 'create'])->name('tambah-Warna');
    Route::post('/insert-Warna', [WarnaController::class, 'store'])->name('insert-Warna');
    Route::get('/hapus-Warna{id}', [WarnaController::class, 'delete'])->name('hapus-Warna');

    Route::get('/Ukuran', [UkuranController::class, 'index'])->name('Ukuran');
    Route::get('/tambah-Ukuran', [UkuranController::class, 'create'])->name('tambah-Ukuran');
    Route::post('/insert-Ukuran', [UkuranController::class, 'store'])->name('insert-Ukuran');
    Route::get('/hapus-Ukuran{id}', [UkuranController::class, 'delete'])->name('hapus-Ukuran');



    

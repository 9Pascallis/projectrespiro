<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisProdukController;


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


// Menu Dashboard
Route::get('/dashboard-Permintaan', function () {
    return view('dashboard/dashboardPermintaan');
});

Route::get('/dashboard-Worksheet', function () {
    return view('dashboard/dashboardWorksheet');
});

// Menu Sales
    // Request Production
        Route::get('/permintaan-konfirmasi', function () {
            return view('sales/permintaanKonfirmasi');
        });

        Route::get('/permintaan-belum-konfirmasi', function () {
            return view('sales/permintaanBelumKonfirmasi');
        });

        Route::get('/input-permintaan', function () {
            return view('sales/inputPermintaan');
        });

        Route::get('/detail-permintaan', function () {
            return view('sales/detailPermintaan');
        });


// Menu Supply Chain
        // Confirm Request
            Route::get('/dashboard-konfirmasi', function () {
                return view('supply chain/dashboardKonfirmasi');
            });

            Route::get('/konfirmasi-permintaan', function () {
                return view('supply chain/konfirmasiPermintaan');
            });

        // Production Plan    
            Route::get('/input-production-plan', function () {
                return view('production planning/inputProductionPlan');
            });

            Route::get('/dashboard-production-plan', function () {
                return view('production planning/dashboardProductionPlan');
            });

            Route::get('/budgeting', function () {
                return view('production planning/budgeting');
            });

// Menu Tim Produksi
    // Worksheet
        Route::get('/worksheet', function () {
            return view('tim produksi/worksheet');
        });

        Route::get('/input-worksheet', function () {
            return view('tim produksi/inputWorksheet');
        });

        Route::get('/detail-worksheet', function () {
            return view('tim produksi/detailWorksheet');
        });


    //  Production Status   
        Route::get('/dashboard-production-status', function () {
            return view('production status/dashboardProductionStatus');
        });
        Route::get('/dashboard-cutting-output', function () {
            return view('production status/dashboardCuttingOutput');
        });

        Route::get('/dashboard-cutting-process', function () {
            return view('production status/dashboardCuttingProcess');
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
        Route::get('/input-schedule', function () {
            return view('production status/inputSchedule');
        });


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


// Data Master Sales

    Route::post('/insertdata', [JenisProdukController::class, 'store']);

    Route::get('/dashboard-jenis-produk', function () {
        return view('master data/Sales/dashboardJenisProduk');
    });
    Route::get('/dashboard-sub-kategori', function () {
        return view('master data/Sales/dashboardSubKategori');
    });
    Route::get('/dashboard-kategori', function () {
        return view('master data/Sales/dashboardKategori');
    });


    Route::get('/add-jenis-produk', function () {
        return view('master data/Sales/tambahJenisProduk');
    });

    Route::get('/add-sub-kategori', function () {
        return view('master data/Sales/tambahSubKategori');
    });
    Route::get('/add-kategori', function () {
        return view('master data/Sales/tambahKategori');
    });


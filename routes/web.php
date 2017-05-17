<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () {
    return Redirect::to(url('/login'));
});


Route::get('/home', function () {
    return Redirect::to( url('/login'));
});

//register
Route::get('/signup', 'UsersController@index');
Route::post('/signup', 'UsersController@store');

//authentication
Auth::routes();
Route::get('/admin', 'AdminController@index');
Route::get('/koki', 'KokiDaftarPesananController@index');
Route::get('/kasir', 'KasirDaftarPesananController@index');
Route::get('/pantry', 'PantryRempahController@index');
Route::get('/pelayan', 'PelayanCekKesediaanMejaController@index');
Route::get('/customerservice/{id_pesanan}', 'CustomerserviceContoller@index');

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);

//koki
Route::get('/bahanbaku', 'KokiBahanBakuController@bahanbaku');  
Route::get('/tambahmenu', 'KokiTambahPesanan@tambahpesanan');
Route::get('/notification', 'KokiDaftarPesananController@notification');
Route::get('/daftarpesanan', 'KokiDaftarPesananController@daftarPesanan');
Route::post('/editdaftarpesanan', 'KokiDaftarPesananController@editDaftarPesanan');
Route::get('/pilihresep/{nama_makanan_minuman}/{jenis_makanan_minuman}', 'KokiPilihResepController@index');
Route::post('/tambahpesanan/additem', 'KokiTambahPesanan@additem');
Route::post('/tambahresep', 'KokiPilihResepController@tambahresep');
Route::post('/notifpanty', 'KokiBahanBakuController@notifPantry');  


//pelayan
Route::get('/tambahpesanan/{nomor_meja}/{id_pesanan}', 'PelayanTambahPesananController@show');
Route::get('/pesanansiap', 'PelayanPesananSiapController@index');
Route::post('/meja/editmeja', 'PelayanCekKesediaanMejaController@editItem'); 
Route::get('/ajax', 'PelayanCekKesediaanMejaController@ajax');
Route::post('/pesanan/editpesanan', 'PelayanTambahPesananController@editPesanan'); 
Route::post('/pesanan/storepesanan', 'PelayanTambahPesananController@store'); 
Route::post('/pesanan/simpanpesanan', 'PelayanTambahPesananController@simpanPesanan'); 
Route::get('/pelayannotification', 'PelayanPesananSiapController@notification');
Route::get('/pelayanpesanansiap', 'PelayanPesananSiapController@pesanansiap');
Route::post('/pesanansudahdiantarkan', 'PelayanPesananSiapController@pesananSudahDiantarkan');

//pantry
Route::get('/sayuran', 'PantrySayuranController@index');
Route::get('/bumbu', 'PantryBumbuController@index');
Route::get('/buah', 'PantryBuahController@index');
Route::get('/daging', 'PantryDagingController@index');
Route::get('/bahanpokok', 'PantryBahanPokokController@index');
Route::get('/tambahbahanbaku', 'PantryBahanBakuController@tambahBahanBaku');
Route::get('/notifpantrys', 'PantryBahanBakuController@notifPantry');
Route::post('/registerPantry', 'PantryBahanBakuController@registerPantry');
Route::post('/deleteRempah', 'PantryRempahController@deleteItemRempah');
Route::post('/editRempah', 'PantryRempahController@editItemRempah');
Route::get('/edit', 'PantryRempahController@viewRempah');
Route::post('/deleteRempah', 'PantryRempahController@deleteItemRempah');
Route::post('/editRempah', 'PantryRempahController@editItemRempah');
Route::get('/edit', 'PantryRempahController@viewRempah');
Route::post('/deletepokok', 'PantryBahanPokokController@deleteItemRempah');
Route::post('/deletebuah', 'PantryBuahController@deleteItemRempah');
Route::post('/deletesayuran', 'PantrySayuranController@deleteItemRempah');
Route::post('/deletebumbu', 'PantryBumbuController@deleteItemRempah');
Route::post('/deletedaging', 'PantryDagingController@deleteItemRempah');

//kasir
Route::get('/bayarpesanan/{id_pesanan}', 'KasirDaftarPesananController@show');
Route::get('/hari', 'KasirPembukuanController@hari');
Route::get('/bulan', 'KasirPembukuanController@bulan');
Route::get('/tahun', 'KasirPembukuanController@tahun');
Route::post('/bayar', 'KasirDaftarPesananController@store');
Route::post('/bayar', 'KasirDaftarPesananController@store');

//Kuisioner
Route::get('/olahkuisioner', 'CustomerserviceContoller@olahkuisioner');
Route::post('/tambahkuisioner','CustomerserviceContoller@tambahKuisioner');

//admin
Route::get('/daftarpegawai', 'AdminController@show');
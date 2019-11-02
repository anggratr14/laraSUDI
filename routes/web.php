<?php

use Illuminate\Http\Request;
use App\Siswa;

Route::get('/', function () {
    return view('auth.login');
});



// table siswa

Route::get('/siswa', function () {
	$siswa=Siswa::all();
	return view('siswa.view',compact('siswa'));
})->name("siswa.View");



Route::get('/siswa/Add', function () {
	return view('siswa.add');
})->name("siswa.Add");

Route::post('/siswa/CreateAdd', function (Request $request) {
	$siswa = new Siswa;
	$siswa->nis 	= $request->nis;
	$siswa->nama 	= $request->nama;
	$siswa->no_tlp 	= $request->no_tlp;
 	$siswa->save();

 	return redirect()->route('siswa.View');

})->name("siswa.CreateAdd");





Route::get('/siswa/{nis}/Update', function ($nis) {
	$siswa = Siswa::find($nis);

    return view('siswa.update',compact('siswa'));
})->name("siswa.Update");

Route::put('/siswa/{nis}/CreateUpdate', function (Request $request,$nis) {
	$siswa = Siswa::find($nis);
	$siswa->nis 	= $request->nis;
	$siswa->nama 	= $request->nama;
	$siswa->no_tlp 	= $request->no_tlp;
 	$siswa->update();

 	return redirect()->route('siswa.View');

})->name("siswa.CreateUpdate");




Route::get('/siswa/{nis}/Delete', function ($nis) {
	$siswa = Siswa::find($nis);

	$siswa->delete();

 	return redirect()->route('siswa.View');
   
})->name("siswa.Delete");






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

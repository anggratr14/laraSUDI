<?php

use Illuminate\Http\Request;
use App\Siswa;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tampil', function () {
	$siswa = Siswa::all();
    return view('tampil',compact('siswa'));
})->name("siswa.index");

Route::get('/tampil/{nis}/edit', function ($nis) {
	$siswa = Siswa::find($nis);
	
    return view('edit',compact('siswa'));
})->name("siswa.edit");

//Post data
Route::post("/tampil",function(Request $request){
	$siswa = new Siswa;
	$siswa->nis 	= $request->nis;
	$siswa->nama 	= $request->nama;
	$siswa->no_tlp 	= $request->no_tlp;
	$siswa->save();

	return redirect()->back();
})->name("siswa.store");

//Update data
Route::put("/tampil/{nis}",function(Request $request,$nis){
	$siswa =  Siswa::find($nis);
	$siswa->nis 	= $request->nis;
	$siswa->nama 	= $request->nama;
	$siswa->no_tlp 	= $request->no_tlp;
	$siswa->update();

	return redirect()->route("siswa.index");
})->name("siswa.update");

Route::delete("/tampil/{nis}",function(Request $request,$nis){
	$siswa =  Siswa::find($nis);	
	$siswa->delete();
	return redirect()->route("siswa.index");
})->name("siswa.delete");

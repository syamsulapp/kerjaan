<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Desain Logic Form Dan DB

- DB => migration table("pengangkatan");

- Schema::table("pengangkatan"), function() {
	- NoRegPengangkatan => primary_key, unique
	- layanan => string 128 
	- provinsi => string 255
	- kabupaten/kota => string 255
	- jenis_kelamin => string 255
	- objek_kdh => string 255
	- penyebab_kdh => string 255
- }
- // beda berkas
- Schema::table("berkas_pengangkatan")->join("pengangkatan"), function() {
	- NoReg_BerkasPengangkatan => primary_key, unique => relation->with(NoRegPengangkatan);
	- img_fc => string 255
	- img_beritaacara =>  string 255
	- dll;
- }


- DB => migration table("pemberhentian");


- Schema::table("pemberhentian"), function() {
	- NoRegPemberhentian => primary_key, unique 
	- layanan => string 128
	- provinsi => string 255
	- kabupaten/kota => string 255
	- jenis_kelamin => string 255
	- objek_kdh => string 255
	- penyebab_kdh => string 255
}
// beda berkas
- Schema::table("berkas_pemberhentian")->join("pemberhentian"), function() {
	- noReg_BerkasPemberhentian => primary_key, unique => relation->with(NoRegPemberhentian)
	- img_fc => string 255
	- img_beritaacara =>  string 255
	- dll;
- }


- if(Auth::user()->status == 'pengangkatan') {
	- Route::post('pengangkatan',[Pengangkatan::class, 'post'])->name('pengangkatan');
- } else if (Auth::user()->status == 'pemberhentian') {
	- Route::post('pemberhentian',[Pemberhentian::class, 'post'])->name('pemberhentian');
- }
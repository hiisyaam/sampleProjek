<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Basic
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::logout');

//Routes untuk bagian data santri
$routes->get('/santriSD', 'Santri::index');
$routes->get('/santriSMP','Santri::SMP');
$routes->get('/santriSMA','Santri::SMA');

$routes->get('/santri/(:num)', 'Santri::detail/$1');
$routes->get('/santri/create', 'Santri::create');
$routes->post('/santri/save', 'Santri::save');
$routes->delete('santri/delete/(:num)','Santri::delete/$1');


//Routes Kegiatan Tahfidz
$routes->get('/tahfidz/listHalaqoh','Tahfidz::index');
$routes->get('/tahfidz/rekap','Tahfidz::rekapTahfidz');
$routes->post('/tahifdz/rekap/save','Tahfidz::save');


//Routes Kegiatan Klinik
$routes->get('/kesehatan','Kesehatan::index');
$routes->post('kesehatan/save','Kesehatan::save');
$routes->get('/Kesehatan/dataPasien','Kesehatan::listPasien');
$routes->get('/kesehatan/detailPasien/(:num)','Kesehatan::detail/$1');
$routes->delete('kesehatan/delete/(:num)','Kesehatan::delete/$1');


//Routes Kegiatan Sekolah
$routes->get('/mapel','Sekolah::index');
$routes->post('/mapel/save','Sekolah::save');
$routes->get('/mapel/(:num)','Sekolah::detail/$1');
$routes->delete('/mapel/delete/(:num)','Sekolah::delete/$1');
//Arsip Prestasi
$routes->get('/prestasi','Prestasi::index');
$routes->post('/prestasi/save','Prestasi::save');
//Pengumuman Digital
$routes->get('/pengumuman','Pengumuman::index');

// $routes->get('/tampilData/guru','ListData::guru');
// $routes->get('/tampilData/staffTU','ListData::staffTU');
// $routes->get('/tampilData/amil','ListData::amil');

// $routes->get('/absensi/sd','Absen::SD');
// $routes->get('/absensi/smp','Absen::SMP');
// $routes->get('/absensi/sma','Absen::SMA');
// $routes->get('/absensi/karyawan','Absen::karyawan');

// $routes->get('/Kesantrian/penilaian', 'Kesantrian::index');
// $routes->get('/Kesantrian/dataNilai', 'Kesantrian::dataNilai');
// $routes->get('/Kesantrian/izin','Kesantrian::izin');
// $routes->get('/Kesantrian/dataPerizinan','Kesantrian::dataIzin');
// $routes->get('/Kesantrian/pelanggaran','Kesantrian::pelanggaran');
// $routes->get('/Kesantrian/konseling','Kesantrian::konseling');
<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Auth/login';

$route['ganti_password'] = 'Auth/changePassword';

$route['dashboard'] = 'Dashboard_Controller';

$route['angkatan'] = 'Angkatan_Controller';
$route['angkatan/view/(:any)'] = 'Angkatan_Controller/view/$1';

$route['data/alumni'] = 'data/Alumni_Controller';
$route['data/alumni/view/(:any)'] = 'data/Alumni_Controller/view/$1';
$route['data/alumni/laporan_pdf'] = 'data/Alumni_Controller/laporan_pdf';

$route['data/banner'] = 'data/Banner_Controller';
$route['data/banner/create'] = 'data/Banner_Controller/create';
$route['data/banner/view/(:any)'] = 'data/Banner_Controller/view/$1';
$route['data/banner/delete/(:any)'] = 'data/Banner_Controller/delete/$1';
$route['data/banner/update/(:any)'] = 'data/Banner_Controller/update/$1';

$route['data/jurnal'] = 'data/Jurnal_Controller';
$route['data/jurnal/upload'] = 'data/Jurnal_Controller/upload';
$route['data/jurnal/upload_proses'] = 'data/Jurnal_Controller/upload_proses';
$route['data/jurnal/delete/(:any)'] = 'data/Jurnal_Controller/delete/$1';

$route['data/kuesioner'] = 'data/Kuesioner_Controller';
$route['data/kuesioner/create'] = 'data/Kuesioner_Controller/create';
$route['data/kuesioner/update/(:any)'] = 'data/Kuesioner_Controller/update/$1';
$route['data/kuesioner/delete/(:any)'] = 'data/Kuesioner_Controller/delete/$1';

$route['data/tracer_study'] = 'data/TracerStudy_Controller';
$route['data/tracer_study/view/(:any)'] = 'data/TracerStudy_Controller/view/$1';
$route['data/tracer_study/delete/(:any)'] = 'data/TracerStudy_Controller/delete/$1';

$route['service/user'] = 'service/User_Controller';
$route['service/user/create'] = 'service/User_Controller/create';
$route['service/user/view/(:any)'] = 'service/User_Controller/view/$1';
$route['service/user/update/(:any)'] = 'service/User_Controller/update/$1';
$route['service/user/delete/(:any)'] = 'service/User_Controller/delete/$1';

$route['service/profile'] = 'service/Profile_Controller';
$route['service/profile/lengkapi'] = 'service/Profile_Controller/lengkapi';
$route['service/profile/edit/(:any)'] = 'service/Profile_Controller/edit/$1';
$route['service/profile/edit_foto'] = 'service/Profile_Controller/edit_foto';
$route['service/profile/edit_foto_proses'] = 'service/Profile_Controller/edit_foto_proses';
$route['service/profile/tambah_riwayat'] = 'service/Profile_Controller/tambah_riwayat';

$route['service/loker'] = 'service/Loker_Controller';
$route['service/loker/create'] = 'service/Loker_Controller/create';
$route['service/loker/view/(:any)'] = 'service/Loker_Controller/view/$1';
$route['service/loker/update/(:any)'] = 'service/Loker_Controller/update/$1';
$route['service/loker/delete/(:any)'] = 'service/Loker_Controller/delete/$1';

$route['service/event'] = 'service/Event_Controller';
$route['service/event/create'] = 'service/Event_Controller/create';
$route['service/event/view/(:any)'] = 'service/Event_Controller/view/$1';
$route['service/event/update/(:any)'] = 'service/Event_Controller/update/$1';
$route['service/event/delete/(:any)'] = 'service/Event_Controller/delete/$1';

$route['service/testimoni'] = 'service/Testimoni_Controller';
$route['service/testimoni/create'] = 'service/Testimoni_Controller/create';
$route['service/testimoni/view/(:any)'] = 'service/Testimoni_Controller/view/$1';
$route['service/testimoni/update/(:any)'] = 'service/Testimoni_Controller/update/$1';
$route['service/testimoni/delete/(:any)'] = 'service/Testimoni_Controller/delete/$1';

$route['service/kritik_dan_saran'] = 'service/Kritiks_Controller';
$route['service/kritik_dan_saran/create'] = 'service/Kritiks_Controller/create';
$route['service/kritik_dan_saran/view/(:any)'] = 'service/Kritiks_Controller/view/$1';
$route['service/kritik_dan_saran/update/(:any)'] = 'service/Kritiks_Controller/update/$1';
$route['service/kritik_dan_saran/delete/(:any)'] = 'service/Kritiks_Controller/delete/$1';

$route['service/tracer'] = 'service/Tracer_Controller';
$route['service/tracer/tambah'] = 'service/Tracer_Controller/tambah';
$route['service/tracer/edit/(:any)'] = 'service/Tracer_Controller/edit/$1';
$route['service/tracer/edit_proses'] = 'service/Tracer_Controller/edit_proses';
$route['service/list_tracer'] = 'service/Tracer_Controller/list_tracer';

$route['prodi'] = 'Prodi_Controller';
$route['prodi/tambah'] = 'Prodi_Controller/tambah';
$route['prodi/edit/(:any)'] = 'Prodi_Controller/edit/$1';
$route['prodi/edit_foto'] = 'Prodi_Controller/edit_foto';
$route['prodi/edit_foto_proses'] = 'Prodi_Controller/edit_foto_proses';

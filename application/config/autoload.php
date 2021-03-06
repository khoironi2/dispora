<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| This file specifies which systems should be loaded by default.
|
| In order to keep the framework as light-weight as possible only the
| absolute minimal resources are loaded by default. For example,
| the database is not connected to automatically since no assumption
| is made regarding whether you intend to use it.  This file lets
| you globally define which systems you would like loaded with every
| request.
|
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

/*
| -------------------------------------------------------------------
|  Auto-load Packages
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database', 'session', 'form_validation', 'upload', 'curl', 'email');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url', 'form', 'file');

/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| NOTE: Do not include the "_lang" part of your file.  For example
| "codeigniter_lang.php" would be referenced as array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('first_model', 'second_model');
|
| You can also supply an alternative model name to be assigned
| in the controller:
|
|	$autoload['model'] = array('first_model' => 'first');
*/
$autoload['model'] = array('User_model', 'Pengaturan_model', 'Wilayah_model', 'Jenis_kegiatan_model', 'Bursa_kegiatan_model', 'Paskibraka_model', 'Pemuda_pelopor_model', 'Prestasi_model', 'Papn_model', 'LombaBB_model', 'Kelompok_LombaBB_model', 'LombaTUB_model', 'Kelompok_LombaTUB_model', 'Duta_pancasila_model', 'Capaian_target_kepeloporan_model', 'Peta_sumberdaya_pemuda_model', 'Kerjasama_kepeloporan_model', 'History_kegiatan_user_model', 'Beranda_model', 'Notifikasi_forum_model', 'Seleksi_kewirausahaan_muda_pemula_model', 'Gelar_karya_pemuda_model', 'Pelatihan_keterampilan_model', 'Apresiasi_penghargaan_model', 'Daya_dukung_sarpras_model', 'Proposal_sarpras_model', 'Capaian_target_penghargaan_sarpras_kwu_model', 'Kemah_bakti_pramuka_model', 'Kelompok_Kemah_bakti_pramuka_model', 'Pelatihan_keterampilan_kepramukaan_model', 'Knpi_model', 'Ldk_model', 'Revitalisasi_kepemudaan_model', 'Evaluasi_kepemudaan_model', 'Perijinan_organisasi_kepemudaan_model', 'Program_dan_pembinaan_kepramukaan_model', 'Program_dan_pembinaan_keorganisasian_model', 'Kreatifitas_lembaga_pemuda_model', 'Capaian_target_kepramukaan_model', 'Permintaan_data_model', 'Universal_model');

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use function Illuminate\Events\queueable;

class PolaKarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $esselon_collection = [

            ['id_esselon' => '1','nama_esselon' => '2A'],
            ['id_esselon' => '2','nama_esselon' => '2B'],
            ['id_esselon' => '3','nama_esselon' => '3A'],
            ['id_esselon' => '4','nama_esselon' => '3B'],
            ['id_esselon' => '5','nama_esselon' => '4A'],
            ['id_esselon' => '6','nama_esselon' => '4B'],
            ['id_esselon' => '0','nama_esselon' => '-'],
        ];

        $jenis_jabatan_collection = [
            ['id_jenis_jabatan' => '1','nama_jenis_jabatan' => 'Struktural'],
            ['id_jenis_jabatan' => '2','nama_jenis_jabatan' => 'Fungsional'],
            ['id_jenis_jabatan' => '3','nama_jenis_jabatan' => 'Pelaksana'],
            ['id_jenis_jabatan' => '0','nama_jenis_jabatan' => '-'],
            ];

        $fungsional_collection = [
            ['id_fungsional' => '1','nama_fungsional' => 'Pemula'],
            ['id_fungsional' => '2','nama_fungsional' => 'Terampil'],
            ['id_fungsional' => '3','nama_fungsional' => 'Mahir'],
            ['id_fungsional' => '4','nama_fungsional' => 'Penyelia'],
            ['id_fungsional' => '5','nama_fungsional' => 'Ahli Pertama'],
            ['id_fungsional' => '6','nama_fungsional' => 'Ahli Muda'],
            ['id_fungsional' => '7','nama_fungsional' => 'Ahli Madya'],
            ['id_fungsional' => '8','nama_fungsional' => 'Ahli Utama'],
            ['id_fungsional' => '0','nama_fungsional' => '-'],

        ];

        $pola_collection = [
            //Badan dan Inspektorat
            ['esselon' => '2','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JFT_Pratama.png'],
            ['esselon' => '3','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-Administrator.png'],
            ['esselon' => '4','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-Administrator.png'],
            ['esselon' => '5','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-Pengawas.png'],

            ['esselon' => '0','fungsional' => '2','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Terampil.png'],
            ['esselon' => '0','fungsional' => '3','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Penyelia.png'],
            ['esselon' => '0','fungsional' => '4','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Mahir.png'],
            ['esselon' => '0','fungsional' => '5','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Ahli_Pertama.png'],
            ['esselon' => '0','fungsional' => '6','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Ahli_Muda.png'],
            ['esselon' => '0','fungsional' => '7','kode_jabatan' => '2','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-JF_Ahli_Madya.png'],

            ['esselon' => '0','fungsional' => '0','kode_jabatan' => '3','id_opd' => '[{"id_opd":1,"nama":"BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA"},{"id_opd":2,"nama":"BADAN KESATUAN BANGSA DAN POLITIK"},{"id_opd":3,"nama":"BADAN PENANGGULANGAN BENCANA DAERAH"},{"id_opd":4,"nama":"BADAN PENDAPATAN DAERAH"},{"id_opd":5,"nama":"BADAN PENELITIAN DAN PENGEMBANGAN"},{"id_opd":6,"nama":"BADAN PENGELOLA KEUANGAN DAN ASET DAERAH"},{"id_opd":7,"nama":"BADAN PERENCANAAN DAN PEMBANGUNAN DAERAH"},{"id_opd":30,"nama":"INSPEKTORAT"}]','url' => '/pola_karir/BKPSDM-Pelaksana.png'],

            //Dinas

            ['esselon' => '2','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JFT_Pratama.png'],
            ['esselon' => '3','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-Administrator.png'],
            ['esselon' => '4','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-Administrator.png'],
            ['esselon' => '5','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-Pengawas.png'],

            ['esselon' => '0','fungsional' => '2','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Terampil.png'],
            ['esselon' => '0','fungsional' => '3','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Penyelia.png'],
            ['esselon' => '0','fungsional' => '4','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Mahir.png'],
            ['esselon' => '0','fungsional' => '5','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Ahli_Pertama.png'],
            ['esselon' => '0','fungsional' => '6','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Ahli_Muda.png'],
            ['esselon' => '0','fungsional' => '7','kode_jabatan' => '2','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-JF_Ahli_Madya.png'],

            ['esselon' => '0','fungsional' => '0','kode_jabatan' => '3','id_opd' => '[{"id_opd":8,"nama":"DINAS KESEHATAN"},{"id_opd":9,"nama":"DINAS KEBUDAYAAN DAN PARIWISATA"},{"id_opd":10,"nama":"DINAS KEPEMUDAAN DAN OLAHRAGA"},{"id_opd":11,"nama":"DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL"},{"id_opd":12,"nama":"DINAS KETAHANAN PANGAN"},{"id_opd":13,"nama":"DINAS KOMUNIKASI, INFORMATIKA, STATISTIK DAN PERSANDIAN"},{"id_opd":14,"nama":"DINAS KOPERASI , USAHA KECIL, DAN MENENGAH"},{"id_opd":15,"nama":"DINAS LINGKUNGAN HIDUP DAN KEBERSIHAN"},{"id_opd":16,"nama":"DINAS PEKERJAAN UMUM DAN PENATAAN RUANG"},{"id_opd":17,"nama":"DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN"},{"id_opd":18,"nama":"DINAS PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK"},{"id_opd":19,"nama":"DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU"},{"id_opd":20,"nama":"DINAS PENDIDIKAN"},{"id_opd":21,"nama":"DINAS PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA"},{"id_opd":22,"nama":"DINAS PERDAGANGAN DAN PERINDUSTRIAN"},{"id_opd":23,"nama":"DINAS PERHUBUNGAN"},{"id_opd":24,"nama":"DINAS PERPUSTAKAAN DAN KEARSIPAN"},{"id_opd":25,"nama":"DINAS PERTANAHAN"},{"id_opd":26,"nama":"DINAS PERTANIAN DAN PERIKANAN"},{"id_opd":27,"nama":"DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN"},{"id_opd":28,"nama":"DINAS SOSIAL"},{"id_opd":29,"nama":"DINAS TENAGA KERJA"}]','url' => '/pola_karir/DINKES-Pelaksana.png'],

            // Kecamatan
            ['esselon' => '2','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JFT_Pratama.png'],
            ['esselon' => '3','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-Administrator.png'],
            ['esselon' => '4','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-Administrator.png'],
            ['esselon' => '5','fungsional' => '0','kode_jabatan' => '1','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-Pengawas.png'],

            ['esselon' => '0','fungsional' => '2','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Terampil.png'],
            ['esselon' => '0','fungsional' => '3','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Penyelia.png'],
            ['esselon' => '0','fungsional' => '4','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Mahir.png'],
            ['esselon' => '0','fungsional' => '5','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Ahli_Pertama.png'],
            ['esselon' => '0','fungsional' => '6','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Ahli_Muda.png'],
            ['esselon' => '0','fungsional' => '7','kode_jabatan' => '2','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-JF_Ahli_Madya.png'],

            ['esselon' => '0','fungsional' => '0','kode_jabatan' => '3','id_opd' => '[{"id_opd":31,"nama":"KECAMATAN BUKITRAYA"},{"id_opd":32,"nama":"KECAMATAN LIMAPULUH"},{"id_opd":33,"nama":"KECAMATAN MARPOYAN DAMAI"},{"id_opd":34,"nama":"KECAMATAN PAYUNG SEKAKI"},{"id_opd":35,"nama":"KECAMATAN PEKANBARU KOTA"},{"id_opd":36,"nama":"KECAMATAN RUMBAI"},{"id_opd":38,"nama":"KECAMATAN SAIL"},{"id_opd":39,"nama":"KECAMATAN SENAPELAN"},{"id_opd":40,"nama":"KECAMATAN SUKAJADI"},{"id_opd":42,"nama":"KECAMATAN TENAYAN RAYA"},{"id_opd":43,"nama":"SATUAN POLISI PAMONG PRAJA"},{"id_opd":44,"nama":"SEKRETARIAT DAERAH"},{"id_opd":45,"nama":"SEKRETARIAT DPRD"},{"id_opd":46,"nama":"KECAMATAN BINAWIDYA"},{"id_opd":47,"nama":"KECAMATAN TUAH MADANI"},{"id_opd":48,"nama":"KECAMATAN KULIM"},{"id_opd":49,"nama":"KECAMATAN RUMBAI BARAT"},{"id_opd":50,"nama":"KECAMATAN RUMBAI TIMUR"}]','url' => '/pola_karir/KECAMATAN-Pelaksana.png'],
            ];


        foreach ($jenis_jabatan_collection as $item){
            \App\Models\JenisJabatan::create($item);
        }
        foreach ($esselon_collection as $item){
            \App\Models\Esesslon::create($item);
        }
        foreach ($fungsional_collection as $item){
            \App\Models\Fungsional::create($item);
        }

        foreach ($pola_collection as $item){
            \App\Models\PolaKarir::create($item);
        }
    }
}

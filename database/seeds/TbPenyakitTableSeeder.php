<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbPenyakitTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tb_penyakit')->delete();

        DB::table('tb_penyakit')->insert(array (
            0 =>
            array (
                'gejala' => '1.	Batuk berdahak lebih dari 2 minggu
                             2.	Demam terus-menerus
                             3.	Lemas
                             4.	Nafsu makan menurun
                             5.	Berkeringat dingin saat malam hari tampa aktivitas
                             6.	Batuk darah',
                'id_penyakit' => 2,
                'nama_penyakit' => 'TB PARU',
                'penanganan_pertama' => 'Hasil pemeriksaan positif dilakukan Pengobatan TB selama 6 bulan menggunakan obat OAT (Obat anti TB)',
                'waktu_karantina' => 180,
            ),
            1 =>
            array (
                'gejala' => '1.	Sakit kepala
                             2.	Demam
                             3.	Lesu
                             4.	Pembekakakan kelenjar getah bening
                             5.	Sakit tenggorokan
                             6.	Sariawan terus menerus
                             7.	Munculnya ruam
                             8.	Nyeri otot dan sendi',
                'id_penyakit' => 3,
                'nama_penyakit' => 'HIV',
                'penanganan_pertama' => 'Pengobatan HIV dilakukan seumur hidup menggunakan ARV (antiretroviral)',
                'waktu_karantina' => 100,
            ),
            2 =>
            array (
                'gejala' => '1.	Perut mulas
                             2.	Tinja encer (BAB cair) atau bahkan berdarah
                             3.	Mual dan muntah4.	Pusing
                             5.	Lemas
                             6.	Nafsu makan turun
                             7.	Kulit kering
                             8.	Merasa haus terus menerus',
                'id_penyakit' => 4,
                'nama_penyakit' => 'DIARE',
                'penanganan_pertama' => 'Mengkonsusmsi banyak cairan untuk menggantikan kehilangan cairan, baik melalui oral (bias menggunakan oralit) ataupun intravena (cairan infus)Pemberian obat untuk melawan bakteri',
                'waktu_karantina' => 14,
            ),
            3 =>
            array (
                'gejala' => '1.	Hidung tersumbat atau berair2.	Bersin-bersin3.	Sesak pada bagian dada4.	Kerap merasa kelelahan5.	Demam6.	Batuk-batuk7.	Sakit tenggorokan8.	Nyeri otot',
                'id_penyakit' => 5,
                'nama_penyakit' => 'ISPA',
                'penanganan_pertama' => 'Penanganan ispa sesuai dengan keluhan biasanya di berikan obat untuk mengurangi batuk, vitamin C dan juga pereda nyeri',
                'waktu_karantina' => 10,
            ),
            4 =>
            array (
            'gejala' => '1.	Bercak-bercak berwarna terang atau kemerahan di kulit disertai dengan kurangnya kemampuan merasa, mati rasa, (suhu,tekanan dan sentuhan)
                         2.	Muncul luka tapi tidak terasa sakit
                         3.	Otot melemah terutama otot kaki dan tangan
                         4.	Prmbrsaran saraf teruta',
            'id_penyakit' => 6,
            'nama_penyakit' => 'KUSTA',
            'penanganan_pertama' => 'Hasil pemeriksaan positif kusta dilakukan pengobatan MDT(Multi Drug Therapy) selama 1 tahun 6 bulan, setelah itu melakukan pengobatan sesuai keluhan pasien',
            'waktu_karantina' => 545,
            ),
            5 =>
            array (
                'gejala' => '1.	Demam mendadak tinggi
                             2.	Nafsu makan menurun
                             3.	Mual dan muntah4.	Badan terasa lelah,lesuh dan letih terus menerus
                             5.	Nyeri di persendian,otot,tulang
                             6.	Tenggorokan sakit7.	Kepala pusing
                             8.	Muncul bintik-bintik merah
                             9.	Perdarahan dari hidung',
                'id_penyakit' => 7,
                'nama_penyakit' => 'DBD',
                'penanganan_pertama' => 'Pengobatan DBD sesuai dengan keluhan1.	Banyak minum air putih,susu putih,air kelapa,jus jambu2.	Istirahat cukup3.	Konsusmsi obat penurun panas dari dokter dan di kompres4.	Pemberian vitamin5.	Dan melakukan PSN 3M plus',
                'waktu_karantina' => 10,
            ),
            6 =>
            array (
                'gejala' => '1. Demam tinggi disertai menggigil
                             2. Batuk kering
                             3. Pilek
                             4. Hidung berair dan bersin-bersin
                             5. Nyeri tenggorokan
                             6. Sesak napas',
                'id_penyakit' => 8,
                'nama_penyakit' => 'Covid 19',
                'penanganan_pertama' => 'Penderita yang terinfeksi virus corona akan menerima terapi yang bersifat suportif untuk mengurangi gejala. Misalnya anti-piretik untuk menurunkan suhu tubuh dan cairan untuk mencegah dehidrasi, serta terapi oksigen pada pasien yang mengalami sesak napas',
                'waktu_karantina' => 14,
            ),
        ));
    }
}

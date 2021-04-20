<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbWargaTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('tb_warga')->delete();

        DB::table('tb_warga')->insert(array (
            0 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KAMAT',
                'nik' => 3524130101250009,
                'no_kk' => 1402022508650001,
                'ttl' => '1925-01-01',
            ),
            1 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'LIPA',
                'nik' => 3524130101300079,
                'no_kk' => 1402022508650001,
                'ttl' => '1930-01-01',
            ),
            2 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KAMDANI',
                'nik' => 3524130101320007,
                'no_kk' => 7312067110490000,
                'ttl' => '1932-01-01',
            ),
            3 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUSTAHAL',
                'nik' => 3524130101350015,
                'no_kk' => 3321117011940000,
                'ttl' => '1935-01-01',
            ),
            4 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SEMAH',
                'nik' => 3524130101400038,
                'no_kk' => 3321117011940000,
                'ttl' => '1940-01-01',
            ),
            5 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'BAERAN',
                'nik' => 3524130101450022,
                'no_kk' => 1402024104450001,
                'ttl' => '1945-01-01',
            ),
            6 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUNARI',
                'nik' => 3524130101480063,
                'no_kk' => 3321114107480030,
                'ttl' => '1948-01-01',
            ),
            7 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'TASAM',
                'nik' => 3524130101490008,
                'no_kk' => 3321114107700000,
                'ttl' => '1949-01-01',
            ),
            8 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'NURALIM',
                'nik' => 3524130101490010,
                'no_kk' => 1402020701840017,
                'ttl' => '1949-01-01',
            ),
            9 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MUSINEM',
                'nik' => 3524130101500001,
                'no_kk' => 3305042302490002,
                'ttl' => '1950-01-01',
            ),
            10 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'TUMIYAH',
                'nik' => 3524130101500003,
                'no_kk' => 3321111010790000,
                'ttl' => '1950-01-01',
            ),
            11 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'PASIJAH',
                'nik' => 3524130101500010,
                'no_kk' => 3321110306550000,
                'ttl' => '1950-01-01',
            ),
            12 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUKEMI',
                'nik' => 3524130101510056,
                'no_kk' => 3321064101560000,
                'ttl' => '1951-01-01',
            ),
            13 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'TARPI',
                'nik' => 3524130101520001,
                'no_kk' => 3321111603700000,
                'ttl' => '1952-01-01',
            ),
            14 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MASE',
                'nik' => 3524130101590074,
                'no_kk' => 3321116107480000,
                'ttl' => '1959-01-01',
            ),
            15 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUWARNI',
                'nik' => 3524130101590096,
                'no_kk' => 3321062803100000,
                'ttl' => '1959-01-01',
            ),
            16 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KARMANI',
                'nik' => 3524130101610046,
                'no_kk' => 1402027112590008,
                'ttl' => '1961-01-01',
            ),
            17 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MASHUR',
                'nik' => 3524130101610048,
                'no_kk' => 3321112107550000,
                'ttl' => '1961-01-01',
            ),
            18 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'YASNAN',
                'nik' => 3524130101620001,
                'no_kk' => 3321112302640000,
                'ttl' => '1962-01-01',
            ),
            19 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUHARTI',
                'nik' => 3524130101640003,
                'no_kk' => 1402025602040001,
                'ttl' => '1964-01-01',
            ),
            20 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUPIAH',
                'nik' => 3524130101650001,
                'no_kk' => 3321112107550000,
                'ttl' => '1965-01-01',
            ),
            21 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'JUARSEN',
                'nik' => 3524130101660003,
                'no_kk' => 1402024701820016,
                'ttl' => '1966-01-01',
            ),
            22 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'DEMES',
                'nik' => 3524130101680007,
                'no_kk' => 3321067008910000,
                'ttl' => '1968-01-01',
            ),
            23 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MUDAIYAH',
                'nik' => 3524130101680062,
                'no_kk' => 1402025708740001,
                'ttl' => '1968-01-01',
            ),
            24 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SENO',
                'nik' => 3524130101690056,
                'no_kk' => 1402021108820001,
                'ttl' => '1969-01-01',
            ),
            25 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUPARNI',
                'nik' => 3524130101950020,
                'no_kk' => 1402024104450001,
                'ttl' => '1995-01-01',
            ),
            26 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'JONI WIBOWO',
                'nik' => 3524130103900001,
                'no_kk' => 3321064101560000,
                'ttl' => '1990-03-01',
            ),
            27 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'BUSONO',
                'nik' => 3524130104640033,
                'no_kk' => 3305043003780001,
                'ttl' => '1964-04-01',
            ),
            28 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'RISNA DWI HAYU ANGGRAINI',
                'nik' => 3524130105010005,
                'no_kk' => 3321117004060000,
                'ttl' => '2001-05-01',
            ),
            29 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'AKTIYA DANI SANJAYA',
                'nik' => 3524130109870019,
                'no_kk' => 3321112107550000,
                'ttl' => '1987-09-01',
            ),
            30 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'JAENAL EFENDI',
                'nik' => 3524130109900002,
                'no_kk' => 1402024701820016,
                'ttl' => '1990-09-01',
            ),
            31 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SANI KIRANAWATI',
                'nik' => 3524130112840002,
                'no_kk' => 3321110505160010,
                'ttl' => '1984-12-01',
            ),
            32 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'TSALITS DIAN WAHUSAH',
                'nik' => 3524130201880002,
                'no_kk' => 3321114107480030,
                'ttl' => '1988-01-02',
            ),
            33 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MANSUR YUDI SAPUTRO',
                'nik' => 3524130202810002,
                'no_kk' => 3305040204930002,
                'ttl' => '1981-02-02',
            ),
            34 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MARITA ALIF ROHMAWANTI',
                'nik' => 3524130203920005,
                'no_kk' => 3321116208920000,
                'ttl' => '1992-03-02',
            ),
            35 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SALSABILA TRI PUJA KUSUMA DEWI',
                'nik' => 3524130204000007,
                'no_kk' => 1402025911060001,
                'ttl' => '2000-04-02',
            ),
            36 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ELINDA EKA NURCAHYA',
                'nik' => 3524130205960004,
                'no_kk' => 3321117004060000,
                'ttl' => '1996-05-02',
            ),
            37 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUKARTAJI',
                'nik' => 3524130208810001,
                'no_kk' => 1402027112590008,
                'ttl' => '1981-08-02',
            ),
            38 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'TONAH',
                'nik' => 3524130211530015,
                'no_kk' => 7312061211070000,
                'ttl' => '1953-11-02',
            ),
            39 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'TRIASIH',
                'nik' => 3524130303800011,
                'no_kk' => 1402021112900001,
                'ttl' => '1980-03-03',
            ),
            40 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUKIMAH',
                'nik' => 3524130307650005,
                'no_kk' => 1402027001930001,
                'ttl' => '1965-07-03',
            ),
            41 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'DIMAS GANDA PRAYOGA',
                'nik' => 3524130308980001,
                'no_kk' => 1402025108850002,
                'ttl' => '1998-08-03',
            ),
            42 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'DICKY GANDA PRAYOGI',
                'nik' => 3524130308980002,
                'no_kk' => 1402025108850002,
                'ttl' => '1998-08-03',
            ),
            43 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'RIZKY KSATRIA SURYA CAKTI RAMADHANI',
                'nik' => 3524130401000031,
                'no_kk' => 3305043003780001,
                'ttl' => '2000-01-04',
            ),
            44 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MURJONO',
                'nik' => 3524130401840049,
                'no_kk' => 1402022508650001,
                'ttl' => '1984-01-04',
            ),
            45 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WAKHIDATUL QOMARIYAH',
                'nik' => 3524130405660032,
                'no_kk' => 3305043003780001,
                'ttl' => '1966-05-04',
            ),
            46 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KAFSIN UMAR',
                'nik' => 3524130405730005,
                'no_kk' => 3321111010790000,
                'ttl' => '1973-05-04',
            ),
            47 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'INDAH WATI',
                'nik' => 3524130406640002,
                'no_kk' => 1402045010830003,
                'ttl' => '1964-06-04',
            ),
            48 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'YUNI ARIFATUL BAITURRAHMAH',
                'nik' => 3524130406930006,
                'no_kk' => 3321116208920000,
                'ttl' => '1993-06-04',
            ),
            49 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KASUDI',
                'nik' => 3524130407680004,
                'no_kk' => 3321065010820010,
                'ttl' => '1968-07-04',
            ),
            50 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SURYADI',
                'nik' => 3524130407790002,
                'no_kk' => 3305040204930002,
                'ttl' => '1979-07-04',
            ),
            51 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NIATUN SHOLIHAH',
                'nik' => 3524130501820028,
                'no_kk' => 3321111010790000,
                'ttl' => '1982-01-05',
            ),
            52 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUHAMMAD ANIF RIZKY',
                'nik' => 3524130504000001,
                'no_kk' => 3321050312850000,
                'ttl' => '2000-04-05',
            ),
            53 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'AMAT',
                'nik' => 3524130505630001,
                'no_kk' => 1402024111050004,
                'ttl' => '1963-05-05',
            ),
            54 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUBURYANTO',
                'nik' => 3524130505640021,
                'no_kk' => 3321093009140000,
                'ttl' => '1964-05-05',
            ),
            55 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'LANI BUDIARTI',
                'nik' => 3524130505670004,
                'no_kk' => 3321116208920000,
                'ttl' => '1967-05-05',
            ),
            56 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KUSWATUN KHASANAH',
                'nik' => 3524130507710023,
                'no_kk' => 3321065010820010,
                'ttl' => '1971-07-05',
            ),
            57 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUIN',
                'nik' => 3524130602620041,
                'no_kk' => 1402027112590008,
                'ttl' => '1962-02-06',
            ),
            58 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'WILDAN HABIBI',
                'nik' => 3524130604980072,
                'no_kk' => 1402023007940002,
                'ttl' => '1998-04-06',
            ),
            59 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'WHAHID SULAIMAN',
                'nik' => 3524130606880066,
                'no_kk' => 1402025708740001,
                'ttl' => '1988-06-06',
            ),
            60 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NENI SEFTI KUSNIAWATI',
                'nik' => 3524130609950084,
                'no_kk' => 1402023007940002,
                'ttl' => '1995-09-06',
            ),
            61 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'JUMIATI TRI WULANDARI',
                'nik' => 3524130703000095,
                'no_kk' => 3321067008910000,
                'ttl' => '2000-03-07',
            ),
            62 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SISWANTI ARDIYANTI',
                'nik' => 3524130703880002,
                'no_kk' => 3321112107550000,
                'ttl' => '1988-03-07',
            ),
            63 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KARNADI',
                'nik' => 3524130704520056,
                'no_kk' => 3305043001930004,
                'ttl' => '1952-04-07',
            ),
            64 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUDARSONO',
                'nik' => 3524130704740018,
                'no_kk' => 3321066703800000,
                'ttl' => '1974-04-07',
            ),
            65 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'FELA ISTA GINANTI',
                'nik' => 3524130706990002,
                'no_kk' => 1402024111050004,
                'ttl' => '1999-06-07',
            ),
            66 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KARTINI',
                'nik' => 3524130711840065,
                'no_kk' => 7312061603680000,
                'ttl' => '1984-11-07',
            ),
            67 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MINARSIH',
                'nik' => 3524130711880038,
                'no_kk' => 3321065405980000,
                'ttl' => '1988-11-07',
            ),
            68 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUHAMMAD FAIS BINUSRILLAH',
                'nik' => 3524130805960003,
                'no_kk' => 3321115503800000,
                'ttl' => '1996-05-18',
            ),
            69 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'DIDIK WIRANTO',
                'nik' => 3524130807850031,
                'no_kk' => 3321064101560000,
                'ttl' => '1985-07-08',
            ),
            70 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ANJANI',
                'nik' => 3524130808800001,
                'no_kk' => 3321117004060000,
                'ttl' => '1980-08-08',
            ),
            71 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NYOMAN SRI LESTARI',
                'nik' => 3524130810740064,
                'no_kk' => 1402021108820001,
                'ttl' => '1974-10-08',
            ),
            72 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ETIK SULISTYA NINGSIH',
                'nik' => 3524130901850002,
                'no_kk' => 1402021404770006,
                'ttl' => '1985-01-09',
            ),
            73 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ADY RIFQI',
                'nik' => 3524130903890029,
                'no_kk' => 3305042302490002,
                'ttl' => '1989-03-09',
            ),
            74 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WAHYU KARTIKA CANDRA KUSUMA D',
                'nik' => 3524130906930031,
                'no_kk' => 1402045010830003,
                'ttl' => '1993-06-09',
            ),
            75 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ZAINUL ARIFIN',
                'nik' => 3524130909840001,
                'no_kk' => 3321062803100000,
                'ttl' => '1984-09-09',
            ),
            76 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'NURFAI',
                'nik' => 3524130911840038,
                'no_kk' => 3305043001930004,
                'ttl' => '1984-11-09',
            ),
            77 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MARIYANTO',
                'nik' => 3524131002840083,
                'no_kk' => 1402024104450001,
                'ttl' => '1984-02-10',
            ),
            78 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ACHMAD ALI IMRON',
                'nik' => 3524131005700002,
                'no_kk' => 3321111010790000,
                'ttl' => '1970-05-10',
            ),
            79 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUYONO',
                'nik' => 3524131006730018,
                'no_kk' => 3321050312850000,
                'ttl' => '1973-06-10',
            ),
            80 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'TONI CAHYADI',
                'nik' => 3524131008760032,
                'no_kk' => 1402021112900001,
                'ttl' => '1976-08-10',
            ),
            81 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'BASRI',
                'nik' => 3524131010500002,
                'no_kk' => 3305043112490028,
                'ttl' => '1950-10-10',
            ),
            82 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KASRI',
                'nik' => 3524131010500005,
                'no_kk' => 3321110306550000,
                'ttl' => '1950-10-10',
            ),
            83 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MUTINING',
                'nik' => 3524131010650001,
                'no_kk' => 3321064101560000,
                'ttl' => '1965-10-10',
            ),
            84 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SITI MUSTIANAH',
                'nik' => 3524131010750017,
                'no_kk' => 3321115503800000,
                'ttl' => '1975-10-10',
            ),
            85 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SULASE',
                'nik' => 3524131010790010,
                'no_kk' => 3321066703800000,
                'ttl' => '1979-10-10',
            ),
            86 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SRINEM',
                'nik' => 3524131112450014,
                'no_kk' => 7312067110490000,
                'ttl' => '1945-12-11',
            ),
            87 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ARI PRADANA PUTRA CAHYADI',
                'nik' => 3524131201000001,
                'no_kk' => 1402021112900001,
                'ttl' => '2000-01-12',
            ),
            88 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'EKA MUDLOFAH',
                'nik' => 3524131201700010,
                'no_kk' => 1402024701820016,
                'ttl' => '1970-01-12',
            ),
            89 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SITI ROKANI',
                'nik' => 3524131201920999,
                'no_kk' => 1402027112590008,
                'ttl' => '1992-01-12',
            ),
            90 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'AHMAD SUPRIYADI',
                'nik' => 3524131204880020,
                'no_kk' => 1402024701820016,
                'ttl' => '1988-04-12',
            ),
            91 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ICHSAN',
                'nik' => 3524131205440002,
                'no_kk' => 3321110505160010,
                'ttl' => '1944-05-12',
            ),
            92 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ABU AMIN',
                'nik' => 3524131205510001,
                'no_kk' => 1402025602040001,
                'ttl' => '1951-05-12',
            ),
            93 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ISWATI',
                'nik' => 3524131205740003,
                'no_kk' => 1402025911060001,
                'ttl' => '1974-05-12',
            ),
            94 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'BAMBANG SRIYONO',
                'nik' => 3524131206740006,
                'no_kk' => 3305046012820003,
                'ttl' => '1974-06-12',
            ),
            95 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'BITTATIN',
                'nik' => 3524131206740059,
                'no_kk' => 3321060511740000,
                'ttl' => '1974-06-12',
            ),
            96 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SAPTA ANDRE SETIAWAN',
                'nik' => 3524131209010010,
                'no_kk' => 1402023007940002,
                'ttl' => '2001-09-12',
            ),
            97 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ALI ROSYAD',
                'nik' => 3524131210660023,
                'no_kk' => 3321116208920000,
                'ttl' => '1966-10-12',
            ),
            98 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ASHARI',
                'nik' => 3524131210690003,
                'no_kk' => 1402025108850002,
                'ttl' => '1969-10-12',
            ),
            99 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ZAENAB YULIANA',
                'nik' => 3524131210780048,
                'no_kk' => 3321060511740000,
                'ttl' => '1978-10-12',
            ),
            100 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'TARMUJI',
                'nik' => 3524131304740005,
                'no_kk' => 3321065405980000,
                'ttl' => '1974-04-13',
            ),
            101 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WIWIK LIDYAWATI',
                'nik' => 3524131310730008,
                'no_kk' => 1402023007940002,
                'ttl' => '1973-10-13',
            ),
            102 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'DWI AGUSTINA ISWANTINI',
                'nik' => 3524131408980082,
                'no_kk' => 1402025911060001,
                'ttl' => '1998-08-14',
            ),
            103 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUSFIQIN RIDWAN LUBIS',
                'nik' => 3524131411880006,
                'no_kk' => 3321111603700000,
                'ttl' => '1988-11-14',
            ),
            104 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WULAN ROMADHONIATI',
                'nik' => 3524131501980057,
                'no_kk' => 1402027112590008,
                'ttl' => '1998-01-15',
            ),
            105 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'TASWAN',
                'nik' => 3524131503680001,
                'no_kk' => 1402025911060001,
                'ttl' => '1968-03-15',
            ),
            106 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MAHELU ERMA WATI',
                'nik' => 3524131503900001,
                'no_kk' => 1402024111050004,
                'ttl' => '1990-03-15',
            ),
            107 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'EVA VERAYANTI',
                'nik' => 3524131504830003,
                'no_kk' => 3203070504890020,
                'ttl' => '1983-04-15',
            ),
            108 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'RAHMAT HIDAYAT',
                'nik' => 3524131504850031,
                'no_kk' => 3305040204930002,
                'ttl' => '1985-04-15',
            ),
            109 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUMADI',
                'nik' => 3524131505610043,
                'no_kk' => 1402027001930001,
                'ttl' => '1961-05-15',
            ),
            110 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MUDAIYAH',
                'nik' => 3524131506620045,
                'no_kk' => 3321114107480030,
                'ttl' => '1962-06-15',
            ),
            111 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'TUMINA',
                'nik' => 3524131506690008,
                'no_kk' => 1402022508650001,
                'ttl' => '1969-06-15',
            ),
            112 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NEMU',
                'nik' => 3524131506700018,
                'no_kk' => 3203070504890020,
                'ttl' => '1970-06-15',
            ),
            113 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WINDARI KURNIA SANDI',
                'nik' => 3524131507960008,
                'no_kk' => 3321060511740000,
                'ttl' => '1996-07-15',
            ),
            114 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'AM SIHABUDDIN',
                'nik' => 3524131509540028,
                'no_kk' => 1402045010830003,
                'ttl' => '1954-09-15',
            ),
            115 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'BAGUS FAISAL ABADI',
                'nik' => 3524131604010011,
                'no_kk' => 3321065605590000,
                'ttl' => '2001-04-16',
            ),
            116 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ADI WIRATMOKO',
                'nik' => 3524131609970007,
                'no_kk' => 3321064101560000,
                'ttl' => '1997-09-16',
            ),
            117 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KASIYONO',
                'nik' => 3524131610700039,
                'no_kk' => 7312061603680000,
                'ttl' => '1970-10-16',
            ),
            118 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'DEDY WAHYUDI',
                'nik' => 3524131610900042,
                'no_kk' => 3305043001930004,
                'ttl' => '1990-10-16',
            ),
            119 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'WARI',
                'nik' => 3524131611540001,
                'no_kk' => 1402025111820003,
                'ttl' => '1954-11-16',
            ),
            120 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MELLYA RACHMAWATI',
                'nik' => 3524131703940001,
                'no_kk' => 1402021108820001,
                'ttl' => '1994-03-17',
            ),
            121 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'RINDANG NUR ANGGRAENI',
                'nik' => 3524131703970003,
                'no_kk' => 3305043001930004,
                'ttl' => '1997-03-17',
            ),
            122 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NIPAH',
                'nik' => 3524131705570009,
                'no_kk' => 3305043001930004,
                'ttl' => '1957-05-17',
            ),
            123 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'DHANIL',
                'nik' => 3524131705610076,
                'no_kk' => 1402025708740001,
                'ttl' => '1961-05-17',
            ),
            124 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'RUKOIYAH',
                'nik' => 3524131705670052,
                'no_kk' => 1402024111050004,
                'ttl' => '1967-05-17',
            ),
            125 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NANDA ELFRIDA ISLAMIATI',
                'nik' => 3524131706990046,
                'no_kk' => 3321115503800000,
                'ttl' => '1999-06-17',
            ),
            126 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MUAWANAH',
                'nik' => 3524131806680076,
                'no_kk' => 3321093009140000,
                'ttl' => '1968-06-18',
            ),
            127 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KUSMADI',
                'nik' => 3524131808700027,
                'no_kk' => 1402023007940002,
                'ttl' => '1970-08-18',
            ),
            128 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'JAFAR',
                'nik' => 3524131810480023,
                'no_kk' => 1402025111820003,
                'ttl' => '1948-10-18',
            ),
            129 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'IKA HARIYATI',
                'nik' => 3524131810740003,
                'no_kk' => 3321117004060000,
                'ttl' => '1974-10-18',
            ),
            130 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'NURUL TAUFIQ HIDAYATI',
                'nik' => 3524131810850002,
                'no_kk' => 3305040204930002,
                'ttl' => '1985-10-18',
            ),
            131 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'BUDI SUPRAYITNO',
                'nik' => 3524131810920006,
                'no_kk' => 1402025708740001,
                'ttl' => '1992-10-18',
            ),
            132 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'VIOLISIA BERLIAN FAJARIKA',
                'nik' => 3524131905920003,
                'no_kk' => 3321093009140000,
                'ttl' => '1992-05-19',
            ),
            133 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'JUWARI',
                'nik' => 3524132003630001,
                'no_kk' => 3321114107700000,
                'ttl' => '1963-03-20',
            ),
            134 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUJIYEN',
                'nik' => 3524132005640094,
                'no_kk' => 7312067110490000,
                'ttl' => '1964-05-20',
            ),
            135 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'JULIYAH',
                'nik' => 3524132005740023,
                'no_kk' => 3321050312850000,
                'ttl' => '1974-05-20',
            ),
            136 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SITI JULAIKAH',
                'nik' => 3524132006720002,
                'no_kk' => 3321116502910000,
                'ttl' => '1972-06-20',
            ),
            137 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUBEYO',
                'nik' => 3524132007660009,
                'no_kk' => 3321116502910000,
                'ttl' => '1966-07-20',
            ),
            138 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'KUSWANTO',
                'nik' => 3524132008710004,
                'no_kk' => 1402021404770006,
                'ttl' => '1971-08-20',
            ),
            139 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KARPUK',
                'nik' => 3524132201560033,
                'no_kk' => 1402020701840017,
                'ttl' => '1956-01-22',
            ),
            140 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SISWO HANDOYO',
                'nik' => 3524132201990008,
                'no_kk' => 1402025708740001,
                'ttl' => '1999-01-22',
            ),
            141 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'AFITA FANTI TRILINA',
                'nik' => 3524132205970002,
                'no_kk' => 1402024111050004,
                'ttl' => '1997-05-22',
            ),
            142 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'FARIDA',
                'nik' => 3524132212680092,
                'no_kk' => 3305042302490002,
                'ttl' => '1968-12-22',
            ),
            143 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'NURHASAN UDIN CAHYANTO',
                'nik' => 3524132212790007,
                'no_kk' => 3321060511740000,
                'ttl' => '1979-12-22',
            ),
            144 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'DIYA AYU WIDYAWATI',
                'nik' => 3524132212940006,
                'no_kk' => 1402027001930001,
                'ttl' => '1994-12-22',
            ),
            145 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'NUR CAHYO WAHYU HIDAYAT',
                'nik' => 3524132305810096,
                'no_kk' => 3321111603700000,
                'ttl' => '1981-05-23',
            ),
            146 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'RUSMIN NURYADIN',
                'nik' => 3524132404840076,
                'no_kk' => 1402022702930001,
                'ttl' => '1984-04-24',
            ),
            147 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'RIZKY IMTIHAN RAMADHANI',
                'nik' => 3524132404900007,
                'no_kk' => 3305043003780001,
                'ttl' => '1990-04-24',
            ),
            148 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ULIN NUHAYANTI',
                'nik' => 3524132408740005,
                'no_kk' => 3321111603700000,
                'ttl' => '1974-08-24',
            ),
            149 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'DWI ARINDA',
                'nik' => 3524132501910002,
                'no_kk' => 1402022702930001,
                'ttl' => '1991-01-25',
            ),
            150 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'KARSIMAH',
                'nik' => 3524132508710004,
                'no_kk' => 3321112302640000,
                'ttl' => '1971-08-25',
            ),
            151 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'LADI SUFRIANTO',
                'nik' => 3524132512700023,
                'no_kk' => 3321115503800000,
                'ttl' => '1970-12-25',
            ),
            152 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'ANJAR YUNIARTI',
                'nik' => 3524132606870025,
                'no_kk' => 3321114107480030,
                'ttl' => '1987-06-26',
            ),
            153 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'FATKHUR ROZI',
                'nik' => 3524132712930025,
                'no_kk' => 3321116107480000,
                'ttl' => '1993-12-27',
            ),
            154 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'PRASTIYO ADI PRAYOGO',
                'nik' => 3524132802020042,
                'no_kk' => 3321112302640000,
                'ttl' => '2002-02-28',
            ),
            155 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'MUJITABAH',
                'nik' => 3524132803770003,
                'no_kk' => 3203070504890020,
                'ttl' => '1977-03-28',
            ),
            156 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'SUMADI BUDI PRAYOGO',
                'nik' => 3524132810630003,
                'no_kk' => 3321067008910000,
                'ttl' => '1963-10-28',
            ),
            157 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'JUARI',
                'nik' => 3524132903590054,
                'no_kk' => 3305046012820003,
                'ttl' => '1959-03-29',
            ),
            158 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'RADIUS PRAWIRO MURDANI',
                'nik' => 3524133001850068,
                'no_kk' => 3305040204930002,
                'ttl' => '1985-01-30',
            ),
            159 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'SUMARMI',
                'nik' => 3524133010660054,
                'no_kk' => 3321065605590000,
                'ttl' => '1966-10-30',
            ),
            160 =>
            array (
                'jk' => 'Laki-laki',
                'nama' => 'ARI SANDI',
                'nik' => 3524133010740003,
                'no_kk' => 3321060511740000,
                'ttl' => '1974-10-30',
            ),
            161 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'MERRY SALUS UNIFA',
                'nik' => 3524133011940079,
                'no_kk' => 1402024111050004,
                'ttl' => '1994-11-30',
            ),
            162 =>
            array (
                'jk' => 'Perempuan',
                'nama' => 'AZZALIYAH ILLENE MARTANIA',
                'nik' => 3524133103000010,
                'no_kk' => 3321064101560000,
                'ttl' => '2000-03-31',
            ),
        ));


    }
}

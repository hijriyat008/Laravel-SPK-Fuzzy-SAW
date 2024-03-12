<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dataset;
use App\Models\Datahitung;
use App\Models\Kriteria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // Dataset::factory(143)->create();
        // Datahitung::factory(50)->create();
        // User::create([
        //     'name' => 'Hijriyatul Huda',
        //     'username' => 'iji123',
        //     'email' => 'hijriyatul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Admin::create([
            'name' => 'Ilham Febrian',
            'email' => 'ilham123@gmail.com',
            'username' => 'ilham123',
            'password' => bcrypt('1234'),
            'level' => 'admin'
        ]);
        Admin::create([
            'name' => 'Alimin',
            'email' => 'alimin123@gmail.com',
            'username' => 'alimin123',
            'password' => bcrypt('alimin123'),
            'level' => 'pimpinan'
        ]);
        Admin::create([
            'name' => 'Yogi',
            'email' => 'yogi123@gmail.com',
            'username' => 'yogi123',
            'password' => bcrypt('yogi123'),
            'level' => 'validator'
        ]);

        // Dataset::create([
        //     'nama' => 'Hijriyatul Huda',
        //     'nim' => '11850312428',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Payakumbuh',
        //     'tgl_lahir' => '2000-04-17',
        //     'alamat' => 'Tanjung Pati',
        //     'email' => 'hijriyatulhuda888@gmail.com',
        //     'no_hp' => '082121212123'

        //     // 'kondisi_rumah' => 'Permanen',
        //     // 'tabungan' => 'Rp1.000.000',
        //     // 'kendaraan' => '1 Unit',
        //     // 'usia' => '22 Tahun',
        //     // 'bantuan' => 'Rp500.000',
        //     // 'ipk' => '3,58',
        // ]);

        Kriteria::create([
            'nama_kriteria' => 'Penghasilan Orangtua',
            'atribut' => 'cost',
            'bobot' => 30,
            'kode_kriteria' => 1,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Tanggungan Orangtua',
            'atribut' => 'benefit',
            'bobot' => 20,
            'kode_kriteria' => 2,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Status Kepemilikan Rumah',
            'atribut' => 'cost',
            'bobot' => 4,
            'kode_kriteria' => 3,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Kondisi Rumah',
            'atribut' => 'cost',
            'bobot' => 8,
            'kode_kriteria' => 4,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Kepemilikan Aset/Tabungan',
            'atribut' => 'benefit',
            'bobot' => 10,
            'kode_kriteria' => 5,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Jumlah Kendaraan	',
            'atribut' => 'cost',
            'bobot' => 8,
            'kode_kriteria' => 6,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Usia	',
            'atribut' => 'cost',
            'bobot' => 2,
            'kode_kriteria' => 7,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Menerima Beasiswa /Bantuan Lain',
            'atribut' => 'benefit',
            'bobot' => 16,
            'kode_kriteria' => 8,
        ]);
        Kriteria::create([
            'nama_kriteria' => 'IPK',
            'atribut' => 'benefit',
            'bobot' => 2,
            'kode_kriteria' => 9,
        ]);


        // Dataset::create([
        //     'nama' => 'Latiful Nazaf',
        //     'nim' => '11850312426',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Payakumbuh',
        //     'tgl_lahir' => '1998-06-10',
        //     'alamat' => 'Suliki',
        //     'email' => 'latif@gmail.com',
        //     'no_hp' => '082121212121 '

        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Rama',
        //     'nim' => '11850312424',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Payakumbuh',
        //     'tgl_lahir' => '1998-06-10',
        //     'alamat' => 'Suliki',
        //     'email' => 'rama@gmail.com',
        //     'no_hp' => '082121212128 '
        // ]);
        // Dataset::create([
        //     'nama' => 'Ahdika Galih',
        //     'nim' => '11850312420',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Pasaman',
        //     'tgl_lahir' => '2000-06-10',
        //     'alamat' => 'pasaman',
        //     'email' => 'ahdika@gmail.com',
        //     'no_hp' => '082121212119'


        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Mark subrek',
        //     'nim' => '11850312429',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Taratak',
        //     'tgl_lahir' => '2000-06-10',
        //     'alamat' => 'Taratak',
        //     'email' => 'taratak@gmail.com',
        //     'no_hp' => '082121212129'


        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Yaldri',
        //     'nim' => '11850312528',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Pranap',
        //     'tgl_lahir' => '1999-06-10',
        //     'alamat' => 'Pranap',
        //     'email' => 'yaldri@gmail.com',
        //     'no_hp' => '082121212243'


        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Elon Much',
        //     'nim' => '11850312588',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Taratak',
        //     'tgl_lahir' => '1999-06-10',
        //     'alamat' => 'Taratak',
        //     'email' => 'elon@gmail.com',
        //     'no_hp' => '082121212188'


        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Adolf Teler',
        //     'nim' => '11850312532',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Kandang Lamo',
        //     'tgl_lahir' => '1999-06-10',
        //     'alamat' => 'Kandang Lamo',
        //     'email' => 'adolf@gmail.com',
        //     'no_hp' => '082121212132'


        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);
        // Dataset::create([
        //     'nama' => 'Steve ngeJobs',
        //     'nim' => '11850312544',
        //     'jk' => 'L',
        //     'tempat_lahir' => 'Payobasuang',
        //     'tgl_lahir' => '1999-06-10',
        //     'alamat' => 'Payobasuang',
        //     'email' => 'steve@gmail.com',
        //     'no_hp' => '082121212177'

        //     //     'kondisi_rumah' => 'Permanen',
        //     //     'tabungan' => 'Rp1.000.000',
        //     //     'kendaraan' => '2 Unit',
        //     //     'usia' => '24 Tahun',
        //     //     'bantuan' => 'Rp500.000',
        //     //     'ipk' => '3,57',
        // ]);


        // Datahitung::create([
        //     'dataset_id' => '1',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '2500000',
        //     'tanggungan_orangtua' => '2',
        //     'status_rumah' => 'Milik Sendiri',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '2',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '2100000',
        //     'tanggungan_orangtua' => '1',
        //     'status_rumah' => 'Warisan',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '3',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '3205400',
        //     'tanggungan_orangtua' => '3',
        //     'status_rumah' => 'Menumpang',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '5',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '5040000',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Milik Sendiri',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '4',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '445600',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Warisan',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '7',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '4400767600',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Menumpang',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '6',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '42424200',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Menumpang',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '9',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '9900000',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Menumpang',
        // ]);
        // Datahitung::create([
        //     'dataset_id' => '8',
        //     'status' => 'Sudah Verifikasi',
        //     'penghasilan_orangtua' => '99999',
        //     'tanggungan_orangtua' => '4',
        //     'status_rumah' => 'Menumpang',
        // ]);
    }
}

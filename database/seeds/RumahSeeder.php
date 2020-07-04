<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rumahs')->insert([
            'nama_perusahaan'=>'CV. Baker Photography',
            'moto_perusahaan'=>'To See The World, Things Dangerous To Come To, To See Behind Walls, Draw Closer To Find Each Other And To Feel That Is The Purpose Of Life',
            'desk_perusahaan'=>'Kami Adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid rerum doloribus iste facere quia vel obcaecati nisi facilis. Excepturi laudantium culpa eum exercitationem voluptatum officia eaque tempore odio pariatur atque. ',
            'visi_perusahaan'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. A nemo debitis non!',
            'misi_perusahaan'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. A nemo debitis non!',
            'logo_perusahaan'=>'',
            'alamat_perusahaan'=>'Cibodas',
        ]);
    }
}

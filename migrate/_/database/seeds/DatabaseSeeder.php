<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            DB::insert("insert into users (`id`, `name`, `email`, `password`, `username`, `contact`, `address`, `gender`, `image`, `role_id`, `zipcode`, `dob`, `status`, `created_at`,`updated_at`) VALUES
            (1, 'Administrator', '', '21232f297a57a5a743894a0e4a801fc3', 'yadu', '9898989898', 'Admin Nagar', 'Male', 'YADU_Logo.JPG', 1, '23232', '1990-08-03', 1, '2017-08-18 16:16:38','2017-09-05 07:21:47'),
            (4, 'Yadu nandan', 'ynandan55@yahoo.com', 'f925916e2754e5e03f75dd58a5733251', 'yadu123', '9898989898', 'durga nagar asas', 'Male', 'slide_05.jpg', 2, '23232', '1990-08-03', 1,'2017-09-05 07:21:47','2017-09-05 07:21:47'),
            (8, 'Astha Sharma', 'itech1694astha@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'astha123', '9898989898', 'Tikamgarh', 'Female', 'bd2_6f5_636_330-1-original.jpg', 2, '454545', '1990-08-03', 1, '2017-08-09 18:51:06','2017-09-05 07:21:47'),
            (9, 'Makara Chany', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', '', 0, '855', '', 0, '2017-09-05 07:21:47','2017-09-05 07:21:47')");
            
    }
}

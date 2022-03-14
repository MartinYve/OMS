<?php



use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'manager',
            'last_name' => 'yve',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'phone_number' => '656959165',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [1,$user1->id,4]);

        $user2 = User::create([
            'name' => 'Delivery ',
            'last_name' => 'person',
            'email' => 'deliveryperson@person.com',
            'password' => Hash::make('password'),
            'phone_number' => '656959135',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [2,$user2->id,3]);
        $user3 = User::create([
            'name' => 'Delivery2 ',
            'last_name' => 'person2',
            'email' => 'jayronsmith005@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '656959130',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [3,$user3->id,3]);
        $user4 = User::create([
            'name' => 'Delivery3 ',
            'last_name' => 'person3',
            'email' => 'carelo.toukam@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '656929130',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [4,$user4->id,3]);
        $user5 = User::create([
            'name' => 'Customer ',
            'last_name' => 'John',
            'email' => 'gapingsielsi@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '656929130',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [5,$user5->id,2]);
        $user6 = User::create([
            'name' => 'Customer2 ',
            'last_name' => 'John John',
            'email' => 'jayronsmith005b@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '656929131',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [6,$user6->id,2]);

        $user7 = User::create([
            'name' => 'Yvan ',
            'last_name' => 'Martin',
            'email' => 'martimkn2@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '656922131',
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [7,$user7->id,2]);
        
    }
}

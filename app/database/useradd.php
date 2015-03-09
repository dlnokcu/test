<?php

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('kullanıcı ekleme');

        $this->command->info('Kullanıcı tablosuna veri ekildi!');
    }

}

class useradd extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'falanca@filanca.com'));
    }

}
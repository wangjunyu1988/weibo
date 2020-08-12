<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        $statuses = factory(Status::class)->times(100)->create();
    }
}

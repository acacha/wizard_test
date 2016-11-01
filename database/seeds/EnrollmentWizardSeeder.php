<?php

use Illuminate\Database\Seeder;

class EnrollmentWizardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wizard = factory(\Acacha\Wizard\Wizard::class)
            ->create([
                'name' => 'enrollment',
            ]);
        $wizard->steps()->saveMany([
            factory(\Acacha\Wizard\Step::class)->make([
                'name' => 'user',
            ]),
            factory(\Acacha\Wizard\Step::class)->make([
                'name' => 'personal_data',
            ]),
            factory(\Acacha\Wizard\Step::class)->make([
                'name' => 'another',
            ]),
        ]);

    }
}
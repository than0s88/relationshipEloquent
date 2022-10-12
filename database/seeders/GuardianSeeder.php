<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run(){
        Guardian::factory()->count(25)->hasChildren(10)->create();

        Guardian::factory()->count(100)->hasChildren(5)->create();

        Guardian::factory()->count(100)->hasChildren(3)->create();

        Guardian::factory()->count(100)->create();
    }
//
//    public function run()
//    {
//        $guardians = Guardian::factory()->count(10)->create();
//
//        // For Every User...
//        $guardians->each(function ($guardian) {
//            // Create 10 Issues
//            $childrens = Child::factory()->count(3)->create([
//                'guardian_id' => $guardian->id,
//                'school_id' => School::factory()
//            ]);
//        });
//        Guardian::factory()->count(10)->has(Child::factory()->count(3)->create([
//            'school_id' => School::factory()
//        ]))->create();
//    }

//
//    public function run()
//    {
//        $guardians = factory(Guardian::class, 10)->create();
//
//        // For Every User...
//        $guardians->each(function ($guardian) {
//            // Create 10 Issues
//            $childrens = factory(Child::class, 3)->create([
//                'guardian_id' => $guardian->id
//            ]);
//
//            $childrens->each(function ($children) {
//                $schools = factory(School::class, 1)->create([
//                    'school_id' => $children->school_id,
//                ]);
//            });
//        });
//       // Guardian::factory()->count(10)->has(Child::factory()->count(3)->has(School::factory()))->create();
//    }

//    public function run()
//    {
//        // Create 10 Users
//        $users = factory(App\Models\User::class, 10)->create();
//
//        // For Every User...
//        $users->each(function ($user) {
//
//            // Create 10 Issues
//            $issues = factory(App\Models\Issue::class, 10)->create([
//                'created_by' => $user->id
//            ]);
//
//            // For Every Issue...
//            $issues->each(function ($issue) {
//
//                // Create 10 Comments
//                $comments = factory(App\Models\Comment::class, 10)->create([
//                    'commentable_id' => $issue->id,
//                    'commentable_type' => 'App\Models\Issue',
//                ]);
//            });
//
//            // Create 10 Rmas
//            $rmas = factory(App\Models\Rma::class, 10)->create([
//                'created_by' => $user->id
//            ]);
//
//            // For Every Rma...
//            $rmas->each(function ($rma) {
//
//                // Create 10 Comments
//                $comments = factory(App\Models\Comment::class, 10)->create([
//                    'commentable_id' => $rma->id,
//                    'commentable_type' => 'App\Models\Rma',
//                ]);
//            });
//        });
//    }
}

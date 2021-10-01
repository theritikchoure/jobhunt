<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@1234'),
        ]);

        DB::table('categories')->insert([
            'name' => 'campus ambassador internship',
            'slug' => 'campus-ambassador-internship',
            'status' => '1',
        ]);

        DB::table('employers')->insert([
            'name' => 'employer',
            'description' => 'Ut occaecati est optio autem. Dolores quisquam voluptatum voluptas nihil maxime.',
            'address' => '627 Earnestine Roads, New Clarabelleport, NC 27996-9496',
            'city' => 'Clarabelleport',
            'state' => 'Nebraska',
            'zip_code' => '462022',
            'contact_no' => '1234567890',
            'email' => 'employer@gmail.com',
            'website' => 'https://employer.com',
            'linkedin' => 'https://employer.com',
            'logo' => '0',
            'password' => Hash::make('employer@1234'),
            'status' => '1',
        ]);

        DB::table('internships')->insert([
            'employer_id' => '1',
            'title' => 'Corporate Identity Architect Engineer',
            'description' => 'Ut occaecati est optio autem. Dolores quisquam voluptatum voluptas nihil maxime.',
            'category' => 'Art & Culture',
            'salary' => '5000',
            'openings' => '10',
            'duration' => '6',
            'last_date' => '2022-04-04',
            'status' => '1',
        ]);

        DB::table('perks')->insert([
            'internship_id' => '1',
            'perk1' => 'Certificate',
            'perk2' => 'Letter of Recommendation',
            'perk3' => 'Flexible work hours',
            'perk4' => '5 days a week',
        ]);

        DB::table('students')->insert([
            'first_name' => 'Amber',
            'last_name' => 'Boyer',
            'email' => 'amber@boyer.com',
            'password' => Hash::make('employer@1234'),
            'mobile' => '1234567890',
            'address' => '627 Earnestine Roads, New Clarabelleport, NC 27996-9496',
            'linkedin' => 'https://student.com',
            'resume' => '0',
            'image' => '0',
        ]);

        DB::table('education')->insert([
            'student_id' => '1',
            'college_name' => 'UIT RPGV',
            'degree' => 'Diploma',
            'branch' => 'IT',
            'pass_year' => '2021-09-30',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;  // Thêm dòng này

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        // Thêm dữ liệu mẫu cho sinh viên
        Student::create([
            'firstname' => 'Le Thu',
            'lastname' => 'Nguyen',
            'dob' => '1980-02-01',
            'address' => 'Hanoi, Vietnam',
        ]);
    
        Student::create([
            'firstname' => 'Minh',
            'lastname' => 'Tran',
            'dob' => '1977-02-01',
            'address' => 'Auckland, New Zealand',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all(['id']);
        $course = Course::all(['id']);
        Invoice::create([
            'user_id' => $user[1]->id,
            'course_id' => $course[0]->id,
            'total_amount' => 100000,
            'status' => 'unpaid',
            'payment_proof' => 'invoice/payment_proof/1.jpeg',
        ]);
        Invoice::create([
            'user_id' => $user[1]->id,
            'course_id' => $course[0]->id,
            'total_amount' => 300000,
            'status' => 'paid',
            'payment_proof' => 'invoice/payment_proof/1.jpeg',
        ]);
    }
}

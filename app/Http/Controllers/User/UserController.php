<?php

namespace App\Http\Controllers\User;

use App\Models\Course;
use App\Models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function payment(Course $course) {
        $prefix = date('ymd'); // Format tanggal

        // Cek nomor invoice terakhir
        $lastInvoiceNumber = DB::table('invoices')
            ->where('invoice_number', 'LIKE', $prefix.'%')
            ->orderBy('invoice_number', 'desc')
            ->first();

        if ($lastInvoiceNumber) {
            // Jika ada nomor invoice terakhir, tambahkan nomor urut dengan mengambil 4 digit terakhir
            $lastInvoiceSerial = intval(Str::substr($lastInvoiceNumber->invoice_number, 11, 10));
            $nextInvoiceSerial = Str::padLeft($lastInvoiceSerial + 1, 10, '0', STR_PAD_LEFT);
        } else {
            // Jika tidak ada nomor invoice terakhir, nomor urut dimulai dari 0001
            $nextInvoiceSerial = '0000000001';
        }
        // Gabungkan prefix, nomor urut, dan suffix untuk membentuk nomor invoice lengkap
        $invoiceNumber = $prefix . '-' . $nextInvoiceSerial;

        $phone = '+6281615715770';
        $invoice_number =  'INV' . '-' .$invoiceNumber;
        $total_amount =  $course->price;
        $email =  auth()->user()->email;
        $date =  Carbon::now();

        $data = "https://wa.me/6281615715770?text=***Konfirmasi%20Pembayaran***%0A%5B_Mohon%20untuk%20tidak%20mengubah%20isi%20pesan%20ini_%5D%0A%0ANo.%20Faktur%20%3A%20$invoice_number%0ATotal%20Biaya%20%3A%20$total_amount%0ASurel%20Pengguna%20%3A%20$email%0ATanggal%20Pembelian%20%3A%20$date";
        return view('user.payment', [
            'title' => 'Payment',
            'course' => $course,
            'data' => $data,
        ]);
    }

    public function checkout(Course $course) {
        $data = [
            'user_id' => auth()->user()->id,
            'course_id' => $course->id,
            'total_amount' => $course->price,
            'status' => 'unpaid',
        ];

        Invoice::create($data);

        return redirect('/pay_confirm');
    }

    public function pay_confirm() {
        return view('user.pay_confirm', [
            'title' => 'pay confirm',
        ]);
    }

    public function kelola(Request $request) {
        $user =  $request->input('user');
        $email =  $request->input('email');
        $phone =  $request->input('phone');
        $item =  $request->input('item');

        $data = "https://api.whatsapp.com/send?phone=+6281226046970&text=Nama%20%3A%20$user%0aEmail%20%3A%20$email%0aHandphone%20%3A%20$phone%0aItem%20%3A%20$item";

        return view('user.kelola', [
            'data' => $data
        ]);
    }
}
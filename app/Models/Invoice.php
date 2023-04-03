<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'user_id',
        'course_id',
        'total_amount',
        'status',
        'payment_proof'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->invoice_number = $model->generateInvoiceNumber();
        });
    }

    // Generate nomor invoice baru
    public function generateInvoiceNumber()
    {
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

        //(date)-(10 increasing number)

        return $invoiceNumber;
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}

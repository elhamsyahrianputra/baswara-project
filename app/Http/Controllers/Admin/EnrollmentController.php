<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use App\Models\InvoiceDetail;
use App\Http\Controllers\Controller;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.enrollment.index', [
            'title' => 'Collaboration | Dashboard',
            'enrollments' => Invoice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function confirm(Request $request)
    {
        $invoice = Invoice::find($request['invoice_id']);
        $user = User::find($invoice->user_id);

        $user->courses()->attach($invoice->course_id);

        Invoice::find($invoice->id)->update([
            'status' => 'paid'
        ]);

        return redirect('/admin/enrollment')->with('success', 'Pembayaran sudah terkonfirmasi');

    }
}

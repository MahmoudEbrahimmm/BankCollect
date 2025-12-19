<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = invoices::all();
        return view('invoices.invoices',compact('invoices'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(invoices $invoices)
    {
        //
    }

    public function edit(invoices $invoices)
    {
        //
    }

    public function update(Request $request, invoices $invoices)
    {
        //
    }

    public function destroy(invoices $invoices)
    {
        //
    }
}

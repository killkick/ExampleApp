<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function store()
    {
        Invoice::query()->create();
        return response()->json(['message' => 'Invoice created successfully'], 201);
    }


}

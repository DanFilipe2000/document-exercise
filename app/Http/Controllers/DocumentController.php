<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request) {
        $name_document = $_FILES['file']['name'];

        $request->file->storeAs('/public/documents', $name_document);
    }
}

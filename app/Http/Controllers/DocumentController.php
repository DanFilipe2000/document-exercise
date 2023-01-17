<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request) {
        // Metodo para capturar nome do arquivo
        // https://www.php.net/manual/pt_BR/features.file-upload.post-method.php
        
        $name_document = $_FILES['file']['name'];

        $request->file->storeAs('/public/documents', $name_document);
    }
}

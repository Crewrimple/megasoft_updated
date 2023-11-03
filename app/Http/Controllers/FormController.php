<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormController extends Controller
{
    public function processForm(Request $request)
    {
        $data = $request->all();

        try {
            FormSubmission::create($data);
        } catch (\Exception $e) {
            Log::error('Error saving form data: ' . $e->getMessage());
            // Чтобы видеть ошибку в браузере во время разработки
            dd($e->getMessage());
        }
        
        return back();
    }
}

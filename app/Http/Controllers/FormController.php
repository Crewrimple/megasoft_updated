<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormController extends Controller
{
    public function processForm(Request $request)
    {
        try {
            FormSubmission::create($request->all());

            return back()->with('success', 'Ваш запрос успешно отправлен!');
        } catch (\Exception $e) {
            Log::error('Ошибка при сохранении данных формы: ' . $e->getMessage());
    
            
            return back()->with('error', 'Произошла ошибка. Пожалуйста, попробуйте еще раз.');
        }
    }
    
    
}

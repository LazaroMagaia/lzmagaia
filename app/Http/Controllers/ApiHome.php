<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;
use Exception;
class ApiHome extends Controller
{
    public function contacto(Request $request)
    {
        Try{
            $data["name"] = $request->name;
            $data["email"] = $request->email;;
            $data["message"] = $request->message;
            $data["interested"] = $request->interested;
            Mail::to("llmagaia2@gmail.com")->send(new Contact($data));
            return response()->json($data, 200);
        }catch(Exception $e)
        {
            return response()->json("Erro no envio de email", 200);
        }
       
    }
}

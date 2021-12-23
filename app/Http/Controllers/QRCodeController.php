<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\QRCode;
use Redirect;

class QRCodeController extends Controller
{
    public function index(){
        return view('qrcode.index');
    }

    public function store(Request $request){

        $qrcode = QRCode::Create([
            'status' => $request->status,
            'content' => $request->content,
            'type' => $request->type,
            'active' => $request->active,
        ]);

        \QrCode::size(500)
        ->format('png')
        ->generate('localhost:8000/qr/'.$qrcode->id, public_path('images/qrcode/'. $qrcode->id .'.png'));
        
        return $qrcode;
    }

    public function redirect($id){

        $qrcode = QRCode::find($id);

        return Redirect::to($qrcode->content);
    }
}

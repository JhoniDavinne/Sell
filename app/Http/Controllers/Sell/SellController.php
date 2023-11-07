<?php

namespace App\Http\Controllers\Sell;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\TransportManager;
use Illuminate\Support\Facades\App;



class SellController extends Controller
{

    public function index(){
        return view('email.formsell');
    }

    public function exibirSell(Request $request){
        $strlen = strlen(preg_replace("/\D+/", "", $request->cpfcnpj));

        if ($strlen = 11 && $strlen = 14){
            $query =  \DB::connection('mysql_scipg')->table('mail')->select('codbar','humanbar','vencimento')->where('cliente', '14804150000162')->where('ano','2023');
            $cpf = $query->where('demo','CPF: '.$request->cpfcnpj)->first();
            $cnpj = $query->where('demo','CNPJ: '.$request->cpfcnpj)->first();
            $result = '';
            if($cpf){
                $result = $cpf;
            }else if($cnpj){
                $result = $cnpj;
            }else{
                $result = false;
            }
            
            // $result = ($cpf ? $cpf : $cnpj) ?? false;
            
            if($result){
                $type = 'interleaved2of5';
                // $pixel = 2.835;//conforme a documentação
                // $width = 200 / $pixel;
                // $height = 20 / $pixel;
                $width = 100;
                $height = 10;
                $str_barcode = "https://bwipjs-api.metafloor.com/?bcid=".$type."&text=".trim(strval($result->codbar))."&width=".$width."&height=". $height;
                $vencimento_timestamp = Carbon::createFromFormat('Y-m-d', $result->vencimento)->timestamp;
                $today_timestamp = Carbon::now()->timestamp;
                $timestamp_vencimento = $today_timestamp-$vencimento_timestamp;
                $timestamp_30_days = 2592000; // 30 dias maximo após o vencimento;

                if($timestamp_vencimento < 2592000){
                    return view('negocia.sell.codbar', compact('result','str_barcode'));
                }

                return view('negocia.sell.vencido');
            }
            
            return view('negocia.sell.fail');          
        }
        
        return view('negocia.sell.fail_invalid');
        

    }
}


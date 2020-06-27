<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Eduardokum\LaravelBoleto\Pessoa as Pessoa;
use Eduardokum\LaravelBoleto\Boleto\Banco\Sicredi as Sicredi;
use Eduardokum\LaravelBoleto\Cnab\Remessa\Cnab240\Banco\Sicredi as SicrediRemesa;

class BoletoController extends Controller
{
    public function index ()
    {
        $beneficiario = new Pessoa([
            'documento' => '00.000.000/0000-00',
            'nome'      => 'Company co.',
            'cep'       => '00000-000',
            'endereco'  => 'Street name, 123',
            'bairro' => 'district',
            'uf'        => 'UF',
            'cidade'    => 'City',
        ]);

        $pagador = new Pessoa(
            [
                'nome'      => 'Cliente',
                'endereco'  => 'Rua um, 123',
                'bairro'    => 'Bairro',
                'cep'       => '99999-999',
                'uf'        => 'UF',
                'cidade'    => 'CIDADE',
                'documento' => '999.999.999-99',
            ]
        );

        $dataVencimento = new Carbon();
        $sicredi = new Sicredi([
            'logo' => '../resources/images/logo.png',
            'dataVencimento' => $dataVencimento,
            'valor' => 100,
            'numero' => 1,
            'numeroDocumento' => 1,
            'pagador' => $pagador,
            'beneficiario' => $beneficiario,
            'carteira' => 1,
            'posto' => 11,
            'byte' => 2,
            'agencia' => 1111,
            'conta' => 22222,
            'codigoCliente' => 12345,
            'multa' => 1, // 1% do valor do boleto após o vencimento
            'juros' => 1, // 1% ao mês do valor do boleto
            'jurosApos' => 0, // quant. de dias para começar a cobrança de juros,
            'descricaoDemonstrativo' => ['demonstrativo 1', 'demonstrativo 2', 'demonstrativo 3'],
            'instrucoes' => ['instrucao 1', 'instrucao 2', 'instrucao 3'],
        ]);

        $remessa = new SicrediRemesa(
            [
                'agencia'      => 'probando Branch DEV',
                'carteira'     => 'Provando Clone Rama DEV',
                'conta'        => 2234,
                'codigoCliente'=> 12345,
                'idremessa'    => 1,
                'beneficiario' => $beneficiario,
            ]
        );

        $pdf = new \Eduardokum\LaravelBoleto\Boleto\Render\Pdf();
        $pdf->addBoleto($sicredi);
        $pdf->gerarBoleto($pdf::OUTPUT_STANDARD, __DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'sicredi.pdf');


        $remessa->addBoleto($sicredi);
        echo $remessa->save(__DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'sicredi.txt');

    }
}

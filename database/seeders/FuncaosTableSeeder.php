<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FuncaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('funcaos')->insert(['descricao' => 'AGENTE DE PORTARIA']);
        DB::table('funcaos')->insert(['descricao' => 'AJUDANTE DE MANUTENÇÃO E OBRAS']);
        DB::table('funcaos')->insert(['descricao' => 'ALMOXARIFE']);
        DB::table('funcaos')->insert(['descricao' => 'ANALISTA DE DP']);
        DB::table('funcaos')->insert(['descricao' => 'ANALISTA DE LABORATÓRIO']);
        DB::table('funcaos')->insert(['descricao' => 'ANALISTA DE PRODUÇÃO ASSISTENCIAL']);
        DB::table('funcaos')->insert(['descricao' => 'ANALISTA DE RH']);
        DB::table('funcaos')->insert(['descricao' => 'ANALISTA PATRIMONIAL']);
        DB::table('funcaos')->insert(['descricao' => 'ASSISTENTE ADMINISTRATIVO']);
        DB::table('funcaos')->insert(['descricao' => 'ASSISTENTE DE RH']);
        DB::table('funcaos')->insert(['descricao' => 'AUXILIAR DE FARMACIA']);
        DB::table('funcaos')->insert(['descricao' => 'AUXILIAR DE LABORATORIO']);
        DB::table('funcaos')->insert(['descricao' => 'AUXILIAR DE LAVANDERIA']);
        DB::table('funcaos')->insert(['descricao' => 'AUXILIAR DE SERVICOS GERAIS']);
        DB::table('funcaos')->insert(['descricao' => 'COMPRADOR (A)']);
        DB::table('funcaos')->insert(['descricao' => 'COPEIRO (A)']);
        DB::table('funcaos')->insert(['descricao' => 'ELETRICISTA']);
        DB::table('funcaos')->insert(['descricao' => 'ENFERMEIRO (A)']);
        DB::table('funcaos')->insert(['descricao' => 'ENFERMEIRO (A) DO TRABALHO']);
        DB::table('funcaos')->insert(['descricao' => 'ENFERMEIRO (A) OBSTETRA']);
        DB::table('funcaos')->insert(['descricao' => 'ENGENHEIRO DE SEGURANÇA DO TRABALHO']);
        DB::table('funcaos')->insert(['descricao' => 'FARMACEUTICO (A) BIOQUÍMICO']);
        DB::table('funcaos')->insert(['descricao' => 'FISIOTERAPEUTA']);
        DB::table('funcaos')->insert(['descricao' => 'FONOAUDIOLOGO']);
        DB::table('funcaos')->insert(['descricao' => 'INSTRUMENTADOR CIRURGICO']);
        DB::table('funcaos')->insert(['descricao' => 'MAQUEIRO (A)']);
        DB::table('funcaos')->insert(['descricao' => 'MOTORISTA DE AMBULANCIA']);
        DB::table('funcaos')->insert(['descricao' => 'ODONTOLOGO (A)']);
        DB::table('funcaos')->insert(['descricao' => 'OFICIAL DE MANUTENCAO']);
        DB::table('funcaos')->insert(['descricao' => 'PINTOR']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE ENFERMAGEM']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE ENFERMAGEM DO TRABALHO']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE LABORATORIO']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE RADIOLOGIA']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE SEGURANCA DO TRABALHO']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) DE TI']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO (A) ELETROTÉCNICO']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO EM EDIFICAÇÕES']);
        DB::table('funcaos')->insert(['descricao' => 'TECNICO EM NUTRICAO']);

    }
}

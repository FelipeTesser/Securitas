<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VeiculoSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'felipe.tesser@aluno.cps.sp.gov.br'],
            [
                'name' => 'Felipe Tesser',
                'password' => Hash::make('password123')
            ]
        );

        $fakes = [
            ['placa' => 'ABC1D23', 'marca' => 'Honda', 'modelo' => 'CB 300F Twister', 'ano' => 2024, 'cor' => 'Preto Fosco', 'status' => 'Protegido'],
            ['placa' => 'BRA2E48', 'marca' => 'Yamaha', 'modelo' => 'Fazer FZ25', 'ano' => 2023, 'cor' => 'Azul Racing', 'status' => 'Protegido'],
            ['placa' => 'SEC3F99', 'marca' => 'Honda', 'modelo' => 'CG 160 Titan', 'ano' => 2024, 'cor' => 'Vermelho', 'status' => 'Alerta'],
            ['placa' => 'IOT4G10', 'marca' => 'Yamaha', 'modelo' => 'XTZ 250 Lander', 'ano' => 2022, 'cor' => 'Branco', 'status' => 'Protegido'],
            ['placa' => 'ESP5H11', 'marca' => 'Honda', 'modelo' => 'XRE 300 Sahara', 'ano' => 2024, 'cor' => 'Cinza', 'status' => 'Protegido'],
            ['placa' => 'GPS6I22', 'marca' => 'Kawasaki', 'modelo' => 'Ninja 400', 'ano' => 2023, 'cor' => 'Verde Limão', 'status' => 'Desbloqueado'],
            ['placa' => 'TEC7J33', 'marca' => 'BMW', 'modelo' => 'G 310 GS', 'ano' => 2023, 'cor' => 'Preto/Branco', 'status' => 'Protegido'],
            ['placa' => 'DEV8K44', 'marca' => 'Honda', 'modelo' => 'PCX 160', 'ano' => 2024, 'cor' => 'Azul Escuro', 'status' => 'Protegido'],
            ['placa' => 'WEB9L55', 'marca' => 'Shineray', 'modelo' => 'Jet 125', 'ano' => 2023, 'cor' => 'Vermelho', 'status' => 'Alerta'],
            ['placa' => 'FATEC0M', 'marca' => 'Yamaha', 'modelo' => 'MT-03', 'ano' => 2024, 'cor' => 'Cyan Storm', 'status' => 'Protegido'],
        ];

        foreach ($fakes as $f) {
            Veiculo::create([
                'user_id' => $user->id,
                'placa' => $f['placa'],
                'marca' => $f['marca'],
                'modelo' => $f['modelo'],
                'ano' => $f['ano'],
                'cor' => $f['cor'],
                'status' => $f['status'],
            ]);
        }
    }
}
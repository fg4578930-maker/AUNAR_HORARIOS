<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $docentes = [
            ['nombre' => 'ADMIN 1 - Marketing', 'email' => 'admin.1@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'ADMIN 2', 'email' => 'admin.2@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'ADMIN 3 - Investigador', 'email' => 'admin.3@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'ADMIN 4 -Emprendedor', 'email' => 'admin.4@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Adriana Jineth Aullon Cifuentes', 'email' => 'adriana.aullon@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Alfonso Nicolas Romero Arias', 'email' => 'alfonso.romero@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Angela Patricia Torres Delgado', 'email' => 'angela.torres@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Angél David Pardo', 'email' => 'angel.david@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Blaudiert Muriel Zea', 'email' => 'blaudiert.muriel@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Brayan Daniel Beltran Bernal', 'email' => 'brayan.beltran@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'CONTADOR 1 - Tributarista', 'email' => 'contador.1@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'CONTADOR 2', 'email' => 'contador.2@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'CONTADOR 3 - Revisor fiscal', 'email' => 'contador.3@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Camilo Giovanno Rodriguez Muñoz', 'email' => 'camilo.rodriguez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Cindy Paola Vega Sanchez', 'email' => 'cindy.vega@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Claudia Alejandra Fajardo Beltran', 'email' => 'claudia.fajardo@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'David Felipe Abril Roncancio', 'email' => 'david.abril@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Deisy Veronica Rojas Barbosa', 'email' => 'deisy.rojas@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Diana Zamudio', 'email' => 'diana.zamudio@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Diego Alejandro Chavez Bernal', 'email' => 'diego.chavez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Diego Bernal', 'email' => 'diego.bernal@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Edgar Leonardo Velasquez Villar', 'email' => 'edgar.edgar@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Edluar Iván Cerinza Ramírez', 'email' => 'edluar.cerinza@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Edwin Andres Monroy', 'email' => 'edwin.andres@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Edwin Guillermo Rosero Montenegro', 'email' => 'edwin.rosero@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Elkin Denis', 'email' => 'elkin.denis@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Erley Mosquera', 'email' => 'erley.mosquera@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Ernel Francisco Benavidez', 'email' => 'ernel.francisco@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Federman Restrepo', 'email' => 'federman.restrepo@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Ferney Rolando Rodriguez Gomez', 'email' => 'ferney.rodriguez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Geison David Larrota Rojas', 'email' => 'geison.larrota@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Gloria Liliana Barrera Calderón', 'email' => 'gloria.barrera@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Gustavo Adolfo Vasquez Matiz', 'email' => 'gustavo.vasquez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Heidy Adriana Fernandez Vela', 'email' => 'heidy.fernandez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Ismael Cuenca', 'email' => 'ismael.cuenca@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Ivan Felipe Marin Escobar', 'email' => 'ivan.marin@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Jair David Marin Martinez', 'email' => 'jair.marin@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Jefferson Giovanny Espitia Posada', 'email' => 'jefferson.espitia@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Jesus Benavidez', 'email' => 'jesus.benavidez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Jhon Wilmer Rojas Gutierrez', 'email' => 'jhon.rojas@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Johanna Andrea Cuestas Camacho', 'email' => 'johanna.cuestas@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Jose Gildardo Perez Naranjo', 'email' => 'jose.perez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'José Peña', 'email' => 'jose.pena@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Juan David Bobadilla', 'email' => 'juan.david@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Julian Camilo Hernández González', 'email' => 'julian.hernandez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Julie Carolina Espitia Posada', 'email' => 'julie.espitia@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Julio Andres Ramirez Morales', 'email' => 'julio.ramirez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Leidy Ramirez', 'email' => 'leidy.ramirez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Lizette Osorio', 'email' => 'lizette.osorio@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Maria Fernanda Jaimes Campos', 'email' => 'maria.jaimes@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Maria Vanessa Lozano Ruiz', 'email' => 'maria.lozano@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Maria del Carmen Cuyares', 'email' => 'maria.carmen@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Maria del Pilar Wilches', 'email' => 'maria.pilar@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Maribel Sanabria Sánchez', 'email' => 'maribel.sanabria@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Milena Caceres Bastilla', 'email' => 'milena.caceres@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Olga Yaneth Barrera Chaparro', 'email' => 'olga.barrera@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Omar Castañeda Antolinez', 'email' => 'omar.castaneda@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Oscar Fernando Loaiza Medina', 'email' => 'oscar.loaiza@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Oscar Ivan Pinzon Londoño', 'email' => 'oscar.pinzon@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Pompeyo Niño', 'email' => 'pompeyo.nino@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Rolando Stith Paez Garzón', 'email' => 'rolando.paez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Ruben Dario Amaya Garcia', 'email' => 'ruben.amaya@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Sergio Alonso Ordoñez Calderon', 'email' => 'sergio.ordonez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Sonia Yurany Trujillo Rivera', 'email' => 'sonia.trujillo@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Sully Lorein Burgos Salazar', 'email' => 'sully.burgos@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Viviana Andrea Guacheta Cordoba', 'email' => 'viviana.guacheta@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'William Fernando Rios Miranda', 'email' => 'william.rios@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Wilmar Sneyder Sabogal Diaz', 'email' => 'wilmar.sabogal@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Yamile Velasco', 'email' => 'yamile.velasco@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Yefreid Hernán García Vaquiro', 'email' => 'yefreid.garcia@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Yeison Ramirez Saldarriaga', 'email' => 'yeison.ramirez@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Yoryi Marcela Hernández', 'email' => 'yoryi.marcela@campusvirtual.aunarvillavicencio.edu.co'],
            ['nombre' => 'Yuly Vargas Sierra', 'email' => 'yuly.vargas@campusvirtual.aunarvillavicencio.edu.co'],
        ];

        foreach ($docentes as $index => $docenteData) {
            $numero = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            
            Docente::firstOrCreate(
                ['email' => $docenteData['email']],
                [
                    'documento' => "PENDIENTE-{$numero}", // Genera un documento único: PENDIENTE-001, PENDIENTE-002, etc.
                    'nombre' => $docenteData['nombre'],
                    'email' => $docenteData['email'],
                    'celular' => 'Pendiente',
                    'vinculacion' => 'tiempo completo',
                ]
            );
        }
    }
}
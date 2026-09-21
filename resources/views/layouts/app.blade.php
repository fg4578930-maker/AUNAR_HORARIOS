<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sistema de Gestión') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-slate-100 text-gray-900">
        <!-- Contenedor principal en columna para fijar el footer abajo -->
        <div class="min-h-screen flex flex-col justify-between">
            
            <div>
                <!-- Barra de Navegación Superior -->
                @include('layouts.navigation')

                <!-- Encabezado opcional de página -->
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Contenido Dinámico de las Vistas -->
                <main>
                    {{ $slot }}
                </main>
            </div>

            <!-- PIE DE PÁGINA INSTITUCIONAL AUNAR (SIN RECUADRO Y LOGO AJUSTADO) -->
            <footer class="bg-[#0b2545] text-white border-t-4 border-yellow-400 mt-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
                    
                    <!-- Contenido en dos columnas compacto -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center border-b border-indigo-900/60 pb-4">
                        
                        <!-- Columna Izquierda: Logo sin marco (h-14) y Títulos -->
                        <div class="flex flex-col sm:flex-row items-center sm:items-center space-y-2 sm:space-y-0 sm:space-x-4 text-center sm:text-left">
                            <img src="{{ asset('images/logo-aunar.png') }}" alt="Logo AUNAR" class="h-14 w-auto object-contain">
                            <div>
                                <h3 class="text-[10px] font-semibold text-indigo-200 tracking-wider">Corporación Universitaria</h3>
                                <h2 class="text-sm font-black text-white tracking-wide">AUTÓNOMA DE NARIÑO</h2>
                                <h4 class="text-xs font-bold text-yellow-400 tracking-widest">AUNAR VILLAVICENCIO</h4>
                                <p class="text-[9px] text-indigo-300 uppercase tracking-widest">Vigilada Mineducación</p>
                            </div>
                        </div>

                        <!-- Columna Derecha: Datos de Contacto y Sede -->
                        <div class="text-center md:text-right space-y-0.5 text-[11px] text-indigo-100 border-t md:border-t-0 md:border-l border-indigo-900/60 pt-3 md:pt-0 md:pl-6">
                            <p class="font-bold text-white text-xs">Corporación Universitaria Autónoma de Nariño</p>
                            <p><span class="font-semibold text-yellow-400">NIT:</span> 891224762-9 &bull; <span class="font-semibold text-yellow-400">SNIES:</span> 3817</p>
                            <p>Vía a Puerto López, km. 2, margen izquierda</p>
                            <p><span class="font-semibold text-yellow-400">PBX:</span> 608 681 9340 &bull; Villavicencio, Meta – Colombia</p>
                        </div>

                    </div>

                    <!-- Franja Legal e Información de Vigilancia -->
                    <div class="pt-3 text-center space-y-1">
                        <p class="text-[10px] font-bold text-yellow-300 tracking-wider uppercase">
                            “Institución de educación superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional”
                        </p>
                        <p class="text-[10px] text-indigo-200">
                            Personería Jurídica No. 1054 del 1 de Febrero de 1983 &bull; &copy; Copyright 2026 AUNAR Villavicencio
                        </p>
                    </div>

                </div>
            </footer>

        </div>
    </body>
</html>
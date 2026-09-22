<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\PeriodoAcademicoController;
use App\Http\Controllers\ProgramaAcademicoController;
use App\Http\Controllers\AsignaturaController;

// Redirige la raíz al login en lugar de mostrar la vista "welcome" de Laravel
Route::get('/', function () {
    return redirect()->route('login');
});

// Ruta del dashboard principal con redirección si es admin
Route::get('/dashboard', function () {
    if (Auth::check() && Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de perfil y consulta general para usuarios autenticados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/periodos', [PeriodoAcademicoController::class, 'index'])->name('periodos.index');
    Route::get('/programas', [ProgramaAcademicoController::class, 'index'])->name('programas.index');
    Route::get('/asignaturas', [AsignaturaController::class, 'index'])->name('asignaturas.index');
    
    
    // Consulta general de docentes (Disponible para Admin y Usuario regular)
    Route::get('/docentes', [DocenteController::class, 'index'])->name('docentes.index');
});

// Rutas exclusivas para el Administrador (Protegidas por 'auth' y el middleware 'admin')
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/periodos/crear', [PeriodoAcademicoController::class, 'create'])->name('periodos.create');
    Route::post('/periodos', [PeriodoAcademicoController::class, 'store'])->name('periodos.store');
    Route::get('/periodos/{periodo}/editar', [PeriodoAcademicoController::class, 'edit'])->name('periodos.edit');
    Route::put('/periodos/{periodo}', [PeriodoAcademicoController::class, 'update'])->name('periodos.update');
    Route::delete('/periodos/{periodo}', [PeriodoAcademicoController::class, 'destroy'])->name('periodos.destroy');
    Route::get('/programas/crear', [ProgramaAcademicoController::class, 'create'])->name('programas.create');
    Route::post('/programas', [ProgramaAcademicoController::class, 'store'])->name('programas.store');
    Route::get('/programas/{programa}/editar', [ProgramaAcademicoController::class, 'edit'])->name('programas.edit');
    Route::put('/programas/{programa}', [ProgramaAcademicoController::class, 'update'])->name('programas.update');
    Route::delete('/programas/{programa}', [ProgramaAcademicoController::class, 'destroy'])->name('programas.destroy');
    Route::get('/asignaturas/crear', [AsignaturaController::class, 'create'])->name('asignaturas.create');
    Route::post('/asignaturas', [AsignaturaController::class, 'store'])->name('asignaturas.store');
    Route::get('/asignaturas/{asignatura}/editar', [AsignaturaController::class, 'edit'])->name('asignaturas.edit');
    Route::put('/asignaturas/{asignatura}', [AsignaturaController::class, 'update'])->name('asignaturas.update');
    Route::delete('/asignaturas/{asignatura}', [AsignaturaController::class, 'destroy'])->name('asignaturas.destroy');
    
    // Gestión de usuarios
    Route::get('/users', [AdminController::class, 'indexUsers'])->name('users.index');
    Route::get('/users/create', [AdminController::class, 'create'])->name('users.create');
    Route::post('/users', [AdminController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('users.destroy');

    // Gestión de docentes (CRUD exclusivo del Administrador)
    Route::get('/docentes/crear', [DocenteController::class, 'create'])->name('docentes.create');
    Route::post('/docentes', [DocenteController::class, 'store'])->name('docentes.store');
    Route::get('/docentes/{docente}/editar', [DocenteController::class, 'edit'])->name('docentes.edit');
    Route::put('/docentes/{docente}', [DocenteController::class, 'update'])->name('docentes.update');
    Route::delete('/docentes/{docente}', [DocenteController::class, 'destroy'])->name('docentes.destroy');
});

require __DIR__.'/auth.php';
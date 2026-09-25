<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Programa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Muestra el panel de administración con estadísticas y últimos usuarios.
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalStandardUsers = User::where('role', 'user')->count();
        $totalDocentes = Docente::count(); // Conteo de docentes para la tarjeta
        $totalProgramas = Programa::count(); // Conteo de programas académicos para la tarjeta
        $users = User::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalAdmins',
            'totalStandardUsers',
            'totalDocentes',
            'totalProgramas',
            'users'
        ));
    }

    /**
     * Muestra la lista completa de todos los usuarios registrados.
     */
    public function indexUsers()
    {
        $users = User::latest()->paginate(10);

        return view('admin.users-index', compact('users'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Almacena el nuevo usuario en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'in:admin,user'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', '¡Usuario creado exitosamente!');
    }

    /**
     * Muestra el formulario para editar un usuario existente.
     */
    public function edit(User $user)
    {
        return view('admin.users-edit', compact('user'));
    }

    /**
     * Actualiza los datos del usuario en la base de datos.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'role' => ['required', 'in:admin,user'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->filled('password')) {
            $request->validate([
                'password' => ['string', 'min:8'],
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', '¡Usuario actualizado exitosamente!');
    }

    /**
     * Elimina un usuario de la base de datos con seguridad.
     */
    public function destroy(User $user)
    {
        if (Auth::id() === $user->id) {
            return redirect()->route('admin.users.index')->with('error', 'No puedes eliminar tu propia cuenta de administrador.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', '¡Usuario eliminado correctamente!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Mendapatkan pengguna yang sedang login
        $loggedInUser = auth()->user();

        // Periksa apakah pengguna memiliki peran "admin"
        if ($loggedInUser->role_id == "admin") {
            // Jika peran pengguna adalah "admin", tampilkan semua pengguna
            $user = User::all();
        } else {
            // Jika peran pengguna bukan "admin", tampilkan hanya pengguna yang login
            $user = User::where('id', $loggedInUser->id)->get();
        }

        // Mendapatkan semua peran
        $role = Role::all();

        // Mengirim data pengguna dan peran ke view
        return view('User.index', compact('user', 'role'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role_id' => $input['role_id'],
            'password' => Hash::make($request['password']),



        ]);

        return redirect('/User')->with('success', 'Data berhasil Ditambahkan')->with('error', 'Data gagal Ditambahkan');
    }

    public function stored(Request $request)
    {
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role_id' => $input['role_id'],
            'password' => Hash::make($request['password']),



        ]);

        return redirect('/')->with('success', 'Data berhasil Ditambahkan')->with('error', 'Data gagal Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect('/User')->with('success', 'Data berhasil DiUpdate')->with('error', 'Data gagal DiUpdate');
    }

    public function destroy($id)
    {

        $u = User::findOrFail($id);
        $u->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    public function user()
    {
        $user = User::all();
        $totalorder = Order::all();
        return view('Layout.side', 'Layout.nav')->with(
            'user',
            $user
        );
    }


    function regisrasi()
    {
        return view('User.registrasi');
    }
}

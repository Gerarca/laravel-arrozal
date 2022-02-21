<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

use Image;
use DB;
use Session;
use Str;

use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    //

    public function __construct(User $users, Role $roles)
    {
		$this->middleware('auth');
    	$this->users = $users;
        $this->roles = $roles;
    }

    public function index()
    {
    	$users = $this->users->where('id','<>','0')->whereIn('id',function ($query){
        $query->select('user_id')
        ->from('role_user');
      })->get();

    	return view('panel.users.index', compact('users'));
    }

    public function create(User $user)
    {
        $roles = $this->roles->get()->all();

        return view('panel.users.form', compact('user', 'roles'));
    }

    public function store(Request $request)
    {
      request()->validate([
        'name'=> 'required|max:255',
        'email'=> 'required|unique:users|max:255',
        'password'=> 'required|max:255|confirmed',
        'image'=> 'required|image'
      ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if($request->hasFile('image')) {
            $fileName = 'user' . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->image->move(base_path() . '/public/uploads/', $fileName);

            $user->imagen = $fileName;
        }
        $user->save();
        $user->roles()->attach($request->rol);

        if( App::getLocale() == 'es' ){
            return redirect()->route('users.index')->with('success', 'El usuario ha sido creado.');
        }else{
            return redirect()->route('users.index')->with('success', 'User Created.');
        }
    }

    public function edit($id)
    {
        $user = $this->users->findOrFail($id);
        $roles = $this->roles->get()->all();;

        return view('panel.users.form', compact('user', 'roles'));
    }
    public function editar_perfil()
    {
      $id = \Auth::user()->id;

        $user = $this->users->findOrFail($id);
        $roles = $this->roles->get()->all();;

        return view('panel.users.form', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255',
        ]);
        $user = $this->users->findOrFail($id);

        $user->fill($request->only('name', 'email', 'rol'))->save();
        if(!empty($request->input('password')) && !empty($request->input('password_confirmation')) && $request->input('password') == $request->input('password_confirmation')) $user->fill([
            'password' => bcrypt($request->input('password'))
        ])->save();

        if($request->hasFile('image')) {
            $fileName = 'user' . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->image->move(base_path() . '/public/uploads/', $fileName);
            $user->imagen = $fileName;
            $user->update();
        }
        $user->roles()->attach($request->rol);

        if( App::getLocale() == 'es' ){
            return redirect()->route('users.index')->with('success', 'El usuario ha sido actualizado');
        }else{
            return redirect()->route('users.index')->with('success', 'User Successfully upgraded');
        }
    }

    public function destroy(Request $request, $id)
    {
        if ($id == \Auth::user()->id) {
            Session::flash('mensaje', 'No se puede eliminar el actual usuario');
            return back();
        }

        $user = $this->users->findOrFail($id);

        $user->delete();
        if( App::getLocale() == 'es' ){
            return redirect()->route('users.index')->with('mensaje', 'Eliminado con éxito');
        }else{
            return redirect()->route('users.index')->with('mensaje', 'Successfully Removed');
        }
    }

    public function show($id)
    {
        return false;
    }



}

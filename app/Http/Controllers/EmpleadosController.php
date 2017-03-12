<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadosController extends Controller
{
  public function index()
  {
      $empleados = Empleado::all();
      return view('agregar', ['empleados' => $empleados]);
  }

  public function store(Request $req)
  {

    // Validation
      $this->validate($req, [
        'cedula' => 'required|max:255|unique:empleados',
        'name' => 'required|max:255',
        'lastname' => 'required|max:255',
        'email' => 'required|email|max:255|unique:empleados',
        'cargo' => 'required|max:255',
      ]);


      Empleado::create([
          'name' => $req['name'],
          'lastname' => $req['lastname'],
          'cedula' => $req['cedula'],
          'status' => 1,
          'email' => $req['email'],
          'cargo' => $req['cargo'],
      ]);

      return redirect('/');
  }

  public function edit($id, Request $req)
  {

    // Validation
      $this->validate($req, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'lastname' => 'required|max:255',
        'cargo' => 'required|max:255',
      ]);

      $empleado = Empleado::find($id);
      $empleado->name = $req['name'];
      $empleado->lastname = $req['lastname'];
      $empleado->email = $req['email'];
      $empleado->cargo = $req['cargo'];
      $empleado->status = $req['status'];
      $empleado->save();

      return redirect('/');
  }

  public function delete($id)
  {
      $emplado = Empleado::find($id);
      $emplado->delete();
      return redirect('/');
  }
}

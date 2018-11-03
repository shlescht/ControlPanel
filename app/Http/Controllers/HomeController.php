<?php

namespace App\Http\Controllers;

use App\Repositories\PersonRepository;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /** @var  PersonRepository */
     private $personRepository;

     /** @var  RoleRepository */
     private $roleRepository;


    public function __construct(PersonRepository $personRepo, RoleRepository $roleRepo)
    {
        $this->middleware('auth');
        $this->personRepository = $personRepo;
        $this->roleRepository = $roleRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
      $role = $this->roleRepository->findWithoutFail($person['IDRl']);
      Auth::user()->setAttribute('name', $person['p_name'] . ' ' . $person['ap_pa'] . ' ' . $person['ap_ma']);
      Auth::user()->setAttribute('role', $role['r_name']);
      return view('home');
    }
}

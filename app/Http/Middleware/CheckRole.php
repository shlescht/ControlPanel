<?php

namespace App\Http\Middleware;

use App\Repositories\PersonRepository;
use App\Repositories\RoleRepository;
use Closure;
use Session;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     /** @var  PersonRepository */
     private $personRepository;

     /** @var  RoleRepository */
     private $roleRepository;


     function __construct(PersonRepository $personRepo, RoleRepository $roleRepo){
       $this->personRepository = $personRepo;
       $this->roleRepository = $roleRepo;
     }

    public function handle($request, Closure $next)
    {
      $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
      $role = $this->roleRepository->findWithoutFail($person['IDRl']);
      if($role['r_name'] == "Blogger"){
        Session::flash('message-error', 'Usuario sin privilegios.');
        return redirect(route('home'));
      }
      return $next($request);
    }
}

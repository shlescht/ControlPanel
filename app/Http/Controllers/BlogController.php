<?php

namespace App\Http\Controllers;


use Prettus\Repository\Criteria\RequestCriteria;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\PersonRepository;
use App\Repositories\RoleRepository;
use App\Repositories\BlogRepository;
use Illuminate\Http\Request;
use App\Models\Person;
use Response;
use Input;
use Flash;
use Auth;


class BlogController extends Controller
{
    /** @var  BlogRepository */
    private $blogRepository;


         /** @var  PersonRepository */
         private $personRepository;

         /** @var  RoleRepository */
         private $roleRepository;


    public function __construct(BlogRepository $blogRepo, PersonRepository $personRepo, RoleRepository $roleRepo) {
        $this->middleware('auth');
        $this->middleware('role', ['only'=>'change']);
        $this->personRepository = $personRepo;
        $this->roleRepository = $roleRepo;
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
      $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
      $role = $this->roleRepository->findWithoutFail($person['IDRl']);
      Auth::user()->setAttribute('name', $person['p_name'] . ' ' . $person['ap_pa'] . ' ' . $person['ap_ma']);
      Auth::user()->setAttribute('role', $role['r_name']);

        $this->blogRepository->pushCriteria(new RequestCriteria($request));
        $blogs = $this->blogRepository->all();

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create() {

      $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
      $role = $this->roleRepository->findWithoutFail($person['IDRl']);
      Auth::user()->setAttribute('name', $person['p_name'] . ' ' . $person['ap_pa'] . ' ' . $person['ap_ma']);
      Auth::user()->setAttribute('role', $role['r_name']);

        $idpn = Person::getIDPn(Auth::user()['IDUr'])[0]['IDPn'];
        return view('blogs.create')->with('idpn', $idpn);
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request) {
        // if $request has files
        if($request->hasFile('img_1') && $request->hasFile('img_2') && $request->hasFile('img_3')){

          // Banner image
          $imageOne = $request->file('img_1');
          $nameOne = md5(time() . '_' . pathinfo($imageOne->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageOne->getClientOriginalExtension();

          // Title image
          $imageTwo = $request->file('img_2');
          $nameTwo = md5(time() . '_' . pathinfo($imageTwo->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageTwo->getClientOriginalExtension();

          // Grill image
          $imageThree = $request->file('img_3');
          $nameThree = md5(time() . '_' . pathinfo($imageThree->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageThree->getClientOriginalExtension();

          // Creating main array
          $input = $request->all();

          //Moving Files
          //Creating blog's storage path
          // $blogStoragePath = storage_path().'/img/blogs/'.md5($input['Title']);
          $blogStoragePath = public_path().'/img/blogs/'.md5($input['Title']);
          \File::makeDirectory($blogStoragePath, $mode = 0777, true, true);

          // Moving each image to the created folder
          $imageOne->move($blogStoragePath, $nameOne);
          $imageTwo->move($blogStoragePath, $nameTwo);
          $imageThree->move($blogStoragePath, $nameThree);

          // Image names array
          $input['img_1'] = $nameOne;
          $input['img_2'] = $nameTwo;
          $input['img_3'] = $nameThree;

          // Creating blog
          $blog = $this->blogRepository->create($input);

          // Success message
          Flash::success('¡Blog creado!');

          // blog index redirect
          return redirect(route('blogs.index'));
      } else {
          // Error message
          Flash::error('Error al crear post');

        }

}

    /**
     * Display the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Entrada no encontrada.');
            return redirect(route('blogs.index'));
        }

        $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
        $role = $this->roleRepository->findWithoutFail($person['IDRl']);
        Auth::user()->setAttribute('name', $person['p_name'] . ' ' . $person['ap_pa'] . ' ' . $person['ap_ma']);
        Auth::user()->setAttribute('role', $role['r_name']);

        $names = Person::getPName($blog['IDPn']);
        $blog['p_name'] = $names[0]['p_name'];
        $blog['ap_pa'] = $names[0]['ap_pa'];
        $blog['ap_ma'] = $names[0]['ap_ma'];

        // Email for testing porpouses
        $blog['email'] = Auth::user()->email;

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $blog = $this->blogRepository->findWithoutFail($id);


        if (empty($blog)) {
            Flash::error('Entrada no encontrada.');

            return redirect(route('blogs.index'));
        }

        $person = $this->personRepository->findWithoutFail(Auth::user()->IDUr);
        $role = $this->roleRepository->findWithoutFail($person['IDRl']);
        Auth::user()->setAttribute('name', $person['p_name'] . ' ' . $person['ap_pa'] . ' ' . $person['ap_ma']);
        Auth::user()->setAttribute('role', $role['r_name']);
        $idur = Auth::user()['IDUr'];
        $idpn = Person::getIDPn($idur)[0]['IDPn'];

        $names = Person::getPName($blog['IDPn']);
        $blog['p_name'] = $names[0]['p_name'];
        $blog['ap_pa'] = $names[0]['ap_pa'];
        $blog['ap_ma'] = $names[0]['ap_ma'];

        // Email for testing porpouses
        $blog['email'] = Auth::user()->email;

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param  int              $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request) {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Entrada no encontrada');

            return redirect(route('blogs.index'));
        }

        // Creating main array
        $blogUpdate = $request->all();

        // Creating file paths
        $blogStoragePath = public_path().'/img/blogs/'.md5($blog['Title']);
        \File::makeDirectory($blogStoragePath, $mode = 0777, true, true);


        if ($request->hasFile('img_1')) {
          // Banner image
          $imageOne = $request->file('img_1');
          $nameOne = md5(time() . '_' . pathinfo($imageOne->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageOne->getClientOriginalExtension();
          $imageOne->move($blogStoragePath, $nameOne);
        } else {
          $blogUpdate['img_1'] = null;
        }

        if($request->hasFile('img_2')){
          // Title image
          $imageTwo = $request->file('img_2');
          $nameTwo = md5(time() . '_' . pathinfo($imageTwo->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageTwo->getClientOriginalExtension();
          $imageTwo->move($blogStoragePath, $nameTwo);
        } else {
          $blogUpdate['img_2'] = null;
        }

        if ($request->hasFile('img_3')) {
          // Grill image
          $imageThree = $request->file('img_3');
          $nameThree = md5(time() . '_' . pathinfo($imageThree->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $imageThree->getClientOriginalExtension();
          $imageThree->move($blogStoragePath, $nameThree);
        } else {
          $blogUpdate['img_3'] = null;
        }

        // If request is null, then...
        $blogUpdate['img_1'] = is_null($blogUpdate['img_1'])?$blog['img_1']:$nameOne;
        $blogUpdate['img_2'] = is_null($blogUpdate['img_2'])?$blog['img_2']:$nameTwo;
        $blogUpdate['img_3'] = is_null($blogUpdate['img_3'])?$blog['img_3']:$nameThree;

        // Updating entry
        $blog = $this->blogRepository->update($blogUpdate, $id);

        // Success message
        Flash::success('Blog updated successfully.');

        // redirect to index
        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }

    public function change($id) {
      $blog = $this->blogRepository->findWithoutFail($id)->get();
      $this->blogRepository->update(['acepted' => !$blog[0]['acepted']], $id);
      return redirect(route('blogs.index'));
    }
}

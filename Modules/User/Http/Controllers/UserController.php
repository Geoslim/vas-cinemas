<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Repository\UserRepository;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(UserRequest $request)
    {
      
        $this->userRepository->create($request->all());

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('movie.create')->with('success', 'User Added Successfully');;
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    public function login(LoginRequest $request)
    {
        

       if (!auth()->attempt($request->only('email', 'password')))
       {
            return back()->with('status', 'Invalid Login Credentials');
       }

        return redirect()->route('movie.create')->with('success', 'Login Success');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login.index');
    }
}

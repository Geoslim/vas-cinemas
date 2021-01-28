<?php

namespace Modules\Movie\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Movie\Http\Requests\MovieRequest;
use Illuminate\Routing\Controller;
use Modules\Movie\Repository\MovieRepository;

class MovieController extends Controller
{

    private $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $showtimes = $this->movieRepository->getShowTime();
        return view('movie::create')->with('showtimes', $showtimes);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(MovieRequest $request)
    {
        
        $this->movieRepository->create($request->all());

        return redirect()->back()->with('success', 'Movie Added');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('movie::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('movie::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}

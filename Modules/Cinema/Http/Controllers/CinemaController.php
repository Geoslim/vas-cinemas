<?php

namespace Modules\Cinema\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Cinema\Http\Requests\CinemaRequest;
use Illuminate\Routing\Controller;
use Modules\Cinema\Repository\CinemaRepository;

class CinemaController extends Controller
{

    private $cinemaRepository;

    public function __construct(CinemaRepository $cinemaRepository)
    {
        $this->cinemaRepository = $cinemaRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('cinema::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('cinema::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CinemaRequest $request)
    {
        $this->cinemaRepository->create($request->all());
        return redirect()->back()->with('success', 'Cinema Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($slug)
    {

        $cinema = $this->cinemaRepository->findBySlug($slug);
        return view('cinema::show')
        ->with('cinema', $cinema)
        ->with('movies', $cinema->movies()->paginate(10));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('cinema::edit');
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

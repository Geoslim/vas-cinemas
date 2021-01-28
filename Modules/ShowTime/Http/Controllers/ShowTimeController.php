<?php

namespace Modules\ShowTime\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\ShowTime\Http\Requests\ShowTimeRequest;
use Illuminate\Http\Request;
use Modules\ShowTime\Repository\ShowTimeRepository;
use Illuminate\Routing\Controller;

class ShowTimeController extends Controller
{

    private $showtimeRepository;

    public function __construct(ShowTimeRepository $showtimeRepository)
    {
        $this->middleware('auth');

        $this->showtimeRepository = $showtimeRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('showtime::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('showtime::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ShowTimeRequest $request)
    {
        $this->showtimeRepository->create($request->all());
        return redirect()->back()->with('success', 'Showtime Added');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('showtime::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('showtime::edit');
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

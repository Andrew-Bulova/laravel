<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequirementRequest;
use App\Requirement;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $requirements = Requirement::paginate(10);

        return view('layouts.requirements_list', compact('requirements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('layouts.requirement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(RequirementRequest $request)
    {
        $requirement = new Requirement();
        $requirement->title = $request->get('title');
        $requirement->description = $request->get('description');
        $requirement->save();

        return redirect(route('requirement_list'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Requirement  $Requirement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requirement  $Requirement
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $requirement = Requirement::findOrFail($id);

        return view('layouts.requirement', compact('requirement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requirement  $Requirement
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(RequirementRequest $request, $id)
    {
        $requirement = Requirement::findOrFail($id);
        $requirement->title = $request->get('title');
        $requirement->description = $request->get('description');
        $requirement->save();

        return redirect(route('requirement_list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requirement  $Requirement
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Requirement::destroy($id);

        return redirect(route('requirement_list'));
    }
}

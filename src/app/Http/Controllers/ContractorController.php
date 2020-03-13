<?php

namespace App\Http\Controllers;

use App\Contractor;
use App\Http\Requests\ContractorRequest;
use App\Services\ContractorService;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $contractors = Contractor::paginate(10);
        $targetType = 'Contractor';

        return view('layouts.contractor_list', compact('contractors'), compact('targetType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Contractor $contractor
     * @return \Illuminate\Http\Response
     */
    public function show(Contractor $contractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $contractor = Contractor::findOrFail($id);

        return view('layouts.contractor', compact('contractor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ContractorRequest $request
     * @param ContractorService $contractor
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ContractorRequest $request, ContractorService $contractor, $id)
    {
        $contractor->contractorUpdate($request, $id);

        return redirect(route('contractor_list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Contractor::destroy($id);

        return redirect(route('contractor_list'));
    }
}

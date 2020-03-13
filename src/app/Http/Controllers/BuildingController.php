<?php

namespace App\Http\Controllers;

use App\Building;
use App\Entity;
use App\Http\Requests\BuildingRequest;
use App\Services\BuildingService;
use Illuminate\Http\Request;
use App\Container\BuildingContainer;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $buildings = Building::whereEntityId($id)->paginate(10);

        return view('layouts.building_list', compact('buildings'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param BuildingService $buildingService
     * @param $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param BuildingService $building
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(BuildingService $building, $id)
    {
        $entity = $building->buildingShort($id)->entity()->first();
        $building = $building->getBuilding($id);


        return view('layouts.building',  ['building' => $building, 'entity' => $entity]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param BuildingRequest $request
     * @param BuildingService $building
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(BuildingRequest $request, BuildingService $building, $id)
    {
        $building->buildingUpdate($request, $id);

        return redirect(route('building_list', [$request->entity()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
    }
}

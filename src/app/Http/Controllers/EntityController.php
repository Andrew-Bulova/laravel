<?php

namespace App\Http\Controllers;

use App\Entity;
use App\Http\Requests\EntityRequest;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $entities = Entity::whereUserId($id)->get();

        return view('layouts.entities_list', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('layouts.new_entity');
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
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Entity $entity)
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
        $entity = Entity::findOrFail($id);

        return view('layouts.entity', compact('entity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EntityRequest $request
     * @param integer $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(EntityRequest $request, $id)
    {
        $entity = Entity::findOrFail($id);
        $entity->name = $request->get('name');
        $entity->legal_address = $request->get('legal_address');
        $entity->tin = $request->get('tin');
        $entity->contact_person = $request->get('contact_person');
        $entity->head_position = $request->get('head_position');
        $entity->head_name = $request->get('head_name');
        $entity->phone = $request->get('phone');
        $entity->email = $request->get('email');
        $entity->save();

        return redirect(route('entity_list', [$entity->user_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $entity = Entity::findOrFail($id);
        $userId = $entity->user_id;
        $entity->delete();

        return redirect(route('entity_list', [$userId]));
    }
}

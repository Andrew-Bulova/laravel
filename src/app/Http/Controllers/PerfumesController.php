<?php

namespace App\Http\Controllers;

use App\Perfumes;
use Illuminate\Http\Request;


class PerfumesController extends Controller
{
    protected function index()
    {
        $perfumes = Perfumes::all();

        return view('layouts.main', compact('perfumes'));
    }

    protected function addPerfume()
    {
        return view('layouts.add_perfume');
    }

    protected function saveSmell(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:10',
            'slug' => 'required|min:3|max:10',
            'description' => 'required|min:10',
            'big_icon' => 'required|image',
            'small_icon' => 'required|image',
            'category_id' => 'required|exists:categories,id'];
        $validator = request()->validate($rules);
        $perfumes = new Perfumes();
        $perfumes->name = $request->input('name');
        $perfumes->slug = $request->input('slug');
        $perfumes->description = $request->input('description');
        $pathBigImg = $request->file('big_icon')->store('images', 'public');
        $pathSmallImg = $request->file('small_icon')->store('images', 'public');
        $perfumes->big_img = $pathBigImg;
        $perfumes->small_img = $pathSmallImg;
        $perfumes->category_id = $request->input('category_id');
        $perfumes->save();
        return view('layouts.main');
    }

    protected function delPerfume($id)
    {
        $perfumes = Perfumes::where('id', $id)->firstOrFail();
        $perfumes -> delete();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $targetType
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($targetType, $id)
    {
        $feedback_list = Feedback::whereTargetType($targetType)->whereTargetId($id)->paginate(10);

        return view('layouts.feedback_list', compact('feedback_list'), compact('targetType'));

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
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);

        return view('layouts.feedback', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(FeedbackRequest $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->feedback = $request->get('feedback');
        $feedback->save();

        return redirect(route('feedback_list', ['targetType'=>$feedback->target_type,'id'=>$feedback->target_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $targetType = $feedback->target_type;
        $targetId = $feedback->target_id;
        $feedback->delete();

        return redirect(route('feedback_list', ['targetType'=>$targetType,'id'=>$targetId]));
    }
}

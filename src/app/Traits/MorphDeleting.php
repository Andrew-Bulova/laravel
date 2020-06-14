<?php

namespace App\Traits;

use \Exception;
use Illuminate\Support\Facades\DB;

trait MorphDeleting
{
    public function deleteMorph($model, $id)
    {
        DB::beginTransaction();
        try {
            $subject = $model::find($id);
            $feedbackList = $subject->feedback;
            foreach ($feedbackList as $feedback) {
                $feedback->delete();
            }
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('user_list')->with('warning', 'Something Went Wrong!');
        }
        try {
            $subject->delete();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('user_list')->with('warning', 'Something Went Wrong!');
        }

        DB::commit();
    }
}

<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class StudentProfileController extends Controller{

    public function ajax(Request $request, $process){

        switch($process){

            case 'update-picture':
                $this->update_picture($request);
                break;
            default:
                break;

        }

    }

    public function student_profile(){
        $page_title = 'Profile Page';

        return view('frontend.student.student-profile', compact('page_title'));


    }

    public function update_picture($request){

        $imageName = null;
        $user = User::find(auth()->user()->id);
        if($request->has('image')){

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            $upload = Storage::disk('public')->putFileAs(
                'uploads/student-profile',
                $request->image,
                $imageName,
            );

        }
        try{

            DB::beginTransaction();

            $user = User::find(auth()->user()->id);

            $user->profile_photo = $imageName;
            $user->save();

            DB::commit();

            $response['success'] = true;
            $response['updated'] = true;
            $response['message'] = 'Upload Image Success';


        }catch(\Illuminate\Database\QueryException $exception){

            DB::rollback();
            $response['success'] = false;
            $response['message'] = "Error on adding user.";
            $response['error'] = $exception->getMessage();
            return response()->json($response, 422);

        }

        return response()->json($response);


    }


}


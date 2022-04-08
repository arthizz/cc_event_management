<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use App\Mail\ColumbanEventMail;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Support\Facades\Mail;
    use Spatie\Permission\Models\Role;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\DB;

    class RegistrationController extends Controller{

        public function register(){

            $page_title = 'Registration';

            return view('frontend.registration.register', compact('page_title'));

        }

        public function register_process(Request $request){

            $imageName = null;

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'year_level' => 'required',
                'student_number' => 'required',
                'department' => 'required',
                'gender' => 'required',
            ],[
                'first_name.*' => 'This field is required',
                'last_name.*' => 'This field is required',
                'email.*' => 'This field is required',
                'password.*' => 'This field is required',
                'year_level.*' => 'This field is required',
                'student_number.*' => 'this field is required',
                'department.*' => 'Please select your department',
                'gender.*' => 'Please select your gender',
            ]);

            if($validator->fails()){

                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()->messages()
                ], 422);
    
            }

            if($request->has('register_image')){

                $image = $request->file('register_image');
                $imageName = time() . '_' . $image->getClientOriginalName();

                $upload = Storage::disk('public')->putFileAs(
                    'uploads/student-profile',
                    $request->register_image,
                    $imageName,
                );

            }

            try {

                DB::beginTransaction();

                $user = User::create([

                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'is_approved' => 1,
                    'phone_number' => $request->phone_number,
                    'student_number' => $request->student_number,
                    'department_id' => $request->department,
                    'year_level_id' => $request->year_level,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'profile_photo' => $imageName,

                ]);
                
                $user->save();

                $role = Role::findOrCreate('student');
                
                $user->assignRole($role->name);

                event(new Registered($user));

                DB::commit();

                Auth::login($user);

                $response['success'] = true;
                $response['updated'] = true;
                $response['message'] = 'New User Added';
                $response['redirect_url'] = '/verified/user';
            } catch (\Illuminate\Database\QueryException $exception) {

                DB::rollback();
                $response['success'] = false;
                $response['message'] = "Error on adding user.";
                $response['error'] = $exception->getMessage();
                return response()->json($response, 422);

            }   

                return response()->json($response);

        }

    }

?>
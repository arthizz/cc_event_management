<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;
    use Illuminate\Foundation\Auth\EmailVerificationRequest;
    use Illuminate\Support\Facades\Auth;

    class EmailVerificationController extends Controller{

        public function verify_required(){

            $page_title = 'Email Verify';
            
            return view('emails.register-email', compact('page_title'));

        }
        
        public function verify_user(EmailVerificationRequest $request){

            $request->fulfill();

            return redirect('/verified/user');

        }

        public function verified_user(){

            $url = '';

            if(Auth::check()){

                if(Auth::user()->hasRole('administrator')){

                    $url = '/administrator/dashboard';

                }elseif(Auth::user()->hasRole('student')){

                    $url = '/student/profile';

                }elseif(Auth::user()->hasRole('professor')){

                    $url = '/professor/profile';

                }else{

                    $url = config('fortify.home');

                }

            }

            return redirect($url);

        }

        public function resend_email(){

            if(Auth::user()->email_verified_at == null){

                Auth::user()->sendEmailVerificationNotification();

                $response['success'] = true;
                $response['message'] = 'Email Verification sent';

            }else{

                $response['success'] = false;
                $response['message'] = 'Email Already Verified';

            }

            return response()->json($response);

        }

    }

?>
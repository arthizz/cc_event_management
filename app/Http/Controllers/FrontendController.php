<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Foundation\Auth\EmailVerificationRequest;

    class FrontendController extends Controller{

        public function ajax($action, Request $request){
            

        }

        public function index(){
            $page_title = 'Homepage';

            return view('frontend.index', compact('page_title'));

        }

        public function calendar(){
            $page_title = 'Calendar';

            return view('frontend.general.calendar-page', compact('page_title'));

        }
        public function event_list(){
            $page_title = 'Event List';

            return view('frontend.general.event-list', compact('page_title'));

        }

    }

?>
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Department;
use Illuminate\Support\Facades\Schema;

class BackendController extends Controller
{   
    public function backend_ajax(Request $request, $action){

        switch($action){

            case 'add-department':
                return $this->add_department($request);
                break;
            case 'get-department-list':
                return $this->get_department_list($request);
                break;
            default:
                return 'action does not exist';

        }

    }

    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Admin Dashboard Overview';

        return view('backend.dashboard', compact('page_title', 'page_description'));
    }

    public function users_page(){

        $page_title = 'Users Page';
        $page_description = 'Admin Users Page View';
        return view('backend.users-page', compact('page_title', 'page_description'));

    }

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('backend.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('backend.ktdatatables', compact('page_title', 'page_description'));
    }

    public function event_management(){

        $page_title = 'Event Management';
        $page_description = 'Manage Event List';

        return view('backend.event-management-page', compact('page_title', 'page_description'));

    }

    public function department_list(){

        $page_title = 'Department Management';
        $page_description = 'Manage Department List';

        return view('backend.department-list-page', compact('page_title', 'page_description'));

    }
    public function add_department($request){

        $validator = Validator::make($request->all(), [

                'department' => 'required',
            ],
            [
                'department.*' => 'this field is required',
            ]
        );

        if($validator->fails()){

            return response()->json([

                'success' => false,
                'message' => $validator->errors()->messages(),

            ], 422);

        }

        try{

            DB::beginTransaction();

            if(Department::where('department', $request->department)->exists()){

                $response['success'] = false;
                $response['message'] = ['department' => ['Department Already Exist']];
                
                return response()->json($response, 422);

            }

            $department = Department::create([
                'department' => $request->department,
            ]);

            $department->save();

            DB::commit();


        }catch(\Illuminate\Database\QueryException $e){

            DB::rollback();
            $response['success'] = false;
            $response['message'] = 'Error in adding Department';
            $response['error'] = $e->getMessage();

            return response()->json($response, 422);

        }

        $all_dept = Department::all();

        return response()->json($all_dept);

    }

    public function get_department_list($request){
        $all_dept = Department::all();
        
        if(!empty($request['query']['generalSearch'])){

            $all_dept = Department::orWhere('department', 'like', '%' . $request['query']['generalSearch'] . '%')->get();

        }


        return response()->json($all_dept);

    }
}

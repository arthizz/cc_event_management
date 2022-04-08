<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Spatie\Permission\Models\Role;
    use Spatie\Permission\Models\Permission;

    class AuthController extends Controller{

        public function roles_permission(){

            $admin_role = Role::create(['name' => 'administrator']);
            $student_role = Role::create(['name' => 'student']);
            $staff_role = Role::create(['name' => 'professor']);

            $user_permission[] = Permission::create(['name' => 'access user list']);
            $user_permission[] = Permission::create(['name' => 'create user']);
            $user_permission[] = Permission::create(['name' => 'edit user']);
            $user_permission[] = Permission::create(['name' => 'delete user']);

            $event_permission[] = Permission::create(['name' => 'create event']);
            $event_permission[] = Permission::create(['name' => 'edit event']);
            $event_permission[] = Permission::create(['name' => 'delete event']);
            $event_permission[] = Permission::create(['name' => 'access event list']);

            $admin_role->givePermissionTo($user_permission);
            $admin_role->givePermissionTo($event_permission);
            $staff_role->givePermissionTo($event_permission);

        }

    }

?>
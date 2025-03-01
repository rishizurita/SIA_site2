<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function getUsers()
    {
        $users = User::all();
        return response()->json(['data' => $users], 200);
    
        // eloquent style
        // $users = user::all();
        
        // sql string as parameter
    $users = DB::connection('mysql') ->select("Select * from table_user where userid <=3");
        // return response()->json($users, 200);
        // return response()->json(['data' => $users, 'site' => 1], 200);
    return response()->json(['data' => $users],200);
        // return $this -> successResponse($users);
    }

}
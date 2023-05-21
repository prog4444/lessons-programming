<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
       
        $data = [
            'count_user' => User::latest()->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_user',
            'title'    => 'Table User'
        ];
       
        if ($request->ajax()) {
            $q_user = User::select('*')->where('level','!=', 0)->orderByDesc('created_at');
            return DataTables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                       
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.layouts.v_template',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        User::updateOrCreate(['id' => $request->user_id],
                [
                 'name' => $request->name,
                 'email' => $request->email,
                 'level' => $request->level,
                 'password' => Hash::make($request->password),
                ]);        

        return response()->json(['success'=>'User saved successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $User = User::find($id);
        return response()->json($User);

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success'=>'Customer deleted!']);
    }
}

<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    protected function index()
    {
        $items = TaskConfig::all();;
        return  view('admin.tasks.index',['items'=>$items]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'status' =>$data['status'],
            'email' => $data['email'],
            'message' => $data['email'],
            'subject' => $data['email'],
        ]);
    }
    protected function update(array $data)
        {                   //update data //
            return User::create([
                'name' => $data['name'],
                'status' =>$data['status'],
                'email' => $data['email'],
                'message' => $data['email'],
                'subject' => $data['email'],
            ]);
    }    protected function delete(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['email'],
            'subject' => $data['email'],
        ]);
    }
}

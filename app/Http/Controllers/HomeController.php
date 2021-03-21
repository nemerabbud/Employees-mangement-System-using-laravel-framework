<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
    class ProfilesController extends Controller
{
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.show', compact('profile'));
    }
    public function create (){}

    public function update (){

    }
}

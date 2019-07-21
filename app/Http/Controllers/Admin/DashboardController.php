<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Franchise;
use App\Personal;
use App\Order;
use App\Category;
use App\Client;
use App\Comment;
use App\Advertisement;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::id();  
      
       $role = auth()->user()->roles[0]->slug;

        switch (auth()->user()->roles[0]->slug) {
            case 'admin':
                $franquicias = Franchise::orderBy('id','desc')->take(5)->get();
                $personas = null;      
                $pedidos = null;
                $locales = Client::orderBy('id','desc')->take(5)->get();
               
                $comments = Comment::orderBy('id','desc')->take(5)->get();
                $publishings = Advertisement::orderBy('id','desc')->take(5)->get();
                $productos = Category::take(5)->get();
            break;
            case 'franquicia':
                $franquicias = null;
                $personas = null;      
                $pedidos = null;
                $franchise = Franchise::where('user_id',$user_id)->first();
              
                $locales = Client::orderBy('id','desc')->where('franchise_id',$franchise->id)->take(5)->get();
                
                $comments = null;
                $publishings = null;
                $productos = Category::take(5)->get();
               
                break;
            case 'mozo':
                
                break;
        }

        
        
       
        return view('admin.paginas.dashboard.index',['publishings'=>$publishings,'comments'=>$comments,'role'=>$role,'clients'=>$locales,'franquicias'=>$franquicias,'personas'=>$personas,'pedidos'=>$pedidos,'productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

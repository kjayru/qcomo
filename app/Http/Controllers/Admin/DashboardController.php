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

        $franquicias = null;
        $personas = null;      
        $pedidos = null;
        $comments = null;
        $publishings = null;
        $locales = null;
        $productos = null;
        
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
            case 'local':
                $franquicias = null;
                $personas = null;      
                $pedidos = null;
                $franchise = null;
              
                $locales = null;
                
                $comments = null;
                $publishings = null;
                $productos = Category::take(5)->get();
               
            break;
            case 'caja':
                $franquicias = null;
                $personas = null;      
                $pedidos = null;
                $franchise = null;
            
                $locales = null;
                
                $comments = null;
                $publishings = null;
                $productos = Category::take(5)->get();
               
            break;
            case 'mozo':
                $franquicias = null;
                $personas = null;      
                $pedidos = null;
                $franchise = null;
            
                $locales = null;
                
                $comments = null;
                $publishings = null;
                $productos = Category::take(5)->get(); 
            break;
        }

        
        
       
        return view('admin.paginas.dashboard.index',['publishings'=>$publishings,'comments'=>$comments,'role'=>$role,'clients'=>$locales,'franquicias'=>$franquicias,'personas'=>$personas,'pedidos'=>$pedidos,'productos'=>$productos]);
    }

    public function success(Request $request){
       
     

        return view('admin.paginas.status.success');
    }
    public function pending(Request $request){

       
       
        return view('admin.paginas.status.pending');
    }
    public function failure(Request $request){

       
        
        return view('admin.paginas.status.failure');
    }



    public function exitoso(Request $request){
        return view('admin.paginas.status.exitoso');
    }

    public function fallo(Request $request){
        return view('admin.paginas.status.fallo');
    }
}

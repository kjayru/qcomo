<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classification;
 
class ClassificationsController extends Controller
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
        $clasificaciones = Classification::orderBy('id')->get();
        return view('admin.paginas.classifications.index',['clasificaciones'=>$clasificaciones]);
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
        $classification = new Classification();
   
        $classification->name = $request->name;
        $classification->decription = $request->decription; 
        if ($request->hasFile('cover')) {
            $avatar = $request->file('cover')->store('classifications');
            $classification->cover = $avatar;
        } 
        $classification->save();

        return response()->json(['rpta'=>'ok']);

    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classification = Classification::find($id);
        return response()->json($classification);
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
        $classification = Classification::find($id);
        $classification->name = $request->name;
        $classification->decription = $request->decription; 

        if ($request->hasFile('cover')) {
            $avatar = $request->file('cover')->store('classifications');
            $classification->cover = $avatar;
        }
        $classification->id = $request->id;
        $classification->save();

        return response()->json(['rpta'=>'ok']);
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

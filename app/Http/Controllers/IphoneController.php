<?php

namespace App\Http\Controllers;

use App\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    public function index(){
        $iphone = Iphone::all();
        return view('iphone', compact('iphone'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'title'=>'required|string',
            'name'=>'required|string',
            'message'=>'required',
        ]);

        $iphone = new Iphone();
        $iphone->title = $request->title;
        $iphone->name = $request->name;
        $iphone->message = $request->message;
        $iphone->save();
        session()->flash('Success', 'Post created successfully!!');
        return redirect()->back();
    }

    public function database(){
        // dd('mine');
        $iphone=Iphone::all();
        return view('database', compact('iphone'));
    }

    public function edit($id)
    {   
      
      $iphone = Iphone::where('id',$id)->first();
      return view('edit', compact('iphone'));
        // $iphone = Iphone::where('id', $id)->first();
        // $iphone = Iphone::where($request, $id)->first()->id;
        // $iphone->first()->id;
        // collect($iphone)->id; // error
        // collect($iphone)->first()->id;
        // return view('edit', compact('iphone'));        
    }

    public function update(Request $request, $id)
    {
        $iphone = Iphone::where('id', $id)->first();
        // dd($iphone->name);
        $iphone->title = $request->title;
        $iphone->name = $request->name;
        $iphone->message = $request->message;
        $iphone->save();
        session()->flash('Success', 'Post created successfully!!');
        // return redirect()->back();
       
        // Iphone:: find($id)->update($request->all());
        return redirect('/database');
        // $iphone = Iphone::find($id);
        // $iphone ->name =  $request->get('title');
        // $iphone ->title = $request->get('name');
        // $iphone ->message = $request->get('message');
        // $iphone ->save();
        //     return view('update', compact('iphone'));
        //     session()->flash('good');
        // return redirect('/iphone')->with('success', 'Iphone updated!');
    }

        public function delete($id){
            $iphone = Iphone::findOrFail($id);
            $iphone->delete($id);
             return redirect()->back();
            // $iphone = Iphone::where('id',$id)->first();
            // $iphone = Iphone::where('id',$id)->first();
            // $iphone->destroy(); 
            // return view('database', compact('iphone'));

            // dd('id', $id);
           
        // $iphone = Iphone::where('id', $id)->first();
       

        //  return view('/database', compact('iphone'));
         //  return redirect('/database', compact('iphone'));
        // $iphone = Iphone::where('id', $id)->findOrFail->first();
        // return redirect('/database', compact('iphone'));
        // session()->flash('success', 'Post deleted successfully!!');
        // return redirect('/database');
        // return redirect()->route('/database')->with('success','Article deleted successfully');
        
        }
        

}

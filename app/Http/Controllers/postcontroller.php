<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;

use App\Http\Resources\postres;
use App\Http\Resources\comres;

class postcontroller extends Controller
{
    
    public function save(Request $request){

        if($request->hasfile('imagefile')){
         //get filename with extension
         $filenamewithextension = $request->file('imagefile')->getClientOriginalName();
 
         //get filename without extension
         $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
 
         //get file extension
         $extension = $request->file('imagefile')->getClientOriginalExtension();
 
         //filename to store
         $filenametostore = $filename.'_'.time().'.'.$extension;
 
         //store
             $request->file('imagefile')->storeAs('public/images', $filenametostore);
     
     }else{
           $filenametostore = 'noimage.jpg';
     }
        $save = new post;

        $save->title= $request->input('title');
        $save->image= $filenametostore;
        $save->des= $request->input('des');

        
        $save->save();
    }


    public function posts(Request $request){
       //paginated posts
       $posts = Post::orderby('id','desc')->paginate(3);
       //return post as res
       
       return postres::collection($posts);
    }

    public function single($id){

        $post = Post::findorfail($id);
        return new postres($post);
    }


    public function edit($id){
        $post = Post::findorfail($id);
        return new postres($post);
    }


    public function update(Request $request){

    $id = $request->input('id');

    $up = post::findorfail($id);

        if($request->hasfile('imagefile')){
            //get filename with extension
            $filenamewithextension = $request->file('imagefile')->getClientOriginalName();
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
            //get file extension
            $extension = $request->file('imagefile')->getClientOriginalExtension();
    
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
    
            //store
                $request->file('imagefile')->storeAs('public/images', $filenametostore);
        
        }else{
              $filenametostore = 'noimage.jpg';
        }
           
           $up->title= $request->input('title');
           $up->image= $filenametostore;
           $up->des= $request->input('des');
   
           
           $up->save();

    return response()->json(['success' => 'updated!']);
    }


    public function del($id){
       
        $del = post::findorfail($id);
        $del->delete();
        return response()->json(['success' => 'deleted!']);  
    }




    public function comment(Request $request){

        $post_id = $request->input('id');
        $name = $request->input('name');
        $mail = $request->input('mail');
        $msg = $request->input('msg');

        $save = new comment;

        $save->post_id = $post_id;
        $save->name = $name;
        $save->mail = $mail;
        $save->msg = $msg;

        $save->save();

        return response()->json(['success' => 'comment posted']);
    }

    public function coms($id){
       
        //paginated posts
       $comments = comment::orderby('id','desc')->where('post_id','=', $id)->paginate(4);
       //return post as res
       return comres::collection($comments);
    }

    public function com_count($id){
         //paginated posts
      return $comments = comment::where('post_id','=', $id)->get()->count();
       //return post as res
      // return response()->json(['success'=>$comments]);
    }

    public function imgs(Request $request){
        //paginated posts
        $posts = Post::orderby('id','desc')->paginate(9);
        //return post as res
        
        return postres::collection($posts);
     }


     public function search($query){
        $res = Post::where('title','LIKE','%'.$query.'%')->paginate(2)
        ->appends(request()->all());
        return postres::collection($res);
     }
}//class end

<?php

namespace Furbook\Http\Controllers;
use Illuminate\Http\Request;
use Furbook\Cat;
use Furbook\User;
//use Furbook\Role;
use Furbook\Post;
use Furbook\Article;
use DB;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Saving data method firstOrCreate kiem tra du lieu truoc khi cho vao
    public function index(){

        $user = User::create([
            'name'=>'Model event',
            'email'=>'model.event@gmail.com',
            'password'=>'12345'
        ]);
        dd($user);

//        $article = Article::with('images')->find(1);
//
//        dd($article->images);

//        $post = Post::with('images')->find(1);
//
//        dd($post->images);
//        $user = User::with('roles')->find(1);
//
//        $user->roles()->attach([1,2]);
//        dd($user->roles);
        //
        $cat = Cat::firstOrCreate([
            dd(Cat::withTrashed()->get),
            'name' => 'Tom firsOrCreate',
            'date_of_birth'=>day('Y-m-d'),
            'breed_id'=>1,
            'descriotion'=>'Meo tom firsOrCreate'

        ]);
        dd($cat);
        //Saving data by model instance
        $cat=Cat::find(1);
        $cat->name = 'Tom model instance';
        $cat->description = 'Meo tom model instance';
        $cat->save();
        dd($cat);
        //Saving data method create
//        $cat = Cat::create
//            'name' => 'Tom firsOrCreate',
//            'date_of_birth'=>day('Y-m-d'),
//            'breed_id'=>1,
//            'descriotion'=>'Meo tom firsOrCreate'
    }
//    {   Db::connection()->enableQueryLog;
//
//        $cats = Cat::all();
//        return view('cats.index')->with('cats', $cats);
//        dd(DB::getQueryLog);
//    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());// kiêm tra dữ liệu có dc gởi lên hay k?
        $cat=new Cat();
        $cat->name = $request->name;
        $cat->date_of_birth=$request->date_of_birth;
        $cat->breed_id=$request->breed_id;
        $cat->save();
       return redirect('cats')->with('thongbao','cat has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        return view('cats.show',compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::find($id);
        return view('cats.edit',compact('cat'));
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
        Cat::where('id', $id)->update([
            'name' => $request->input('name'),
            'date_of_birth' => $request->input('date_of_birth'),
            'breed_id' => $request->input('breed_id')
        ]);
        return redirect('cats/'. $id)
            ->withSuccess('Cat has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cat::where('id', $id)->delete();
        return redirect('cats')
            ->withSuccess('Cat has been deleted.');
    }

}

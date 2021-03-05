<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index(Request $request)
    {
        $data = Book::orderBy('id','DESC')->paginate(5);
        return view('books.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required',
            'headline' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'pdf' => 'required',
        ]);
        $book = new Book();
        $book->headline = $request->headline;
        $book->publisher = $request->publisher;
        $book->author = $request->author;
        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $book->cover = $file->store('cover');
        }
        if($request->hasFile('pdf'))
        {
            $file = $request->file('pdf');
            $book->pdf = $file->store('books');
        }
        $book->save();
        return redirect()->route('books.index')
                        ->with('success','Book created successfully');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));
    }
 	public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
  	public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
    public function sendNotification()
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from RajTechnologies.com',
            'thanks' => 'Thank you for using RajTechnologies.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];
  
        Notification::send($user, new UserNotification($details));
   
        dd('done');
    }
}

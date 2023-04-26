<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadTrait;
use App\Models\Author;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('admin.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = new Author();
        return view('admin.authors.create-edit', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:authors',
            'phone_no' => 'required|string',
            'address' => 'nullable|string',
        ]);

        if($request->photo)
        {
            $imageName = $this->uploadImage('photo', 'author_images');
            $validate['photo'] = $imageName;
        }

        Author::create($validate);
        return redirect('authors')->with('success', 'Author created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('admin.authors.create-edit', compact('author'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|unique:authors,name,' .$id,
        ]);
        Author::findOrFail($id)->update($data);
        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->update([
            'deleted_by' => auth()->user()->id,
        ]);
        $author->delete();
        return back();
    }
}


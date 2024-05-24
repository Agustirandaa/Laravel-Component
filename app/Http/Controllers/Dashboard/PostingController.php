<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Posting;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posting::where('user_id', Auth::user()->id)->get();
        return view('pages.dashboard.posting.index', [
            'title' => 'Posting',
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.posting.create', [
            'title' => 'Tambah Posting',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'excerpt' => 'required',
            'category_id' => 'required',
            'slug' => 'required|max:110|min:5|unique:postings',
            'file' => 'file|mimes:jpg,jpeg,png|max:2048',
            'body' => 'required',
        ];
        $validate = $request->validate($rules);

        $file = date('Ymd_His') . '-' . $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('/post-image/'), $file);
        $validate['file'] = 'post-image/' . $file;

        $validate['user_id'] = Auth::user()->id;
        Posting::create($validate);
        return redirect(route('posts.index'))->with('success', 'Posting created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Posting::find($id);
        return view('pages.dashboard.posting.edit', [
            'title' => 'Edit Posting',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $rules = [
            'category_id' => 'required',
            'title' => 'required|max:100|min:5',
            'excerpt' => 'required|max:255|min:5',
            'slug' => 'required|max:110|min:5',
            'file' => 'file|mimes:jpg,jpeg,png|max:2048',
            'body' => 'required',
        ];

        $validate = $request->validate($rules);
        Posting::find($id)->update($validate);
        return redirect(route('posts.index'))->with('success', 'Posting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $post = Posting::find($id);
        if ($post->file) {
            File::delete(public_path($post->file));
        }
        $post->delete();
        return redirect(route('posts.index'))->with('success', 'Posting deleted successfully');
    }



    // public function ckeditorUploadImage(Request $request)
    // {
    //     if ($request->hasFile('upload')) {
    //         $originName = $request->file('upload')->getClientOriginalName();
    //         $fileName = pathinfo($originName, PATHINFO_FILENAME);
    //         $extension = $request->file('upload')->getClientOriginalExtension();
    //         $fileName = $fileName . '_' . time() . '.' . $extension;

    //         $request->file('upload')->move(public_path('file_media'), $fileName);
    //         $url = asset('file_media/' . $fileName);

    //         return response()->json([
    //             'uploaded' => true,
    //             'url' => $url
    //         ]);
    //     }
    //     return response()->json(['uploaded' => false]);
    // }
}

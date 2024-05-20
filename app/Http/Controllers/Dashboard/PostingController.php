<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Posting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PostingController extends Controller
{
    public function index()
    {
        $posts = Posting::where('user_id', Auth::user()->id)->get();
        return view('pages.dashboard.posting.index', [
            'title' => 'Posting',
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('pages.dashboard.posting.create', ['title' => 'Tambah Posting']);
    }


    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'title' => 'required',
            'excerpt' => 'required',
            'category' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'body' => 'required',
        ];

        $validate = $request->validate($rules);

        $validate['user_id'] = Auth::user()->id;
        $validate['category_id'] = Auth::user()->id;
        Posting::create($validate);
        return redirect(route('posting.index'))->with('success', 'Posting created successfully');
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

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Posting;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index', ['title' => 'Dashboard']);
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posting::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

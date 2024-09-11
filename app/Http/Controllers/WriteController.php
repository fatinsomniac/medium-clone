<?php

namespace App\Http\Controllers;

use App\Http\Requests\WriteRequest;
use App\Models\Write;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WriteController extends Controller
{
    public function index()
    {
        return view('page.write.index');
    }

    public function store(WriteRequest $request)
    {
        $uuid = strtolower(Str::uuid(32));

        Write::create([
            'uuid'     => $uuid,
            'title'    => $request->title,
            'author'   => $request->author,
            'ur_story' => $request->ur_story,
        ]);

        return back();
        
    }
}

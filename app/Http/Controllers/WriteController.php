<?php

namespace App\Http\Controllers;

use App\Http\Requests\WriteRequest;
use App\Models\Write;
use Illuminate\Support\Str;

class WriteController extends Controller
{
    public function index()
    {
        $writes = Write::query()->latest()->get();

        return view('page.write.index', [
            'writes' => $writes,
        ]);
    }

    public function store(WriteRequest $writeRequest)
    {
        $slug =  Str::slug($writeRequest->title);

        Write::create([
            'title'    => $writeRequest->title,
            'slug'     => $slug,
            'author'   => $writeRequest->author,
            'ur_story' => $writeRequest->ur_story,
        ]);

        return back();
    }
}

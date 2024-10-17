<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Jobs\ConvertVideoForDownloading;
use App\Jobs\ConvertVideoForStreaming;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VideoController extends Controller
{
    //

    public function store(StoreVideoRequest $request)
    {
        $video = Video::create([
            'disk'          => 'local',
            'original_name' => $request->video->getClientOriginalName(),
            'path'          => $request->video->store('videos', 'local'),
            'title'         => $request->title,
        ]);
 
        // $this->dispatch(new ConvertVideoForDownloading($video));
        // ConvertVideoForDownloading::dispatch($video)->afterCommit();
        // $this->dispatch(new ConvertVideoForStreaming($video));
        ConvertVideoForStreaming::dispatch($video)->afterCommit();
 
        return response()->json([
            'id' => $video->id,
        ], 201);
    }

    function create() : View {
        return view('video.upload');
    }
}

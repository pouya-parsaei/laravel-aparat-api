<?php

namespace App\Http\Controllers;

use App\Exceptions\CanNotGetFormActionException;
use App\Exceptions\VideoNotFoundException;
use App\Services\Aparat\AparatHandler;
use Illuminate\Http\Request;

class AparatController extends Controller
{
    public function __construct(private AparatHandler $aparat)
    {

    }

    public function index()
    {
        $videos = $this->aparat->mostViewedVideos();

        return view('videos', compact('videos'));
    }

    public function login()
    {
        $response = $this->aparat->login();

        return response()->json([
            'data' => $response
        ]);
    }

    public function upload(Request $request)
    {
        try {
            $response = $this->aparat->upload($request->fileName, $request->title, $request->category);
            return response()->json([
                'data' => $response
            ]);
        } catch (CanNotGetFormActionException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function delete()
    {
        $response = $this->aparat->delete(request()->uid);
        return response()->json([
            'data' => $response
        ]);
    }

    public function show()
    {
        try {
            $response = $this->aparat->show(request()->uid);
            return response()->json([
                'data' => $response
            ]);
        } catch (VideoNotFoundException $e) {
            return response()->json([
                'error' => $e->getMessage()
            ]);
        }
    }
}

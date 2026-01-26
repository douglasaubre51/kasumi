<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\GalleryImage;
use DB;
use Exception;
use Illuminate\Http\Request;

class FubukiController extends Controller
{
    // event actions

    public function getAll(Request $request)
    {
        try {
            $dbEvents = Event::all();

            return response()->json($dbEvents);
        } catch (Exception $e) {
            error_log($e->getMessage());

            return response()->json([
                'error' => $e->getMessage(),
                500]);
        }
    }

    public function addEvent(Request $request)
    {
        try {
            $data = $request->all();

            Event::create($data);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }

        return response()->json([
            'status' => 'added new event',
        ], 200);
    }

    // gallery actions
    public function getAllImages(Request $request)
    {
        $images = GalleryImage::all();

        return response()->json($images);
    }

    public function addImage(Request $request)
    {
        try {
            $data = $request->all();
            $data['caption'] = 'a gallery image';
            $new_image = GalleryImage::create($data);
            $db_image = DB::table('gallery_images')
                ->where('id', $new_image->id)
                ->get();
        } catch (Exception $e) {
            error_log($e->getMessage());

            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }

        return response()->json([
            'message' => 'gallery image saved!',
            'image' => $db_image,
        ]);
    }

    public function testDb(Request $request)
    {
        GalleryImage::create([
            'title' => 'game workshop',
            'caption' => 'image of game workshop',
        ]);

        return response()->json([
            'message' => 'success hit',
        ]);
    }
}

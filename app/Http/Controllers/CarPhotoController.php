<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarPhoto;
use Illuminate\Support\Facades\Storage;

class CarPhotoController extends Controller
{
    public function save($id, Request $request)
    {
        $photos = $request->file('photos');

        if ($photos) {
            foreach ($photos as $photo) {
                if ($photo->isValid()) {
                    // Upload photo
                    // $imageName = time() . '_' . $photo->getClientOriginalName();
                    // $photo->storeAs('public/images', $imageName);
                    $photo->store("/public/images");

                    // Create new CarPhoto instance
                    $carPhoto = new CarPhoto();
                    $carPhoto->Car_ID = $id;
                    $carPhoto->Image = $photo->hashName();;
                    $carPhoto->save();
                }
            }
        }

        return back();
    }


    public function delete($id)
    {
        // Find existing car photo
        $carPhoto = CarPhoto::findOrFail($id);

        // Delete car photo image
        Storage::delete('public/images/'.$carPhoto->Image);

        // Delete car photo instance
        $carPhoto->delete();

        return back();
    }
}

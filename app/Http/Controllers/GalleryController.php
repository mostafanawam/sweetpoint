<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function RemoveImage(Request $request)
    {
        //delete image by removing it from the directory
        $row = explode(
            "http://127.0.0.1:8000/storage/gallery/",
            $request->temp_photo
        );
        $filename = $row[1];
        $filepath = public_path("storage/gallery/" . $filename);
        $succ = unlink($filepath);
        if ($succ) {
            return back()->with("success", "Image deleted successfully");
        } else {
            return back()->with(
                "fail",
                "Something went wrong,try again later!!"
            );
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function Upload_Image(Request $request)
    {
        //upload new image and added to directory
        //Validate requests
        $request->validate([
            "image" => "required|mimes:jpg,jpeg,png,svg,gif,JPEG|max:2048",
        ]);
        $path = $request->file("image")->store("gallery", "public");

        if ($path) {
            return back()->with("success", "Image uploaded successfully");
        } else {
            return back()->with(
                "fail",
                "Something went wrong,try again later!!"
            );
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function GetGallery()
    {
        //get the images inside the folder
        $files = Storage::disk("local")->allFiles("public");
        return view("admin.gallery", ["files" => $files]);
    }
}

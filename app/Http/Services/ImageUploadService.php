<?php
namespace App\Http\Services;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadService{

    public static function store(Request $request)
    {
        $client = new S3Client([
            'region' => env("AWS_DEFAULT_REGION"),
            'version' => env("AWS_VERSION"),
            'credentials' => [
                'key' => env("AWS_ACCESS_KEY_ID"),
                'secret' => env("AWS_SECRET_ACCESS_KEY"),
            ]
        ]);
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        
        $path = $request->file('image')->store(
            'images', 's3'
        );
        return "https://jotform-intern.s3.eu-central-1.amazonaws.com/".$path;
        
    }
     
        return back()->withSuccess('Image uploaded successfully');
    }
     

}


?>
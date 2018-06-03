<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class FileController extends Controller
{
    public function index()
    {
    	return view('file.index');
    }

    public function store(Request $request)
    {
        if($request->hasFile('pic'))
        {
            $pic = $request->file('pic');
            $filename = $pic->getClientOriginalName();
            $ph = "C:/Users/joy/Desktop/photos/".$filename;

            //--------------------------

            $im2 = imagecreatefrompng($ph);
            $rgb2 = imagecolorat($im2, 10, 15);

            $colors2 = imagecolorsforindex($im2, $rgb2);

            $file = DB::table('files')
                    ->get();
            //var_dump($file);
            foreach ($file as $key) {
            $p = $key->Name;
            //echo $p;
            //path set for database

            $photo = "F:/protik/thessi/thesis_update_1/public/uploads/".$p;
            //echo $photo;

            $im = imagecreatefrompng($photo);
            $rgb = imagecolorat($im, 10, 15);

            $colors1 = imagecolorsforindex($im, $rgb);
            //var_dump($colors1);
            if($colors2 == $colors1)
            {

                return redirect()->route('login');

            }
            else
            {
                continue;
            }

        }
          Session::put('imagePath',$ph);
         return redirect()->route('mail.send');
        }
        else
        {
            echo 'Error uploading file';
        }


        //echo $file->$request->Name;

    }

    public function addImage()
    {
      // code...
      return view('usertype.admin.imageAdd');
    }

    public function save(Request $request)
    {

        if($request->hasFile('pic'))
        {
            $file = $request->file('pic');
            $filesize = $file->getSize();
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $file->getClientOriginalName());
            echo $filesize;

            $f = new File();
            $f->Name = $filename;
            $f->Size = $filesize;
            $f->save();
            Session::flash('imageAdd', 'Image added successfully!');

            return redirect()->route('registershow.showAllUsers');
            // echo $request->pic;
            // echo "protik";
        }
        else
        {
            echo 'Error uploading file';
        }
    }


}

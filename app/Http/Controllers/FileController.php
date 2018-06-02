<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
            //var_dump($colors2);

            //--------------------------


            // $filesize = $file->getSize();
            // $file->move('uploads', $file->getClientOriginalName());
            // echo $filesize;

            // $f = new File();
            // $f->Name = $filename;
            // $f->Size = $filesize;
            // $f->save();
            // return 'yes';

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
        return view('file.unkown')->with('pic',$ph);

        }
        /*if($request->hasFile('pic'))
        {
            $file = $request->file('pic');
            echo 'File Name: ', $file->getClientOriginalName(), '<br/>';
            echo 'File Extension: ', $file->getClientOriginalExtension(), '<br/>';
            echo 'File Size: ', $file->getSize(), '<br/>';
            echo 'File MIME Type: ', $file->getMimeType(), '<br/>';

            $file->move('uploads', $file->getClientOriginalName());
        }*/



        else
        {
            echo 'Error uploading file';
        }


        //echo $file->$request->Name;

    }

    /*public function check(Request $request)
    {

    	if($request->hasFile('pic'))
    	{
    		//$file = $request->file('pic');
    		$filename =  $request->pic->getClientOriginalName();
    		//echo $filename;
    		//$value = $request->value;
    		//echo $value;
    		//echo 'File Extension: ', $file->getClientOriginalExtension(), '<br/>';
    		//echo 'File Size: ', $file->getSize(), '<br/>';
    		//echo 'File MIME Type: ', $file->getMimeType(), '<br/>';

    		//$file->move('uploads', $file->getClientOriginalName());
            $y = null;

    		$file = DB::table('files')
    				->get();
    		//echo $file->$request->Name;
    		//var_dump($file);
    		foreach ($file as $key) {
    			//echo $key->Name;
    			if($key->Value == $value)
    			{
    				//echo 'yes';
                    //$y = "yes";
                    //echo $value;
                    //break;
                    /*if($y == "yes")
                    {
                        echo $value;
                        break;
                    }
                    else
                    {
                        echo 'no';
                    }*/
                    //return redirect()->route('password.index');
    			//}
                /*else
                {
                    echo 'no';
                    //break;
                }*/
    			/*if($y == "yes")
    			{
    				echo $value;
                    break;
    			}
                else
                {
                    echo 'no';
                }
    		}

            return view('file.unkown');

    	}
    	else
    	{
    		echo 'Error uploading file';
    	}
    }*/

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
            return 'yes';
            // echo $request->pic;
            // echo "protik";
        }
        else
        {
            echo 'Error uploading file';
        }
    }


}

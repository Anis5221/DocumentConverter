<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Convertphp\DocConvert;
use App\Http\Controllers\Auth;

class DocumentController extends Controller
{
    public function index () {
        return view('convertPages.docTopdf');
    }

    public function pptindex () {
        return view('convertPages.ppttopdf');
    }

    public function imageindex () {
        return view('convertPages.imagetopdf');
    }

    public function index_text(){

        return view('convertPages.textTopdf');
    }
    public function pdfConvert(Request $request, $id)
    {



                $validated = $request->validate([
                    'file' => 'required|file|max:5000|mimes:doc,docx',

                ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);
        $fileextention = pathinfo($filename, PATHINFO_EXTENSION);

        $converter = new DocConvert($file);
        $converter->convertTo($filenamewithoutex.'.pdf');

        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        if($fileextention == 'doc'){
            $productData->type = "Doc To Pdf";
        }else{
            $productData->type = "Docx To Pdf";
        }
        $productData->user_id =  $id;
        $productData->save();
        return response()->download('/opt/lampp/temp/'.$filenamewithoutex.'.pdf');
    }


    public function pptConvert(Request $request, $id)
    {



                $validated = $request->validate([
                    'file' => 'required|file|max:5000|mimes:pptx',

                ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);

        $converter = new DocConvert($file);
        $converter->convertTo($filenamewithoutex.'.pdf');

        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        $productData->type = "PPT To Pdf";
        $productData->user_id =  $id;
        $productData->save();
        return response()->download('/opt/lampp/temp/'.$filenamewithoutex.'.pdf');
    }

    public function imageConvert(Request $request, $id)
    {



                $validated = $request->validate([
                    'file' => 'required|file|max:5000|mimes:jpeg,jpg,png,gif',
                ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);

        $converter = new DocConvert($file);
        $converter->convertTo($filenamewithoutex.'.pdf');
        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        $productData->type = "Image To Pdf";
        $productData->user_id =  $id;
        $productData->save();
        return response()->download('/opt/lampp/temp/'.$filenamewithoutex.'.pdf');
    }

    public function textConvert(Request $request, $id)
    {



                $validated = $request->validate([
                    'file' => 'required|file|max:5000|mimes:txt',
                ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);

        $converter = new DocConvert($file);
        $converter->convertTo($filenamewithoutex.'.pdf');
        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        $productData->type = "Text To Pdf";
        $productData->user_id =  $id;
        $productData->save();
        return response()->download('/opt/lampp/temp/'.$filenamewithoutex.'.pdf');
    }
}

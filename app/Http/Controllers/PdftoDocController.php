<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class PdftoDocController extends Controller
{
    public function index (){
        return view('convertPages.pdftodoc');
    }

    public function index2 (){
        return view('convertPages.pdftotext');
    }

    public function docConvert(Request $request, $id){

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);

        $content = shell_exec('pdftotext '.$file.' -');
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addText($content);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($filenamewithoutex.'.docx');
        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        $productData->type = "Pdf To Docx";
        $productData->user_id =  $id;
        $productData->save();
        return response()->download(public_path($filenamewithoutex.'.docx'));
    }

    public function textConvert(Request $request, $id){

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $filenamewithoutex = pathinfo($filename, PATHINFO_FILENAME);

        $content = shell_exec('pdftotext '.$file.' -');
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addText($content);

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
        $objWriter->save($filenamewithoutex.'.txt');
        $productData = new Product;
        $productData->product_name = $filenamewithoutex;
        $productData->type = "Pdf To Txt";
        $productData->user_id =  $id;
        $productData->save();
        return response()->download(public_path($filenamewithoutex.'.txt'));
    }
}

@extends('layouts.app')

@section('content')
<div class="container">
    <br /><br />
<h1 class="text-center">List of Services</h1>

<div id="google_translate_element"></div>

<div class="row row-flex">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="content colour-4 py-4">
            <h3 class="text-center">Doc to PDF</h3>
            <div class="text-center">
                <a class="btn btn-danger" href="/doctopdf">Convert Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="content colour-5 py-4">
            <h3 class="text-center">PPT to PDF</h3>
            <div class="text-center">
                <a class="btn btn-danger" href="/ppttopdf">Convert Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="content colour-1 py-4">
            <h3 class="text-center ">Image to PDF</h3>
            <div class="text-center">
                <a class="btn btn-danger" href="/imagetopdf">Convert Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12 mt-4">
        <div class="content colour-2 py-4">
            <h3 class="text-center">Pdf to Doc</h3>
            <div class="text-center">
                <a class="btn btn-danger" href="/pdftodoc">Convert Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12 mt-4">
        <div class="content colour-6 py-4">
            <h3 style="color: green;" class="text-center">Pdf to Text</h3>
            <div class="text-center">
                <a class="btn btn-danger " href="/pdftotext">Convert Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12 mt-4">
        <div class="content colour-3 py-4">
            <h3 class="text-center">Text To Pdf Converter</h3>
            <div class="text-center">
                <a class="btn btn-danger " href="/text-to-pdf">Convert Now</a>
            </div>
        </div>
    </div>


</div>
@endsection

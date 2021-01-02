@include('layouts.app')


<div class="container">
    <h1 class="text-center">
        Pdf To text Online
    </h1>
    <form action="{{ url('txt-name'.Auth::user()->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
          <input class="form-control" type="file" name="file" id="upload-input" required>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar"></div>
      </div>
      <div class="form-group">
          <button id="button" type="submit" class="btn btn-block btn-danger">
              Download Text File
          </button>
        </form>
</div>


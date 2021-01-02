@include('layouts.app')


<div class="container">
    <h1 class="text-center">
        PPT To Pdf Online
    </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ url('ppt-name'.Auth::user()->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
          <input class="form-control" type="file" name="file" id="upload-input" required>
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar"></div>
      </div>
      <div class="form-group">
          <button id="button" type="submit" class="btn btn-block btn-danger">
              Download Pdf File
          </button>
        </form>
</div>


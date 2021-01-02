@include('layouts.app')


<div class="container">
    <h1 class="text-center">
        Video To Audio Online
    </h1>
    {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}
        @csrf
      <div class="form-group">
        {!! Form::file('video', array('class' => 'video')) !!}
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar"></div>
      </div>
      <div class="form-group">
          <button id="button" type="submit" class="btn btn-block btn-danger">
              Download Audio File
          </button>
          {!! Form::close() !!}
</div>


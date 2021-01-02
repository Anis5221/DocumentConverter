@extends('adminpanel.deshboard');

@section('details')
<div class="my-3">
    <h1 class="text-center text-primary">{{ $st->name }}</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-12 mx-auto">


            <div class="">
                 <table class="table table-responsive">
                      <tr class="align-items-center">
                          <th class="text-center">No.</th>
                         <th class="text-center">Email</th>
                          <th class="text-center">Document Name</th>
                          <th class="text-center">Convertion Type</th>


                      </tr>
                      @foreach ($st_details as $item)
                       <tr>

                           <td class="text-center">{{ $item->id }}</td>
                           <td class="text-center">{{ $st->email }}</td>
                           <td class="text-center">{{ $item->product_name }}</td>
                           <td class="text-center">{{ $item->type }}</td>


                       </tr>
                       @endforeach
                 </table>
            </div>

        </div>
    </div>
</div>
@endsection

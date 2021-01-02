@extends('adminpanel.deshboard')

@section('details')
<div class="my-3">
    <h1 class="text-center text-primary">All User</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-12 mx-auto">


            <div class="">
                 <table class="table table-responsive">
                      <tr class="align-items-center">
                          <th class="text-center">No.</th>
                         <th class="text-center">User Name</th>
                          <th class="text-center">Email</th>


                      </tr>
                      @foreach ($userdata as $item)
                       <tr>

                           <td class="text-center">{{ $item->id }}</td>
                           <td class="text-center">{{ $item->name }}</td>
                           <td class="text-center">{{ $item->email }}</td>
                           <td class="text-center">
                               <a href="{{ url('view-user'.$item->id) }}" class="btn btn-success btn-sm">View</a>
                           </td>

                       </tr>
                       @endforeach
                 </table>
            </div>

        </div>
    </div>
</div>

@endsection

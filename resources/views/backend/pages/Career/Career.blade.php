@extends('backend.master.master')
@section('content')

<div class="col-md-2"></div>
<div class="col-md-6">
<table class="table table-striped">
        
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>CV</th>
            <th>Action</th>
            
        </tr>


        @foreach($careers as $key=>$career)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$career->Name}}</td>
            <td>{{$career->Email}}</td>
            <td>{{$career->Address}}</td>

            <td> <img src="{{url('Images')}}/{{$slide->cv}}" height="50" width="100" /> </td>

            <!-- <td> <video src="{{url('images')}}/{{$slide->image}}" height="50" width="100"></video> </td> -->
            <td> 
            <a href="{{route('Career',$career->id)}}" onclick="return confirm('Confirm Delete?')"
         class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i>
        </a>
            </td>
        </tr>
      
       
  

        @endforeach

    </table>
</div>
@stop

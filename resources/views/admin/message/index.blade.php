@extends('layouts.backend.global')
@section('title')
    Messages
@endsection
@section('header-scripts')
<link rel="stylesheet" href="{{asset('assets/coreui/node_modules/datatables/dataTables.bootstrap4.css')}}">
@endsection

@section('content')



<div class="card">
  

    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role='alert'>

            {{session('status')}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
   
        <table class="table  table-bordered table-bordered datatable-messages">

            <thead>
                <tr>
                    <th width='30%'><b>Messages</b></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($messages as $message)
                {!!$message->view!!}
                @endforeach

            </tbody>
           
        </table>
    </div>

</div>
@endsection

@section('footer-scripts')
<script src="{{asset('assets/coreui/node_modules/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/coreui/node_modules/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/coreui/node_modules/datatables/datatables.js')}}"></script>

<script>
  var _table =  $('.datatable-messages').DataTable( {
        "ordering": false,

    } );
  
</script>
@endsection

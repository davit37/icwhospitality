@extends('layouts.backend.global')

@section('title','Companies')


@section('header-scripts')
<link rel="stylesheet" href="{{asset('assets/coreui/node_modules/datatables/dataTables.bootstrap4.css')}}">
@endsection


{{-- BreadCrumb --}}
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><i class='icon-home'></i> Home</li>
    <li class="breadcrumb-item active"><i class=" icon-people"></i> Group Copanies</li>
    <!-- Breadcrumb Menu-->

</ol>
@endsection


@section('content')


<div class="card">

   <div class="card-header">
         <div class="col-md-12 ">
               <a class="btn btn-info text-white" href="{{route('group_companies.form')}}">Add New</a>
           </div>
   </div>

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
                    <th width='30%'><b>name</b></th>
                    <th>Webiste Url</th>
                    <th width='10%'>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

               @foreach ($companies as $company)
                  <tr>
                        <td>{{$company->name}}</td>
                        <td>{{ $company->website_url }}</td>
                        <td >
                                <button class="btn btn-primary btn-sm" role="button" rel="popover" data-img="{{$company->logo}}"><i class="fa fa-search"></i></button>
                        </td>

                        <td>
                              
        
                                <a class="btn btn-info text-white btn-sm" role='button'
                        href="{{route('group_companies.form').'?action=edit&id='.$company->id}}" data-toggle="tooltip"
                                data-placement="top" title="Edit Project"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <form method="POST" class="d-inline" onsubmit="return confirm('Move company to trash?')"
                                action="{{route('group_companies.destroy', ['id' => $company->id ])}}">
    
                                @csrf
                                <input type="hidden" value="DELETE" name="_method">
    
                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                    data-placement="top" title="Delete Project"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i>
                                </button>
    
                            </form>
                           
                                
                        </td>
                          
                  </tr>
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
    var _table = $('.datatable-messages').DataTable({
        "ordering": false,
    });

    $('button[rel=popover]').popover({
        html: true,
        trigger: 'hover',
        placement: 'top',
        content: function () {
            return '<img class="logo-thumbnail" src="' + $(this).data('img') + '" />';
        }
    });

</script>
@endsection

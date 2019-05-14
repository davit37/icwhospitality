@extends('layouts.backend.global')

@section('title')
    Setting
@endsection


{{-- BreadCrumb --}}
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><i class='icon-home'></i> Home</li>
    <li class="breadcrumb-item active"><i class="icon-settings"></i> Settings</li>
    <!-- Breadcrumb Menu-->

</ol>
@endsection

@section('content')
<div class="row">


    <div class="col-sm-6">
        <div class="card">
        <form  method="post" action="{{route('setting.store')}}">

            @csrf

                <div class="card-header">
                    <strong>Setting</strong>
                    <small>Form</small>
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

                    <div class="form-group">
                        <label for="company">Email</label>
                    <input class="form-control" type="Email" name="email" placeholder="Enter The Email" value="{{$settings->email ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="vat">Phone Number</label>
                        <input class="form-control" type="text" name="phone_number"
                    placeholder="Enter The Phone Number" value="{{$settings->phone_number}}">
                    </div>
                    <div class="form-group">
                        <label for="street">Whatsapp Number</label>
                        <input class="form-control" type="text" name='whatsapp_number'
                            placeholder="Enter The Whatsapp Number" value="{{$settings->whatsapp_number}}">
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>
                    <button class="btn btn-sm btn-danger" type="reset">
                        <i class="fa fa-ban"></i> Reset</button>
                </div>
            </form>

        </div>
    </div>

</div>
@endsection

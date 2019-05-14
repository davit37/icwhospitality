@extends('layouts.backend.global')

@section('title')
Group Companies {{$action}}
@endsection

@section('breadcrumb')
<ol class="breadcrumb">

    <li class="breadcrumb-item"><i class='icon-home'></i> Home</li>
    <li class="breadcrumb-item parent"><i class="icon-people"></i> Companies</li>
    <li class="breadcrumb-item active"><i class="icon-pencil"></i> {{$action}}</li>
    <!-- Breadcrumb Menu-->

</ol>
@endsection


@section('content')

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <strong>Company</strong>
                <small>Form</small>
            </div>



            <form method="POST" action="{{route('group_companies.store',['id'=> $company->id ?? null])}}">
                @csrf
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Company</label>
                        <input class="form-control" name="company_name" type="text" placeholder="Enter the company name"
                            value='{{  $company->name ?? old('company_name') }}'>
                    </div>

                    <div class="form-group">
                        <label>Website Url</label>
                        <input class="form-control" name="web_url" type="text" placeholder="Enter the company website"
                            value='{{ $company->website_url ?? old('web_url') }}'>
                    </div>

                    <div class="form-group">
                        <label>Logo</label>
                        <div class="input-group mb-3">

                            <div class="custom-file">
                                <input type="text" class="custom-file-input" aria-describedby="inputGroupFileAddon01"
                                    id='filemanager' data-input="lbl" data-store='logo' data-preview="holder" >

                                <label class="custom-file-label"
                                    id='lbl'>{{ old('logo') ?  old('logo') : 'Choose Image'}}</label>
                                
                                <input type="hidden" name="logo" id="logo"
                                value='{{ $company->logo ?? old('logo') }}'>
                            </div>

                        </div>
                        <img id="holder" class="logo-thumbnail" style="" alt='' src="{{ $company->logo ?? old('logo') }}">
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="fa fa-dot-circle-o"></i> Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer-scripts')
<script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script>
    $('#filemanager').filemanager('image');

</script>
@endsection

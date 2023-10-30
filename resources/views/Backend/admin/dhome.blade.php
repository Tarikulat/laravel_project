
@extends('Backend.admin.dhead')
@section('content')

<div class="container-fluid">
    <div class="row">
        {{-- <div class="col-md-4">
            @include('Backend.admin.dsidebar')
        </div> --}}
         <div class="col-md-12">main
            @include('Backend.admin.dashboard')
            @include('products.layouts')
         </div>
    </div>

</div>

@include('Backend.admin.dfooter')
@endsection

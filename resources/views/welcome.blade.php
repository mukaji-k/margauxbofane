@extends('layouts.app')
@section('content')
<div id="main" class="container-fluid ">
    <div class="col-10">
        @include('partials.pictureSection')
    </div>
    <div class="col-2">
        @include('partials.rightFooter')
    </div>
</div>
@endsection
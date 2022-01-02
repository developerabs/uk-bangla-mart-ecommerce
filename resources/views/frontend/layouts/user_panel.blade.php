@extends('frontend.layouts.app')
@section('content')
<section class="py-5" style="background-color: rgb(240, 240, 240)">
    <div class="container">
        <div class="d-flex align-items-start">
			@include('frontend.inc.user_side_nav')
			<div class="aiz-user-panel">
				@yield('panel_content')
            </div>
        </div>
    </div>
</section>
@endsection
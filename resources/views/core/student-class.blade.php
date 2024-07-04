@extends('components.core.layout')
@section('content')
<div class="w-full absolute top-0 left-0 -z-10 py-64 md:py-72 rounded-b-[52px] bg-primary-300">
</div>
<section class="m-4 md:m-0 md:mx-10">
    @include('components.core.product-card')
    @include('components.core.benefit-card')
    @include('components.core.excess-card')
    @include('components.core.testimony-card')
    @include('components.core.invitation')
</section>
@endsection

@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
        <a class="btn btn-primary" href="{{route('admin.product_category.create')}}">Create Product Category</a>
        </section>
    </div>
@endsection

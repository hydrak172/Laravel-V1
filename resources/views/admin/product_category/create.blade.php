@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Product Category</h3>
            </div>
            <form>
            <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Slug</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Slug">
            </div>

            <select name="status" id="status">
                <option value="">-----Please Select-----</option>
                <option value="">Show</option>
                <option value="">hide</option>
            </select>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </section>
    </div>
@endsection




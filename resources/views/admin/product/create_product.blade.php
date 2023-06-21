@extends('admin.layout.master')

@section('content')
    <div class="content-wrapper">
        <section class="content">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Product</h3>
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
            <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Discount Price</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Discount Price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Short Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Short Description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Qty</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Qty">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shipping</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Shipping">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Weight</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Weight">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Information</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Information">
            </div>
            <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                    <option>Show</option>
                    <option>Hide</option>
                </select>
            </div>
            <div class="form-group">
            <label for="exampleInputFile">Images</label>
            <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="images_url">
            <label class="custom-file-label" for="exampleInputFile">Choose images</label>
            </div>
            <div class="input-group-append">
            <span class="input-group-text">Upload</span>
            </div>
            </div>
            </div>

            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </section>
    </div>
@endsection




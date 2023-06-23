@extends('admin.layout.master')

@section('content')
<div class="content-wrapper">
    <section class="content">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Create Product Category</h3>
        </div>
        <form action="{{route('admin.product_category.save')}}" method="POST">
            {{-- loi 419 --}}
            @csrf
            <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
            @error('name')
                <span style="color:red;">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Slug</label>
                <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug">
                @error('slug')
                <span style="color:red;">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Status</label><br>
                <select name="status" id="status">
                    <option value="2">-----Please Select-----</option>
                    <option value="1">Show</option>
                    <option value="0">hide</option>
                </select>
                @error('status')
                    <span style="color:red;">{{$message}}</span>
                @enderror
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        </div>
    </section>
</div>
@endsection

@section('js-custom')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#name').on('keyup',function(){
                let name = $(this).val();
                $.ajax({
                    method: 'POST', //method of form
                    url: "{{ route('admin.product_category.slug') }}",
                    data: {
                        name :name,
                        _token: " {{ csrf_token() }} "
                    },
                    success: function(res){
                        $('#slug').val(res.slug);
                    },
                    error: function(res){

                    }
                });
            });
        });
    </script>
@endsection

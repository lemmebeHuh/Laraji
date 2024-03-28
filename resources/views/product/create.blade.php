@extends('index')
 
@section('MainContent')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price" required>
            </div>
        
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" required>
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="foto">Foto Produk:</label>
                    <input type="file" name="foto" id="foto" class="form-control-file">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
       
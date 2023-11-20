@extends('products.layouts')


{{-- product edit start--}}
@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Product
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">P_Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $product->code }}">
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">P_Title</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">P_Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">P_Quantity</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ $product->quantity }}">
                            @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">P_Price</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                    <!-- add new tan -->

                    <div class="mb-3 row">
                        <label for="discount" class="col-md-4 col-form-label text-md-end text-start">P_Discount</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('discount') is-invalid @enderror" id="" name="discount" value="{{ old('discount') }}">
                            @if ($errors->has('discount'))
                                <span class="text-danger">{{ $errors->first('discount') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="catagory" class="col-md-4 col-form-label text-md-end text-start">P_Catagory</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('catagory') is-invalid @enderror" id="catagory" name="catagory" value="{{ old('catagory') }}">
                            @if ($errors->has('catagory'))
                                <span class="text-danger">{{ $errors->first('catagory') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="image" class="col-md-4 col-form-label text-md-end text-start">P_Image</label>
                        <div class="col-md-6">
                          <input type="file" step="0.01" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start">Status</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}">
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

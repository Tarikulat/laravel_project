@extends('products.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->code }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Quantity:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->quantity }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Price:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->price }}
                        </div>
                    </div>

                    <!-- add new tan-->
                    <div class="row">
                        <label for="discount" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Discount:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->discount }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="catagory" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Catagory</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->catagory }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label text-md-end text-start"><strong>P_Image:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->image }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="status" class="col-md-4 col-form-label text-md-end text-start"><strong>status:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->status }}
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>

@endsection

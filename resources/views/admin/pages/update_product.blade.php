@extends('admin.layout.home')
@section('mainContent')
    <style>
        .div_center {
            text-align: center;
            width: 50%;
            margin: auto;
        }

        h1 {
            padding-bottom: 20px
        }

        form div {
            padding-bottom: 20px;
            display: flex;
            justify-content: space-between
        }

        form div:last-child {
            float: right;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 80%;
            text-align: center;
            border: 1px solid green;
        }
    </style>
    <div class="content-wrapper">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="div_center">

            <h1>Update Product</h1>
            <form action="{{ route('update_product_confirm', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Product Title : </label>
                    <input type="text" name="title" class="input_color" placeholder="Write a title..." required=""
                        value="{{ $product->title }}">
                </div>
                <div>
                    <label>Product Description : </label>
                    <input type="text" name="description" class="input_color" placeholder="Write a description..."
                        required="" value="{{ $product->description }}">
                </div>
                <div>
                    <label>Product Price : </label>
                    <input type="number" name="price" class="input_color" placeholder="Write a price..." required=""
                        value="{{ $product->price }}">
                </div>
                <div>
                    <label>Product Discount Price : </label>
                    <input type="number" name="discount_price" class="input_color" placeholder="Write a discount price..."
                        value="{{ $product->discount_price }}">
                </div>
                <div>
                    <label>Product Quantity : </label>
                    <input type="number" name="quantity" min="0" class="input_color"
                        placeholder="Write a quantity..." required="" value="{{ $product->quantity }}">
                </div>
                <div>
                    <label>Product Category : </label>
                    <select class="input_color" name="category" required="">
                        <option value="{{ $product->category }}" selected="">{{ $product->category }}</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach

                    </select>

                </div>
                <div>
                    <label>Product Language : </label>
                    <select class="input_color" name="languages" required="">
                        <option value="{{ $product->language }}" selected="">{{ $product->language }}</option>
                        @foreach ($language as $language)
                            <option value="{{ $language->id }}">{{ $language->language_name }}</option>
                        @endforeach

                    </select>

                </div>

                <div>
                    <label>Current Product image Here : </label>
                    <img height="100" width="100" src="/product_img/{{ $product->image }}" alt="">
                </div>
                <div>
                    <label>Change Product image Here : </label>
                    
                    <input type="file" name="image">
                </div>
                <div>

                    <input type="submit" value="Update Product" class="btn btn-primary">
                </div>


            </form>
        </div>

    </div>
@endsection

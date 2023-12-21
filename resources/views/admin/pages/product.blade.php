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

            <h1>Add Product</h1>
            <form action="{{ route('add_product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Product Title : </label>
                    <input type="text" name="title" class="input_color" placeholder="Write a title..." required="">
                </div>
                <div>
                    <label>Product Description : </label>
                    <input type="text" name="description" class="input_color" placeholder="Write a description..."
                        required="">
                </div>
                <div>
                    <label>Product Price : </label>
                    <input type="number" name="price" class="input_color" placeholder="Write a price..." required="">
                </div>
                <div>
                    <label>Product Discount Price : </label>
                    <input type="number" name="discount_price" class="input_color" placeholder="Write a discount price...">
                </div>
                <div>
                    <label>Product Quantity : </label>
                    <input type="number" name="quantity" min="0" class="input_color"
                        placeholder="Write a quantity..." required="">
                </div>
                <div>
                    <label>Product Category : </label>
                    <select class="input_color"  name="category" required="">
                        <option value="" selected="">Add Category here</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach

                    </select>

                </div>
                <div>
                    <label>Product Language : </label>
                    <select class="input_color" name="languages" required="">
                        <option value="" selected="">Add Language here</option>
                        @foreach ($language as $language)
                            <option value="{{ $language->id }}">{{ $language->language_name }}</option>
                        @endforeach

                    </select>

                </div>
                <div>
                    <label>Product image Here : </label>
                    <input type="file" name="image" required="">
                </div>
                <div>

                    <input type="submit" value="Add Product" class="btn btn-primary">
                </div>


            </form>
        </div>
     
    </div>
@endsection

@extends('admin.layout.home')
@section('mainContent')
    <style>
        .div_center {
            text-align: center;
            width: 50%;
            margin: auto;
        }

        .dd {
            text-align: center;
        }

        h1 {
            padding-bottom: 20px;
            text-align: center;
            font-size: 42px;
        }

        .input_color {
            color: black;
        }

        .center {
            margin: auto;
            width: 90%;
            text-align: center;
            border: 1px solid green;
        }

        .design_image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        tr,
        th,
        td {
            border: 1px solid red;

        }
    </style>
    <div class="content-wrapper">
        @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
        @endif
        <form method="post" action="{{ route('bulk_delete') }}">
            @csrf
            <table class="center">
                <h1>All Products</h1>
                <div class="dd">
                    <label for="category-filter">Filter by Category:</label>
                    <select class="input_color" id="category-filter" name="category">
                        <option value="" selected="">All Categories</option>
                        @foreach ($categories as $category)
                            <option class="input_color" value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>

                    <label for="language-filter">Filter by Language:</label>
                    <select class="input_color" id="language-filter" name="language">
                        <option value="" selected="">All Languages</option>
                        @foreach ($languages as $language)
                            <option class="input_color" value="{{ $language }}">{{ $language }}</option>
                        @endforeach
                    </select>
                    <div>
                        <button type="submit" name="bulk_delete_selected"
                            onclick="return confirm('Are you sure to delete the selected products?')"
                            class="btn btn-danger">Bulk Delete Selected</button>

                        <!-- Add a delete all button for the current filter -->
                        <button type="submit" name="bulk_delete_filter"
                            onclick="return confirm('Are you sure to delete all products with the current filter?')"
                            class="btn btn-danger">Delete All with Current Filter</button>

                        <!-- Add a delete all button for all products -->
                        <button type="submit" name="bulk_delete_all"
                            onclick="return confirm('Are you sure to delete all products?')" class="btn btn-danger">Delete
                            All</button>
                    </div>

                </div>
                <tr>
                    <th>Select</th>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Language</th>
                    <th>Price</th>
                    <th>Discount_Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach ($product as $product)
                    <tr>

                        <td><input type="checkbox" name="selected_products[]" value="{{ $product->id }}"></td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->language }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td class="design_image"><img src="/product_img/{{ $product->image }}" alt=""></td>

                        <td><a onclick="return confirm ('Are you sure to delete this?')"
                                href="{{ route('delete_product', $product->id) }}" class="btn btn-danger">Delete</a></td>

                        <td><a href="{{ route('update_product', $product->id) }}" class="btn btn-success">Edit</a></td>

                    </tr>
                @endforeach



            </table>

        </form>

    </div>



    <!-- Include jQuery (you may need to adjust the URL based on your setup) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Add a script for filtering -->
    <script>
        $(document).ready(function() {
            // Function to handle filtering
            function filterTable(column, value) {
                // Hide all rows
                $('table tr').hide();

                // Show rows that match the filter criteria
                $('table tr:has(td:contains("' + value + '"))').show();
            }

            // Handle category filter
            $('#category-filter').on('change', function() {
                var selectedCategory = $(this).val();
                filterTable(2, selectedCategory); // Assuming category is in the third column (index 2)
            });

            // Handle language filter
            $('#language-filter').on('change', function() {
                var selectedLanguage = $(this).val();
                filterTable(3, selectedLanguage); // Assuming language is in the fourth column (index 3)
            });

            // Add other filters as needed
        });
    </script>
@endsection

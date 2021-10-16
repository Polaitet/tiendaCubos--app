@extends('layouts.app')
@section('customMeta')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gestionar Productos</div>

                    <div class="card-body">
                        <button type="button" id="addBtn" class="btn btn-primary">Añadir nuevo producto</button>
                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('addProduct')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">EAN</label>
                                    <input type="text" class="form-control" name="ean" placeholder="EAN" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="number" class="form-control" name="price" step=".01" placeholder="Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stock</label>
                                    <input type="number" class="form-control" name="stock" placeholder="Stock" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stickers</label>
                                    <input type="checkbox" class="form-control" name="stickers" placeholder="Stickers">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Magnets</label>
                                    <input type="checkbox" class="form-control" name="magnets" placeholder="Magnets">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Dimensions</label>
                                    <input type="text" class="form-control" name="dimensions" placeholder="Dimensions" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Brand</label>
                                    <input type="text" class="form-control" name="brand" placeholder="Brand" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Weight</label>
                                    <input type="number" class="form-control" name="weight" step=".01" placeholder="Weight" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="categoryId">
                                        @foreach($categoryData as $categoriesSingleData)
                                            <option value="{{$categoriesSingleData->id}}">{{$categoriesSingleData->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>

                        </div>
                        <div class="mt-3">
                            <table class="table" id="productTable">
                                <thead>
                                <tr>
                                    <th scope="col">EAN</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Sticker</th>
                                    <th scope="col">Magnet</th>
                                    <th scope="col">Dimensions</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productsData as $products)
                                    <tr>
                                        <td>{{$products->productEAN}}</td>
                                        <td>{{$products->productName}}</td>
                                        <td>{{$products->productPrice}}</td>
                                        <td>{{$products->productStock}}</td>
                                        <td>{{$products->productSticker}}</td>
                                        <td>{{$products->productMagnet}}</td>
                                        <td>{{$products->productDimensions}}</td>
                                        <td>{{$products->productBrand}}</td>
                                        <td>{{$products->productWeight}}</td>
                                        <td>{{$products->categoryName}}</td>
                                        <td>
                                            <a href="{{route('productPhotoManagement', array('id' => $products->productId))}}"><button type="button" class="btn btn-primary mr-1">Photos</button></a>
                                            <a href="{{route('productEdit', array('id' => $products->productId))}}"><button type="button" class="btn btn-primary mr-1">Edit</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#addBtn').on('click', function () {
            $('#addForm').fadeIn(600);
        })

        $(document).ready( function () {
            $('#productTable').DataTable();
        } );
    </script>
@endsection

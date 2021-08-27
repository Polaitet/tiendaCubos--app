@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gestionar Productos</div>

                    <div class="card-body">
                        <button type="button" id="addBtn" class="btn btn-primary">Añadir nuevo producto</button>
                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('addMenuItemToHomepage')}}" method="post">
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
                                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stock</label>
                                    <input type="number" class="form-control" name="stock" placeholder="Stock" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Stickers</label>
                                    <input type="checkbox" class="form-control" name="stickers" placeholder="Stickers" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Magnets</label>
                                    <input type="checkbox" class="form-control" name="magnets" placeholder="Magnets" required>
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
                                    <input type="number" class="form-control" name="weight" placeholder="Weight" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Añadir</button>
                            </form>

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
    </script>
@endsection

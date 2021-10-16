@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">EDIT PRODUCTS</div>
                    <div class="container mt-2 mb-2" style="text-align: center">
                    <button type="button" id="addBtn1" class="btn btn-primary col-5">Edit info</button>
                        @if(in_array($products->id, $productsOnMainPage))
                            <button type="button" id="addBtn2" class="btn btn-warning col-5">Edit main page</button>
                        @else
                            <button type="button" id="addBtn2" class="btn btn-success col-5">Edit main page</button>
                        @endif
                    </div>
                    <div id="addForm1" style="display: none">
                        <form action="{{route('editProducts')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$products->id}}" name="id"/>
                        <div class="container mt-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">EAN</label>
                                <input type="text" class="form-control" name="ean" placeholder="EAN" value="{{$products->EAN}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$products->name}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="number" class="form-control" name="price" step=".01" placeholder="Price" value="{{$products->price}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stock</label>
                                <input type="number" class="form-control" name="stock" placeholder="Stock" value="{{$products->stock}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stickers</label>
                                @if ($products->sticker == 1)
                                    <input type="checkbox" class="form-control" name="stickers" placeholder="Stickers" checked>
                                @else
                                    <input type="checkbox" class="form-control" name="stickers" placeholder="Stickers">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Magnets</label>
                                @if ($products->magnet == 1)
                                    <input type="checkbox" class="form-control" name="magnets" placeholder="Magnets" checked>
                                @else
                                    <input type="checkbox" class="form-control" name="magnets" placeholder="Magnets">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Dimensions</label>
                                <input type="text" class="form-control" name="dimensions" placeholder="Dimensions" value="{{$products->dimensions}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Brand</label>
                                <input type="text" class="form-control" name="brand" placeholder="Brand" value="{{$products->brand}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Weight</label>
                                <input type="number" class="form-control" name="weight" step=".01" placeholder="Weight" value="{{$products->weight}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"><?php echo htmlspecialchars($descriptionData->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="categoryId">
                                    @foreach($categoryData as $categoriesSingleData)
                                        <option value="{{$categoriesSingleData->id}}">{{$categoriesSingleData->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="container mb-2">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </form>
                    </div>
                    <div id="addForm2" class="container mb-2"  style="display: none">
                            @if(in_array($products->id, $productsOnMainPage))

                            <div class="container">
                                    <form action="{{route('editOrderProductsHomePage')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$products->id}}" name="productId"/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Order</label>
                                            <input type="number" class="form-control"  aria-describedby="order" name="order" value="{{$productOrder}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary col-12" >Change</button>
                                    </form>
                                    <a href="{{route('removeProductToHomePage', ['id' => $products->id])}}"><button type="button" id="addBtn1" class="btn btn-danger mt-2 col-12">Remove</button></a>
                                </div>


                            <div class="card-deck">
                                @foreach($productImages as $productMainImage)
                                <div class="card mt-3" style="max-width: 165px">
                                    <img class="card-img-top" src="{{$productMainImage->url}}" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="{{route('productPhotoManagement', ['id' => $productMainImage->productId])}}"><button type="button" id="addBtn1" class="btn btn-info mt-2 col-12">Edit Main</button></a>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            @else
                                <div class="container">
                                    <a href="{{route('addProductToHomePage', ['id' => $products->id])}}"><button type="button" id="addBtn2" class="btn btn-primary mt-2 col-12">Add</button></a>
                                </div>
                            @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        let formulario1Abierto = false;
        let formulario2Abierto = false;
        $('#addBtn1').on('click', function () {
            if (formulario2Abierto) {
                $('#addForm2').fadeOut(600);
                formulario2Abierto = false;
            }
            $('#addForm1').fadeIn(600);
            formulario1Abierto = true;
        })
        $('#addBtn2').on('click', function () {
            if(formulario1Abierto){
                $('#addForm1').fadeOut(600);
                formulario1Abierto = false;
            }
            $('#addForm2').fadeIn(600);
            formulario2Abierto = true;
        })
    </script>
@endsection

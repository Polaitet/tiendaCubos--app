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
                    <div class="card-header">Gestionar Fotos del producto - {{$productId}}</div>
                    <div class="container mt-3 mb-2">
                        <button type="button" id="addBtn" class="btn btn-primary">Add new photo</button>
                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('uploadProductPhoto')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$productId}}" name="productId"/>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Orden</label>
                                    <input type="number" class="form-control" name="order" placeholder="Orden" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Upload photo</label>
                                    <input type="file" class="form-control" name="photo" required>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                        <div>
                            <div class="row mt-3">
                            @foreach($productPhotos as $photos)
                            <div class="col-2">
                                @if($photos->mainPhoto == 1)
                                    <div class="card mb-4" style="width: 10rem;border-color: #1f6fb2">
                                @else
                                    <div class="card mb-4" style="width: 10rem;">
                                @endif
                                    <img class="card-img-top" src="{{$photos->url}}" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="{{route('deleteProductPhoto', ['id' => $photos->id])}}" class="btn btn-danger col-12 mb-2">Delete image</a>
                                        <a href="{{route('makeMainPhoto', ['id' => $photos->id])}}" class="btn btn-success col-12">Make main</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
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

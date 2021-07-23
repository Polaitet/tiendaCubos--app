@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">MODIFICAR SLIDER</div>

                    <div class="card-body">
                        <button type="button" id="addBtn" class="btn btn-primary">Añadir nueva imagen</button>

                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('addImgToSliderPost')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Orden</label>
                                    <input type="number" class="form-control" name="order" aria-describedby="emailHelp" placeholder="Orden">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">URL</label>
                                    <input type="text" class="form-control" name="url" placeholder="URL">
                                </div>
                                <button type="submit" class="btn btn-primary">Añadir imagen</button>
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

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
                                    <input type="number" class="form-control" name="order" aria-describedby="emailHelp" placeholder="Orden" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">URL</label>
                                    <input type="text" class="form-control" name="url" placeholder="URL" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Añadir imagen</button>
                            </form>

                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Orden</th>
                                <th scope="col">URL</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliderData as $slider)
                            <tr>
                                <td>{{$slider->order}}</td>
                                <td>{{$slider->url}}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{route('modifySliderPositionAdd', array('id' => $slider->id))}}"><button type="button" class="btn btn-primary mr-1">+</button></a>
                                        <a href="{{route('modifySliderPositionSub', array('id' => $slider->id))}}"><button type="button" class="btn btn-secondary mr-1">-</button></a>
                                        <a href="{{route('removeSlider', array('id' => $slider->id))}}"><button type="button" class="btn btn-danger">x</button></a>
                                    </div>
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

    <script>
        $('#addBtn').on('click', function () {
            $('#addForm').fadeIn(600);
        })
    </script>
@endsection

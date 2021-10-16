@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">MODIFICAR MENU</div>

                    <div class="card-body">
                        <button type="button" id="addBtn" class="btn btn-primary mb-2">Añadir nueva menu item</button>
                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('addMenuItemToHomepage')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Orden</label>
                                    <input type="number" class="form-control" name="order" placeholder="Orden" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">URL Name</label>
                                    <input type="text" class="form-control" name="url" placeholder="URL" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nombre</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                                </div>
                            <button type="submit" class="btn btn-primary">Añadir menu item</button>
                            </form>

                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Orden</th>
                                <th scope="col">URL</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($menuData as $menu)
                                    <tr>
                                        <td>{{$menu->order}}</td>
                                        <td>{{$menu->url}}</td>
                                        <td>{{$menu->name}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('modifyMenuPositionAdd', array('id' => $menu->id))}}"><button type="button" class="btn btn-primary mr-1">+</button></a>
                                                <a href="{{route('modifyMenuPositionSub', array('id' => $menu->id))}}"><button type="button" class="btn btn-secondary  mr-1">-</button></a>
                                                <a href="{{route('removeMenuItem', array('id' => $menu->id))}}"><button type="button" class="btn btn-danger">x</button></a>
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

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">MODIFY CATEGORIES</div>

                    <div class="card-body">
                        <button type="button" id="addBtn" class="btn btn-primary mb-2">Add new category</button>
                        <div id="addForm" class="mt-4" style="display: none">
                            <form action="{{route('addNewCategory')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                            <button type="submit" class="btn btn-primary mb-2">Create</button>
                            </form>

                        </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categoryData as $singleCategoryData)
                                    <tr>
                                        <td>{{$singleCategoryData->name}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('removeCategory', array('id' => $singleCategoryData->id))}}"><button type="button" class="btn btn-danger">x</button></a>
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

@extends('admin.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Recipes</h1>

    <!-- Form for creating a recipe -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recipes List</h6>
            <a href="{{ route('recipes.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Recipe Name</th>
                            <th>Description</th>
                            <th>Preparation Time</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipes as $recipe)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->description }}</td>
                                <td>{{ $recipe->preparation_time }}</td>
                                <td>
                                    {{-- <button type="button" id="{{ $recipe->id }}" table="recipes" data-toggle="modal"
                                        data-target="#recipeModal" class="btn btn-icon btn-success update_edit-click">
                                        <i class="fas fa-edit"></i>
                                    </button> --}}
                                    <button data-toggle="modal" data-target="#modal-delete-record" type="button"
                                        id="{{ $recipe->id }}" table="recipes"
                                        class="del_click remove_record delete-privilege btn btn-icon btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

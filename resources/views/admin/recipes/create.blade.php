@extends('admin.admin')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Recipes</h1>

    <!-- Form for creating a recipe -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Recipe</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Laravel CSRF token -->
                <div class="row">
                    <!-- Category -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" name="category_id" required>
                                <option value="" selected disabled>Select a category</option>
                                @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Recipe Name -->
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="recipe_name">Recipe Name:</label>
                            <input type="text" id="recipe_name" name="name" class="form-control" required>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea id="description" name="description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>
                    </div>

                    <!-- Preparation Time -->
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="preparation_time">Preparation Time (in minutes):</label>
                            <input type="number" id="preparation_time" name="preparation_time" class="form-control"
                                required>
                        </div>
                    </div>

                    <!-- Serving -->
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="serving">Serving:</label>
                            <input type="number" id="serving" name="serving" class="form-control" required>
                        </div>
                    </div>

                    <!-- Ingredients -->
                    <div class="col-sm-12">

                        <div class="form-group" id="ingredients">
                            <label>Ingredients:</label>
                            <button type="button" class="btn btn-success btn-rounded"
                                onclick="addInput('ingredients')"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class="col-sm-6">

                        <div class="form-group" id="instructions">
                            <label>Instructions:</label>
                            <button type="button" class="btn btn-warning" onclick="addInput('instructions')"><i
                                    class="fas fa-plus"></i></button>
                        </div>
                    </div>

                    <!-- Nutrition Facts -->
                    <div class="col-sm-12">

                        <div class="form-group">
                            <label>Nutrition Facts:</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="calories">Calories:</label>
                                    <input type="text" id="calories" name="calories" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="total_fat">Total Fat:</label>
                                    <input type="text" id="total_fat" name="total_fat" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Saturated Fat:</label>
                                    <input type="text" id="saturated_fat" name="saturated_fat" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Cholesterol:</label>
                                    <input type="text" id="cholesterol" name="cholesterol" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Sodium:</label>
                                    <input type="text" id="sodium" name="sodium" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Potassium:</label>
                                    <input type="text" id="potassium" name="potassium" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Total Carbohydrate:</label>
                                    <input type="text" id="total_carbohydrate" name="total_carbohydrate"
                                        class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Sugars:</label>
                                    <input type="text" id="sugars" name="sugars" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="saturated_fat">Protein:</label>
                                    <input type="text" id="protein" name="protein" class="form-control">
                                </div>
                            </div>
                            <!-- Repeat similar structure for other nutrition facts -->
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-sm-12">

                        <button type="submit" class="btn btn-primary">Create Recipe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function addInput(containerId) {
        const container = document.getElementById(containerId);
        const input = document.createElement("input");
        input.type = "text";
        input.name = containerId + '[]';
        input.className = "form-control";
        container.appendChild(document.createElement("br"));
        container.appendChild(input);
    }

</script>
@endsection

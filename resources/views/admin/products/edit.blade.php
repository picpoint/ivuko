@extends('admin.layouts.layout')



@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование изделия</h3>
        </div>

        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="card-body">
                <div class="form-group">
                    <label for="title">Название изделия</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $product->title }}">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="category_id">Отредактируйте категорию</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="NULL"> --- </option>

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="vendor_code">Отредактируйте артикул изделия</label>
                    <input type="text" name="vendor_code" class="form-control" id="vendor_code" value="{{ $product->vendor_code }}">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="material">Отредактируйте материал изделия</label>
                <select class="form-control" id="material" name="material">
                    <option value="NULL"> --- </option>

                    @foreach($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="stone">Отредактируйте вставку(камень)</label>
                <select class="form-control" id="stone" name="stone">
                    <option value="NULL"> --- </option>

                    @foreach($stones as $stone)
                        <option value="{{ $stone->id }}">{{ $stone->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="weight">Введите вес изделия</label>
                    <input type="text" name="weight" class="form-control" id="weight" value="{{ $product->weight }}">
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="size">Введите размер изделия</label>
                    <input type="text" name="size" class="form-control" id="size" value="{{ $product->size }}">
                </div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="price">Введите цену изделия</label>
                    <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
                </div>
            </div>

            <div class="form-group" style="width: 96%; margin-left: auto; margin-right: auto">
                <label for="picture">Загрузить изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control-file" name="picture" id="picture">
                        <label class="custom-file-label" for="picture">Выберите файл</label>
                    </div>
                </div>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection
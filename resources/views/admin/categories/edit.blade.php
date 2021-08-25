@extends('admin.layouts.layout')



@section('content')

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Редактирование категории  - "{{ $category->title }}"</h3>
        </div>

        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            @method('UPDATE')
            <div class="card-body">
                <div class="form-group">
                    <label for="category">Отредактировать категорию </label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $category->title }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection
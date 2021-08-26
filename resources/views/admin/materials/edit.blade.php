@extends('admin.layouts.layout')


@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование материала</h3>
        </div>

        <form action="{{ route('materials.update', ['material' => $material->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="material">Редактировать материал</label>
                    <input type="text" name="title" class="form-control" id="material" value="{{ $material->title }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection
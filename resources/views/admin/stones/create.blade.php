@extends('admin.layouts.layout')



@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Создание вставки</h3>
        </div>

        <form action="{{ route('stones.store') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="stone">Название вставки</label>
                    <input type="text" name="title" class="form-control" id="stone" placeholder="Введите название вставки">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection
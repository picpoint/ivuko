@extends('admin.layouts.layout')


@section('content')

    <div class="card card-primary">


        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <div class="card-header">
            <h3 class="card-title">Редактирование вставки</h3>
        </div>

        <form action="{{ route('stones.update', ['stone' => $stone->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="stone">Редактировать вставку</label>
                    <input type="text" name="title" class="form-control" id="stone" value="{{ $stone->title }}">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection
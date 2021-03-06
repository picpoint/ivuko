@extends('admin.layouts.layout')


@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица категорий</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название категории</th>
                    <th style="width: 120px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td style="vertical-align: middle">{{ $category->id }}</td>
                        <td style="vertical-align: middle">{{ $category->title }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('categories.edit', ['category' => $category->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('categories.destroy', ['category' => $category->id]) }}">
                                    <button type="submit" class="btn btn-danger m-1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </a>
                            </form>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {{ $categories->links() }}
        </div>
    </div>

@endsection
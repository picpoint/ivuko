@extends('admin.layouts.layout')


@section('content')

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
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i></button>
                            </a>
                            <form action="#">
                                <a href="#">
                                    <button type="submit" class="btn btn-danger m-1"><i class="fas fa-trash-alt"></i></button>
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
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>

@endsection
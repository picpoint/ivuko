@extends('admin.layouts.layout')


@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица изделий</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название изделия</th>
                    <th>Изображение</th>
                    <th style="width: 120px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        <td style="vertical-align: middle">{{ $product->id }}</td>
                        <td style="vertical-align: middle">{{ $product->title }}</td>
                        <td style="vertical-align: middle">
                            <img src="/public/storage/{{ $product->picture }}" alt="/public/storage/{{ $product->picture }}" style="width: 150px; height: 150px">
                            <br>
                            <span>{{ $product->category->slug }}</span>
                        </td>
                        <td style="text-align: center">
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('products.destroy', ['product' => $product->id]) }}">
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
            {{ $products->links() }}
        </div>
    </div>
@endsection
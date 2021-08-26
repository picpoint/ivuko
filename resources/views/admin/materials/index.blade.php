@extends('admin.layouts.layout')



@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Таблица Материалов</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название материалов</th>
                    <th style="width: 120px; text-align: center">Действие</th>
                </tr>
                </thead>
                <tbody>

                @foreach($materials as $material)
                    <tr>
                        <td style="vertical-align: middle">{{ $material->id }}</td>
                        <td style="vertical-align: middle">{{ $material->title }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('materials.edit', ['material' => $material->id]) }}">
                                <button type="submit" class="btn btn-primary m-1"><i class="fas fa-pencil-alt"></i>
                                </button>
                            </a>
                            <form action="{{ route('materials.destroy', ['material' => $material->id]) }}"
                                  method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('materials.destroy', ['material' => $material->id]) }}">
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
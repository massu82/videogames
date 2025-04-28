@extends('layouts.master')
@section('title', 'Games')

@section('content')
    @if($msj = Session::get('success'))
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="alert alert-success">
                    <p><b><i class="fa-solid fa-check"></i> Mensaje</b></p>
                    <p>{{ $msj }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="table-resposive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>NIVELES</th>
                        <th>LANZAMIENTO</th>
                        <th>IMAGEN</th>
                        <th></th>
                        <th></th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($games as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->levels }}</td>
                            <td>{{ $row->release }}</td>
                            <td><img src="/storage/{{ $row->image }}" alt="{{ $row->name }}" width="100"
                                     class="img-fluid"></td>
                            <td><a class="btn btn-warning" href="{{route('games.edit',$row->id)}}"><i
                                        class="fa-solid fa-edit"></i></a></td>
                            <td>
                                <form id="frm_{{$row->id}}" method="post" action="{{route('games.destroy',$row->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

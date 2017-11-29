@extends('master')
@section('content')
    <form action="{{ url('redirect/them')  }}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <div class="row">
            <div class="col-12">
                <label for="">Link Củ</label>
                <input type="text" class="form-control" name="urlCu">
            </div>
            <div class="col-12">
                <label for="">Link mới</label>
                <input type="text" class="form-control" name="urlMoi">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>URL Củ</th>
                        <th>URL Mới</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                        <tr>
                            <td>{{ $dt->oldurl }}</td>
                            <td>{{ $dt->newurrl }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
@endsection
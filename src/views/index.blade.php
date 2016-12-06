@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>Karyawan</h2>
                    <p>ini data karyawan</p>
                    <a href="karyawannew" class="btn btn-info" role="button">Data Baru</a>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $v)
                            <tr>
                                <td>
                                    {{ $v->id }}
                                </td>
                                <td>
                                    {{ $v->name }}
                                </td>
                                <td>
                                    {{ $v->alamat }}
                                </td>
                                <td>
                                    {{ $v->telp }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
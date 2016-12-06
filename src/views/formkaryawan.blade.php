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
                    <form action="karyawan" method="post">
                         {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nama Karyawan:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Alamat:</label>
                            <input type="text" class="form-control" id="name" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="name">Telp:</label>
                            <input type="text" class="form-control" id="name" name="telp">
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
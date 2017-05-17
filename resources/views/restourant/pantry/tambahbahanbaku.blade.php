@extends('layouts.masterpantry');

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Bahan Baku</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{url('/registerPantry')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Bahanbaku</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nama_bahan_baku" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Satuan</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" placeholder="ex : Kg, Ml, g ..." name="satuan" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Stok</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="stok" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Harga</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="harga" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Jenis</label>
                            <div class="col-md-6">
                                <select id="role" name="jenis" multiple="multiple" class="form-control" required>
                                    <option value="Rempah">Rempah</option>
                                    <option value="Sayuran">Sayuran</option>
                                    <option value="Buah">Buah</option>
                                    <option value="Daging">Daging</option>
                                    <option value="Bumbu">Bumbu</option>
                                    <option value="Bahan Pokok">Bahan Pokok</option>
                                </select>
                            </div>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="addItemPantry">
                                    Selesai
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
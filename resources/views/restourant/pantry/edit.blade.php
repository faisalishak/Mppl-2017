@extends('layouts.masterpantry');

@section('content')
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Bahan Baku</h4>
                        <form method="post" action="{{url('/editRempah')}}">
                                                   <input type="hidden" name="id_bahan_baku" value="{{ $rempah->id_bahan_baku }}">
                                                    
                                                    <div class="form-group">
                                                        <label for="name">Nama</label>
                                                        <input type="text" name="nama_bahan_baku" value="{{$rempah->nama_bahan_baku}}" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="stok">Stok</label>
                                                        <input type="text" name="stok" value="{{$rempah->stok}}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="text" name="harga" value="{{$rempah->harga}}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="jenis">Jenis</label>
                                                        <input type="text" name="jenis" value="{{$rempah->jenis}}" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="satuan">Satuan</label>
                                                        <input type="text" name="satuan" value="{{$rempah->satuan}}" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-btn fa-sign-in"></i>Update
                                                    </button>
                                </form>
                </div>

                </div>  
                      <!-- col-lg-12-->      	
          	</div><!-- /row -->
           
@stop    


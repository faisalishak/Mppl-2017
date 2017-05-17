@extends('layouts.masterkoki');

@section('content') 
<div class="row">
<div class="col-lg-12">
        <div class="panel panel-blue">
    <div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Tambah Menu</div>
    <div class="panel-body">
        <ul class="todo-list">
        <li class="todo-list-item">    
        <div class="form-group row add">
            <div class="col-md-3">
            <input type="text" class="form-control" id="nama_makanan_minuman" name="nama_makanan_minuman"
                placeholder="Nama Makanan/Minuman" required>
            <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-3">
                <select id="jenis_makanan_minuman" name="jenis_makanan_minuman" multiple="multiple" class="form-control" required>
                    <option value="1">Makanan Pembuka</option>
                    <option value="2">Makanan Utama</option>
                    <option value="3">Makanan Penutup</option>
                    <option value="4">Minuman Hangat</option>
                    <option value="5">Minuman Dingin</option>
                </select>
            </div>
            <div class="col-md-3">
            <input type="text" class="form-control" id="harga_makanan_minuman" name="harga_makanan_minuman"
                placeholder="harga makanan minuman" required>
            <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-3">
            <button class="btn btn-warning" type="submit" id="add">
                <span class="glyphicon glyphicon-plus"></span> Tambah
            </button>
            </div>
        </div>
  
<ul class="nav menu">
    <li class="parent">
    <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> Makanan Pembuka </div> </span>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <table class="table table-borderless" id="table">
       @foreach($menutersedia as $mt)
            @if($mt->jenis_makanan_minuman == 1) 
            <div class="alert bg-primary" role="alert" > 
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                <span data-toggle="collapse" href="#coba" class="item{{ $mt->kode_makanan_minuman }}">
                <span data-toggle="collapse" href="#coba" ></svg>{{ $mt->nama_makanan_minuman }}      
                    <div class="pull-right">
                        <button type="button" onclick="return pilihResep();" data-namamakanan="{{ $mt->nama_makanan_minuman }}" data-jenismakanan="{{ $mt->jenis_makanan_minuman }}"  class="pilihResep btn btn-primary" value="Tambah Resep">
                            Edit Resep
                        </button>
                    </div>
                </span>  
            </svg>
          </div>
          @endif
     @endforeach
     </table>
    </li>
</ul>
<ul class="nav menu">
    <li class="parent">
            <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> Makanan Utama </div> </span>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <table class="table table-borderless" id="table">
       @foreach($menutersedia as $mt)
            @if($mt->jenis_makanan_minuman == 2) 
                       
            <div class="alert bg-primary" role="alert" > 
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                <span data-toggle="collapse" href="#coba" class="item{{ $mt->kode_makanan_minuman }}">
                <span data-toggle="collapse" href="#coba" ></svg>{{ $mt->nama_makanan_minuman }}      
                   <div class="pull-right">
                        <button type="button" onclick="return pilihResep();" data-namamakanan="{{ $mt->nama_makanan_minuman }}" data-jenismakanan="{{ $mt->jenis_makanan_minuman }}"  class="pilihResep btn btn-primary" value="Tambah Resep">
                            Edit Resep
                        </button>
                    </div>
                </span>  
            </svg>
          </div>
          @endif
     @endforeach
     </table>
    </li>
</ul>
<ul class="nav menu">
    <li class="parent">
            <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> Makanan Penutup </div> </span>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <table class="table table-borderless" id="table">
       @foreach($menutersedia as $mt)
            @if($mt->jenis_makanan_minuman == 3) 
            <div class="alert bg-primary" role="alert" > 
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                <span data-toggle="collapse" href="#coba" class="item{{ $mt->kode_makanan_minuman }}">
                <span data-toggle="collapse" href="#coba" ></svg>{{ $mt->nama_makanan_minuman }}      
                    <div class="pull-right">
                        <button type="button" onclick="return pilihResep();" data-namamakanan="{{ $mt->nama_makanan_minuman }}" data-jenismakanan="{{ $mt->jenis_makanan_minuman }}"  class="pilihResep btn btn-primary" value="Tambah Resep">
                            Edit Resep
                        </button>
                    </div>
                </span>  
            </svg>
          </div>
          @endif
     @endforeach
     </table>
    </li>
</ul>
<ul class="nav menu">
    <li class="parent">
            <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> Minuman Hangat </div> </span>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <table class="table table-borderless" id="table">
       @foreach($menutersedia as $mt)
            @if($mt->jenis_makanan_minuman == 4) 
            <div class="alert bg-primary" role="alert" > 
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                <span data-toggle="collapse" href="#coba" class="item{{ $mt->kode_makanan_minuman }}">
                <span data-toggle="collapse" href="#coba" ></svg>{{ $mt->nama_makanan_minuman }}      
                   <div class="pull-right">
                        <button type="button" onclick="return pilihResep();" data-namamakanan="{{ $mt->nama_makanan_minuman }}" data-jenismakanan="{{ $mt->jenis_makanan_minuman }}"  class="pilihResep btn btn-primary" value="Tambah Resep">
                            Edit Resep
                        </button>
                    </div>
                </span>  
            </svg>
          </div>
          @endif
     @endforeach
     </table>
    </li>
</ul>
<ul class="nav menu">
    <li class="parent">
            <span data-toggle="collapse" href="#sub-item-1"> <div class="panel-heading"> Minuman Dingin </div> </span>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <table class="table table-borderless" id="table">
       @foreach($menutersedia as $mt)
            @if($mt->jenis_makanan_minuman == 5) 
                       
            <div class="alert bg-primary" role="alert" > 
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                <span data-toggle="collapse" href="#coba" class="item{{ $mt->kode_makanan_minuman }}">
                <span data-toggle="collapse" href="#coba" ></svg>{{ $mt->nama_makanan_minuman }}      
                    <div class="pull-right">
                        <button type="button" onclick="return pilihResep();" data-namamakanan="{{ $mt->nama_makanan_minuman }}" data-jenismakanan="{{ $mt->jenis_makanan_minuman }}"  class="pilihResep btn btn-primary" value="Tambah Resep">
                            Edit Resep
                        </button>
                    </div>
                    
                </span>  
            </svg>
          </div>
          @endif
     @endforeach
     </table>
    </li>
</ul>
            <div id="popup" class="modal fade" role="dialog">
                <div class="modal-dialog"> 
                <div class="modal-content">
                    <div class="modal-header">
                            Tambah Resep
                            <button type="button" class="close" data-dismiss="modal">
                            &times;</button>
                    </div>
                    <div class="modal-body">
                    <form action="{{url('siswa')}}" method="POST" >

                        <div class="form-group">
                            <label for="nama_makanan_minuman" class="control-label">Makanan Minuman</label>
                            <input name="nama_makanan_minuman" id="nama_makanan_minuman" type="text" placeholder="Jumlah ex:1,2,3.." class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label for="jenis_makanan_minuman" class="control-label">jenis_makanan_minuman</label>
                            <input name="jenis_makanan_minuman" id="jenis_makanan_minuman" type="text" placeholder="Jumlah ex:1,2,3.." class="form-control"> 
                        </div>
                    </form>
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="add" data-dismiss="modal">Antarkan</button>
                    </div>
                </div>
                </div> 
            </div>
        </li>
    </div>
</div><!--/.row-->

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script>
    function pilihResep(){
        $(".pilihResep").click(function(){
        var nama = $(this).data('namamakanan');
        var jenis = $(this).data('jenismakanan');
        console.log(nama);
        window.location.href = 'pilihresep/'+ nama +'/'+ jenis; 
           
        });
    }
</script>
		
@endsection
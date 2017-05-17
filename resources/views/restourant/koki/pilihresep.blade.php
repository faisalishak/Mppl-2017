@extends('layouts.masterkoki');

@section('content')
<div class="row">
<div class="col-lg-12">
    <h2>{{ $menu->nama_makanan_minuman }} </h2>
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Bumbu</a></li>
                <li><a href="#tab2" data-toggle="tab">Bahan Pokok</a></li>
                <li><a href="#tab3" data-toggle="tab">Daging</a></li>
                <li><a href="#tab4" data-toggle="tab">Sayuran</a></li>
                <li><a href="#tab5" data-toggle="tab">Rempah</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="panel-body children " id="sub-item-3">
                    <!--content-->
                    <ul class="todo-list">
                        @foreach($bumbu as $item)
                        <li class="todo-list-item">
                            <div class="checkbox">
                                <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                            </div>
                            <div class="pull-right action-buttons">
                                <a class="item-click" data-satuan="{{ $item->satuan }}" data-idbahanbaku="{{ $item->id_bahan_baku }}"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!--/content-->
                </div>
                <div class="tab-pane fade" id="tab2">
                <ul class="todo-list">
                    @foreach($bahan_pokok as $item)
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                        </div>
                        <div class="pull-right action-buttons">
                           <a class="item-click" data-satuan="{{ $item->satuan }}" data-idbahanbaku="{{ $item->id_bahan_baku }}"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg></a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                </div>
                <div class="tab-pane fade" id="tab3">
                <ul class="todo-list">
                    @foreach($daging as $item)
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                        </div>
                        <div class="pull-right action-buttons">
                             <a class="item-click" data-satuan="{{ $item->satuan }}" data-idbahanbaku="{{ $item->id_bahan_baku }}"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg></a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                </div>
                 <div class="tab-pane fade" id="tab4">
                 <ul class="todo-list">
                  @foreach($sayuran as $item)
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                        </div>
                        <div class="pull-right action-buttons">
                           <a class="item-click" data-satuan="{{ $item->satuan }}" data-idbahanbaku="{{ $item->id_bahan_baku }}"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg></a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                </div>
                 <div class="tab-pane fade" id="tab5">
                 <ul class="todo-list">
                   @foreach($rempah as $item)
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                        </div>
                        <div class="pull-right action-buttons">
                            <a class="item-click" data-satuan="{{ $item->satuan }}" data-idbahanbaku="{{ $item->id_bahan_baku }}"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg></a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div><!--/.panel-->
</div><!--/.col-->

<div class="col-md-6">
    <div class="panel panel-blue">
        <div class="panel-heading dark-overlay">Resep</div>
        <div class="panel-body">
        <ul class="todo-list">
            @foreach($reseps as $item)
                    <li class="todo-list-item">
                        <div class="checkbox">
                            <label for="checkbox"><b>{{ $item->nama_bahan_baku }}</b></label>
                            <label for="checkbox">{{ $item->qty }} {{ $item->satuan }}</label>
                        </div>
                        <div class="pull-right action-buttons">
                        </div>
                    </li>
            @endforeach
        </ul>
        </div>
    </div>
</div><!--/.col-->
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body"></h4>
                <b><p class="text-mutted" id="satuan"></p></b>
                <input id="jumlah-modal" class="form-control" placeholder="Jumlah ex:1,2,3" type="text" required autofocus>
                <input type="hidden" id="id_bahan_baku">
                <input type="hidden" id="kode_makanan_minuman" value="{{ $menu->kode_makanan_minuman }}">
                <input type="hidden" id="nama_makanan_minuman" value="{{ $menu->nama_makanan_minuman }}">
                <input type="hidden" id="jenis_makanan_minuman" value="{{ $menu->jenis_makanan_minuman }}">
            </div>
            <div class="modal-footer">  
                <button type="button" class="btn actionBtn btn-primary" data-dismiss="modal">
                    <span id="footer-action-button" >Simpan</span>
                </button>
                <button type="button" class="btn actionBtnRight" data-dismiss="modal">
                    <span id="footer-action-button-right" > Batal</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
<script>
$(".item-click").click(function(){
    $('#id_bahan_baku').val($(this).data('idbahanbaku'));
    $('#satuan').text('*Per ' + $(this).data('satuan'));
    console.log($(this).data('idbahanbaku'));
    $('#myModal').modal('show');
});

$(".actionBtn").click(function(e){
    e.preventDefault();

    var id_bahan_baku = $('#id_bahan_baku').val();
    var kode_makanan_minuman = $('#kode_makanan_minuman').val();
    var nama_makanan_minuman = $('#nama_makanan_minuman').val();
    var jenis_makanan_minuman = $('#jenis_makanan_minuman').val();
    var qty = $('#jumlah-modal').val();

    $.ajax({ 
    type:'post',
    url:'{{ url("/tambahresep") }}',							
    data:{_token:'{{ csrf_token() }}',
            kode_makanan_minuman:kode_makanan_minuman,
            nama_makanan_minuman:nama_makanan_minuman,
            jenis_makanan_minuman:jenis_makanan_minuman,
            id_bahan_baku:id_bahan_baku,
            qty:qty
        },
    success:function(data){
        window.location.href = "/pilihresep/"+ data.nama_makanan_minuman +"/"+ data.jenis_makanan_minuman; 
    }
    });
});
</script>
@endsection
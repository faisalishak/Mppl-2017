@extends('layouts.masterpelayan');

@section('content')
<button type="submit" class="btn btn-primary simpan-pesanan" data-idpesanan="{{ $id_pesanan }}">
    Simpan Pesanan
</button>

<br>
<br>
<!--Makanan Pembuka-->
<div class="row">
<input id="id-user" type="hidden" value="{{ Auth::user()->id }}"></input>
<div class="col-md-12">
<div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-1"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Pembuka </div>
    </span>    
    <div class="panel-body children" id="sub-item-1">
        <ul class="todo-list">
        @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 1)    
            <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    <a class="edit-click" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" class="flag"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
        <br>
    </div>

<!--Makanan Utama-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-3"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Utama</div>
    </span>    
    <div class="panel-body children " id="sub-item-3">
         <ul class="todo-list">
         @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 2)    
           <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    <a class="edit-click" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" class="flag"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
    </div>

    <!--Makanan Penutup-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-4"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked bacon burger"><use xlink:href="#stroked-bacon-burger"/></svg>
Makanan Penutup</div>
    </span>    
    <div class="panel-body children " id="sub-item-4">
         <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 3)    
           <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                    
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    <a class="edit-click" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" class="flag"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>

    <!--Minuman Hangat-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-5"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked round coffee mug"><use xlink:href="#stroked-round-coffee-mug"/></svg>
Minuman Hangat</div>
    </span>    
    <div class="panel-body children " id="sub-item-5">
        <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 4)    
           <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    <a class="edit-click" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" class="flag"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>

    <!--Minuman Dingin-->
    <div class="panel panel-blue">
    <span data-toggle="collapse" href="#sub-item-6"> 
        <div class="panel-heading dark-overlay"><svg class="glyph stroked paper coffee cup"><use xlink:href="#stroked-paper-coffee-cup"/></svg>
Minuman Dingin</div>
    </span>    
    <div class="panel-body children " id="sub-item-6">
         <ul class="todo-list">
            @foreach ($menus as $menu)
            @if($menu->jenis_makanan_minuman == 5)    
            <li id="{{ $menu->kode_makanan_minuman }}" class="todo-list-item">
                <div class="checkbox">
                    <label for="checkbox"><b>{{ $menu->nama_makanan_minuman }}</b></label>
                    <label for="checkbox">Rp. {{ $menu->harga_makanan_minuman }}</label>
                </div>
                <div class="pull-right action-buttons">
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="1" ><svg class="glyph stroked chevron up"><use xlink:href="#stroked-chevron-up"/></svg></a>
                    <a class="add-or-substract" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" data-jumlah="-1" class="flag"><svg class="glyph stroked chevron down"><use xlink:href="#stroked-chevron-down"/></svg></a>
                    <a class="edit-click" data-kodemenu="{{ $menu->kode_makanan_minuman }}" data-idpesanan="{{ $id_pesanan }}" data-nomormeja="{{ $nomor_meja }}" class="flag"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg></a>
                    {{ $check = false }}
                    @foreach ($pesanan as $item)
                       @if($item->kode_makanan_minuman == $menu->kode_makanan_minuman)  
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="{{ $item->jumlah }}">
                            <input type="hidden" id="check" value="{{ $check = true }} ">
                            <span  class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">{{ $item->jumlah }}</span>
                       @endif
                    @endforeach

                    @if($check == false)
                            <input class="valjumlah{{ $menu->kode_makanan_minuman }}" type="hidden" id="jumlah{{ $menu->kode_makanan_minuman }}" value="0"></input>
                            <span class="badge{{ $menu->kode_makanan_minuman }} badge panel-teal">0</span>  
                    @endif
                </div>
            </li>
            @endif
         @endforeach   
        </ul>
    </div>
    <div class="panel-footer">
       <br>
    </div>


</div><!--/col-->
</div><!--/row-->

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" id="body"></h4>
                <input id="jumlah-modal" class="form-control" placeholder="Jumlah ex:1,2,3" type="text" required autofocus>
                <input type="hidden" id="nomormeja-modal">
                <input type="hidden" id="jumlah-pesanan">
                <input type="hidden" id="id_pesanan-modal">
                <input type="hidden" id="kode_makanan_minuman-modal">
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
        $(".add-or-substract").click(function(){            
            var id_pesanan = $(this).data('idpesanan');
            var nomor_meja = $(this).data('nomormeja');
            var jumlah = $(this).data('jumlah');
            var kode_makanan_minuman = $(this).data('kodemenu');
            var jumlah_pesanan = $('#jumlah' + kode_makanan_minuman).val();

            console.log('dsl :'+ jumlah_pesanan);

            if(jumlah_pesanan == 0){
                 $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/storepesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            jumlah_pesanan:jumlah_pesanan,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(data){
                        $('.valjumlah' + data.kode_makanan_minuman).replaceWith('<input class="valjumlah'+ data.kode_makanan_minuman +'" type="hidden" id="jumlah'+ data.kode_makanan_minuman +'" value="'+ data.jumlah +'"></input>'),
                        $('.badge' + data.kode_makanan_minuman).replaceWith('<span class="badge'+ data.kode_makanan_minuman +' badge panel-teal">'+ data.jumlah +'</span>')
                    },
                });
            }else{
                $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/editpesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            jumlah_pesanan:jumlah_pesanan,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(data){
                        $('.valjumlah' + data.kode_makanan_minuman).replaceWith('<input class="valjumlah'+ data.kode_makanan_minuman +'" type="hidden" id="jumlah'+ data.kode_makanan_minuman +'" value="'+ data.jumlah +'"></input>'),
                        $('.badge' + data.kode_makanan_minuman).replaceWith('<span class="badge'+ data.kode_makanan_minuman +' badge panel-teal">'+ data.jumlah +'</span>')
                    },
                });
            }
        });

        $(".edit-click").click(function(){
            $('#id_pesanan-modal').val($(this).data('idpesanan'));
            $('#nomormeja-modal').val($(this).data('nomormeja'));
            $('#kode_makanan_minuman-modal').val($(this).data('kodemenu'));
            $('#jumlah-pesanan').val($('#jumlah' + $(this).data('kodemenu')).val());
            $('#jumlah-modal').val($('#jumlah' + $(this).data('kodemenu')).val());
            
            $('#myModal').modal('show');
        });

        $(".actionBtn").click(function(e){
				e.preventDefault();

				var id_pesanan = $('#id_pesanan-modal').val();
				var nomor_meja = $('#nomormeja-modal').val();
				var kode_makanan_minuman = $('#kode_makanan_minuman-modal').val();
                var jumlah = $('#jumlah-modal').val();
                var jumlah_pesanan = $('#jumlah-pesanan').val();

                console.log(jumlah);
					
            if(jumlah_pesanan == 0){
                 $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/storepesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            jumlah_pesanan:400,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(data){
                        $('.valjumlah' + data.kode_makanan_minuman).replaceWith('<input class="valjumlah'+ data.kode_makanan_minuman +'" type="hidden" id="jumlah'+ data.kode_makanan_minuman +'" value="'+ data.jumlah +'"></input>'),
                        $('.badge' + data.kode_makanan_minuman).replaceWith('<span class="badge'+ data.kode_makanan_minuman +' badge panel-teal">'+ data.jumlah +'</span>')
                    },
                });
            }else{
                $.ajax({ 
                    type:'post',
                    url:'{{ url("/pesanan/editpesanan") }}',							
                    data:{_token:'{{ csrf_token() }}', 
                            id_pesanan:id_pesanan,
                            nomor_meja:nomor_meja,
                            jumlah:jumlah,
                            jumlah_pesanan:400,
                            kode_makanan_minuman:kode_makanan_minuman},
                    success:function(data){
                        $('.valjumlah' + data.kode_makanan_minuman).replaceWith('<input class="valjumlah'+ data.kode_makanan_minuman +'" type="hidden" id="jumlah'+ data.kode_makanan_minuman +'" value="'+ data.jumlah +'"></input>'),
                        $('.badge' + data.kode_makanan_minuman).replaceWith('<span class="badge'+ data.kode_makanan_minuman +' badge panel-teal">'+ data.jumlah +'</span>')
                    },
                });
            }
			});

            $(".simpan-pesanan").click(function(e){
				e.preventDefault();

                var id_pesanan = $(this).data('idpesanan');
                var id = $('#id-user').val();

                console.log(id_pesanan);
					
				$.ajax({ 
					type:'post',
					url:'{{ url("/pesanan/simpanpesanan") }}',							
					data:{_token:'{{ csrf_token() }}', 
							id_pesanan:id_pesanan,
                            id:id
                         },
					success:function(){
						window.location.href = "/"; 
					},
				});
			});
</script>
@endsection
@extends('layouts.masterkasir');

@section('content')

<!--Meja section-->
<div class="row">
    <div class="daftar-pesanan col-lg-12">
    <input id="id-user" type="hidden" value="{{ Auth::user()->id }}"></input>
        <h2>Daftar Pesanan</h2>

       @foreach ($detailpesanan as $dp)
        <div id="item{{ $dp->id_pesanan }}" class="alert bg-primary" role="alert">
            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/><span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"></use></svg> <b> Meja No {{ substr($dp->id_pesanan, -1) }} </b>  <a href="#" class="pull-right"><input type="submit" class="btn btn-primary form-control" value="Lihat detail pesanan"></span></a>
            <ul class="children collapse" id="coba{{ $dp->id_pesanan }}">    
            <hr>
                <p class="message">
                    <ol class="menu{{ $dp->id_pesanan }}" type="1">
                        @foreach ($pesanan as $p)
                        @if($p->id_pesanan == $dp->id_pesanan)
                            <li>
                                <b><small><i class="fa fa-clock-o"></i>{{ $p->nama_makanan_minuman }}</small></b>
                                <small><i class="fa fa-clock-o"></i>  {{ $p->jumlah }} Porsi</small>
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ $dp->created_at }}</small>
                            </li>
                        @endif
                        @endforeach
                    </ol>   
                </p>
                <svg class="glyph stroked empty-message"> 
                    <span data-toggle="collapse" href="#coba{{ $dp->id_pesanan }}"><use xlink:href="#stroked-empty-message"></use></span>
                </svg>
                <a href="/bayarpesanan/{{ $dp->id_pesanan }}" class="pull-right">    
                    <input type="button" onclick="return antarkanModal();" class="antarkan-modal btn btn-primary form-control" value="Bayar">
                </a>
            </ul>
        </div>
    @endforeach
    </div>

@endsection
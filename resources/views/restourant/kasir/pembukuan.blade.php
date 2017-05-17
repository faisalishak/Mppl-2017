@extends('layouts.masterkasir');

@section('content')

<!--content hide-->
        @if(Request::path() == 'hari')
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pendapatan PerHari</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
                                <tr>
                                    <th data-field="" data-checkbox="true" ><b>No </th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Taggal Transaksi</b></th>
                                    <th data-field="stok"  data-sortable="true"><b>Pendapatan</b></th>
                                    <th data-field="updated_at" data-sortable="true"><b>Uang Bayar</b></th>
                                    <th data-field="harga" data-sortable="true"><b>Kembalian</b></th>
                                </tr>
						    </thead>
                            <tbody>
                            <input type="hidden" value="{{ $no = 0 }}"> 
                              @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> {{ $no++ }} </td>
                                    <td  data-sortable="true"> {{ $item->updated_at }} </td>
                                    <td  data-sortable="true"> {{ $item->total }} </td>
                                    <td  data-sortable="true"> {{ $item->jumlah_bayar }} </td>
                                    <td  data-sortable="true"> Rp. {{ $item->jumlah_bayar - $item->total }} </td>
                                </tr>
                              @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
        @elseif(Request::path() == 'bulan')	  
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pendapatan PerBulan</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
                                <tr>
                                    <th data-field="" data-checkbox="true" ><b>No </th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Bulan</b></th>
                                    <th data-field="stok"  data-sortable="true"><b>Tahun</b></th>
                                    <th data-field="updated_at" data-sortable="true"><b>Pendapatan</b></th>
                                </tr>
						    </thead>
                            <tbody>
                            <input type="hidden" value="{{ $no = 0 }}"> 
                              @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> {{ $no++ }} </td>
                                    <td  data-sortable="true"> {{ $item->month }} </td>
                                    <td  data-sortable="true"> {{ $item->year }} </td>
                                    <td  data-sortable="true"> {{ $item->total }} </td>
                                </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
        @elseif(Request::path() == 'tahun')
         <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Pendapatan PerTahun</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
                                <tr>
                                    <th data-field="" data-checkbox="true" ><b>No </th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Tahun</b></th>
                                    <th data-field="updated_at" data-sortable="true"><b>Pendapatan</b></th>
                                </tr>
						    </thead>
                            <tbody>
                            <input type="hidden" value="{{ $no = 0 }}"> 
                              @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> {{ $no++ }} </td>
                                    <td  data-sortable="true"> {{ $item->year }} </td>
                                    <td  data-sortable="true"> {{ $item->total }} </td>
                                </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
        @endif  

@stop
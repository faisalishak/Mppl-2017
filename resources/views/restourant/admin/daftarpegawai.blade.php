@extends('layouts.masteradmin');

@section('content')
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Pegawai</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
                                <tr>
                                    <th data-field="" data-sortable="true" ><b>No </th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Name</b></th>
                                    <th data-field="stok"  data-sortable="true"><b>Email</b> (for login)</th>
                                    <th data-field="updated_at" data-sortable="true"><b>Password</b></th>
                                    <th data-field="harga" data-sortable="true"><b>Role</b></th>
                                </tr>
						    </thead>
                            <tbody>
                            <input type="hidden" value="{{ $no = 1 }}"> 
                              @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> {{ $no++ }} </td>
                                    <td  data-sortable="true"> {{ $item->name }} </td>
                                    <td  data-sortable="true"> {{ $item->email }} </td>
                                    <td  data-sortable="true">  {{ $item->name == 'dedi' ? '123123' : 123456  }} </td>
                                    <td  data-sortable="true"> {{ $item->role }} </td>
                                </tr>
                              @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
@endsection
@extends('layouts.masterkoki');

@section('pesanan')
		<div class="row">
		<div id="alert" class="col-lg-12">
		</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Informasi Bahanbaku</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
                                <tr>
                                    <th data-field="d" data-sortable="true" ><b>No </th>
                                    <th data-field="nama_bahan_baku" data-sortable="true"><b>Nama</b></th>
                                    <th data-field="stok"  data-sortable="true"><b>Stok</b></th>
                                    <th data-field="updated_at" data-sortable="true"><b>Jenis</b></th>
                                    <th data-field="harga" data-sortable="true"><b>Status</b></th>
                                </tr>
						    </thead>
                            <tbody>
                            <input type="hidden" value="{{ $no = 1 }}"> 
                              @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> {{ $no++ }}. </td>
                                    <td  data-sortable="true"> {{ $item->nama_bahan_baku }} </td>
                                    <td  data-sortable="true"> {{ $item->stok }}.{{ $item->satuan }}  </td>
                                    <td  data-sortable="true"> {{ $item->jenis }} </td>
									<td  data-sortable="true">
									@if($item->stok >= 50)
										Tersedia 
									@elseif($item->stok < 50)
                        				{{ csrf_field() }}
										<button id="{{ $item->id_bahan_baku }}" data-idbahanbaku="{{ $item->id_bahan_baku }}" onclick="return notifPantry();" class="notifPantry btn btn-danger">Notify</button> 
									@endif
									</td>
	                            </tr>
                                @endforeach
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<script>
			
			function notifPantry(){
			$(".notifPantry").click(function(){
            var id_bahan_baku = $(this).data('idbahanbaku');
				console.log(id_bahan_baku);
					$.ajax({ 
						type:'post',
						url:'{{ url("notifpanty") }}',							
						data:{_token:'{{ csrf_token() }}', 
								id_bahan_baku:id_bahan_baku
							},
						success:function(data){
						},
					});
				});
			}
		</script>
			
@endsection
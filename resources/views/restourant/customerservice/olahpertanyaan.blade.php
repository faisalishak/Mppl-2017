@extends('layouts.mastercustomerservice');

@section('content')
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Report Kuisioner</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
                                <tr>
                                    <th data-field="" data-checkbox="true" >No</b></th>
                                    <th data-field="pertanyaan1" data-sortable="true"><b>Pertanyaan 1</b></th>
                                    <th data-field="pertanyaan2"  data-sortable="true"><b>Pertanyaan 2</b></th>
                                    <th data-field="pertanyaan3" data-sortable="true"><b>Pernyataan 3</b></th>
                                    <th data-field="bulan" data-sortable="true"><b>Bulan</b></th>
                                    <th data-field="year" data-sortable="true"><b>Tahun</b></th>
                                    
                                </tr>
						    </thead>
                            <tbody>
                               @foreach($collection as $item)
                                <tr>
                                    <td  data-checkbox="true"> Item ID </td>
                                    
                        
                                    <td  data-sortable="true">
                                    
                                    @if($item->pertanyaan1 >= 0 && $item->pertanyaan1 < 1 )
                                        Pelayanan Sangat Buruk  
                                    @elseif($item->pertanyaan1 >= 1 && $item->pertanyaan1 < 2 )
                                        Pelayanan Buruk  
                                    @elseif($item->pertanyaan1 >= 2 && $item->pertanyaan1 < 3 )
                                        Pelayanan Cukup  
                                    @elseif($item->pertanyaan1 >= 3 && $item->pertanyaan1 <= 4 )
                                        Pelayanan Memuaskan
                                   
                                    @endif
                                    </td>
                                    <td  data-sortable="true">
                                    @if($item->pertanyaan2 >= 0 && $item->pertanyaan2 < 1 )
                                        Pelayanan Sangat Buruk  
                                    @elseif($item->pertanyaan2 >= 1 && $item->pertanyaan2 < 2 )
                                        Pelayanan Buruk  
                                    @elseif($item->pertanyaan2 >= 2 && $item->pertanyaan2 < 3 )
                                        Pelayanan Cukup  
                                    @elseif($item->pertanyaan2 >= 3 && $item->pertanyaan2 <= 4 )
                                        Pelayanan Memuaskan
                                    @endif
                                     </td>
                                    <td  data-sortable="true">
                                    @if($item->pertanyaan3 >= 0 && $item->pertanyaan3 < 1 )
                                        Pelayanan Sangat Buruk  
                                    @elseif($item->pertanyaan3 >= 1 && $item->pertanyaan3 < 2 )
                                        Pelayanan Buruk  
                                    @elseif($item->pertanyaan3 >= 2 && $item->pertanyaan3 < 3 )
                                        Pelayanan Cukup  
                                    @elseif($item->pertanyaan3 >= 3 && $item->pertanyaan3 <= 4 )
                                        Pelayanan Memuaskan
                                    @endif
                                     </td>
                                     
                                    <td  data-sortable="true"> {{$item->month}} </td>
                                    <td  data-sortable="true"> {{$item->year}} </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
						</table>
                        
					</div>
				</div>
			</div>
		</div><!--/.row-->	   

@endsection
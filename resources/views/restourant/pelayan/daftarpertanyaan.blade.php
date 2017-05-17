@extends('layouts.masterpelayan');

@section('content')

<div class="row">
<div class="col-lg-12">
    <div class="panel panel-blue"> 
    <div class="panel-heading dark-overlay"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Isi Kuisioner</div>
            <form class="form-horizontal style-form" method="post" action="{{url('/tambahkuisioner')}}">
                  <div class="col-md-12">
                      <div class="content-panel">
                        <form class="form-horizontal style-form" >
                          <br>
                          <input name="id_pesanan"  type="hidden" value="{{ $id_pesanan }}">     
                          <div class="alert bg-primary" role="alert" > 
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                            <span data-toggle="collapse" href="#coba">
                            Bagaimana Pelayanan di Restoran ini?
                            </svg>      
                            </span>
                            <a class="pull-right">
                            <div class="form-group">   
                                 <input type="radio" name="pertanyaan1" value="0"> Sangat Buruk
                                 <input type="radio" name="pertanyaan1" value="1"> Buruk
                                 <input type="radio" name="pertanyaan1" value="2"> Cukup Memuaskan
                                 <input type="radio" name="pertanyaan1" value="3"> Memuaskan
                                 <input type="radio" name="pertanyaan1" value="4"> Sangat Memuaskan
                            </div> 
                            </a>
                        </div>
                        <div class="alert bg-primary" role="alert" > 
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                            <span data-toggle="collapse" href="#coba">
                            Bagaimana Kecepatan Pelayanan di Restoran ini?
                            </svg>      
                            </span>     
                            <a class="pull-right">
                                <div class="form-group">   
                                 <input type="radio" name="pertanyaan2" value="0"> Sangat Buruk
                                 <input type="radio" name="pertanyaan2" value="1"> Buruk
                                 <input type="radio" name="pertanyaan2" value="2"> Cukup Memuaskan
                                 <input type="radio" name="pertanyaan2" value="3"> Memuaskan
                                 <input type="radio" name="pertanyaan2" value="4"> Sangat Memuaskan
                                 </div>  
                              </a>
                        </div>
                        <div class="alert bg-primary" role="alert" > 
                            <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/>
                            <span data-toggle="collapse" href="#coba">
                            Bagaimana Kualitas Makanan di Restoran ini?
                            </svg>  
                            </span>    
                            <a  class="pull-right">
                               <div class="form-group">   
                                 <input type="radio" name="pertanyaan3" value="0"> Sangat Buruk
                                 <input type="radio" name="pertanyaan3" value="1"> Buruk
                                 <input type="radio" name="pertanyaan3" value="2"> Cukup Memuaskan
                                 <input type="radio" name="pertanyaan3" value="3"> Memuaskan
                                 <input type="radio" name="pertanyaan3" value="4"> Sangat Memuaskan
                               </div>
                            </a>
                            
                        
                        </div>
                         <div class="alert bg-primary" role="alert" > 
                                <div class="col-sm-90">
                                  <textarea name="saran" placeholder="Kritik dan Saran" class="form-control" rows="2"></textarea>
                              </div>
                            </span>  
                            </span>
                        </svg>
                        </div>
                        
                        <div class="form-group">
                              
                              <div class="col-sm-10">
                                  <input type="submit" class="btn btn-primary" value="Submit">
                              </div>
                          </div>
                      </div>
                  </form>
                  </div><!-- /col-md-12 -->
                  
    </div>
    </div>
</div>

@stop



@extends('layout.admin.sidebar')

@section('title','Form Ubah Kata')

@section('container')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Form Ubah Kata</h1>
                    <hr class="sidebar-divider d-none d-md-block">
					@if(session('status'))
                                <div class="alert alert-success mt-2">
                                    {{session('status')}}
                                </div>
                    @endif
                    <div class="row">
                    	<div class="col">
                    		<form method="post" action="/admin/ubah_kata/{{$data->id}}">
							  @method('patch')
							  @csrf
							  <div class="form-group">
							    <label for="allang">Allang</label>
							    <input type="text" class="form-control @error('allang') is-invalid @enderror" id="allang" aria-describedby="emailHelp" name="allang" value="{{$data->allang}}" autofocus="true">
							    <small id="emailHelp" class="form-text text-muted">Masukan dengan dengan benar</small>
								@error('allang')
									<div class="invalid-feedback">
										{{$message}}
									</div>
								@enderror
							  </div>
							  <div class="form-group">
							    <label for="indonesia">Indonesia</label>
							    <input type="text" class="form-control @error('indonesia') is-invalid @enderror" id="indonesia" aria-describedby="emailHelp" name="indonesia" value="{{$data->indonesia}}">
							    <small id="emailHelp" class="form-text text-muted">Masukan dengan dengan benar</small>
								@error('indonesia')
									<div class="invalid-feedback">
										{{$message}}
									</div>
								@enderror
							  </div>
							  <div class="form-group">
							    <label for="kalimat_allang">Kalimat Allang</label>
							    <input type="text" class="form-control @error('kalimat_allang') is-invalid @enderror" id="kalimat_allang" aria-describedby="emailHelp" name="kalimat_allang" value="{{$data->kalimat_allang}}">
							    <small id="emailHelp" class="form-text text-muted">Masukan dengan dengan benar</small>
								@error('kalimat_allang')
									<div class="invalid-feedback">
										{{$message}}
									</div>
								@enderror
							  </div>
							  <div class="form-group">
							    <label for="kalimat_indo">Kalimat Indonesia</label>
							    <input type="text" class="form-control @error('kalimat_indo') is-invalid @enderror" id="kalimat_indo" aria-describedby="emailHelp" name="kalimat_indo" value="{{$data->kalimat_indo}}">
							    <small id="emailHelp" class="form-text text-muted">Masukan dengan dengan benar</small>
								@error('kalimat_indo')
									<div class="invalid-feedback">
										{{$message}}
									</div>
								@enderror
							  </div>
							  
							  <div class="form-group">
							    <label for="singkatan">Singkatan</label>
							    <select class="form-control @error('singkatan') is-invalid @enderror" id="singkatan" name="singkatan">
								  <option value="{{$data->singkatan}}">{{$data->singkatan}}</option>
								  <option value="ak.">ak.</option>
								  <option value="aw.">aw.</option>
								  <option value="Bel.">Bel.</option>
								  <option value="hit.">hit.</option>
								  <option value="kb.">kb.</option>
								  <option value="kd.">kd.</option>
								  <option value="kg.">kg.</option>
								  <option value="kk.">kk.</option>
								  <option value="kk-o.">kk-o.</option>
								  <option value="kkt.">kkt.</option>
								  <option value="ks.">ks.</option>
								  <option value="Mal.">Mal.</option>
								  <option value="pb.">pb.</option>
								  <option value="sm.">sm.</option>
								  <option value="smb.">smb.</option>
								  <option value="ta.">ta.</option>
								  <option value="tw.">tw.</option>
								  <option value="singkatan">singkatan</option>
								  <option value="pn.">pn.</option>
								  <option value="jamak">jamak</option>
								  <option value="tunggal">tunggal</option>					 
								  <option value="part">part</option>					 
								</select>
							  </div>
							   
							  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</form>
                    	</div>
                    </div>	



                </div>
                <!-- /.container-fluid -->
@endsection
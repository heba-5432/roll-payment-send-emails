
@extends('layouts.master')
<title>@yield('title')</title>
@section('title')
{{trans('transfile.dis_roles')}}
@endsection
@section('css')
<!---Internal Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">
<!--- Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ @yield('title')</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>

						<div class="mb-3 mb-xl-0">

						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
<!-- default form start--->

					<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1"></h4>
								<p class="mb-2">{{trans('transfile.dis_roles')}}</p>
							</div>
							<div class="card-body pt-0">
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


							@if (session('messege'))
    <div class="alert alert-danger">
        {{ session('messege') }}
    </div>
@endif

								<form class="form-horizontal"  method="POST" action="{{route('dis_roles.store')}}">
								@csrf
								@method('POST')
									<div class="form-group">
										<input type="text" class="col-lg-4 mg-t-20 mg-lg-t-0" id="inputName"  name ="dis_title" placeholder="title" value="{{old('dis_title')}}">

										<input type="text" class="col-lg-4 mg-t-20 mg-lg-t-0" id="inputEmail3" name ="dis_descreption" placeholder="discreption" value="{{old('dis_descreption')}}">
									</div>
                                    <div class="form-group col-lg-12 mg-t-20 mg-lg-t-0" >

<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="allowb1" placeholder="allowance1" value="{{old('allowb1')}}">


<input type="text" class="col-lg-3 mg-t-20 mg-lg-t-0" id="inputEmail3" name ="allowb2" placeholder="allowance2"  value="{{old('allowb2')}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="allowb3" placeholder="allowance3"   value="{{old('allowb3')}}">
</div>
<div class="form-group col-lg-12 mg-t-20 mg-lg-t-0" >
<input type="text" class="col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="deductb1" placeholder="deduction1" value="{{old('deductb1')}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputEmail3" name ="deductb2" placeholder="deduction2"  value="{{old('deductb2')}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="deductb3" placeholder="deduction3"   value="{{old('deductb3')}}">

</div>

									<div class="form-group mb-0 justify-content-end">

									</div>
									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-primary">submit</button>
											<button type="submit" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				<!--div-->
                <div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0">{{trans('transfile.show_info')}}</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								</div>
							<div class="card-body">
								<div class="table-responsive">
								<table id="example" class="table key-buttons text-md-nowrap  table-bordered table-striped" width="90%">
										<thead class="thead-dark">


											<tr><?php $i=0;?>

                                            <th width="5%">no.&nbsp;&nbsp;</th>
												<th class="border-bottom-0"  width="10%"> {{trans('transfile.title')}} &nbsp;&nbsp;</th>
                                                <th class="border-bottom-0"  width="10%"> {{trans('transfile.description')}} &nbsp;&nbsp;</th>
                                                <th class="border-bottom-0"  width="10%"> discount &nbsp;&nbsp;</th>
                                                <th class="border-bottom-0"  width="10%"> bonus &nbsp;&nbsp;</th>

												<th class="border-bottom-0" width="50px" >action</th>
												<th class="border-bottom-0" width="50px" >action</th>
												<th width="50px">no.</th>
						</tr>
										</thead>
										<tbody>
@if(!empty($Dis))
@foreach ($Dis as $dis_bon )


											<tr>
											<td>{{$i=$i+1}}</td>
												<td width="5%" >{{$dis_bon->dis_title}}</td>
                                                         <td>{{$dis_bon->dis_descreption}}</td>
                                                         <td width="5%" >{{$dis_bon->total_dis}}</td>
                                                         <td>{{$dis_bon->total_bones}}</td>
												<td width="10%">
													<!-- Basic modal -edit button--start--->
													<a class="btn ripple btn-primary" data-target="#mo{{$dis_bon->id}}" data-toggle="modal" href="{{$dis_bon->id}}">edit</a>

<!-- Basic modal -edit alert--start--->
<div class="modal" id="mo{{$dis_bon->id}}">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">edit  data</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">

						<form class="form-horizontal"  method="POST" action="{{route('dis_roles.edit',$dis_bon->id)}}">

					@csrf
								@method('POST')
									<div class="form-group">
										<input type="text" class="form-control" id="inputName"  name ="dis_title" placeholder="title" value="{{$dis_bon->dis_title}} ">
									</div>
                                    <div class="form-group">
										<input type="text" class="form-control" id="inputName"  name ="dis_descreption" placeholder="describtion" value="{{$dis_bon->dis_descreption}} ">
									</div>
                                    <div class="form-group col-lg-12 mg-t-20 mg-lg-t-0" >

<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="allowb1" placeholder="allowance1" value="{{$dis_bon->allowb1}}">


<input type="text" class="col-lg-3 mg-t-20 mg-lg-t-0" id="inputEmail3" name ="allowb2" placeholder="allowance2"  value="{{$dis_bon->allowb2}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="allowb3" placeholder="allowance3"   value="{{$dis_bon->allowb3}}">
</div>
<div class="form-group col-lg-12 mg-t-20 mg-lg-t-0" >
<input type="text" class="col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="deductb1" placeholder="deduction1" value="{{$dis_bon->deductb1}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputEmail3" name ="deductb2" placeholder="deduction2"  value="{{$dis_bon->deductb2}}">


<input type="text" class=" col-lg-3 mg-t-20 mg-lg-t-0" id="inputName"  name ="deductb3" placeholder="deduction3"   value="{{$dis_bon->deductb3}}">

</div>



                                    <div class="form-group">
										<input type="text" class="form-control" id="inputName"  name ="total_dis" placeholder="discount %" value="{{$dis_bon->total_dis}} " >
									</div>
                                    <div class="form-group">
										<p><input type="text" class="form-control" id="inputName"  name ="total_bones" placeholder="bones %" value="{{$dis_bon->total_bones}} ">
									</div>


									<div class="form-group mb-0 mt-3 justify-content-end">

									</div>
								</div>
								<div class="modal-footer">
					<button>	<input type ="submit" class="btn ripple btn-primary"  value="edit"></button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">cancel</button>
					</div>
					</form>
					</div>

				</div>
			</div>
		</div>
		<!-- End Basic modal - edit-alert end---->


</td><td>

 <!-- Basic modal -delete button--start--->
  <a class="btn ripple btn-primary" data-target="#mod{{$dis_bon->id}}" data-toggle="modal" href="">delete</a>
					<!-- Basic modal -delete button--end--->
<!-- Basic modal -delete alert--start--->
<div class="modal" id="mod{{$dis_bon->id}}">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">delete confirm</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">

						<p>are you sure you want to delete this item</p>
					</div>
					<div class="modal-footer">
						<a href="{{route('dis_roles.destroy',$dis_bon->id)}}"><button class="btn ripple btn-primary" type="button">confirm delete</button></a>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Basic modal - delete-alert end---->

</div>


												| </td>
												<td >ادخل راتب</td>
											</tr>
                                            @endforeach
                                            @endif
										</tbody>
									</table>

</div>
								</div>
							</div>
						</div>

					</div>




					<!--/div-->

 <!-- default form end--->
				</div>
				<!-- row closed -->

			<!-- Container closed -->
		</div>
		<!-- main-content closed -->



@endsection
@section('js')

<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Modal js-->
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection

@extends('layouts.app')

{{-- BEGIN Style --}}
@section('style-page-level-plugins')
    <link href="{{ url('assets/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
@endsection
{{-- END Style --}}

{{-- BEGIN Script --}}
@section('scripts-page-level-plugins')
    <script src="{{ url('assets/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
@endsection
@section('scripts-page-level')
	{{-- <script src="{{ url('assets/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script> --}}
    <script src="{{ url('assets/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/scripts/custom.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ url('assets/scripts/form-samples.min.js') }}" type="text/javascript"></script> --}}
@endsection
{{-- END Script --}}

{{-- Begin Page Content --}}
@section('page-title')
    Master Item
    <small></small>
@endsection
@section('page-breadcrumb')
    <li>
        <a href="{{ url('/') }}">Home</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <span>Items Page</span>
    </li>
@endsection
@section('page-content')
	{{-- {{ var_dump($data) }} --}}
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group">
                <button id="btn-add-data" class="btn sbold green"> Add New
                    <i class="fa fa-plus"></i>
                </button>
                <button id="btn-back" class="btn sbold yellow-crusta">
                	<i class="fa fa-chevron-left"></i> Back
                </button>
            </div>
		</div>
	</div>
	<div class="row" id="form-data">
		<div class="col-md-12 form">
			<!-- BEGIN FORM-->
            <form action="#" class="horizontal-form">
                <div class="form-body">
                    <h3 class="form-section">Item Info</h3>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Fabric</label>
                                <select class="form-control" name="fabric">
                                    <option value="">GR</option>
                                    <option value="">YD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Type</label>
                                <select class="form-control" name="item_type">
                                    <option value="">TC</option>
                                    <option value="">CT</option>
                                    <option value="">Other</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">No. Item</label>
                                <input type="text" id="no_item" class="form-control" placeholder="No. Item">
                            </div>
                        </div>
                        <!--/span-->
                        
                        <!--/span-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Weave</label>
                                <select class="form-control" name="weave">
                                    <option value="">PLAIN</option>
                                    <option value="">PLAT</option>
                                    <option value="">TWILL 2/1</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Cotton</label>
                                <input type="text" id="cotton" class="form-control" placeholder="Cotton">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Polyester</label>
                                <input type="text" id="poly" class="form-control" placeholder="Polyester">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <h3 class="form-section">Yarn Info</h3>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Type Lusi</label>
                                <select class="form-control" name="type_lusi">
                                    <option value="">TC</option>
                                    <option value="">CVC</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">No. Lusi</label>
                                <input type="text" class="form-control" name="no_lusi"> 
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Type Pakan</label>
                                <select class="form-control" name="type_pakan">
                                    <option value="">TC</option>
                                    <option value="">CVC</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">No. Pakan</label>
                                <input type="text" class="form-control" name="no_pakan"> 
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <h3 class="form-section">Construct Greige</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Dst. Lusi</label>
                                <input type="text" class="form-control" name="dst_lusi_g"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Dst. Pakan</label>
                                <input type="text" class="form-control" name="dst_pakan_g"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Length/Width</label>
                                <input type="text" class="form-control" name="l_greige"> </div>
                        </div>
                        <!--/span-->
                    </div>
                    <h3 class="form-section">Construct Finish</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Dst. Lusi</label>
                                <input type="text" class="form-control" name="dst_lusi_f"> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Dst. Pakan</label>
                                <input type="text" class="form-control" name="dst_pakan_f"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Length/Width</label>
                                <input type="text" class="form-control" name="l_finish"> </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <div class="form-actions right">
                    <button type="button" class="btn default">Cancel</button>
                    <button type="submit" class="btn blue">
                        <i class="fa fa-check"></i> Save</button>
                </div>
            </form>
            <!-- END FORM-->
		</div>
	</div>
	<div class="row" id="table-data">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">Items</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                        <thead>
                            <tr>
                                <th class="all">No.</th>
                                <th class="min-phone-l">Type</th>
                                <th class="desktop">Weave</th>
                                <th class="all">Construct Greige</th>
                                <th class="all">Construct Finish</th>
                                <th class="none">Cotton</th>
                                <th class="none">Polyester</th>
                                <th class="none">Gram</th>
                                <th class="none">OZ</th>
                                <th class="all">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data as $d)
								<tr>
	                                <td>{{ $d['item'] }}</td>
	                                <td>{{ $d['type_item'] }}</td>
	                                <td>{{ $d['weave'] }}</td>
	                                <td>{{ $d['construct_g'] }}</td>
	                                <td>{{ $d['construct_f'] }}</td>
	                                <td>{{ $d['cotton'] }}</td>
	                                <td>{{ $d['poly'] }}</td>
	                                <td>{{ $d['gram'] }}</td>
	                                <td>{{ $d['oz'] }}</td>
	                                <td>
	                                	<div class="btn-group">
                                            <button class="btn btn-sm green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="javascript:;" id="btn-edit" data-item="#">
                                                        <i class="icon-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" id="btn-delete" data-item="#">
                                                        <i class="icon-trash"></i> Delete </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;" id="btn-print" data-item="#">
                                                        <i class="icon-printer"></i> Print
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
	                                </td>
	                            </tr>
							@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection
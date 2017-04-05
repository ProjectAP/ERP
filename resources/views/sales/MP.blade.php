@extends('layouts.app')


@section('page-title')
    Classic Page Head
    <small>classic page head option</small>
@endsection
@section('page-breadcrumb')
    <li>
        <a href="index.html">Home</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <span>Page Layouts</span>
    </li>
@endsection
@section('page-content')
<div class="row">
	<div class="col-sm-12">
		<!-- BEGIN FORM-->
        <form action="#" class="horizontal-form">
            <div class="form-body">
            	<div class="row">
            		<div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">No Contract</label>
                            {{-- <input type="text" id="firstName" class="form-control" placeholder="Chee Kin"> --}}
                            <select name="no_contract" id="" class="form-control">
                            	<option value=""> - </option>
                            	<option value="">sample/nocontract/1</option>
                            	<option value="">sample/nocontract/2</option>
                            	<option value="">sample/nocontract/3</option>
                            	<option value="">sample/nocontract/4</option>
                            	<option value="">sample/nocontract/5</option>
                            </select>
                            <span class="help-block"> This is inline help </span>
                        </div>
                    </div>
            	</div>
                <h3 class="form-section">Item Info</h3>
                <div class="row">
                    <!--/span-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Code Item</label>
                            <select class="form-control">
                                <option value=""> - </option>
                                <option value="">code Item 1</option>
                                <option value="">code Item 2</option>
                                <option value="">code Item 3</option>
                                <option value="">code Item 4</option>
                                <option value="">code Item 5</option>
                                <option value="">code Item 6</option>
                                <option value="">code Item 7</option>
                            </select>
                            <span class="help-block"> This field has error. </span>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                    <div class="col-md-4">
                         <div class="form-group">
                            <label class="control-label">Contructions GR</label>
                            <input type="text" id="firstName" class="form-control" disabled="true" ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Contructions Finish</label>
                             <input type="text" id="firstName" class="form-control" disabled="true" ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Compositing</label>
                             <input type="text" id="firstName" class="form-control" disabled="true" ">
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <div class="row">
                	<div class="col-sm-2">
                		<div class="form-group">
                            <label class="control-label">Length</label>
                             <input type="text" id="firstName" class="form-control" disabled="true" ">
                        </div>
                	</div>
                	<div class="col-sm-2">
                		<div class="form-group">
                            <label class="control-label">Weave</label>
                             <input type="text" id="firstName" class="form-control" disabled="true" ">
                        </div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Finishing Type</label>
                            <select class="form-control">
                                <option value=""> - </option>
                                <option value="">Finishing Type 1</option>
                                <option value="">Finishing Type 2</option>
                                <option value="">Finishing Type 3</option>
                            </select>
                            <span class="help-block"> This field has error. </span>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <h3 class="form-section">Detail Price</h3>
                <div class="row">
                	<div class="col-md-2">
                        <div class="form-group">
                            <label>Currency</label>
                            <select class="form-control">
                                <option value=""> - </option>
                                <option value="">IDR</option>
                                <option value="">USD</option>
                                <option value="">EUR</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control"> </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Color</label>
                            <select class="form-control">
                                <option value=""> - </option>
                                <option value="">Finishing Type 1</option>
                                <option value="">Finishing Type 2</option>
                                <option value="">Finishing Type 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-1"><button class="btn green">Tambah</button></div>
                </div>
                <h3 class="form-section">Detail Contract</h3>
                <div class="row">
                	<div class="col-md-2">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control">
                    	</div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Unit</label> 
                            <select name="no_contract" id="" class="form-control">
                            	<option value=""> - </option>
                            	<option value="">YARD</option>
                            	<option value="">METER</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-2">
                        <div class="form-group">
                            <label>Delivery Date</label>
                            <input type="text" class="form-control">
                    	</div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Payment</label> 
                            <select name="no_contract" id="" class="form-control">
                            	<option value=""> - </option>
                            	<option value="">T/T 14 days</option>
                            	<option value="">T/T 30 days</option>
                            	<option value="">T/T 60 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Insurance</label> 
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status</label> 
                            <select name="no_contract" id="" class="form-control">
                            	<option value=""> - </option>
                            	<option value="">LOCAL</option>
                            	<option value="">EXPORT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-2">
                		<div class="form-group">
                            <label>Sales Code</label> 
                            <select name="no_contract" id="" class="form-control">
                            	<option value=""> - </option>
                            	<option value="">RH</option>
                            	<option value="">DLL</option>
                            </select>
                        </div>
                	</div>
                </div>
                <div class="row">
                	<div class="col-sm-12">
                		 <div class="form-group">
                            <label>Term</label> 
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                	</div>
                </div>
                <!--/row-->
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
@endsection
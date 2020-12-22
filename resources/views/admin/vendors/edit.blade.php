@extends(admin_layout_vw().'.index')

@section('css')

    <link href="{{url(assets('admin'))}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet"
          type="text/css"/>

@endsection
@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">


                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-edit font-dark"></i>
                            <span class="caption-subject bold uppercase"> Vendors</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        {!! Form::open(['method'=>'put','class'=>'form-horizontal','files'=>true,'id'=>'form']) !!}
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new"
                                                     data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"
                                                         style="width: 200px; height: 150px;">
                                                        <img
                                                            src="{{$vendor->image ?? url('assets/apps/img/unknown.png')}}"
                                                            alt=""/>

                                                    </div>
                                                    <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> choose </span>
                                                                <span class="fileinput-exists"> change </span>
                                                                <input type="file" name="image"
                                                                       id="image"> </span>
                                                        <a href="javascript:;"
                                                           class="btn red fileinput-exists"
                                                           data-dismiss="fileinput">
                                                            cancel </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <ul class="nav nav-tabs">--}}

{{--                                    @foreach(config('languages.name') as $key => $lang)--}}
{{--                                        <li @if($loop->first) class="active" @endif>--}}
{{--                                            <a href="#tab_{{$key}}" data-toggle="tab"> {{ucfirst($lang)}} </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
                                <div class="tab-content">

{{--                                    @foreach(config('languages.name') as $key => $lang)--}}


{{--                                        <div class="tab-pane fade @if($loop->first) active in @endif "--}}
{{--                                             id="tab_{{$key}}">--}}

{{--                                            <input type="hidden" name="language" value="{{$key}}">--}}

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Name:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="name" id="name"
                                                                   value="{{$vendor->name}}"
                                                                   class="form-control"
                                                                   placeholder="Add name ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Email:</label>
                                                        <div class="col-md-9">
                                                            <input type="email" name="email" id="email"
                                                                   value="{{$vendor->email}}"
                                                                   class="form-control"
                                                                   placeholder="Add email ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Phone:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="phone" id="phone"
                                                                   value="{{$vendor->phone}}"
                                                                   class="form-control"
                                                                   placeholder="Add phone ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Address:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="address" id="address"
                                                                   value="{{$vendor->address}}"
                                                                   class="form-control"
                                                                   placeholder="Add address ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Url:</label>
                                                        <div class="col-md-9">
                                                            <input type="url" name="url" id="url"
                                                                   value="{{$vendor->url}}"
                                                                   class="form-control"
                                                                   placeholder="Add website url ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Product:</label>
                                                        <div class="col-md-9">
                                                            <select name="product_id" class="form-control">
                                                                @foreach($products as $product)
                                                                    <option value="{{ $product->id }}" {{ isset($vendor) && $vendor->{'product_id'} == $product->id ? 'selected' :'' }} > {{ $product->name }} </option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END FORM-->
                                        </div>

{{--                                    @endforeach--}}
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit"
                                                    class="btn btn-circle green btn-md save">
                                                <i class="fa fa-check"></i>
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}


                            <div class="clearfix margin-bottom-20"></div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
            <script src="{{url(assets('admin'))}}/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"
                    type="text/javascript"></script>

            <script src="{{url(assets('admin'))}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
                    type="text/javascript"></script>
            <script src="{{url(assets('admin'))}}/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->

            <script src="{{url(assets('admin'))}}/js/vendors.js" type="text/javascript"></script>


@stop

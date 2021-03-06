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
                            <span class="caption-subject bold uppercase">Products</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        {!! Form::open(['method'=>'put','class'=>'form-horizontal','files'=>true,'id'=>'form']) !!}
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
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
                                                           value="{{$product->name}}"
                                                           class="form-control"
                                                           placeholder="Add name ...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Cost:</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="cost" id="cost"
                                                               value="{{$product->cost}}"
                                                               class="form-control"
                                                               placeholder="Add cost ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Description</label>
                                                    <div class="col-md-9">
                                                                <textarea type="text" name="description"
                                                                          id="description"
                                                                          class="ckeditor"
                                                                          rows="5"
                                                                          placeholder="Add description...">{{$product->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">URL:</label>
                                                        <div class="col-md-9">
                                                            <input type="url" name="url" id="url"
                                                                   value="{{$product->url}}"
                                                                   class="form-control"
                                                                   placeholder="Add URL for website ...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Service:</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" name="service_id">
                                                                @foreach($services as $service)
                                                                    <option value="{{ $service->id }}" {{ isset($product) && $product->{'service_id'} == $service->id ? 'selected' :'' }} > {{ $service->name }}</option>
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

                <script src="{{url(assets('admin'))}}/js/products.js" type="text/javascript"></script>


@stop
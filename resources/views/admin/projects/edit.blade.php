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
                            <span class="caption-subject bold uppercase"> Projects</span>
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
                                            <label class="control-label col-md-3">main Image</label>
                                            <div class="col-md-9">
                                                <div class="fileinput fileinput-new"
                                                     data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"
                                                         style="width: 200px; height: 150px;">
                                                        <img
                                                            src="{{$project->small_image ?? url('assets/apps/img/unknown.png')}}"
                                                            alt=""/>

                                                    </div>
                                                    <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> choose </span>
                                                                <span class="fileinput-exists"> change </span>
                                                                <input type="file" name="small_image"
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

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label col-md-3">List Images</label>
                                            <div class="col-md-9">
                                                @foreach($projectImages as $image)
{{--                                                    {{ dd($image) }}--}}
                                                    <div class="fileinput fileinput-new"
                                                         data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail"
                                                             data-trigger="fileinput"
                                                             style="width: 200px; height: 150px;">
                                                            <img
                                                                src="{{$image->image ?? url('assets/apps/img/unknown.png')}}"
                                                                alt=""/>

                                                        </div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> choose </span>
                                                                <span class="fileinput-exists"> change </span>
                                                                 <input name="images[]" type="file">
                                                                </span>
                                                            <a href="javascript:;"
                                                               class="btn red fileinput-exists"
                                                               data-dismiss="fileinput">
                                                                cancel </a>
                                                        </div>
                                                        <input name="image_id" value="{{ $image->id }}" type="text" hidden>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label class="control-label col-md-3">Category:</label>
                                            <div class="col-md-5">
                                                <select name="category_id" class="form-control">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ isset($project) && $project->{'category_id'} == $category->id ? 'selected' :'' }} > {{ $category->translation()->title }} </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs">

                                    @foreach(config('languages.name') as $key => $lang)
                                        <li @if($loop->first) class="active" @endif>
                                            <a href="#tab_{{$key}}" data-toggle="tab"> {{ucfirst($lang)}} </a>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="tab-content">

                                    @foreach(config('languages.name') as $key => $lang)

                                        <div class="tab-pane fade @if($loop->first) active in @endif "
                                             id="tab_{{$key}}">

                                            <input type="hidden" name="language" value="{{$key}}">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Title ({{$lang}}):</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="title[{{$key}}]" id="title"
                                                                   value="{{$project->translation($key)->title}}"
                                                                   class="form-control"
                                                                   placeholder="Add title ({{$lang}})...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Country ({{$lang}}):</label>
                                                        <div class="col-md-9">
                                                            <input type="text" name="country[{{$key}}]" id="country"
                                                                   value="{{$project->translation($key)->country}}"
                                                                   class="form-control"
                                                                   placeholder="Add country ({{$lang}})...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Description ({{$lang}}
                                                            ):</label>
                                                        <div class="col-md-9">
                                                                <textarea type="text" name="description[{{$key}}]"
                                                                          id="description"
                                                                          class="ckeditor"
                                                                          rows="5"
                                                                          placeholder="Add description ({{$lang}})...">{{$project->translation($key)->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END FORM-->
                                        </div>

                                    @endforeach
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

            <script src="{{url(assets('admin'))}}/js/hobbies.js" type="text/javascript"></script>


@stop

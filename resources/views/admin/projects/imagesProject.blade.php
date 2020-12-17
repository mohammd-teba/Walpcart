@extends(admin_layout_vw().'.index')

@section('css')

    <link href="{{url(assets('admin'))}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet"
          type="text/css"/>

    {{--    <link href="{{url(assets('admin'))}}/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{url(assets('admin'))}}/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />--}}
    {{--    <link href="{{url(assets('admin'))}}/global/css/plugins.min.css" rel="stylesheet" type="text/css" />--}}

    <link href="{{url(assets('admin'))}}/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" type="text/css" />
    <link href="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{url(assets('admin'))}}/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url(assets('admin'))}}/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{url(assets('admin'))}}/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">


                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-plus font-dark"></i>
                            <span class="caption-subject bold uppercase">Projects</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <form id="fileupload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                            {{--                            {!! Form::open(['method'=>'post','class'=>'form-horizontal','files'=>true,'id'=>'form']) !!}--}}
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="control-label col-md-3">Small Image</label>
                                                {{--                                            <label class="control-label col-md-3">Small Image</label>--}}
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new"
                                                         data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail"
                                                             data-trigger="fileinput"
                                                             style="width: 200px; height: 150px;">
                                                            <img src="{{url('assets/apps/img/unknown.png')}}"
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

                                    {{--                                    <div class="row">--}}
                                    {{--                                       <div class="col-md-6">--}}
                                    {{--                                            <div class="form-group ">--}}
                                    {{--                                                <label class="control-label col-md-3">Project Images</label>--}}
                                    {{--                                                  <div class="col-md-9">--}}
                                    {{--                                                       <div class="fileinput fileinput-new"--}}
                                    {{--                                                            data-provides="fileinput">--}}
                                    {{--                                                           <div class="fileinput-preview thumbnail"--}}
                                    {{--                                                                data-trigger="fileinput"--}}
                                    {{--                                                                style="width: 200px; height: 150px;">--}}
                                    {{--                                                               <img src="{{url('assets/apps/img/unknown.png')}}"--}}
                                    {{--                                                                    alt=""/>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                           <div>--}}
                                    {{--                                                               <span class="btn red btn-outline btn-file">--}}
                                    {{--                                                                   <span class="fileinput-new"> choose </span>--}}
                                    {{--                                                                   <span class="fileinput-exists"> change </span>--}}
                                    {{--                                                                   <input name="images[]" type="file"--}}
                                    {{--                                                                          multiple>--}}

                                    {{--                                                               </span>--}}
                                    {{--                                                               <a href="javascript:;"--}}
                                    {{--                                                                  class="btn red fileinput-exists"--}}
                                    {{--                                                                  data-dismiss="fileinput">--}}
                                    {{--                                                                   cancel </a>--}}
                                    {{--                                                           </div>--}}
                                    {{--                                                       </div>--}}
                                    {{--                                                  </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                       </div>--}}
                                    {{--                                    </div>--}}


                                    {{--      upload multi files     --}}
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-lg-7">
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                            <span class="btn green fileinput-button">
                                            <i class="fa fa-plus"></i>
                                            <span> Add files... </span>
                                            <input type="file" name="images[]" multiple=""> </span>
                                            <!-- The global file processing state -->
                                            <span class="fileupload-process"> </span>
                                        </div>
                                        <!-- The global progress information -->
                                        <div class="col-lg-5 fileupload-progress fade">
                                            <!-- The global progress bar -->
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                                            </div>
                                            <!-- The extended global progress information -->
                                            <div class="progress-extended"> &nbsp; </div>
                                        </div>
                                    </div>
                                    <!-- The table listing the files available for upload/download -->
                                    <table role="presentation" class="table table-striped clearfix">
                                        <tbody class="files"> </tbody>
                                    </table>
                                    {{--       End upload--}}


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="control-label col-md-3">Category:</label>
                                                <div class="col-md-5">
                                                    <select class="form-control" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" {{ isset($category) && $category->{'category_id'} == $category->id ? 'selected' :'' }} > {{ $category->translation()->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>

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
                                                                       class="form-control"
                                                                       placeholder="Add title ({{$lang}})...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Country ({{$lang}}):</label>
                                                            <div class="col-md-9">
                                                                <input type="text" name="country[{{$key}}]" id="country"
                                                                       class="form-control"
                                                                       placeholder="Add country ({{$lang}})...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Description ({{$lang}}
                                                                ):</label>
                                                            <div class="col-md-9">
                                                                <textarea type="text" name="description[{{$key}}]"
                                                                          id="description"
                                                                          class="ckeditor"
                                                                          rows="5"
                                                                          placeholder="Add description ({{$lang}})..."></textarea>
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
                                {{--                                {!! Form::close() !!}--}}

                                <div class="clearfix margin-bottom-20"></div>
                            </div>
                        </form>
                    </div>



                    {{--                    <div class="portlet-body">--}}

                    {{--                        {!! Form::open(['method'=>'post','class'=>'form-horizontal','files'=>true,'id'=>'form']) !!}--}}
                    {{--                        <div class="portlet-body form">--}}
                    {{--                            <!-- BEGIN FORM-->--}}
                    {{--                            <div class="form-body">--}}
                    {{--                                <div class="row">--}}
                    {{--                                    <div class="col-md-6">--}}
                    {{--                                        <div class="form-group ">--}}
                    {{--                                            <label class="control-label col-md-3">Small Image</label>--}}
                    {{--                                            --}}{{--                                            <label class="control-label col-md-3">Small Image</label>--}}
                    {{--                                            <div class="col-md-9">--}}
                    {{--                                                <div class="fileinput fileinput-new"--}}
                    {{--                                                     data-provides="fileinput">--}}
                    {{--                                                    <div class="fileinput-preview thumbnail"--}}
                    {{--                                                         data-trigger="fileinput"--}}
                    {{--                                                         style="width: 200px; height: 150px;">--}}
                    {{--                                                        <img src="{{url('assets/apps/img/unknown.png')}}"--}}
                    {{--                                                             alt=""/>--}}

                    {{--                                                    </div>--}}
                    {{--                                                    <div>--}}
                    {{--                                                            <span class="btn red btn-outline btn-file">--}}
                    {{--                                                                <span class="fileinput-new"> choose </span>--}}
                    {{--                                                                <span class="fileinput-exists"> change </span>--}}
                    {{--                                                                <input type="file" name="small_image"--}}
                    {{--                                                                       id="image"> </span>--}}
                    {{--                                                        <a href="javascript:;"--}}
                    {{--                                                           class="btn red fileinput-exists"--}}
                    {{--                                                           data-dismiss="fileinput">--}}
                    {{--                                                            cancel </a>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}

                    {{--                                            </div>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}

                    {{--                                                                                    <div class="row">--}}
                    {{--                                                                                        <div class="col-md-6">--}}
                    {{--                                                                                            <div class="form-group ">--}}
                    {{--                                                                                                <label class="control-label col-md-3">Project Images</label>--}}
                    {{--                                                                                                <div class="col-md-9">--}}
                    {{--                                                                                                    <div class="fileinput fileinput-new"--}}
                    {{--                                                                                                         data-provides="fileinput">--}}
                    {{--                                                                                                        <div class="fileinput-preview thumbnail"--}}
                    {{--                                                                                                             data-trigger="fileinput"--}}
                    {{--                                                                                                             style="width: 200px; height: 150px;">--}}
                    {{--                                                                                                            <img src="{{url('assets/apps/img/unknown.png')}}"--}}
                    {{--                                                                                                                 alt=""/>--}}

                    {{--                                                                                                        </div>--}}
                    {{--                                                                                                        <div>--}}
                    {{--                                                                                                                <span class="btn red btn-outline btn-file">--}}
                    {{--                                                                                                                    <span class="fileinput-new"> choose </span>--}}
                    {{--                                                                                                                    <span class="fileinput-exists"> change </span>--}}
                    {{--                                                                                                                      <input name="images[]" type="file"--}}
                    {{--                                                                                                                             multiple>--}}

                    {{--                                                                                                                </span>--}}
                    {{--                                                                                                            <a href="javascript:;"--}}
                    {{--                                                                                                               class="btn red fileinput-exists"--}}
                    {{--                                                                                                               data-dismiss="fileinput">--}}
                    {{--                                                                                                                cancel </a>--}}
                    {{--                                                                                                        </div>--}}
                    {{--                                                                                                    </div>--}}
                    {{--                                                                                                </div>--}}
                    {{--                                                                                            </div>--}}
                    {{--                                                                                        </div>--}}
                    {{--                                                                                    </div>--}}


                    {{--                                --}}{{--      upload multi files     --}}
                    {{--                                <div class="row fileupload-buttonbar">--}}
                    {{--                                    <div class="col-lg-7">--}}
                    {{--                                        <!-- The fileinput-button span is used to style the file input field as button -->--}}
                    {{--                                        <span class="btn green fileinput-button">--}}
                    {{--                                            <i class="fa fa-plus"></i>--}}
                    {{--                                            <span> Add files... </span>--}}
                    {{--                                            <input type="file" name="images[]" multiple=""> </span>--}}
                    {{--                                        <!-- The global file processing state -->--}}
                    {{--                                        <span class="fileupload-process"> </span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <!-- The global progress information -->--}}
                    {{--                                    <div class="col-lg-5 fileupload-progress fade">--}}
                    {{--                                        <!-- The global progress bar -->--}}
                    {{--                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">--}}
                    {{--                                            <div class="progress-bar progress-bar-success" style="width:0%;"> </div>--}}
                    {{--                                        </div>--}}
                    {{--                                        <!-- The extended global progress information -->--}}
                    {{--                                        <div class="progress-extended"> &nbsp; </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <!-- The table listing the files available for upload/download -->--}}
                    {{--                                <table role="presentation" class="table table-striped clearfix">--}}
                    {{--                                    <tbody class="files"> </tbody>--}}
                    {{--                                </table>--}}
                    {{--                                --}}{{--       End upload--}}


                    {{--                                <div class="row">--}}
                    {{--                                    <div class="col-md-6">--}}
                    {{--                                        <div class="form-group ">--}}
                    {{--                                            <label class="control-label col-md-3">Category:</label>--}}
                    {{--                                            <div class="col-md-5">--}}
                    {{--                                                <select class="form-control" name="category_id">--}}
                    {{--                                                    @foreach($categories as $category)--}}
                    {{--                                                        <option value="{{ $category->id }}" {{ isset($category) && $category->{'category_id'} == $category->id ? 'selected' :'' }} > {{ $category->translation()->title }}</option>--}}
                    {{--                                                    @endforeach--}}
                    {{--                                                </select>--}}
                    {{--                                            </div>--}}

                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <hr>--}}

                    {{--                                <ul class="nav nav-tabs">--}}

                    {{--                                    @foreach(config('languages.name') as $key => $lang)--}}
                    {{--                                        <li @if($loop->first) class="active" @endif>--}}
                    {{--                                            <a href="#tab_{{$key}}" data-toggle="tab"> {{ucfirst($lang)}} </a>--}}
                    {{--                                        </li>--}}
                    {{--                                    @endforeach--}}

                    {{--                                </ul>--}}
                    {{--                                <div class="tab-content">--}}

                    {{--                                    @foreach(config('languages.name') as $key => $lang)--}}

                    {{--                                        <div class="tab-pane fade @if($loop->first) active in @endif "--}}
                    {{--                                             id="tab_{{$key}}">--}}

                    {{--                                            <input type="hidden" name="language" value="{{$key}}">--}}

                    {{--                                            <div class="row">--}}
                    {{--                                                <div class="col-md-12">--}}
                    {{--                                                    <div class="form-group">--}}
                    {{--                                                        <label class="control-label col-md-3">Title ({{$lang}}):</label>--}}
                    {{--                                                        <div class="col-md-9">--}}
                    {{--                                                            <input type="text" name="title[{{$key}}]" id="title"--}}
                    {{--                                                                   class="form-control"--}}
                    {{--                                                                   placeholder="Add title ({{$lang}})...">--}}
                    {{--                                                        </div>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="row">--}}
                    {{--                                                <div class="col-md-12">--}}
                    {{--                                                    <div class="form-group">--}}
                    {{--                                                        <label class="control-label col-md-3">Country ({{$lang}}):</label>--}}
                    {{--                                                        <div class="col-md-9">--}}
                    {{--                                                            <input type="text" name="country[{{$key}}]" id="country"--}}
                    {{--                                                                   class="form-control"--}}
                    {{--                                                                   placeholder="Add country ({{$lang}})...">--}}
                    {{--                                                        </div>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="row">--}}

                    {{--                                                <div class="col-md-12">--}}
                    {{--                                                    <div class="form-group">--}}
                    {{--                                                        <label class="control-label col-md-3">Description ({{$lang}}--}}
                    {{--                                                            ):</label>--}}
                    {{--                                                        <div class="col-md-9">--}}
                    {{--                                                                <textarea type="text" name="description[{{$key}}]"--}}
                    {{--                                                                          id="description"--}}
                    {{--                                                                          class="ckeditor"--}}
                    {{--                                                                          rows="5"--}}
                    {{--                                                                          placeholder="Add description ({{$lang}})..."></textarea>--}}
                    {{--                                                        </div>--}}
                    {{--                                                    </div>--}}
                    {{--                                                </div>--}}

                    {{--                                            </div>--}}
                    {{--                                            <!-- END FORM-->--}}
                    {{--                                        </div>--}}

                    {{--                                    @endforeach--}}
                    {{--                                </div>--}}
                    {{--                                <div class="form-actions">--}}
                    {{--                                    <div class="row">--}}
                    {{--                                        <div class="col-md-12 text-center">--}}
                    {{--                                            <button type="submit"--}}
                    {{--                                                    class="btn btn-circle green btn-md save">--}}
                    {{--                                                <i class="fa fa-check"></i>--}}
                    {{--                                                Submit--}}
                    {{--                                            </button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            {!! Form::close() !!}--}}

                    {{--                            <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}--}}
                    {{--                        <tr class="template-upload fade">--}}
                    {{--                            <td>--}}
                    {{--                                <span class="preview"></span>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <p class="name">{%=file.name%}</p>--}}
                    {{--                                <strong class="error text-danger label label-danger"></strong>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <p class="size">Processing...</p>--}}
                    {{--                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">--}}
                    {{--                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td> {% if (!i && !o.options.autoUpload) { %}--}}
                    {{--                                <button class="btn blue start" disabled>--}}
                    {{--                                    <i class="fa fa-upload"></i>--}}
                    {{--                                    <span>Start</span>--}}
                    {{--                                </button> {% } %} {% if (!i) { %}--}}
                    {{--                                <button class="btn red cancel">--}}
                    {{--                                    <i class="fa fa-ban"></i>--}}
                    {{--                                    <span>Cancel</span>--}}
                    {{--                                </button> {% } %} </td>--}}
                    {{--                        </tr> {% } %} </script>--}}
                    {{--                            <!-- The template to display files available for download -->--}}
                    {{--                            <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}--}}
                    {{--                        <tr class="template-download fade">--}}
                    {{--                            <td>--}}
                    {{--                                <span class="preview"> {% if (file.thumbnailUrl) { %}--}}
                    {{--                                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>--}}
                    {{--                                        <img src="{%=file.thumbnailUrl%}">--}}
                    {{--                                    </a> {% } %} </span>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <p class="name"> {% if (file.url) { %}--}}
                    {{--                                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}--}}
                    {{--                                    <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}--}}
                    {{--                                <div>--}}
                    {{--                                    <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>--}}
                    {{--                            <td>--}}
                    {{--                                <span class="size">{%=o.formatFileSize(file.size)%}</span>--}}
                    {{--                            </td>--}}
                    {{--                            <td> {% if (file.deleteUrl) { %}--}}
                    {{--                                <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>--}}
                    {{--                                    <i class="fa fa-trash-o"></i>--}}
                    {{--                                    <span>Delete</span>--}}
                    {{--                                </button>--}}
                    {{--                                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}--}}
                    {{--                                <button class="btn yellow cancel btn-sm">--}}
                    {{--                                    <i class="fa fa-ban"></i>--}}
                    {{--                                    <span>Cancel</span>--}}
                    {{--                                </button> {% } %} </td>--}}
                    {{--                        </tr> {% } %} </script>--}}


                    {{--                            <div class="clearfix margin-bottom-20"></div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>

                <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
                <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                        <tr class="template-upload fade">
                            <td>
                                <span class="preview"></span>
                            </td>
                            <td>
                                <p class="name">{%=file.name%}</p>
                                <strong class="error text-danger label label-danger"></strong>
                            </td>
                            <td>
                                <p class="size">Processing...</p>
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                            </td>
                            <td> {% if (!i && !o.options.autoUpload) { %}
                                <button class="btn blue start" disabled>
                                    <i class="fa fa-upload"></i>
                                    <span>Start</span>
                                </button> {% } %} {% if (!i) { %}
                                <button class="btn red cancel">
                                    <i class="fa fa-ban"></i>
                                    <span>Cancel</span>
                                </button> {% } %} </td>
                        </tr> {% } %} </script>
                <!-- The template to display files available for download -->
                <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
                        <tr class="template-download fade">
                            <td>
                                <span class="preview"> {% if (file.thumbnailUrl) { %}
                                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                                        <img src="{%=file.thumbnailUrl%}">
                                    </a> {% } %} </span>
                            </td>
                            <td>
                                <p class="name"> {% if (file.url) { %}
                                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                                    <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}
                                <div>
                                    <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>
                            <td>
                                <span class="size">{%=o.formatFileSize(file.size)%}</span>
                            </td>
                            <td> {% if (file.deleteUrl) { %}
                                <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                                    <i class="fa fa-trash-o"></i>
                                    <span>Delete</span>
                                </button>
                                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                                <button class="btn yellow cancel btn-sm">
                                    <i class="fa fa-ban"></i>
                                    <span>Cancel</span>
                                </button> {% } %} </td>
                        </tr> {% } %} </script>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@endsection

@section('js')

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"
            type="text/javascript"></script>

    <script src="{{url(assets('admin'))}}/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
            type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{url(assets('admin'))}}/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/vendor/load-image.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/pages/scripts/form-fileupload.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->

    <script src="{{url(assets('admin'))}}/js/projects.js" type="text/javascript"></script>

@stop

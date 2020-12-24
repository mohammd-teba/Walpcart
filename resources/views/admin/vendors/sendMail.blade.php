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
                            <span class="caption-subject bold uppercase"> Send mail to {{$vendor->name}}</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        <form action="{{  url('/admin/vendors/vendor-replay' , ['id' => $vendor->id])  }}" method="post">
                            {{ csrf_field() }}
                            <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Name:</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name"
                                                           value="{{$vendor->name}}"
                                                           class="form-control"
                                                           placeholder="Add name ..." disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Email:</label>
                                                <div class="col-md-9">
                                                    <input type="email"  id="email"
                                                           value="{{$vendor->email}}"
                                                           class="form-control"
                                                           placeholder="Add email ..." disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <input  name="name" value="{{$vendor->name}}" hidden>
                                        <input  name="email" value="{{$vendor->email}}" hidden>
                                        <div class="col-md-12" style="margin-top: 10px">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Message :</label>
                                                <div class="col-md-9">
                                                                <textarea type="text" name="message"
                                                                          id="message"
                                                                          class="ckeditor"
                                                                          rows="5"
                                                                          placeholder="Add message ..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END FORM-->
                                </div>
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
                        </form>


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



{{--MAIL_MAILER=smtp--}}
{{--MAIL_HOST=smtp.mailtrap.io--}}
{{--MAIL_PORT=2525--}}
{{--MAIL_USERNAME=null--}}
{{--MAIL_PASSWORD=null--}}
{{--MAIL_ENCRYPTION=null--}}
{{--MAIL_FROM_ADDRESS=null--}}
{{--MAIL_FROM_NAME="${APP_NAME}"--}}
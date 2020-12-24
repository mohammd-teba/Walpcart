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
                            <i class="fa fa-plus font-dark"></i>
                            <span class="caption-subject bold uppercase">Send mail</span>
                        </div>
                    </div>
                    <div class="portlet-body">

                        {!! Form::open(['method'=>'post','class'=>'form-horizontal','files'=>true,'id'=>'form']) !!}
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <div class="form-body">
                                <div class="tab-content">
                                    <div class="row">

                                        <div class="col-md-12">
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

{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label class="control-label col-md-3">To (vendor):</label>--}}
{{--                                                <div class="col-md-9">--}}
{{--                                                    <select class="form-control" name="vendor_id">--}}
{{--                                                        @foreach($vendors as $vendor)--}}
{{--                                                            <option value="{{ $vendor->id }}" {{ isset($vendor) && $vendor->{'vendor_id'} == $vendor->id ? 'selected' :'' }} > {{ $vendor->name - $vendor->email }}</option>--}}
{{--                                                           <input name="vendorName" value="{{ $vendor->email }}" hidden>--}}
{{--                                                        @endforeach--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">To (vendor):</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="vendor_id">
                                                        @foreach($vendors as $vendor)
                                                            <option value="{{ $vendor->id }}" {{ isset($vendor) && $vendor->{'vendor_id'} == $vendor->id ? 'selected' :'' }} > {{ $vendor->name }}</option>
                                                            <input name="vendorEmail" value="{{ $vendor->email }}" hidden>
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
    <script src="{{url(assets('admin'))}}/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->

    <script src="{{url(assets('admin'))}}/js/mails.js" type="text/javascript"></script>


@stop


{{--MAIL_MAILER=smtp--}}
{{--MAIL_HOST=smtp.mailtrap.io--}}
{{--MAIL_PORT=2525--}}
{{--MAIL_USERNAME=null--}}
{{--MAIL_PASSWORD=null--}}
{{--MAIL_ENCRYPTION=null--}}
{{--MAIL_FROM_ADDRESS=null--}}
{{--MAIL_FROM_NAME="${APP_NAME}"--}}
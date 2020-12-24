@extends(admin_layout_vw().'.index')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <!-- END THEME GLOBAL STYLES -->
@endsection
@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-users font-dark"></i>
                            <span class="caption-subject bold uppercase"> Mails Management</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{url(admin_mail_url().'/mail-create')}}" class="btn sbold green add-admin-mdl">
                                            <i class="fa fa-plus"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="mail_tbl">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th> message</th>
{{--                                <th> Email</th>--}}
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>


@endsection

@section('js')

    <script src="{{url(assets('admin'))}}/js/mails.js" type="text/javascript"></script>

@stop

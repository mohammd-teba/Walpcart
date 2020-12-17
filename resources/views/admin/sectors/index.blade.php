@extends(admin_layout_vw().'.index')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{url(assets('admin'))}}/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->

@endsection
@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">


                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-list font-dark"></i>
                            <span class="caption-subject bold uppercase"> Sectors</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            @can('Add sectors')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{url(admin_sectors_url().'/sector-create')}}" class="btn sbold green"><i
                                                class="fa fa-plus"></i> Add New

                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endcan
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column"
                               id="sectors_tbl">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th> Title</th>
                                <th> Actions</th>
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
    <script src="{{url(assets('admin'))}}/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
            type="text/javascript"></script>
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/pages/scripts/table-datatables-responsive.min.js"
            type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->

    <script src="{{url(assets('admin'))}}/js/sectors.js" type="text/javascript"></script>


@stop

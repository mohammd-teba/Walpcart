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

                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fa fa-search font-dark"></i>
                            <span
                                class="caption-subject bold uppercase"> Filter </span>
                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="table-container">
                            {!! Form::open(['method'=>'POST','url'=>url('/admin/export')]) !!}

                            <table
                                class="table table-striped table-bordered table-hover table-checkable"
                                id="datatable_products">
                                <thead>
                                <tr role="row" class="heading">
                                    <th width="1%">
                                    </th>
                                    <th width="10%"> Name</th>
                                    <th width="10%"> Email</th>
                                    <th width="10%"> Action</th>
                                </tr>
                                <tr role="row" class="filter">
                                    <td></td>
                                    <td>
                                        <input type="text"
                                               class="form-control form-filter input-md"
                                               name="name"
                                               placeholder="Name"
                                               id="name">

                                    </td>
                                    <td>
                                        <input type="email"
                                               class="form-control form-filter input-md"
                                               name="email"
                                               placeholder="Email"
                                               id="email">
                                    </td>
                                    <td>
                                        <div class="margin-bottom-5">
                                            <a href="javascript:;"
                                               class="btn btn-sm btn-success btn-circle btn-icon-only filter-submit margin-bottom"
                                               title="Search">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            {{--                                                                                <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">--}}
                                            <a href="javascript:;"
                                               class="btn btn-sm btn-danger btn-circle btn-icon-only filter-cancel"
                                               title="Empty">
                                                <i class="fa fa-rotate-left"></i>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>


                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">Admins Table</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                            <tr>
                                <th> Username </th>
                                <th> Email </th>
                                <th> Phone </th>

                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> admin@admin.com </td>
                                <td class="center"> +970 99999999999</td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            </tbody>
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

    <script src="{{url(assets('admin'))}}/js/allAdmins.js" type="text/javascript"></script>


@stop

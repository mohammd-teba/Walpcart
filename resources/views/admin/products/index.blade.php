@extends(admin_layout_vw().'.index')

@section('css')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{url(assets('user'))}}/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{url(assets('user'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->

@endsection
@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">Products Table</span>
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
                                <th> Full Name </th>
                                <th> Points </th>
                                <th> Notes </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td> alex </td>
                                <td> Alex Nilson </td>
                                <td> 1234 </td>
                                <td class="center"> power user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> lisa </td>
                                <td> Lisa Wong </td>
                                <td> 434 </td>
                                <td class="center"> new user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> nick12 </td>
                                <td> Nick Roberts </td>
                                <td> 232 </td>
                                <td class="center"> power user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> goldweb </td>
                                <td> Sergio Jackson </td>
                                <td> 132 </td>
                                <td class="center"> elite user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> Alex Nilson </td>
                                <td> 1234 </td>
                                <td class="center"> power user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> webriver </td>
                                <td> Antonio Sanches </td>
                                <td> 462 </td>
                                <td class="center"> new user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> gist124 </td>
                                <td> Nick Roberts </td>
                                <td> 62 </td>
                                <td class="center"> new user </td>
                                <td>
                                    <a class="edit" href="javascript:;"> Edit </a>
                                </td>
                                <td>
                                    <a class="delete" href="javascript:;"> Delete </a>
                                </td>
                            </tr>
                            <tr>
                                <td> alex </td>
                                <td> Alex Nilson </td>
                                <td> 1234 </td>
                                <td class="center"> power user </td>
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
    <script src="{{url(assets('user'))}}/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="{{url(assets('user'))}}/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="{{url(assets('user'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
            type="text/javascript"></script>
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('user'))}}/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('user'))}}/pages/scripts/table-datatables-responsive.min.js"
            type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->

    <script src="{{url(assets('user'))}}/js/allAdmins.js" type="text/javascript"></script>


@stop

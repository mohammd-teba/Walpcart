@extends(admin_layout_vw().'.index')

@section('css')
    <link href="{{url(assets('admin'))}}/global/plugins/datatables/datatables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
    <link href="{{url(assets('admin'))}}/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url(assets('admin'))}}/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{url(assets('admin'))}}/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />



@endsection
@section('content')

    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <!-- END THEME PANEL -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">
                                <span data-counter="counterup" data-value="7800">0</span>
                                <small class="font-green-sharp">$</small>
                            </h3>
                            <small>TOTAL PROFIT</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> progress </div>
                            <div class="status-number"> 76% </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">
                                <span data-counter="counterup" data-value="1349">0</span>
                            </h3>
                            <small>NEW FEEDBACKS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-like"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> change </div>
                            <div class="status-number"> 85% </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">
                                <span data-counter="counterup" data-value="567"></span>
                            </h3>
                            <small>NEW ORDERS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-basket"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> grow </div>
                            <div class="status-number"> 45% </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2 ">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-purple-soft">
                                <span data-counter="counterup" data-value="276"></span>
                            </h3>
                            <small>NEW USERS</small>
                        </div>
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                    <div class="progress-info">
                        <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                        </div>
                        <div class="status">
                            <div class="status-title"> change </div>
                            <div class="status-number"> 57% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject bold uppercase font-dark">Revenue</span>
                            <span class="caption-helper">distance stats...</span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                <i class="icon-trash"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"> </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="dashboard_amchart_1" class="CSSAnimationChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption ">
                            <span class="caption-subject font-dark bold uppercase">Finance</span>
                            <span class="caption-helper">distance stats...</span>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                <i class="fa fa-pencil"></i> Export </a>
                            <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                <i class="fa fa-print"></i> Print </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-bubbles font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">Comments</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                            </li>
                            <li>
                                <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_comments_1">
                                <!-- BEGIN: Comments -->
                                <div class="mt-comments">
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Michael Baker</span>
                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Larisa Maskalyova</span>
                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Natasha Kim</span>
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Sebastian Davidson</span>
                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Comments -->
                            </div>
                            <div class="tab-pane" id="portlet_comments_2">
                                <!-- BEGIN: Comments -->
                                <div class="mt-comments">
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Michael Baker</span>
                                                <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Larisa Maskalyova</span>
                                                <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                            </div>
                                            <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Natasha Kim</span>
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-comment">
                                        <div class="mt-comment-img">
                                            <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Sebastian Davidson</span>
                                                <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                            </div>
                                            <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                            <div class="mt-comment-details">
                                                <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                <ul class="mt-comment-actions">
                                                    <li>
                                                        <a href="#">Quick Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">View</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Comments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 col-sm-12">
                <div class="portlet light ">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class=" icon-social-twitter font-dark hide"></i>
                            <span class="caption-subject font-dark bold uppercase">Quick Actions</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_actions_pending" data-toggle="tab"> Pending </a>
                            </li>
                            <li>
                                <a href="#tab_actions_completed" data-toggle="tab"> Completed </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_actions_pending">
                                <!-- BEGIN: Actions -->
                                <div class="mt-actions">
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar10.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-magnet"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Natasha Kim</span>
                                                        <p class="mt-action-desc">Dummy text of the printing</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar3.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class=" icon-bubbles"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Gavin Bond</span>
                                                        <p class="mt-action-desc">pending for approval</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-red"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-call-in"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Diana Berri</span>
                                                        <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar7.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class=" icon-bell"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">John Clark</span>
                                                        <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-red"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-magnet"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Donna Clarkson </span>
                                                        <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar9.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-magnet"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Tom Larson</span>
                                                        <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Actions -->
                            </div>
                            <div class="tab-pane" id="tab_actions_completed">
                                <!-- BEGIN:Completed-->
                                <div class="mt-actions">
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-action-redo"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Frank Cameron</span>
                                                        <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-red"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-cup"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Ella Davidson </span>
                                                        <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar5.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class=" icon-graduation"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Jason Dickens </span>
                                                        <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-red"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                        <div class="mt-action-body">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-icon ">
                                                        <i class="icon-badge"></i>
                                                    </div>
                                                    <div class="mt-action-details ">
                                                        <span class="mt-action-author">Jan Kim</span>
                                                        <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime ">
                                                    <span class="mt-action-date">3 jun</span>
                                                    <span class="mt-action-dot bg-green"></span>
                                                    <span class="mt=action-time">9:30-13:00</span>
                                                </div>
                                                <div class="mt-action-buttons ">
                                                    <div class="btn-group btn-group-circle">
                                                        <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                        <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Completed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <style>
        /* rotate the x axis labels. */
        .flot-x-axis div {
            /*white-space: nowrap;*/
            transform: rotate(-45deg);
            /*text-indent: -100%;*/
            /*transform-origin: top center;*/
            /*text-align: right !important;*/
            /*top: 200px !important;*/
        }
    </style>
    <script src="{{url(assets('admin'))}}/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/counterup/jquery.waypoints.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/counterup/jquery.counterup.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/themes/light.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/themes/patterns.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amcharts/themes/chalk.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/ammap/maps/js/worldLow.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/amcharts/amstockcharts/amstock.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/fullcalendar/fullcalendar.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/horizontal-timeline/horizontal-timeline.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/flot/jquery.flot.resize.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/flot/jquery.flot.categories.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js"
            type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js"
            type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <script src="{{url(assets('admin'))}}/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"
            type="text/javascript"></script>
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/pages/scripts/table-datatables-responsive.min.js"
            type="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{url(assets('admin'))}}/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/pages/scripts/dashboard.js" type="text/javascript"></script>
    <script src="{{url(assets('admin'))}}/js/users.js" type="text/javascript"></script>

@stop

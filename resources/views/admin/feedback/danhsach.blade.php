@extends('admin.layout.index')

@section('content')
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        @include('admin.layout.menu_admin');
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Feedback
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- Begin: life time stats -->
                    <div class="portlet ">
                        <div class="portlet-title">
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn btn-circle btn-default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                        <i class="fa fa-share"></i>
                                        <span class="hidden-xs"> Action </span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;"> Export to Excel </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Export to CSV </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;"> Export to XML </a>
                                        </li>
                                        <li class="divider"></li>
                                        <a href="javascript:;"> Print Invoices </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <div class="table-actions-wrapper">
                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                        <option value="">Select...</option>
                                        <option value="publish">Publish</option>
                                        <option value="unpublished">Un-publish</option>
                                        <option value="delete">Delete</option>
                                    </select>
                                    <button class="btn btn-sm btn-success table-group-action-submit">
                                        <i class="fa fa-check"></i> Submit</button>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_products">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="1%">
                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th width="10%"> ID </th>
                                            <th width="15%"> Id_users </th>
                                            <th width="15%"> Id_product </th>
                                            <th width="15%"> Id_news </th>
                                            <th width="15%"> Content </th>
                                            <th width="15%"> Created_at </th>
                                            <th width="15%"> Status </th>
                                            <th width="15%"> Actions </th>
                                        </tr>
                                        @foreach($feedback as $tl)
                                        <tr role="row" class="filter">
                                            <td></td>
                                            <td>
                                                {{$tl->id}}
                                            </td>
                                            <td>
                                                {{$tl->id_users}}
                                            </td>
                                            <td>
                                                {{$tl->id_product}}
                                            </td>
                                            <td>
                                                {{$tl->id_news}}
                                            </td>
                                            <td>
                                                {{$tl->content}}
                                            </td>
                                            <td>
                                                {{$tl->created_at}}
                                            </td>
                                            <td>
                                                <select class="table-group-action-input form-control input-medium" name="theloai">
                                               @foreach($status as $st)
                                                <option
                                                @if($tl->id_status==$st->id){{"selected"}}
                                                @endif
                                                value="{{$st->id}}">{{$st->name}}</option>
                                                @endforeach
                                            </select>
                                            </td>
                                            <td>
                                                <div class="center">
                                                    <i class="fa fa-pencil fa-fw"></i>
                                                    <a href="admin/feedback/sua/{{$tl->id}}">View</a>
                                                </div>
                                                <div class="center">
                                                    <i class="fa fa-trash-o fa-fw"></i>
                                                    <a href="admin/feedback/xoa/{{$tl->id}}">Dele</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tbody> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
@endsection
<!doctype html>
<html lang="en" dir="ltr">

@php 
    $stylesheets = [
        "../assets/plugins/bootstrap/css/bootstrap.min.css"
    ];

    $scripts = [
        "../assets/bundles/lib.vendor.bundle.js",
        "../assets/js/core.js"
    ];
@endphp
<!--head-->
<x-head :title="dashboard" :stylesheets=$stylesheets>
</x-head>

<body class="font-muli theme-cyan gradient">

<x-preloader/>

<div id="main_content">
    <x-vertical-icons-menu/>
    <x-theme-settings-sidebar/>
    <x-template-selector/>
    <x-main-leftbar/>
    <!-- Start project content area -->
    <div class="page">
        
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Leave</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leave</li>
                        </ol>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-info btn-sm">Export Excel</a>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">                                
                                <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Student ID</th>
                                            <th>Date</th>
                                            <th>Leave Reason</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="width45">
                                                <span class="avatar avatar-orange" data-toggle="tooltip" title="" data-original-title="Avatar Name">DB</span>
                                            </td>
                                            <td><div class="font-15">Marshall Nichols</div></td>
                                            <td><span>LA-8150</span></td>
                                            <td>24 July, 2019 to 26 July, 2019</td>
                                            <td>Going to Family Function</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>                                
                                        <tr>
                                            <td class="width45">
                                                <span class="avatar avatar-pink" data-toggle="tooltip" title="" data-original-title="Avatar Name">GC</span>
                                            </td>
                                            <td><div class="font-15">Gary Camara</div></td>
                                            <td><span>LA-8795</span></td>
                                            <td>20 July, 2019 to 26 July, 2019</td>
                                            <td>Going to Development</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <img class="avatar" src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                            </td>
                                            <td><div class="font-15">Maryam Amiri</div></td>
                                            <td><span>LA-0258</span></td>
                                            <td>21 July, 2019 to 26 July, 2019</td>
                                            <td>Attend Birthday party</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                            </td>
                                            <td><div class="font-15">Frank Camly</div></td>
                                            <td><span>LA-1515</span></td>
                                            <td>11 Aug, 2019 to 21 Aug, 2019</td>
                                            <td>Going to Holiday</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <span class="avatar avatar-blue" data-toggle="tooltip" title="" data-original-title="Avatar Name">DB</span>
                                            </td>
                                            <td><div class="font-15">Marshall Nichols</div></td>
                                            <td><span>LA-8150</span></td>
                                            <td>24 July, 2019 to 26 July, 2019</td>
                                            <td>Going to Family Function</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                            </td>
                                            <td><div class="font-15">Frank Camly</div></td>
                                            <td><span>LA-1515</span></td>
                                            <td>11 Aug, 2019 to 21 Aug, 2019</td>
                                            <td>Going to Holiday</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <span class="avatar avatar-green" data-toggle="tooltip" title="" data-original-title="Avatar Name">GC</span>
                                            </td>
                                            <td><div class="font-15">Gary Camara</div></td>
                                            <td><span>LA-8795</span></td>
                                            <td>20 July, 2019 to 26 July, 2019</td>
                                            <td>Going to Development</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45">
                                                <img class="avatar" src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name">
                                            </td>
                                            <td><div class="font-15">Maryam Amiri</div></td>
                                            <td><span>LA-0258</span></td>
                                            <td>21 July, 2019 to 26 July, 2019</td>
                                            <td>Attend Birthday party</td>
                                            <td>
                                                <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                                <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start main footer -->
        <x-footer/>
    </div>    
</div>

<!--scripts--> 
<x-scriptsjs :scripts=$scripts ->
</body>
</html>

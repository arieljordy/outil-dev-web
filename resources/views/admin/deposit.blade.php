<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/deposit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 19:38:48 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Kofejob - Bootstrap Admin HTML Template</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
<link rel="stylesheet" href="/assets/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous"> --}}
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="/" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="/" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>

<a href="javascript:void(0);" id="toggle_btn">
<i class="feather-chevrons-left"></i>
</a>


<a class="mobile_btn" id="mobile_btn">
<i class="feather-chevrons-left"></i>
</a>

</div>


<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Start typing your Search...">
<button class="btn" type="submit"><i class="feather-search"></i></button>
</form>
</div>


<ul class="nav user-menu">

<li class="nav-item dropdown">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="feather-bell"></i> <span class="badge badge-pill">5</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="javascript:void(0);">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="Img" src="assets/img/profiles/avatar-02.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="javascript:void(0);">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="Img" src="assets/img/profiles/avatar-03.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="javascript:void(0);">
<div class="media d-flex">
<div class="avatar avatar-sm flex-shrink-0">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
</div>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="javascript:void(0);">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="Img" src="assets/img/profiles/avatar-04.jpg">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="javascript:void(0);">
<div class="media d-flex">
<div class="avatar avatar-sm flex-shrink-0">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="javascript:void(0);">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow main-drop">
<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img">
<img src="assets/img/profiles/avatar-07.jpg" alt="Img">
<span class="status online"></span>
</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i> Profile</a>
<a class="dropdown-item" href="settings.html"><i data-feather="settings" class="me-1"></i> Settings</a>
<a class="dropdown-item" href="login.html"><i data-feather="log-out" class="me-1"></i> Logout</a>
</div>
</li>

</ul>

</div>


{{-- @include("layouts.sidebar") --}}
<div class="card card-primary card-outline mb-4"> <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Formulaire</div>
    </div> <!--end::Header--> <!--begin::Form-->
    <form method="post" action="{{ isset($document) ? route('document.update', $document->id) : route('document.save') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($document))
            @method('PUT')
        @endif
    <!--begin::Body-->
    <div class="card-body">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" value="{{isset($document)?$document->titre:""}}" class="form-control" name="titre" id="titre" aria-describedby="titreHelp">
            <div id="titreHelp" class="form-text">
                Donnez un titre significatif.
            </div>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" value="{{isset($document)?$document->date:""}}" class="form-control" name="date" id="date">
        </div>
        <div class="mb-3">
            <label for="publie_par" class="form-label">Publié par</label>
            <input type="text" value="{{isset($document)?$document->publier_par:""}}" class="form-control"  name="publier_par" id="publie_par">
        </div>
        <div class="mb-3">
            <label for="extension" class="form-label">Extension</label>
<select class="form-control" name="extension" id="extension">
<option value="pdf" {{ isset($document) && $document->extension == "pdf" ? "selected" : "" }}>PDF</option>
<option value="doc" {{ isset($document)?( ($document->extension=="docs")? "selected":"") : "" }}>DOC</option>
<option value="docx" {{ isset($document)?( ($document->extension=="docx")? "selected":"") : "" }}>DOCX</option>
<option value="xlsx" {{ isset($document) && $document->extension == "xlsx" ? "selected" : "" }}>XLSX</option>
<option value="png" {{ isset($document) && $document->extension == "png" ? "selected" : "" }}>PNG</option>
<option value="jpg" {{ isset($document) && $document->extension == "jpg" ? "selected" : "" }}>JPG</option>
</select>
        </div>
        <div class="mb-3">
            <label for="type_document" class="form-label">Type de document</label>
            <input type="text" value="{{isset($document)?$document->type_document:""}}" class="form-control" name="type_document" id="type_document">
        </div>
        <div class="mb-3">
            <label for="etat" class="form-label">État</label>
            <div class="mb-3 form-check">
                <input type="radio" class="form-check-input" id="publie" name="etat" value="1" {{ isset($document) && $document->etat == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="publie">Publié</label>
            </div>
            <div class="mb-3 form-check">
                <input type="radio" class="form-check-input" id="non-publie" name="etat" value="0" {{ isset($document) && $document->etat == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="non-publie">Non publié</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" value="{{isset($document)?$document->description:""}}" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="nombre_vue" class="form-label">Nombre de vues</label>
            <input type="number" value="{{isset($document)?$document->nombre_vue:""}}" class="form-control" name="nombre_vue" id="nombre_vue">
            @if(isset($document) && $document->file_path)
            <small class="form-text text-muted">
                Fichier actuel : <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">{{ $document->file_name }}</a>
            </small>
            @endif
        </div>
        <div class="input-group mb-3">
            <input type="file" name="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02" accept=".pdf,.doc,.docx,.xlsx,.png,.jpg">Fichier</label>
        </div>
    </div> <!--end::Body--> <!--begin::Footer-->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">{{ isset($document) ? "Mettre à jour" : "Enregistrer" }}</button>
    </div>
    </form> <!--end::Form-->

@include('document.table')
</div>
{{-- @include("document.table") --}}
</div>


<div class="modal fade transaction-modal" id="transaction-category">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header flex-wrap">
<div class="transaction-group">
<div class="head-transaction">
<h4>Transaction</h4>
<p> #TNX24586414</p>
</div>
<div class="complete-btn">
<a href="javascript:void(0);" class="btn btn-primary">Completed</a>
</div>
</div>
</div>
<div class="modal-body">
<div class="table-avatar user-profile invest-acount">
<a href="profile.html"><img class="exchange case-icon" src="assets/img/icon/icon-15.svg" alt="Img">
<div>
<h5>200.00 USDT</h5>
<p class="receive-date">Apr 25, 2022 11:01 AM</p>
</div>
</a>
</div>
<div class="acount-transaction">
<div class="row">
<div class="col-md-6">
<div class="basic-info ">
<h4>IN ACCOUNT</h4>
<div class="additional-info">
<p> Amount </p>
<h5>6,335.006 USD</h5>
</div>
<div class="additional-info">
<p>Fees </p>
<h5>0.00 USD</h5>
</div>
<div class="additional-info">
<p> Freelancer Investment </p>
<h5>6,335.006 USD</h5>
</div>
<div class="additional-info">
<p> Freelancer Account </p>
<h5>UID00003</h5>
</div>
<div class="additional-info">
<p> Freelancer Email </p>
<h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4a3bdb8b8bdb5b994b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a></h5>
</div>
</div>
</div>
<div class="col-md-6">
<div class="basic-info">
<h4>IN TRANSACTION</h4>
<div class="additional-info">
<p> Amount </p>
<h5>6,335.006 USD</h5>
</div>
<div class="additional-info">
<p>Fees </p>
<h5>0.00 USD</h5>
</div>
<div class="additional-info">
<p> Total Investment </p>
<h5>6,335.006 USD</h5>
</div>
<div class="additional-info">
<p> Freelancer Account </p>
<h5>UID00003</h5>
</div>
<div class="additional-info">
<p> Freelancer Email </p>
<h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f78666363666e624f6a776e627f636a216c6062">[email&#160;protected]</a></h5>
</div>
</div>
</div>
<div class="col-md-12">
<div class="basic-info additional-detail top-border">
<h4>Order Details</h4>
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="additional-info">
<p>Order Date</p>
<h5>Mar 13, 2022</h5>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="additional-info">
<p> Placed By</p>
<h5>UID00001 </h5>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="basic-info additional-detail">
<h4 class="mt-0">Additional Details</h4>
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="additional-info">
<p>Transaction Type</p>
<h5>Deposit</h5>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="additional-info">
<p> Payment Gateway</p>
<h5>Paypal </h5>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="additional-info">
<p>Payment To</p>
<h5> usdttest87i2UK3JUWzR7iy6z5eRrxbAeT</h5>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="basic-info additional-detail">
<div class="row">
<div class="col-lg-12">
<div class="additional-info">
<p>Updated Balance</p>
<h5 class="active-balance">13,144.626 USD</h5>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal" id="add-category">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header flex-wrap">
<div class="text-center w-100 mb-3">
<img src="assets/img/logo-small.png" alt="Img">
</div>
<h4 class="modal-title">Add New User</h4>
<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label>Full Name</label>
<input type="text" class="form-control">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control">
</div>
<div class="form-group">
<label>User Type</label>
<select class="form-control form-select">
<option>Select</option>
<option>Frontend Developer</option>
<option>Graphic Designer</option>
</select>
</div>
<div class="mt-4">
<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal" id="edit-category">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header flex-wrap">
<div class="text-center w-100 mb-3">
<img src="assets/img/logo-small.png" alt="Img">
</div>
<h4 class="modal-title">Edit User</h4>
<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label>Full Name</label>
<input type="text" class="form-control" value=" George Wells">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" value="georgewells@example.com">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" value="*******">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control" value="********">
</div>
<div class="form-group">
<label>User Type</label>
<select class="form-control form-select">
<option>Select</option>
<option selected>Frontend Developer</option>
<option>Graphic Designer</option>
</select>
</div>
<div class="mt-4">
<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_category" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Delete</h3>
<p>Are you sure want to delete?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
</div>
<div class="col-6">
<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/js/bootstrap.bundle.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/js/feather.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/plugins/select2/js/select2.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/plugins/moment/moment.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>
<script src="assets/plugins/datatables/datatables.min.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>

<script src="assets/js/script.js" type="9fb1077b9ebcb357b1bb86a7-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9fb1077b9ebcb357b1bb86a7-|49" defer></script></body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/admin/deposit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 19:38:50 GMT -->
</html>
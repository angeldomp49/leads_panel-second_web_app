<!doctype html>
<html lang="en" dir="ltr">
<x-head title="edit" :stylesheets=$stylesheets/>

<body class="font-muli theme-cyan gradient">

<x-preloader/>

<div id="main_content">
    <!-- Start project content area -->
    <div class="page">
        <x-header/>
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Información del activo</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('lead.index')}}">Lista de activos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Información del activo</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Información</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix">
                    
                    <div class="col-md-12 my-3">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form action="{{route('lead.update',['lead' => $lead->id])}}" method="POST" class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Perfil</h3>
                                    </div>
                                    <div class="card-body form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Name <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" name="name" class="form-control" value="{{$lead->information->name}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">ID: {{$lead->id}} <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Social Media <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" name="social-media" class="form-control" value="{{$lead->socialMedia->name}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Contacts <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                            </div>
                                        </div>

                                        @foreach($lead->contacts as $contact)
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">{{$contact->contactType->name}} <span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="{{$contact->value}}" >
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Topics <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                            </div>
                                        </div>

                                        @foreach($lead->favTopics as $topic)
                                            <div class="form-group row">
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="{{$topic->topic->name}}" >
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Products <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                            </div>
                                        </div>

                                        @foreach($lead->favProductTypes as $product)
                                            <div class="form-group row">
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="{{$product->productType->name}}" >
                                                </div>
                                            </div>
                                        @endforeach


                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Information <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">ZIP <span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" name="social-media" class="form-control" value="{{$lead->information->cp}}">
                                            </div>
                                        </div>
                                        
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </form>
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer/>
    </div>    
</div>

<!-- Add New Event popup -->
<div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Add</strong> an event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Event Name</label>
                            <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Event Color</label>
                            <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Direct Event popup -->
<div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Direct Event</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Event Edit Modal popup -->
<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Event</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn mr-auto delete-btn btn-danger">Delete</button>
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<x-scriptsjs :scripts=$scripts/>
</body>
</html>

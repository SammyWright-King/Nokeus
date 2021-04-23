<!--Main Content-->
<div class="main-content px-0 app-content">

<!--Main Content Container-->
<div class="container-fluid pd-t-60">

    <!--Page Header-->
    <div class="bg-white mb-2">
        <h3 class="page-title">Edit Agent</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Agent</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Agent</li>
        </ol>
    </div>
    <!--Page Header-->

    <!-- Row -->
    <div class="row row-sm">
    <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <img src="https://profile.freepik.com/accounts/avatar/default_07.png?1555671037" alt="element 02"
                            class="mb-1">
                        <h3 class="card-title">Agent 1</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-4">Personal Information</div>
                        
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">First Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="firstname" value="James">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="lastname" value="Paul">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">User Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Username" value="Agent 1">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Email" value="James@g.com">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="phone number" value="08158887433">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Profile Picture</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control"  placeholder="profile picture" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Home Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Home Address" value="9 balogun street, lagos state.">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">Bank Details</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Account Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Account Name" value="James Paul">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Account Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Account Number" value="123456789">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bank Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Bank Name" value="UBA">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-2">App Setting</div>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="d-flex flex-column">
                                        <label class="mt-2"><input checked="" type="checkbox"><span class="ml-2">Payment Alert</span></label>
                                        <label class="mt-2"><input checked="" type="checkbox"><span class="ml-2">Mobile Notication</span></label>
                                        <label class="mt-2"><input checked="" type="checkbox"><span class="ml-2">Email Notification</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Save Change</button>

                    <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#danger">
                            Delete Agent
                    </button>

                    <!--Danger theme Modal -->
                    <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel120" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                            <h5 class="modal-title white" id="myModalLabel120">Delete agent</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this agent?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Delete</span>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            
            </div>
        </div>
        <!-- /Col -->
    </div>
</div>
</div>
<!--Main Content-->





<?php
    $id = $_GET['id'];
    $customer = $adm->getAgent($id);
?>

<!--Main Content-->
<div class="main-content px-0 app-content">

<!--Main Content Container-->
<div class="container-fluid pd-t-60">

    <!--Page Header-->
    <div class="bg-white mb-2">
        <h3 class="page-title">Edit Customer</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
        </ol>
    </div>
    <!--Page Header-->

    <!-- Row -->
    <div class="row row-sm">
    <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <img src="<?php echo $customer->profileImage?>" alt="element 02"
                            class="mb-1">
                        <h3 class="card-title"><?php echo $customer->firstname." ". $customer->lastname?></h3>
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
                                    <input type="text" class="form-control"  placeholder="firstname" value="<?php echo $customer->firstname?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="lastname" value="<?php echo $customer->lastname ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">User Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Username" value="garret">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Email" value="<?php echo $customer->email?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="phone number" value="<?php $customer->phone?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Profile Picture</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control"  placeholder="profile picture" value="<?php $customer->profileImage?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Home Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Home Address" value="<?php ?>">
                                </div>
                            </div>
                        </div>
    
                        <!-- <div class="mb-4">Breakdown</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bitcoin Home Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Bitcoin Home Address" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Etherium Home Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Etherium Home Address" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">USDT Home Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="USDT Home Address" value="">
                                </div>
                            </div>
                        </div> -->

                        <div class="mb-4">Bank Details</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Account Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Account Name" value="Garret Gleep">
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
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
</div>
</div>
<!--Main Content-->





<!--Main Content-->
<div class="main-content px-0 app-content">

<!--Main Content Container-->
<div class="container-fluid pd-t-60">

    <!--Page Header-->
    <div class="bg-white mb-2">
        <h3 class="page-title">View Profile</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Profile</li>
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
<!--                        <h3 class="card-title">James Job</h3>-->
                        <h3 class="card-title"><?php echo $customer->firstname. " ". $customer->lastname; ?></h3>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-4">Breakdown</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bitcoin Balance</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="Bitcoin Balance" value="">-->
                                    <input type="text" class="form-control" placeholder="Bitcoin Balance"  value="<?php echo $customer->bitcoin_balance; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Etherium Balance</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="Etherium Balance" value="">-->
                                    <input type="text" class="form-control"  placeholder="Bitcoin Balance" value="<?php echo $customer->ethereum_balance; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">USDT Balance</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="USDT Balance" value="">-->
                                    <input type="text" class="form-control"  placeholder="Bitcoin Balance" value="<?php echo $customer->tether_balance; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">Withdrawal</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Product</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select" id="basicSelect">
                                        <option>Select an option</option>
                                        <option>Bitcoin</option>
                                        <option>Etherium</option>
                                        <option>USDT</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Amount</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Amount" value="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Wallet Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Wallet Address" value="">
                                </div>
                            </div>
                        </div>
                    
                        <div class="float-right mt-3">
                            <button type="submit" class="btn btn-primary">Withdraw</button>
                        </div>
                    </form>
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
<!--                                    <input type="text" class="form-control"  placeholder="firstname" value="">-->
                                    <input type="text" class="form-control"  placeholder="firstname" value="<?php echo $customer->firstname; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Last Name</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="lastname" value="">-->
                                    <input type="text" class="form-control"  placeholder="firstname" value="<?php echo $customer->lastname; ?>">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">User Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Username" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="Email" value="">-->
                                    <input type="text" class="form-control"  placeholder="firstname" value="<?php echo $customer->email; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="col-md-9">
<!--                                    <input type="text" class="form-control"  placeholder="phone number" value="">-->
                                    <input type="text" class="form-control"  placeholder="firstname" value="<?php echo $customer->phone; ?>">
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
                                    <input type="text" class="form-control"  placeholder="Account Name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Account Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Account Number" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bank Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Bank Name" value="">
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
</div>
</div>
<!--Main Content-->





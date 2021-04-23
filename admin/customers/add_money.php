<!--Main Content-->
<div class="main-content px-0 app-content">

<!--Main Content Container-->
<div class="container-fluid pd-t-60">

    <!--Page Header-->
    <div class="m-3 bg-white">
        <h3 class="p-2">Garret Wallet</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#" >Garret  </a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Wallet</li>
        </ol>
    </div>
    <!--Page Header-->

    <!-- Row -->
    <div class="row row-sm">
        
        <div class="col-lg-9">
            <div class="">
                <div class="card">
                    <div class="py-2">
                        <nav class="nav">
                            <a class="nav-link active" data-toggle="tab" href="#about">Balance</a>
                            <a class="nav-link" data-toggle="tab" href="#btc">BTC</a>
                            <a class="nav-link" data-toggle="tab" href="#eth">Etherium</a>
                            <a class="nav-link" data-toggle="tab" href="#usdt">USDT</a>
                            <a class="nav-link" data-toggle="tab" href="#usd">USD</a>
                        </nav>
                    </div>
                </div>
                <!-- main-profile-body -->
                
                <div class="tab-content">
                    <div class="tab-pane show active" id="about">
                    <div class="card">
                        <div class="card-body mt-n5">
                        <form class="form-horizontal">

                        <div class="mb-4">Breakdown</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bitcoin Balance</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control"  placeholder="Bitcoin Balance" value="0.067" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Etherium Balance</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control"  placeholder="Etherium Balance" value="0.067" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">USDT Balance</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control"  placeholder="USDT Balance" value="0.067" readonly>
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
                                    <input type="text" class="form-control"  placeholder="Account Name" value="Garret Stone" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Account Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Account Number" value="112345678" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Bank Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Bank Name" value="Zenith Bank" readonly>
                                </div>
                            </div>
                        </div>
                        
                        
                    </form>
                            </div>
                        </div>
                        </div>
                        
                        <div class="tab-pane" id="btc">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="mb-3 h5">Add BTC</div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Amount</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control"  placeholder="enter amount" value="">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add BTC</button>
                                                    <button type="submit" class="btn btn-danger float-right">Remove BTC</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="eth">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="mb-3 h5">Add Etherium</div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Amount</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control"  placeholder="enter amount" value="">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add Ehterium</button>
                                                    <button type="submit" class="btn btn-danger float-right">Remove Etherium</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="usdt">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="mb-3 h5">Add USDT</div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Amount</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control"  placeholder="enter amount" value="">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add USDT</button>
                                                    <button type="submit" class="btn btn-danger float-right">Remove USDT</button>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="usd">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="mb-3 h5">Add USD</div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Amount</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control"  placeholder="enter amount" value="">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add USD</button>
                                                    <button type="submit" class="btn btn-danger float-right">Remove USD</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="timeline">
                        <div class="card">
                        
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Logout</button>
                            </div>
                        </div>
                        </div>
                    </div>
            
                <!-- main-profile-body -->
            </div>
        </div>
    </div>
    
    <!--/ Row -->

</div>
</div>
<!--Main Content-->
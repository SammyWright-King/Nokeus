<?php
    $id = $_GET['id'];
    $transaction = $adm->getTransaction($id);

    $customer = $adm->getCustomer();
?>

<!--Main Content-->
<div class="main-content px-0 app-content">

<!--Main Content Container-->
<div class="container-fluid pd-t-60">

   <!--Page Header-->

<!--Page Header-->

<!-- Row -->
<div class="row row-sm">
    
    <div class="col-lg-9">
        <div class="bg-white p-2 mb-2">
            <p class="page-title">Confirm Payment</p>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" >Business</a></li>
                <li class="breadcrumb-item active" aria-current="page">Confirm Payment</li>
            </ol>
        </div>
        
        <div class="card">
            <div class="card-body">
            <form class="form-horizontal">

            <div class="mb-3">Customer's Payment Details</div>
            <div class="form-group ">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Product</label>
                        </div>
                        <div class="col-md-9">
                            <?php
                                $ntwk = $transaction->network;
                            ?>
                            <select class="form-select" id="basicSelect" value="">
                                <option>Select an option</option>
                                <option <?php if($ntwk == "BTC") echo 'selected' ?>>Bitcoin</option>
                                <option <?php if($ntwk == "ETH") echo 'selected' ?>>Etherium</option>
                                <option <?php if($ntwk == "USDT") echo 'selected' ?>>USDT</option>
                            </select>
                        </div>
                    </div>
                </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Trade ID</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  placeholder="payment id" value="<?php echo $transaction->_id?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Amount(product)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  placeholder="Amount(product)" value="<?php echo $transaction->amount?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Amount(productUSD)</label>
                    </div>
                    <div class="col-md-9">
                        <?php
                            if($transaction->network == "BTC"){
                                $value = $btc_usd * $transaction->amount;
                            }elseif ($transaction->network == "ETH"){
                                $value = $eth_usd * $transaction->amount;
                            }
                        ?>
                        <input type="text" class="form-control"  placeholder="Amount(productUSD)" value="$ <?php echo $value ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Amount(productNGN)</label>
                    </div>
                    <div class="col-md-9">
                        <?php
                            if($transaction->network == "BTC"){
                                $value = $btc_ng * $transaction->amount;
                            }elseif ($transaction->network == "ETH"){
                                $value = $eth_ng * $transaction->amount;
                            }
                        ?>
                        <input type="text" class="form-control"  placeholder="Amount(productNGN)" value="N <?php echo $value?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Bitcoin Address</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  placeholder="bitcoin address" value="<?php echo $transaction->destination_address?>" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Customer rating</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  placeholder="bitcoin address" value="5 stars" readonly>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-3">Bank Details</div>
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
                        <label class="form-label">Account text</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  placeholder="Account text" value="112345678" readonly>
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
            <div class="">
                    <div class="">
                            <div class="mb-3 h5">Upload proof</div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Payment Proof(jpeg)</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control"  placeholder="enter proof" value="">
                                    </div>
                                    <div class="mt-3">
                                        <input type="hidden" id="text_id_2" value="<?php echo $id?>">
<!--                                        ?module=business&page=sell-->
                                        <a href="#" type="button" class="btn btn-primary waves-effect waves-light" id="btn-sell-complete">Complete Transaction</a>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
        </form>
                </div>
            </div>
            </div>

            </div>
        </div>
        
            <!-- main-profile-body -->
    </div>
</div>

<!--/ Row -->

    
    <!--/ Row -->

</div>
</div>
<!--Main Content-->
<script>
    $(document).ready(function() {
        $("#btn-sell-complete").click(function() {
            var id = $('#text_id_2').val()

            var formData = {
                trans_id: id,
            }
            $.ajax({
                cache: false,
                type: "POST",
                url: "../admin/connect/complete_transaction.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function (data) {

                //console.log(data);
                if(data.code == 100){
                    toastr.success(data.desc)
                    location.reload()
                }else{
                    toastr.warning(data.desc)
                }
            }).fail(function (){
                alert('failed')
            });
        });
    });
</script>

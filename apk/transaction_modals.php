<?php
    //include "back/Customer.php";
?>
        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="deposit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Fund Account </h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
							<div style="margin-top:-2em"></div>
                            <form>
							
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <select class="form-control" style="padding:10px" >
                                            <option value="0"> Bitcoin </option>
                                            <option value="1"> Ethereum </option>
                                            <option value="2"> USDT </option>
                                        </select>
                                    </div>
                                </div>
							
                                <div class="form-group basic">
									<figure style="width:100%;margin:0;text-align:center" >
										<img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=12qn4Dr2CsfVt994LgTbJ9aD66nddYXtpi"  />
									</figure>
<!--									<h6 style="text-align:center;font-size:10pt;font-weight:600" > 12qn4Dr2CsfVt994LgTbJ9aD66nddYXtpi </h6>-->
                                    <h6 style="text-align:center;font-size:10pt;font-weight:600" > <?php echo $customer->data->bitcoin_public_key;?></h6>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal"> Copy Address </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit Action Sheet -->

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Bitcoin</div>
                        <div class="value text-success">$ 552.95</div>
						<strong style="text-align:center" > <?php echo $customer->data->bitcoin_balance;?> BTC </strong>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Ethereum</div>
                        <div class="value text-danger">$ 86.45</div>
						<strong style="text-align:center" > <?php echo $customer->data->ethereum_balance;?> ETH </strong>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">RMB</div>
                        <div class="value">$ 53.25</div>
						<strong style="text-align:center" > 1.294 RMB </strong>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">USDT</div>
                        <div class="value">$ <?php echo $customer->data->tether_balance;?></div>
						<br>
                    </div>
                </div>
            </div>
        </div>
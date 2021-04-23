    <!-- App Capsule -->
    <div id="appCapsule" id="USDT"  >

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card" style="margin-top:5vh" >
                <!-- Balance -->
				<?php include 'agent_heading.php'; ?>
				
                <div class="card-body pt-0" >

                    <ul class="nav nav-tabs lined" role="tablist" >
                        <li class="nav-item" style="width:50%" >
                            <a class="nav-link active" data-toggle="tab" href="#overview2" role="tab">
                                Buy Advert
                            </a>
                        </li>
                        <li class="nav-item" style="width:50%" >
                            <a class="nav-link" data-toggle="tab" href="#cards2" role="tab">
                             Sell Advert   
                            </a>
                        </li>
                    </ul>
					
                    <div class="tab-content mt-2">
						
                        <div class="tab-pane fade show active" id="overview2" role="tabpanel" style="text-align:center" >
							<div class="wallet-footer" style="padding:0" >
								
								<div class="item">
									<select id="BuyCoin" style="font-size:13pt;color:#fff;padding:10px;width:100%;border-radius: 5px;border:none;box-shadow: 1px 1px 10px #D3D3D3" class="bg-info currency" onchange="location = this.value;" > 
											<option value="home.php?btc"  > Bitcoin </option>
											<option value="home.php?eth" > Ethereum </option>
											<option> RMB </option>
											<option selected > USDT </option>
									</select>
								</div>
								
							</div>
							<br>
							
							 <form>
										   
								<div class="form-group basic" style="width:50%;float:left" >
									<div class="input-group mb-1" >
										<input type="number" id="BuybitUSD" class="form-control" placeholder="NGN/bitUSD" onchange="calculate();"  onkeypress="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();" >
									</div>
								</div>
								<div class="form-group basic" style="width:50%;float:left" >
									<div class="input-group mb-1">
										<input type="number"  id="BuyBTC" class="form-control" placeholder="NGN/BTC" onchange="calculate();"  onkeypress="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();" >
									</div>
								</div>
								
								<div style="clear:both"></div>
								
								<div class="form-group basic" >
									<div class="input-group mb-1">
										<input type="number"  id="BuyMin" class="form-control" placeholder="Buy Min." min="0.01" >
									</div>
								</div>
								<div style="clear:both"></div>
								
								<div class="form-group basic" >
									<div class="input-group mb-1">
										<select class="form-control" id="BuyBank"  >
										  <option selected disabled value="" > Choose Bank </option>
										  <option>Access Bank</option>
										  <option>Citibank</option>
										  <option>Diamond Bank</option>
										  <option>Ecobank</option>
										  <option>Fidelity Bank</option>
										  <option>First Bank</option>
										  <option>First City Monument Bank (FCMB)</option>
										  <option>Guaranty Trust Bank (GTB)</option>
										  <option>Heritage Bank</option>
										  <option>Keystone Bank</option>
										  <option>Polaris Bank</option>
										  <option>Providus Bank</option>
										  <option>Stanbic IBTC Bank</option>
										  <option>Standard Chartered Bank</option>
										  <option>Sterling Bank</option>
										  <option>Suntrust Bank</option>
										  <option>Union Bank</option>
										  <option>United Bank for Africa (UBA)</option>
										  <option>Unity Bank</option>
										  <option>Wema Bank</option>
										  <option>Zenith Bank</option>
										</select>
									</div>
								</div>
								
								<div class="form-group basic">
									<button class="btn btn-primary btn-block" type="button" onclick="BuyAction()" id="submitButton" >  Submit  </button>
									<button class="btn btn-primary btn-block" style="display:none" type="button"  id="submitLoading" >  Loading...  </button>
								</div>
											
							</form>
                        </div>
						
                        <div class="tab-pane fade" id="cards2" role="tabpanel" style="text-align:center" >
							<div class="wallet-footer" style="padding:0" >
								
								<div class="item" style="margin-right:5px" >
									<select id="BuyCoin" style="font-size:13pt;color:#fff;padding:10px;width:100%;border-radius: 5px;border:none;box-shadow: 1px 1px 10px #D3D3D3" class="bg-info currency" > 
											<option> Bitcoin </option>
											<option> Ethereum </option>
											<option> RMB </option>
											<option> USDT </option>
									</select>
								</div>
								
							</div>
							<br>
							
							 <form>
								
								<div class="form-group basic" style="width:50%;float:left" >
									<div class="input-group mb-1" >
										<input type="number" id="SellbitUSD" class="form-control" placeholder="Sell" placeholder="NGN/bitUSD" >
									</div>
								</div>
								<div class="form-group basic" style="width:50%;float:left" >
									<div class="input-group mb-1">
										<input type="number"  id="SellBTC" class="form-control" placeholder="NGN/BTC">
									</div>
								</div>
								<div style="clear:both"></div>
								
								<div class="form-group basic" >
									<div class="input-group mb-1">
										<input type="number"  id="SellMin" class="form-control" placeholder="Sell Min.">
									</div>
								</div>
								<div style="clear:both"></div>
								
								<div class="form-group basic" >
									<div class="input-group mb-1">
										<select class="form-control" id="SellBank" >
										  <option> Choose Bank </option>
										  <option value="access">Access Bank</option>
										  <option value="citibank">Citibank</option>
										  <option value="diamond">Diamond Bank</option>
										  <option value="ecobank">Ecobank</option>
										  <option value="fidelity">Fidelity Bank</option>
										  <option value="firstbank">First Bank</option>
										  <option value="fcmb">First City Monument Bank (FCMB)</option>
										  <option value="gtb">Guaranty Trust Bank (GTB)</option>
										  <option value="heritage">Heritage Bank</option>
										  <option value="keystone">Keystone Bank</option>
										  <option value="polaris">Polaris Bank</option>
										  <option value="providus">Providus Bank</option>
										  <option value="stanbic">Stanbic IBTC Bank</option>
										  <option value="standard">Standard Chartered Bank</option>
										  <option value="sterling">Sterling Bank</option>
										  <option value="suntrust">Suntrust Bank</option>
										  <option value="union">Union Bank</option>
										  <option value="uba">United Bank for Africa (UBA)</option>
										  <option value="unity">Unity Bank</option>
										  <option value="wema">Wema Bank</option>
										  <option value="zenith">Zenith Bank</option>
										</select>
									</div>
								</div>
								
								<div class="form-group basic">
									<button class="btn btn-primary btn-block" type="button" onclick="SellAction()" id="submitButton" >  Submit  </button>
									<button class="btn btn-primary btn-block" style="display:none" type="button"  id="submitLoading" >  Loading...  </button>
								</div>
											
							</form>

                        </div>
                    </div>
                </div>
				
            </div>
        </div>
		
        
        <div class="section mt-2">
            <!-- <div class="section-title bg-primary" style="font-size:13pt;text-align:center;border-radius:5px 5px 0 0" > <i class="fa fa-bar-chart"></i> RATES </div> -->
			
            <div class="transactions" id="ORDERS" >
				
            </div>
        </div>
	

    </div>
    <!-- * App Capsule -->
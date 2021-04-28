<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Company</h3>
        <p class="text-subtitle text-muted">Exchanging cryto</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>BITCOIN BALANCE</h3>
                                <div class="card-right d-flex align-items-center">
<!--                                    <p>$50 </p>-->
                                    <p>$ <?php echo $admin->data->bitcoin_balance * $btc?></p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Etherium balance</h3>
                                <div class="card-right d-flex align-items-center">
<!--                                    <p>$532,2 </p>-->
                                    <p>$ <?php echo $admin->data->ethereum_balance * $eth?></p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>USDT balance</h3>
                                <div class="card-right d-flex align-items-center">
<!--                                    <p>1,544 </p>-->
                                    <p>$ <?php echo $admin->data->tether_balance * $usdt?></p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="row mb-4">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Withdrawals</h4>
                        <div class="d-flex ">
                            <i data-feather="download"></i>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Agent</th>
                                        <th>Amount</th>
                                        <th>Wallet Address</th>
                                        <th>Operation</th>
                                        <!-- <th>Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ETH</td>
                                        <td>Agent 1</td>
                                        <td>125</td>
                                        <td>k$jdjyg5356gy643tyr53gh</td>
                                        <td>
                                            <span class="badge bg-success">Done</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BTC</td>
                                        <td>Agent 2</td>
                                        <td>0.58</td>
                                        <td>$hjhyd6etsyjj5898sd</td>
                                        <td>
                                            <span class="badge bg-success">Done</span>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header">
                        <h4>Total Sales</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h6>All time</h6>
                            <h1 class='text-green'>+$2,134</h1>
                        </div>
                    </div>
                </div>

                <div class="card ">
                    <div class="card-header">
                        <h4>Total Buy</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h6>All time</h6>
                            <h1 class='text-green'>+$2,134</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
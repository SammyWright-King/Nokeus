<!--Main Content-->
<div class="main-content px-0 app-content">

    <!--Main Content Container-->
    <div class="container-fluid pd-t-60">

        <!--Page Header-->
        <div class="bg-white mb-2">
            <h3 class="p-2">Buy</h3>
        </div>
        <!--Page Header-->

        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="form-group col-md-3 float-right">
                                <input type="text" class="search form-control" placeholder="What you looking for?">
                                <button class="btn btn-primary btn-rounded btn-sm my-2 float-right" type="submit">Search</button>
                            </div>
                            <table id="example-1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="">Trade ID</th>
                                        <th class="">Date</th>
                                        <th class="">Customer</th>
                                        <th class="">Product</th>
                                        <th class="">Amount(product)</th>
                                        <th class="">Amount(productUSD)</th>
                                        <th class="">Amount(productNGN)</th>
                                        <th class="">Status</th>
                                        <th class="">Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(empty($transactions)){
                                            echo "Empty Transaction List";
                                        }else{
                                            foreach($transactions as $trans){
                                                if($trans->type == "BUY"){

                                                    echo "<tr>";
                                                    echo "<td>$trans->_id</td>";
                                                    echo "<td>$trans->createdAt</td>";
                                                    echo "<td>". $trans->customer->firstname."</td>";
                                                    echo "<td>$trans->network</td>";
                                                    echo "<td>$trans->amount</td>";
                                                    if($trans->network == "ETH"){
                                                        $usd_value = $eth_usd * $trans->amount;
                                                        echo "<td>$usd_value</td>";
                                                        $ng_value = $eth_ng * $trans->amount;
                                                        echo "<td>$ng_value</td>";
                                                    }elseif ($trans->network == "BTC"){
                                                        $usd_value = $btc_usd * $trans->amount;
                                                        echo "<td>$usd_value</td>";
                                                        $ng_value = $btc_ngn * $trans->amount;
                                                        echo "<td>$ng_value</td>";
                                                    }
                                                    echo "<td><a href='?module=business&page=buy_transact&id=$trans->_id' class='badge bg-success'>$trans->status</a></td>";
                                                    echo "<td><a href='#' class='btn btn-sm btn-danger'>Decline</a></td>";
                                                    echo "</tr>";

                                                }

                                            }
                                        }
                                    ?>
<!--                                    <tr>-->
<!--                                        <td>1</td>-->
<!--                                        <td>2011/04/25</td>-->
<!--                                        <td>Nixon</td>-->
<!--                                        <td>Bitcoin</td>-->
<!--                                        <td>0.01</td>-->
<!--                                        <td>$200</td>-->
<!--                                        <td>N200000</td>-->
<!--                                        <td><a href="?module=business&page=buy_transact" class="badge bg-success">Process</a></td>-->
<!--                                        <td><a href="#" class="btn btn-danger">Decline</a></td>-->
<!--                                    </tr>-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
</div>

<!-- Main Content -->
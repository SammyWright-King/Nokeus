

<!--Main Content-->
<div class="main-content px-0 app-content">

    <!--Main Content Container-->
    <div class="container-fluid pd-t-60">

        <!--Page Header-->
        <div class="bg-white mb-2">
            <h3 class="p-2">Active Transactions</h3>
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
                                        <th class="">Agent</th>
                                        <th class="">Product</th>
                                        <th class="">Amount(product)</th>
                                        <th class="">Amount(product_USD)</th>
                                        <th class="">Amount(product_NGN)</th>
                                        <th class="">Transaction Type</th>
                                        <th class="">Payment status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(empty($transactions)){
                                            echo "Empty Transaction List";
                                        }else{
                                            foreach($transactions as $trans){
                                                if($trans->status == "PROCESSING"){
                                                    echo "
                                                        <tr>
                                                             <td>$trans->_id</td>
                                                            <td>$trans->createdAt</td>
                                                            <td>". $trans->customer->firstname."</td>
                                                            <td>".$adm->getAgent($trans->agent)->firstname."</td>
                                                            <td>$trans->network</td>
                                                            <td>$trans->amount</td>
                                                            <td>$500</td>
                                                            <td>N200000</td>
                                                            <td>Sell</td>
                                                            <td><span class='badge bg-warning'>Active</span></td>
                                                        </tr>
                                                    ";
                                                }

                                            }
                                        }
                                    ?>
<!--                                    <tr>-->
<!--                                        <td>3</td>-->
<!--                                        <td>2011/04/25</td>-->
<!--                                        <td>Nixon</td>-->
<!--                                        <td>Agent 1</td>-->
<!--                                        <td>Etherium</td>-->
<!--                                        <td>125</td>-->
<!--                                        <td>$500</td>-->
<!--                                        <td>N200000</td>-->
<!--                                        <td>Sell</td>-->
<!--                                        <td><span class="badge bg-warning">Active</span></td>-->
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

<!--Main Content-->
<div class="main-content px-0 app-content">

    <!--Main Content Container-->
    <div class="container-fluid pd-t-60">

        <!--Page Header-->
        <div class="bg-white mb-2">
            <h3 class="p-2">Agent Wallet</h3>
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
                            <table id="example-1" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="">Agent</th>
                                        <th class="">Bitcoin balance</th>
                                        <th class="">Etherium balance</th>
                                        <th class="">USDT balance</th>
                                        <th class="">Withdraw</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($customers as $customer){
                                            if(in_array('agent', $customer->roles)){
                                                echo "<tr>";
                                                echo "<td><a href=''>$customer->firstname</a></td>";
                                                echo "<td>$customer->bitcoin_balance</td>";
                                                echo "<td>$customer->ethereum_balance</td>";
                                                echo "<td>$customer->tether_balance</td>";
                                                echo "<td><a href='?module=agents&page=agent_withdraw' class='btn btn-sm btn-primary'>Withdraw</a></td>";
                                                echo "</tr>";
                                            }

                                        }
                                    ?>


<!---->
<!--                                    <tr>-->
<!--                                        <td><a href="">Agent 1</a></td>-->
<!--                                        <td>0.067</td>-->
<!--                                        <td>0.067</td>-->
<!--                                        <td>0.067</td>-->
<!--                                        <td><a href="?module=agents&page=agent_withdraw" class="btn btn-sm btn-primary">Withdraw</a></td>-->
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
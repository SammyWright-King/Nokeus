<div class="container-fluid pd-t-60">
    <div class="bg-white mb-2">
        <h3 class="p-2">Agents' Rates</h3>
    </div>    
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <div class="form-group col-md-3 float-right">
                <input type="text" class="search form-control" placeholder="What you looking for?">
                <button class="btn btn-primary btn-rounded btn-sm my-2 float-right" type="submit">Search</button>
            </div>
                <table class='table table-bordered table-hover mb-0'>
                    <thead>
                        <tr>
                            <th>Agent</th>
                            <th>Product</th>
                            <th>Rate(per product_USD)</th>
                            <th>Min</th>
                            <th>Max</th>
                            <th>Bank</th>
                            <th>Trade type</th>
                            <!-- <th>Bitcoin ID</th>
                            <th>Etherium ID</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(empty($rates)){
                        echo "Empty Transaction List";
                    }else{
                        foreach($rates as $rate){
                            if(isset($rate->bitcoin_rate)){
                                echo "
                                    <tr>
                                         <td><a href='?module=agents&page=edit_agent_rate'>".$adm->getAgent($rate->agent)->firstname."</a></td>
                                         <td>Bitcoin</td>
                                         <td>$rate->bitcoin_rate</td>
                                         <td>0.01</td>
                                         <td>100</td>
                                         <td>GT Bank</td>
                                         <td>SELL</td>
                                    </tr>
                                ";
                            }
                            if(isset($rate->ethereum_rate)){
                                echo "
                                    <tr>
                                         <td><a href='?module=agents&page=edit_agent_rate'>".$adm->getAgent($rate->agent)->firstname."</a></td>
                                         <td>Ethereum</td>
                                         <td>$rate->ethereum_rate</td>
                                         <td>0.01</td>
                                         <td>100</td>
                                         <td>GT Bank</td>
                                         <td>SELL</td>
                                    </tr>
                                ";
                            }
                            if(isset($rate->tether_rate)){
                                echo "
                                    <tr>
                                         <td><a href='?module=agents&page=edit_agent_rate'>".$adm->getAgent($rate->agent)->firstname."</a></td>
                                         <td>USDT</td>
                                         <td>$rate->tether_rate</td>
                                         <td>0.01</td>
                                         <td>100</td>
                                         <td>GT Bank</td>
                                         <td>SELL</td>
                                    </tr>
                                ";
                            }
                        }
                    }
                    ?>
<!--                        <tr>-->
<!--                            <td><a href="?module=agents&page=edit_agent_rate">Agent 1</a></td>-->
<!--                            <td>Bitcoin</td>-->
<!--                            <td>440 NGN</td>-->
<!--                            <td>0.01</td>-->
<!--                            <td>100</td>-->
<!--                            <td>GT Bank</td>-->
<!--                            <td>BUY</td>-->
<!--                            <td>yduhkd78diudytvghdhg</td>
<!--                            <td>hd5hgdhtd4ghytc84ht1</td> -->
<!--                        </tr>-->

<!--                        <tr>-->
<!--                            <td><a href="?module=agents&page=edit_agent_rate">Agent 2</a></td>-->
<!--                            <td>Etherium</td>-->
<!--                            <td>440 NGN</td>-->
<!--                            <td>0.01</td>-->
<!--                            <td>100</td>-->
<!--                            <td>UBA Bank</td>-->
<!--                            <td>SELL</td>-->
<!--                             <td>hjfh54rbf87ehggh521</td>
<!--                            <td>lpq33992y5652bggdhf</td> -->
<!--                        </tr>-->
                    </tbody>
                </table>
                <div class="mt-3 p-2 float-right">
                    <a href="?module=agents&page=add_agent_rate" class="btn btn-primary">Add rate</a>
                </div>
            </div>
        </div>
    </div>
</div>
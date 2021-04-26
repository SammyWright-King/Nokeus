<?php
    $agents = $adm->getCustomers();
    $agents = $adm->filterCustomerByAgent($agents);
?>
<div class="container-fluid pd-t-60">
    <div class="bg-white mb-2">
        <h3 class="p-2">Agents</h3>
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
                            <th>Agent Name</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <!-- <th>Trade</th> -->
                            <!-- <th>Bitcoin ID</th>
                            <th>Etherium ID</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(empty($agents)){
                        echo "Empty Transaction List";
                    }else{
                        foreach($agents as $agent){
                            echo "
                                <tr>
                                    <td><a href='?module=agents&page=edit_agent_rate'>".$agent->firstname."</a></td>
                                    <td>$agent->phone</td>
                                    <td>$agent->email</td>
                                </tr>
                            ";
                        }
                    }
                    ?>
<!--                        <tr>-->
<!--                            <td><a href="?module=agents&page=edit_agent">Agent 1</a></td>-->
<!--                            <td>08175998874</td>-->
<!--                            <td>lkl@gmail.com</td>-->
                            <!-- <td>BUY</td> -->
                            <!-- <td>yduhkd78diudytvghdhg</td>
                            <td>hd5hgdhtd4ghytc84ht1</td> -->
<!--                        </tr>-->

                    </tbody>
                </table>
                <div class="mt-3 p-2 float-right">
                    <a href="?module=agents&page=add_agent" class="btn btn-primary">Add agent</a>
                </div>
            </div>
        </div>
    </div>
</div>
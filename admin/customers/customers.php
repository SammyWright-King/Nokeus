<div class="container-fluid pd-t-60">
    <div class="bg-white mb-2">
        <h3 class="p-2">Customers</h3>
    </div>

    <div class="card">
        
        <div class="card-body">
            <div class="table-responsive">
            <div class="form-group col-md-3 float-right">
                <input type="text" class="search form-control" placeholder="What you looking for?">
                <button class="btn btn-primary btn-rounded btn-sm my-2 float-right" type="submit">Search</button>
            </div>
                <table id="example-1" class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Bitcoin Balance</th>
                            <th>Etherium Balance</th>
                            <th>USDT Balance</th>
                            <th>Bitcoin ID</th>
                            <th>Etherium ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($customers as $customer){
                                echo "<tr>";
                                    echo "<td><a href='?module=customers&page=edit&id=$customer->_id'>$customer->firstname</a></td>";
                                    echo " <td> $customer->email </td>";
                                    echo "<td>$customer->phone</td>";
                                    echo "<td>$customer->bitcoin_balance</td>";
                                    echo "<td>$customer->ethereum_balance</td>";
                                    echo "<td>$customer->tether_balance</td>";
                                    echo "<td>$customer->bitcoin_public_key</td>";
                                    echo "<td>$customer->ethereum_public_key</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
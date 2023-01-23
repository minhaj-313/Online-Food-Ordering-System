<?php
$itemModalSql = "SELECT * FROM `orders`";
$itemModalResult = mysqli_query($conn, $itemModalSql);
while ($itemModalRow = mysqli_fetch_assoc($itemModalResult)) {
    $orderid = $itemModalRow['orderId'];
    $userid = $itemModalRow['userId'];

?>

    <!-- Modal -->
    <div class="modal fade" id="orderItem<?php echo $orderid; ?>" tabindex="-1" role="dialog" aria-labelledby="orderItem<?php echo $orderid; ?>" aria-hidden="true" style="width: -webkit-fill-available;">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header" style="background-color: white">

                    <h5 class="modal-title" id="orderItem<?php echo $orderid; ?>">Order Items (<b>Order Id: <?php echo $orderid; ?></b>)</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table text">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="px-3">Item</div>
                                            </th>
                                            <th scope="col" class="border-0 bg-light">
                                                <div class="text-center">Quantity</div>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $mysql = "SELECT * FROM `orderitems` WHERE orderId = $orderid";
                                        $myresult = mysqli_query($conn, $mysql);
                                        while ($myrow = mysqli_fetch_assoc($myresult)) {
                                            $pizzaId = $myrow['pizzaId'];
                                            $itemQuantity = $myrow['itemQuantity'];
                                            $itemsql = "SELECT * FROM `pizza` WHERE pizzaId = $pizzaId";
                                            $itemresult = mysqli_query($conn, $itemsql);
                                            $itemrow = mysqli_fetch_assoc($itemresult);
                                            $pizzaName = $itemrow['pizzaName'];
                                            $pizzaPrice = $itemrow['pizzaPrice'];
                                            $pizzaDesc = $itemrow['pizzaDesc'];
                                            $pizzaCategorieId = $itemrow['pizzaCategorieId'];

                                            echo '<tr>
                                                <th scope="row">
                                                    <div class="p-2">
                                                    <img src="/OnlinePizzaDelivery/img/pizza-' . $pizzaId . '.jpg" alt="" width="50" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> ' . $pizzaName . '</h5><span class="text-muted font-weight-normal font-italic d-block">Rs. ' . $pizzaPrice . '/-</span>
                                                    </div>
                                                    </div>
                                                </th>
                                                <td class="align-middle text-center"><strong>' . $itemQuantity . '</strong></td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                <!--  -->


                                <div>
                                    <?php
                                    $sql = "SELECT * FROM `orders` WHERE orderId = $orderid";
                                    $result = mysqli_query($conn, $sql);
                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $address = $row['address'];
                                        $zipCode = $row['zipCode'];
                                        $phoneNo = $row['phoneNo'];
                                        $amount = $row['amount'];
                                        $orderDate = $row['orderDate'];
                                        $paymentMode = $row['paymentMode'];

                                        if ($paymentMode == 0) {
                                            $paymentMode = "Cash on Delivery";
                                        } else {
                                            $paymentMode = "Online";
                                        }


                                        echo '
                    <hr>
                    <p style="color:Green;"> <b >Total Amount</b>: ' . $amount . '</p> 
                    <p data-toggle="tooltip"><b>Address</b>: ' . substr($address, 0, 50) . '...</p>
                    <p><b>Phone No</b>: ' . $phoneNo . '</p>
                    <p><b>Payment Mode</b>: ' . $paymentMode . ' <b style="margin-left:100px;">Order Date</b>: ' . $orderDate . '</p>';
                                    }
                                    if ($counter == 0) {
                                    ?><script>
                                            document.getElementById("NoOrder").innerHTML = '<div class="alert alert-info alert-dismissible fade show" role="alert" style="width:100%"> You have not Recieve any Order!	</div>';
                                        </script> <?php
                                                }
                                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                        <a href="partials/_orderItemModal.php" onclick="window.print()" class="btn btn-info"><i class="material-icons">&#xE24D;</i> <span>Print</span></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>

<?php
}
?>
<?php
echo '<style>';
// شامل شدن فایل SilentGalaxy.css
include 'SilentGalaxy.css';
echo '</style>';
?>
<?php
//include('/payment/index.php');
$total = 0;
    $qry = $conn->query("SELECT c.*,p.name,i.price,p.id as pid from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id where c.client_id = ".$_settings->userdata('id'));
    while($row= $qry->fetch_assoc()):
        $total += $row['price'] * $row['quantity'];
        //$id = $row['id'];
    endwhile;
?>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body"></div>
            <h3 class="text-center"><b>صورتحساب سفارش</b></h3>
            <hr class="border-dark">
            <form action="" id="place_order">
                <input type="hidden" name="amount" value="<?php echo $total ?>">
                <input type="hidden" name="payment_method" value="cod">
                <input type="hidden" name="paid" value="0">
                <div class="row row-col-1 justify-content-center">
                    <div class="col-6">
                        <div class="form-group col address-holder">
                            <label for="" class="control-label">🏡آدرس شما🎁 :</label>
                            <textarea id="" cols="30" rows="3" name="delivery_address" class="form-control" style="resize:none"><?php echo $_settings->userdata('default_delivery_address') ?></textarea>
                        </div>

                        <hr>
                        <div class="col my-3">
                        <h4 class="text-muted">انتخاب روش پرداخت</h4>
                            <div class="d-flex w-100 justify-content-between">
                                <a class="button-89">پرداخت با روش دیگر ==> ارتباط با پشتیبانی</a>
                                <span>


                                    <?php
                                    //require_once('../checkout.php');
                                    define("MerchantID", 'cd356434-b242-448b-9559-0c57f0e1d6da');
                                    $id = 4444;
                                    ?>

<a href="<?= zarinpal($total, ['id' => $id])?>" class="SilentCSS">لینک پرداخت</a>

<?php

function zarinpal($Amount, $parameter = [])
{
    $Description = "پرداخت آنلاین";
    $Email = "silentgalaxy@silentgalaxy.ir"; // Optional
    $Mobile = ""; // Optional

    $CallbackURL = "silentgalaxy.ir/shop/cbpos/payment/index.php" . "../payment/callback.php" . "?" . http_build_query($parameter);

    $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

    $result = $client->PaymentRequest(
        [
            'MerchantID'  => MerchantID,
            'Amount'      => $Amount,
            'Description' => $Description,
            'Email'       => $Email,
            'Mobile'      => $Mobile,
            'CallbackURL' => $CallbackURL,
        ]
    );

    if ($result->Status == 100) {
        $link = "https://www.zarinpal.com/pg/StartPay/" . $result->Authority . '/ZarinGate';
    } else {
        $link = false;
    }
    return $link;
}
?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
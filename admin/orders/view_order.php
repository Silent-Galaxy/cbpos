<?php if(isset($_GET['view'])): 
require_once('../../config.php');
endif;?>
<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(!isset($_GET['id'])){
    $_settings->set_flashdata('خطا','هیچ شناسه سفارشی ارائه نشده است.');
    redirect('admin/?page=orders');
}
$order = $conn->query("SELECT o.*,concat(c.firstname,' ',c.lastname) as client FROM `orders` o inner join clients c on c.id = o.client_id where o.id = '{$_GET['id']}' ");
if($order->num_rows > 0){
    foreach($order->fetch_assoc() as $k => $v){
        $$k = $v;
    }
}else{
    $_settings->set_flashdata('خطا','شناسه سفارش ارائه شده نامشخص است');
    redirect('admin/?page=orders');
}
?>
<div class="card card-outline card-primary">
    <div class="card-body">
        <div class="conitaner-fluid">
            <p><b>نام مشتری: <?php echo $client ?></b></p>
            <p><b>نشانی تحویل: <?php echo $delivery_address ?></b></p>
            <table class="table-striped table table-bordered" id="list">
                <colgroup>
                    <col width="15%">
                    <col width="35%">
                    <col width="25%">
                    <col width="25%">
                </colgroup>
                <thead>
                    <tr>
                        <th>تعداد</th>
                        <th>تولید - محصول</th>
                        <th>قیمت</th>
                        <th>جمع</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $olist = $conn->query("SELECT o.*,p.name,b.name as bname, i.variant FROM order_list o inner join inventory i on o.inventory_id = i.id inner join products p on i.product_id = p.id inner join brands b on p.brand_id = b.id where o.order_id = '{$id}' ");
                        while($row = $olist->fetch_assoc()):
                        foreach($row as $k => $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                    ?>
                    <tr>
                        <td><?php echo $row['quantity'] ?></td>
                        <td>
                            <p class="m-0"><?php echo $row['name'] . " - " . $row['variant'] ?></p>
                            <p class="m-0"><small>نام تجاری: <?php echo $row['bname']?></small></p>
                           
                        </td>
                        <td class="text-right"><?php echo number_format($row['price']) ?></td>
                        <td class="text-right"><?php echo number_format($row['price'] * $row['quantity']) ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan='3'  class="text-right">جمع</th>
                        <th class="text-right"><?php echo number_format($amount) ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-6">
                <p>روش پرداخت: <?php echo strtoupper($payment_method) ?></p>
                <p>وضعیت پرداخت: <?php echo $paid == 0 ? '<span class="badge badge-light text-dark border px-3 rounded-pill">پرداخت نشده</span>' : '<span class="badge badge-success px-3 rounded-pill">Paid</span>' ?>
                <?php if(!isset($_GET['view']) && $paid == 0 && $status!= 4): ?>
                    <button type="button" id="pay_order" class="btn btn-sm btn-flat btn-primary">علامت گذاری به عنوان پرداخت شده</button>
                <?php endif; ?>
                </p>

            </div>
            <div class="col-6 row row-cols-2">
                <div class="col-3">وضعیت سفارش:</div>
                <div class="col-9">
                <?php 
                    switch($status){
                        case '0':
                            echo '<span class="badge badge-light text-dark border px-3 rounded-pill">انتظار</span>';
	                    break;
                        case '1':
                            echo '<span class="badge badge-primary px-3 rounded-pill">بسته بندی شده</span>';
	                    break;
                        case '2':
                            echo '<span class="badge badge-warning px-3 rounded-pill">برای تحویل</span>';
	                    break;
                        case '3':
                            echo '<span class="badge badge-success px-3 rounded-pill">تحویل داده شده</span>';
	                    break;
                        default:
                            echo '<span class="badge badge-danger px-3 rounded-pill">لغو شد</span>';
	                    break;
                    }
                ?>
                </div>
                <?php if(!isset($_GET['view'])): ?>
                <div class="col-3"></div>
                <div class="col">
                    <button type="button" id="update_status" class="btn btn-sm btn-flat btn-primary">وضعیت به روز رسانی</button>
                </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<?php if(isset($_GET['view'])): ?>
<div class="modal-footer">
    <?php if(isset($status) && $status == 0): ?>
    <button type="button" class="btn btn-danger btn-flat btn-sm" id="cancel_order">لغو سفارش</button>
    <?php endif; ?>
    <button type="button" class="btn btn-secondary btn-flat btn-sm" data-dismiss="modal">بستن</button>
</div>
<style>
    #uni_modal>.modal-dialog>.modal-content>.modal-footer{
        display:none;
    }
    #uni_modal .modal-body{
        padding:0;
    }
</style>
<?php endif; ?>
<script>
    $(function(){
        $('#list td,#list th').addClass('py-1 px-2 align-middle')
        $('#update_status').click(function(){
            uni_modal("وضعیت به روز رسانی", "./orders/update_status.php?oid=<?php echo $id ?>&status=<?php echo $status ?>")
        })
        $('#cancel_order').click(function(){
            _conf("آیا مطمئن هستید که این سفارش را لغو می کنید؟","لغو سفارش",[])
        })
        $('#pay_order').click(function(){
			_conf("آیا مطمئن هستید که این سفارش را به عنوان پولی علامت گذاری می کنید؟","پرداخت_سفارش",["<?= isset($id) ? $id : "" ?>"])
		})
    })
    function cancel_order(){
        start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=update_order_status",
			method:"POST",
			data:{id: '<?= isset($id) ? $id : '' ?>',status:4},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("خطایی رخ داد.",'خطا');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("خطایی رخ داد.",'خطا');
					end_loader();
				}
			}
		})
    }
    function pay_order($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=pay_order",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("خطایی رخ داد.",'خطا');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("خطایی رخ داد.",'خطا');
					end_loader();
				}
			}
		})
	}
</script>
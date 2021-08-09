<!-- =====================Page Content======================= -->

<!-- ======================Page Style======================== -->
<style type="text/css">
  .item-type-ttl {
      background-color: #ffc0cb75 !important;
  }
  .grand-ttl {
      background-color: #ffc92885 !important;
  }
  .text-center {
      text-align: center !important;
  }
</style>
<!-- =====================/Page Style======================== -->

<!-- =====================Page Content======================= -->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-box">
  <form method="GET" action="<?php echo site_url('Welcome') ?>" id="filter-form">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">

          <div class="form-group">
    <select name="ds" id="scbook_dist_id" class="form-control" title="District" required="">
      <option value=""> - - District - - </option>
      <?php if (!empty($dist_list)) { foreach ($dist_list as $vl) {
        echo '<option value="'.$vl->m_district_id.'" ';
        if($ds_id == $vl->m_district_id) echo " selected";
        echo '>'.$vl->m_district_name.'</option>';
      } } ?>
    </select>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">

          <div class="form-group">
    <select name="sp" id="scbook_shop_id" class="form-control" title="Dukan" required="">
      <option value=""> - - Dukan - - </option>
      <?php if (!empty($shop_list)) { foreach ($shop_list as $vl) {
        echo '<option value="'.$vl->m_shop_id.'" ';
        if($sp_id == $vl->m_shop_id) echo " selected";
        echo '>'.$vl->m_shop_name.'</option>';
      } } ?>
    </select>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">

          <div class="form-group">
    <input type="date" name="dt" class="form-control" value="<?php echo $cb_dt; ?>" title="Date" required="">
          </div>

        </div>
        <div class="col-md-1 col-sm-6 col-xs-6">

    <div class="form-group form-checkbox">
      <input type="checkbox" id="chk_1" name="sm" value="1" 
        checked="checked"
      >
      <label class="inline control-label" for="chk_1">Summary</label>
    </div>

        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">

          <div class="form-group">
    <button type="submit" class="btn btn-info btn-block"> Go </button>
          </div>

        </div>
      </div>
  </form>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-box">
      <h4 class="heading"> Sale Items <span>: <b><?php echo ($sold_items['ttl_amt']) ? $sold_items['ttl_amt'] : 0; ?></b> /-</span> </h4>
      <?php if($sold_items){ ?>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Btl Qty : <?php echo $sold_items['btl_other']; ?></td>
              <td>Hlf Qty : <?php echo $sold_items['hlf_other']; ?></td>
              <td>Nip Qty : <?php echo $sold_items['nip_other']; ?></td>
              <td></td>
              <td>Btl Bear : <?php echo $sold_items['btl_bear']; ?></td>
              <td>Hlf Bear : <?php echo $sold_items['hlf_bear']; ?></td>
              <td>Nip Bear : <?php echo $sold_items['nip_bear']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php } ?>
      <div class="advance-table" style="overflow-x: scroll;">


        <table class="table table-bordered">
          <head>
            <tr>
              <th rowspan="2">Wine Type</th>
              <th rowspan="2">Wine Name</th>
              <th colspan="4" class="text-center">Quentity</th>
              <th colspan="3" class="text-center">Price/piece</th>
              <th colspan="4" class="text-center">Amount</th>
            </tr>
            <tr>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>
              <th>Total</th>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>
              <th>Total</th>

            </tr>
          </head>
          <tbody>
            <?php if(!empty($sold_items)) echo $sold_items['list']; ?>
          </tbody>
        </table>
        
      </div>
    </div>

    <div class="page-box">
      <h4 class="heading"> Stock Receive <span>: <b><?php echo ($item_receive['tr_ttl']) ? $item_receive['tr_ttl'] : 0; ?></b> Piece</span> </h4>
      <?php if(!empty($item_receive)) echo $item_receive['list']; ?>
    </div>
    <div class="page-box">
      <h4 class="heading"> Stock Transfer <span>: <b><?php echo ($item_transfer['tr_ttl']) ? $item_transfer['tr_ttl'] : 0; ?></b> Piece</span> </h4>
      <?php if(!empty($item_transfer)) echo $item_transfer['list']; ?>
    </div>
    <div class="page-box">
      <h4 class="heading"> Dukan Expense <span>: <b><?php echo ($expense_sum[0]->total_exp_amt) ? $expense_sum[0]->total_exp_amt : 0; ?></b> /-</span> </h4>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="my_custom_datatable table display table-striped table-bordered">
          <thead>
            <th width="5%">S.No.</th>
            <th>Expense Category</th>
            <th>Amount</th>
            <th>Time</th>
          </thead>
          <tbody>
            <?php $ttl_shop_exp = 0; if(!empty($shop_expense)){ foreach($shop_expense as $i => $vl){
              echo"<tr>
                <td title='S.No.'>".($i+1)."</td>
                <td title='Expense Category'>".$vl->s_expenses_type."</td>
                <td title='Amount'> ".$vl->shop_exp_amt." </td>
                <td title='Time'>".$vl->exp_time."</td>
              </tr>"; $ttl_shop_exp += $vl->shop_exp_amt;
            } } ?>
          </tbody>
        </table>  
      </div>
    </div>
    <div class="page-box">
      <h4 class="heading"> Dukan , <span>Total Commission : <b><?php echo (!empty($shop_ec)) ? $shop_ec['com_ttl'] : 0; ?></b> /-</span> </h4>
      <?php if($shop_ec){ ?>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Btl Qty : <?php echo $shop_ec['btl_other']; ?></td>
              <td>Hlf Qty : <?php echo $shop_ec['hlf_other']; ?></td>
              <td>Nip Qty : <?php echo $shop_ec['nip_other']; ?></td>
              <td></td>
              <td>Btl Bear : <?php echo $shop_ec['btl_bear']; ?></td>
              <td>Hlf Bear : <?php echo $shop_ec['hlf_bear']; ?></td>
              <td>Nip Bear : <?php echo $shop_ec['nip_bear']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php } ?>
      <?php if(!empty($shop_ec)) echo $shop_ec['list']; ?>
    </div>
    <div class="page-box">
      <h4 class="heading"> Paikar , <span>Total Commission : <b><?php echo (!empty($agent_ec['com_ttl'])) ? $agent_ec['com_ttl'] : 0; ?></b> /-</span>, <span>Total Receive : <b><?php echo (!empty($agent_ec['t_rcv_ttl'])) ? $agent_ec['t_rcv_ttl'] : 0; ?></b> /-</span> </h4>
      <?php if($agent_ec){ ?>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Btl Qty : <?php echo $agent_ec['btl_other']; ?></td>
              <td>Hlf Qty : <?php echo $agent_ec['hlf_other']; ?></td>
              <td>Nip Qty : <?php echo $agent_ec['nip_other']; ?></td>
              <td></td>
              <td>Btl Bear : <?php echo $agent_ec['btl_bear']; ?></td>
              <td>Hlf Bear : <?php echo $agent_ec['hlf_bear']; ?></td>
              <td>Nip Bear : <?php echo $agent_ec['nip_bear']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php } ?>
      <?php if(!empty($agent_ec)) echo $agent_ec['list']; ?>
    </div>
    <div class="page-box">
      <h4 class="heading"> VIP , <span>Total Commission : <b><?php echo (!empty($vip_ec['com_ttl'])) ? $vip_ec['com_ttl'] : 0; ?></b> /-</span>, <span>Total Receive : <b><?php echo (!empty($vip_ec['t_rcv_ttl'])) ? $vip_ec['t_rcv_ttl'] : 0; ?></b> /-</span> </h4>
      <?php if($vip_ec){ ?>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Btl Qty : <?php echo $vip_ec['btl_other']; ?></td>
              <td>Hlf Qty : <?php echo $vip_ec['hlf_other']; ?></td>
              <td>Nip Qty : <?php echo $vip_ec['nip_other']; ?></td>
              <td></td>
              <td>Btl Bear : <?php echo $vip_ec['btl_bear']; ?></td>
              <td>Hlf Bear : <?php echo $vip_ec['hlf_bear']; ?></td>
              <td>Nip Bear : <?php echo $vip_ec['nip_bear']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php } ?>
      <?php if(!empty($vip_ec)) echo $vip_ec['list']; ?>
    </div>
    <div class="page-box">
      <h4 class="heading"> Free Sale </h4>
      <?php if(!empty($free_sale)) echo $free_sale['list']; ?>
    </div>


    <div class="page-box">
      <h4 class="heading"> Breackage <span>: <b><?php echo ($brkg_items['ttl_amt']) ? $brkg_items['ttl_amt'] : 0; ?></b> /-</span> </h4>
      <?php //echo "<pre>";print_r($brkg_items); echo "</pre>"; exit(0);?>
      <?php if($brkg_items){ 
        if($brkg_items['btl_other']!=0 || $brkg_items['hlf_other']!=0 || $brkg_items['nip_other']!=0 || $brkg_items['btl_bear']!=0 || $brkg_items['hlf_bear']!=0 || $brkg_items['nip_bear']!=0){
      ?>
        <div class="advance-table" style="overflow-x: scroll;">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Btl Qty : <?php echo $brkg_items['btl_other']; ?></td>
                <td>Hlf Qty : <?php echo $brkg_items['hlf_other']; ?></td>
                <td>Nip Qty : <?php echo $brkg_items['nip_other']; ?></td>
                <td></td>
                <td>Btl Bear : <?php echo $brkg_items['btl_bear']; ?></td>
                <td>Hlf Bear : <?php echo $brkg_items['hlf_bear']; ?></td>
                <td>Nip Bear : <?php echo $brkg_items['nip_bear']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <?php
        } 
      } ?>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table table-bordered">
          <head>
            <tr>
              <th rowspan="2">Wine Type</th>
              <th rowspan="2">Wine Name</th>
              <th colspan="4" class="text-center">Quentity</th>
              <th colspan="3" class="text-center">Price/piece</th>
              <th colspan="4" class="text-center">Amount</th>
            </tr>
            <tr>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>
              <th>Total</th>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>

              <th>Btl</th>
              <th>Hlf</th>
              <th>Nip</th>
              <th>Total</th>

            </tr>
          </head>
          <tbody>
            <?php //echo "<pre>";print_r($brkg_items['list']); echo "</pre>"; exit(0); ?>
            <?php if(!empty($brkg_items)) echo $brkg_items['list']; ?>
          </tbody>
        </table>
        
      </div>
    </div>
    
    <div class="page-box">
      <h4 class="heading"> Aahata : <?php if (!empty($aahata_amt)) {
        echo $aahata_amt[0]->s_aahata_amt;
      }else echo "0"; ?> /-</h4>
    </div>
    <div class="page-box">
      <h4 class="heading"> Total Balance : <?php  echo (!empty($cash_book[0]->today_cash)) ? $cash_book[0]->today_cash : 0; ?> </h4>
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table display table-striped table-bordered">
          <thead>
            <tr>
              <th>Sale</th>
              <th>Dukan Expense</th>
              <th>Dukan Commision</th>
              <th>Paikar Commision</th>
              <th>VIP Commision</th>
              <th>Free Sale</th>
              <th>Breakage</th>
              <th>Ahata</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($cash_book[0])){ ?>
            <tr>
              <td><?php echo $cash_book[0]->sale_amt; ?></td>
              <td><?php echo $cash_book[0]->expense_amt; ?></td>
              <td><?php echo $cash_book[0]->shop_com_amt; ?></td>
              <td><?php echo $cash_book[0]->agent_com_amt; ?></td>
              <td><?php echo $cash_book[0]->vip_com_amt; ?></td>
              <td><?php echo $cash_book[0]->free_sale_amt; ?></td>
              <td><?php echo $cash_book[0]->breakage_amt; ?></td>
              <td><?php echo $cash_book[0]->aahata_amt; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="page-box">
      <h4 class="heading"> Hologram : <?php if (!empty($shop_hologram)) {
        echo $shop_hologram[0]->mhstock_receive_qty;
      }else echo "0"; ?></h4>
    </div>
    <div class="page-box">
      <!-- <h4 class="heading"> Total Stock : <?php  echo (!empty($shop_hologram[0]->today_cash)) ? $shop_hologram[0]->today_cash : 0; ?> </h4> -->
      <div class="advance-table" style="overflow-x: scroll;">
        <table class="table display table-striped table-bordered">
          <thead>
            <tr>
              <th>Opening Qty</th>
              <th>Use Qty</th>
              <th>Received Qty</th>
              <th>Received On</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($shop_hologram[0])){ ?>
            <tr>
              <td><?php echo $shop_hologram[0]->mhstock_open_qty; ?></td>
              <td><?php echo $shop_hologram[0]->mhstock_use_qty; ?></td>
              <td><?php echo $shop_hologram[0]->mhstock_receive_qty; ?></td>
              <td><?php echo date('d-m-Y',strtotime($shop_hologram[0]->mhstock_receive_on)); ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="page-box">
      <div class="row">
        <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6 col-xs-12">
          <div class="form-layout-submit">
            <button type="button" class="btn btn-primary btn-block" id="print-report"
            > <i class="fa fa-print"></i> Print </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- ====================/Page Content======================= -->

<!-- ====================/Page Content======================= -->
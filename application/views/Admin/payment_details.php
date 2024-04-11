<?php
$this->load->view('Admin/Layout/admin_header');
?>

  <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div class="panel panel-default">
    <div class="panel-heading">
   Vehicle Payment Details
    </div>
    <div>
        <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
       <thead>
          <tr>
            <th data-breakpoints="xs">Id</th>
             
            <th>Name</th>
            <th>Email</th>
            <th>Expiry Date</th>
            <th>Card Number</th>
            <th>Vehicle Name</th>
            <th>Vehicle Number</th>
            <th>Amount</th>
           
            
           
        </tr>
        </thead>
        <tbody>
         <?php
         $i=1;
         foreach ($vehicle as $vhcle) {
         
         ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $vhcle->pay_crd_hldr_name?></td>
            <td><?php echo $vhcle->pay_user_email?></td>
             <td><?php echo $vhcle->pay_crd_exp_date?></td>
             <td><?php echo $vhcle->pay_card_number?></td>
            <td><?php echo $vhcle->v_name?></td>
             <td><?php echo $vhcle->v_number?></td>
              <td>₹<?php echo $vhcle->pay_amout?></td>
            

               
            </tr>
           <?php
           $i++;
         }
         ?>
        
        </tbody>
      </table>
  </div>
    </div>
  </div>
    <!-- </div> -->
        <br>



 
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    

<script>
function Check(me) {
    me.value = me.value.replace(/[0-9]/g, "");
}
</script>
<br><br> <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div class="panel panel-default">
    <div class="panel-heading">
   House Payment Details
    </div>
    <div>
        <div style="overflow-x:auto;">
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
       <thead>
          <tr>
            <th data-breakpoints="xs">Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Expiry Date</th>
            <th>Card Number</th>
            <th>House Address</th>
            <th>Amount</th>
           
           
            
           
        </tr>
        </thead>
        <tbody>
         
         <?php
         $i=1;
         foreach ($house as $hse) {
         
         ?>
          <tr data-expanded="true">
            <td><?php echo $i?></td>
           <td><?php echo $hse->pay_crd_hldr_name?></td>
            <td><?php echo $hse->pay_user_email?></td>
             <td><?php echo $hse->pay_crd_exp_date?></td>
             <td><?php echo $hse->pay_card_number?></td>
            <td><?php echo $hse->h_Address?></td>
             
              <td>₹<?php echo $hse->pay_amount?></td>
            

               
            </tr>
           <?php
           $i++;
         }
         ?>
        
           
        
        </tbody>
      </table>
  </div>
    </div>
  </div>
    <!-- </div> -->
        <br>

        

 
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    

<script>
function Check(me) {
    me.value = me.value.replace(/[0-9]/g, "");
}
</script>
<?php
$this->load->view('Admin/Layout/admin_footer');
?>
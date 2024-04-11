<?php
$this->load->view('User/Layout/user_header');
?>



<div style="margin: 100px">

			<table border="1px solid" align="center" >


				<thead>
                              <tr >
                                 <th >SL No.</th>
                                 <th >Image</th>
                                 <th >Address</th>
                                 <th >Property Size</th>
                                 <th >Total Rooms</th>
                                 <th >Rent/Month</th>
                                 <th >Total Month</th>
                                 <th >Token Amount</th>
                                 
                                 <th>Return</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              foreach ($hse_return_view as $row) {
                                
                              ?>
                              <tr class="rem1">
                                 <td class="invert">1</td>
                                 <td class="invert-image"><a href="single.html"><img src="<?php echo base_url('Asset/Vendor/house/'.$row->h_image)?>" alt=" " class="img-responsive" style="height: 100px;width:180px"></a></td>
                                 
                                 <td class="invert"><?php echo $row->h_Address?></td>
                                 <td class="invert"><?php echo $row->h_Property_Size?></td>
                                 <td class="invert"><?php echo $row->h_Total_Rooms?></td>
                                 <td class="invert"><?php echo $row->h_rent?></td>
                                 <td class="invert"><?php echo $row->hb_total_month?></td>
                                 <td class="invert"><?php echo $row->hb_token_amount ?></td>
                                 <td class="invert" style="color: blue">
                                   <a href="<?php echo base_url('index.php/Usercontroller/return_house/'.$row->hb_id)?>"><b style="color: blue">Return Now</b></a> 
                                 </td>
                              </tr>
                              <?php
                           }
                           ?>
                           </tbody>
				<thead>
                                              
  
</table>
			
</div>








<?php

$this->load->view('User/Layout/user_footer');
?>
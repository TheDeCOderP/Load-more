<?php include('includes/header.php'); ?>

<?php include('advertisement.php'); ?>

<?php  
  
 
 
 
$sql = "SELECT * FROM tbl_company LIMIT 2";  
$result = mysqli_query($con, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $SubCategoryId = $row["company_name"]; 
          $CategoryId = $row["company_address"];		  
          $output .= '  
             
               <tr>  
			   						<td>
						
						<i class="fa fa-picture-o" aria-hidden="true" style="color: #15ab19;"></i>
						
						</td>
						
			        <td><a href="post_list.php?catid='.$row["company_address"].'">'.$row["company_address"].'</a></td>
					<td><a href="post_list.php?catid='.$row["company_name"].'">'.$row["company_name"].'</a></td>  
              
               </tr>
			 ';  
     }  
     $output .= '  
                <tr id="remove_row">  
				    <td>&nbsp;</td>	
                    <td><button type="button" name="btn_more" data-vid1="'. $CategoryId .'" data-vid2="'. $SubCategoryId .'" id="btn_more" class="btn btn-success form-control">more</button></td>  
					<td>&nbsp;</td>	
               </tr> 
     ';  
     echo $output;  
}  
?>

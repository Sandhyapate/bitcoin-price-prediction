<html>
<table style="width:100%">
     
 
<?php
     $file='san.csv';
	 $fh=fopen($file,'r');
	 while(list($id , $P)=fgetcsv($fh,10240,','))
	 {?>
 
 
 
 <tr border:1px solid black>
    
	 <th> 
	 <td><?php  printf("<p>%s </p>",$id);?></td>
	 <td> <?php  printf("<p>%s </p>",$P);?></td>
	 
	
     </th>


</tr>		 
	<?php }?>
	 </table>
	
<table style="width:100%">
     
 
<?php
     $file='bitcoin.csv';
	 $fh=fopen($file,'r');
	 while(list( $PR,$D)=fgetcsv($fh,10240,','))
	 {?>
 
 
 
 <tr border:1px solid black>
    
	 <th> 
	
	 <td> <?php  printf("<p>%s </p>",$PR);?></td>
	 <td> <?php  printf("<p>%s </p>",$D);?></td>
	
     </th>


</tr>		 
	<?php }?>
	 </table>
</html>
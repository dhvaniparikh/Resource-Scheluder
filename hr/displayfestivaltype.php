<?php
	include_once("header.php");
?>
<br>
<style>
.hi:hover
{
	transform:scale(1.1);
	color:#660000;
}

</style>
<div class="widget-box widget-color-dark" id="widget-box-2" style="opacity: 1;"> 
    <div class="widget-header" style="background:#c4bfbcf2;">
        <h3 class="widget-title bigger lighter">
             <img src='img\fes.png' style="width:40px;height:40px;">&nbsp;

            <b style="color:black">FESTIVALS</b>
        </h3>
        <br>
        
     <div class="widget-toolbar widget-toolbar-light no-border">													  
     </div>

</div>

<?php
$ftitle="";
$str="";
$fdid;
$x=1;
    
	$cnn=mysqli_connect("localhost","root","","elegance");
	$qry="select * from festivaltype ";
	$result=$cnn->query($qry);
	$cnt=mysqli_num_rows($result);
    
	if($cnt==0)
	{
		$str="record not found";
	}
	else
	{
		// $str="<div class='wysiwyg-editor' id='editor1' contenteditable='true'>";
	   $str="<table  class='table' >";
		while($row=$result->fetch_assoc())
		 {
			if($x==1)
			{
				$str.="<tr style='padding:2px;' >";
				
			}
			$x++;
			$nm=$row["ftid"];
			
			
			$str.="<td class='hi' style='padding:30px;'><b>".$row["ftitle"]."<br></b><a href='displayfestivaldetail.php?nm=$nm'><img src='img\\".$row["fimg"]."'height='200' width='200' style='border:3px solid black;'></a></td>";
			

			if($x==5)
			{
				$str.="</tr>";
				$x=1;
			}

		 }
		 $str.="</table>";
		
		}	
?>
<?php
 
            $cnn=mysqli_connect("localhost","root","","elegance");
		    $qry="select * from festivaltype";
            $result=$cnn->query($qry);
			$str.="</table>";
			echo $str;
 ?>
 </div>
</div>
</div>
<?php
	include_once("footer.php");
?>
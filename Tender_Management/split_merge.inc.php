<?php
//$uname=$_SESSION['name'];
$p=$_REQUEST['pid'];
class split_merge
{


    /*------------------------------------------------------------------
    -                           SPLIT                                  -
    - This function splits a file into given numbers of parts          -
    --------------------------------------------------------------------*/
    function split_file($fid,$fpath,$fname,$parts_num)
    {
        $handle = fopen("$fpath/$fname",'rb') or die("error opening file");
        $file_size = filesize("$fpath/$fname");
        $parts_size = floor($file_size/$parts_num);
        $modulus=$file_size % $parts_num;
        for($i=0;$i<$parts_num;$i++)
        {
            if($modulus!=0 & $i==$parts_num-1)
                $parts[$i] = fread($handle,$parts_size+$modulus) or die("error reading file");
            else
                $parts[$i] = fread($handle,$parts_size) or die("error reading file");
        }
        //close file handle
        fclose($handle) or die("error closing file handle");

        //writing to splited files
		include("dbconnect.php");
		$q4=mysql_query("select * from dl_server_det order by distance desc");
		while($r4=mysql_fetch_array($q4))
		{
		$ar[]=$r4['name'];
		}
		$j=0;
        for($i=0;$i<$parts_num;$i++)
        {
		$fn='F'.$fid.'_s'.$i;
		
			if($i==$j)
			{
			$k=0;
			$j+=4;
			}
			else
			{
			$k=$i;
			}
		$server=$ar[$k];
			if(is_dir($server)==false)
			{
			mkdir($server);
			}
		
            $handle = fopen("$server/$fn", 'wb') or die("error opening file for writing");
            fwrite($handle,$parts[$i]) or die("error writing splited file");
			////
			
			$uname=$_SESSION['hname'];
			 $mqry = mysql_query("select max(id) as maxid from dl_file_det");
                    $mrow=mysql_fetch_array($mqry);
                    $id = $mrow['maxid']+1;
			 $fna="$fn.des";
				
               $ins = mysql_query("insert into dl_file_det(id,uname,fid,server,fname) values($id,'$uname','$fid','$server','$fna')");
			/////
			  $k++;
			  //$_SESSION['fid']=$fid;
        }
        //close file handle
        fclose($handle) or die("error closing file handle");
        return 'OK';
    }//end of function split_file

    /*------------------------------------------------------------------
    -                           MERGE                                  -
    - This function merges splited files that are splited with above   -
    - split_file function.                                             -
    --------------------------------------------------------------------*/
    function merge_file($fid,$fpath,$merged_file_name,$parts_num)
    {
        $content='';
        //put splited files content into content
        for($i=0;$i<$parts_num;$i++)
        {
			$fn='F'.$fid.'_s'.$i;
            $file_size = filesize("$fpath/$fn");
            $handle    = fopen("$fpath/$fn", 'rb') or die("error opening file");
            $content  .= fread($handle, $file_size) or die("error reading file");
        }
        //write content to merged file
        $handle=fopen("$fpath/$merged_file_name", 'wb') or die("error creating/opening merged file");
        fwrite($handle, $content) or die("error writing to merged file");
        return 'OK';
    }//end of function merge_file
    
}//end of class split_merge
?>
<?php
include("dbconnect.php");
$qry=mysql_query("select * from dl_file_det where fid='$fid' && server='Google'");
$qry1=mysql_query("select * from dl_file_det where fid='$fid' && server='Amazon'");
$qry2=mysql_query("select * from dl_file_det where fid='$fid' && server='Mooso'");
$qry3=mysql_query("select * from dl_file_det where fid='$fid' && server='Salesforce'");
?>
<form action="" method="post">
<label>
<?php
$row1=mysql_fetch_array($qry);
if($row1)
{
?>
<input type="text" name="textfield2" value="<?php echo $row1['fname'];?>"/>

 <?php
 $_SESSION['file1']=$textfield2;
  }
  ?>
   <?php
$row2=mysql_fetch_array($qry1);
if($row2)
{
?><tr><td>
<input type="text" name="textfield3" value="<?php echo $row2['fname'];?>"/></td></tr>
<?php
$_SESSION['file2']=$textfield3;
}
?>
   <?php
$row3=mysql_fetch_array($qry2);
if($row3)
{
?><tr><td>
<input type="text" name="textfield4" value="<?php echo $row3['fname'];?>"/></td></tr>
<?php
$_SESSION['file3']=$textfield4;
  }
  ?>
   <?php
$row4=mysql_fetch_array($qry3);
if($row4)
{
?><tr><td>

<input type="text" name="textfield" value="<?php echo $row4['fname'];?>"/></td></tr>
<?php
$_SESSION['file4']=$textfield;
  }
  ?>
</label>
<label>
<input name="fid" type="text" id="fid" />
</label>
<?php
//mysql_query("UPDATE user_files SET file1='$textfield2' WHERE id='$fid'");
?>
<label>
<input name="btn" type="submit" id="btn" value="Submit" />
</label>
</form>
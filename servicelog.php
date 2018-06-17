<?php require ("db.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <script language="JavaScript" type="text/javascript" src="https://www.servmill.com/administrator/jTPS/jquery.js"></script>
 <script language="JavaScript" type="text/javascript" src="https://www.servmill.com/administrator/jTPS/jTPS.js"></script>
 <link rel="stylesheet" type="text/css" href="https://www.servmill.com/administrator/jTPS/jTPS.css">
<script>
$(document).ready(function () {
	$('#commentTable').jTPS( {perPages:[5,12,15,50,'ALL'],scrollStep:1,scrollDelay:30,clickCallback:function () {
	// target table selector
    var table = '#commentTable';
	// store pagination + sort in cookie
	document.cookie = 'jTPS=sortasc:' + $(table + ' .sortableHeader').index($(table + ' .sortAsc')) + ',' + 'sortdesc:' + $(table + ' .sortableHeader').index($(table + ' .sortDesc')) + ',' +'page:' + $(table + ' .pageSelector').index($(table + ' .hilightPageSelector')) + ';';
	}
    });
	// reinstate sort and pagination if cookie exists
	var cookies = document.cookie.split(';');
	for (var ci = 0, cie = cookies.length; ci < cie; ci++) {
		var cookie = cookies[ci].split('=');
		if (cookie[0] == 'jTPS') {
			var commands = cookie[1].split(',');
			for (var cm = 0, cme = commands.length; cm < cme; cm++) {
				var command = commands[cm].split(':');
				if (command[0] == 'sortasc' && parseInt(command[1]) >= 0) {
					} else if (command[0] == 'sortdesc' && parseInt(command[1]) >= 0) {
						$('#commentTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click().click();
						} else if (command[0] == 'page' && parseInt(command[1]) >= 0) {
							$('#commentTable .pageSelector:eq(' + parseInt(command[1]) + ')').click();
						}
					}
				}
			}
			// bind mouseover for each tbody row and change cell (td) hover style
			$('#comentTable tbody tr:not(.stubCell)').bind('mouseover mouseout',
			function(e){
			// hilight the row
			e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                           }
                        );
                });
</script>
<style>
				body {
								font-family: Tahoma;
								font-size: 9pt;
				}
				#demoTable thead th {
								white-space: nowrap;
								overflow-x:hidden;
								padding: 3px;
				}
				#demoTable tbody td {
								padding: 3px;
				}
</style>

<meta charset="UTF-8">
</head>
<body>
<div id="container">
	<?php
		$id = $_GET['id'];
		$sname = mysql_query("SELECT * FROM services WHERE serviceid='$id'")or die(mysql_error());
		$snamea = mysql_fetch_array($sname);
	?>
	<center><h5><?php echo $snamea['servicename']; ?> comments</h5></center>
   <div id="bodycon"></div>
     <table id="commentTable"  width="700">
          <thead>
                <?php
                        echo '<tr>';
                        echo '<th sort="index" align="center">Suggested by</th>';
                        echo '<th sort="date" align="center">Date</th>';
                        echo '<th sort="description" align="center">comments</th>';
                        echo'</tr>';
                 ?>
          </thead>
    <tbody>
     <?php
	 $prodid = $_GET['id'];
	 $query = mysql_query("SELECT * FROM servicereport LEFT JOIN member ON member.memberid = servicereport.bidder LEFT JOIN services ON services.serviceid = servicereport.serviceid WHERE services.serviceid = '$prodid'")
	 or die(mysql_error());
	 while ($prod = mysql_fetch_array($query)){
	  echo"<tr>
          <td align='center'>".$prod['lastname'].", ".$prod['firstname']."</td>
          <td align='center'>".$prod['biddatetime']."</td>
          <td align='center'>".$prod['bidamount']."</td>
	 </tr>";
	}
      ?>
     </tbody>
     <tfoot class="nav">
        <tr>
         <td colspan=7>
                            <div class="pagination"></div>
                            <div class="paginationTitle">Page</div>
                            <div class="selectPerPage"></div>
                            <div class="status"></div>
         </td>
        </tr>
    </tfoot>
   </table>
  </div> <!-- container -->
 </body>
</html>

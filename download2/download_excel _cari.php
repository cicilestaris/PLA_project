<?php 
	//Fungsi header dengan mengirimkan raw data excel
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename = datektransport.xls");
	
?>

<table border='1' width="70%">
	<tr>
		<td bgcolor="#FFFFFFFF"><b>NO</b></td>
		<td bgcolor="#FFFFFFFF"><b>Node A</b></td>                       
		<td bgcolor="#FFFFFFFF"><b>Node B</b></td>
		<td bgcolor="#FFFFFFFF"><b>Client A</b></td>
		<td bgcolor="#FFFFFFFF"><b>Client B</b></td>
		<td bgcolor="#FFFFFFFF"><b>NMS</b></td>
		<td bgcolor="#FFFFFFFF"><b>NE A</b></td>
		<td bgcolor="#FFFFFFFF"><b>Board A</b></td>
		<td bgcolor="#FFFFFFFF"><b>Shelf A</b></td>
		<td bgcolor="#FFFFFFFF"><b>Slot A</b></td>
		<td bgcolor="#FFFFFFFF"><b>Port A</b></td>
		<td bgcolor="#FFFFFFFF"><b>NE B</b></td>
		<td bgcolor="#FFFFFFFF"><b>Board B</b></td>
		<td bgcolor="#FFFFFFFF"><b>Shelf B</b></td>
		<td bgcolor="#FFFFFFFF"><b>Slot B</b></td>
		<td bgcolor="#FFFFFFFF"><b>Port B</b></td>
	</tr>

	<?php
		include "config.php";
		if(isset($_POST['cari'])){
			$c = $this->input->POST('cari');
			/*$this->db->like('host_a', $c);
			$this->db->or_like('host_b', $c);
			$this->db->or_like('fa_a', $c);
			$this->db->or_like('fa_b', $c);
			$this->db->or_like('nms', $c);
			$this->db->or_like('ne_a', $c);
			$this->db->or_like('ne_b', $c);
			$query = $this->db->get('link_statis');*/
			$qrys=mysqli_query($conn,"select * from link_statis WHERE host_a like $c");
		}else{
			$qrys=mysqli_query($conn,"select * from link_statis");
		}		
		while($result=mysqli_fetch_array($qrys, MYSQLI_BOTH)) {
	
		echo'<tr>
			<td bgcolor="#FFFFFFFF">'.$result['id_link'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['host_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['host_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['fa_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['fa_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['nms'].'</td>
			
			<td bgcolor="#FFFFFFFF">'.$result['ne_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['board_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['shelf_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['slot_a'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['port_a'].'</td>
			
			<td bgcolor="#FFFFFFFF">'.$result['ne_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['board_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['shelf_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['slot_b'].'</td>
			<td bgcolor="#FFFFFFFF">'.$result['port_b'].'</td>
			
			</tr>';
	 } ?>
</table>
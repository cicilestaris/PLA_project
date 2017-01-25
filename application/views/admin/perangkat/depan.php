<title>Sync Dropdown</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
 
<style>
    body{
    font-family:Tahoma;
    font-size:12px;
    }
    select{
    padding:5px;
    border:1px solid #666666;
    -moz-border-radius: 5px; 
    -webkit-border-radius: 5px; 
    z-index: 9999 ;
    }
</style>
 
<div id="lokasi">
Pilih lokasi : 
<select name="id_lokasi" id="id_lokasi">
<?php
    echo "<option>- Pilih Nama lokasi -</option>";
    foreach($lokasi as $k)
    {
        echo "<option value='".$k['id_lokasi']."'>$k->nama_lokasi</option>";
    }
?>
</select>
</div>
 
    <div id="ne">
     
    </div>
     
          <script type="text/javascript"> 
        $("#id_lokasi").change(function(){
                var id_lokasi = {id_lokasi:$("#id_lokasi").val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url(); ?>index.php/link/ne",
               data: id_lokasi,
               success: function(msg){
               $('#ne').html(msg);
               }
            });
              });
       </script>
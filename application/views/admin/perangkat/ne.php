Pilih ne : 
<select name="id_ne" id="id_ne">
    <?php
    if(count($ne->result_array())>0)
    {
        echo "<option>- Pilih Nama ne -</option>";
        foreach($ne->result_array() as $k)
        {
        echo "<option value='".$k['id_ne']."'>$k['nama_ne']</option>";
        }
    }
    else{
        echo "<option>- Data Belum Tersedia -</option>";
    }
    ?>
</select>
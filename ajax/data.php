
<?php
$str = $_GET['str'];?>
<!-- NODE B -->
                    
                      </div>
                       <label >Node B <span class="required">*</span>
                        </label>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12" id="nama_lokasi">
                        <select class="form-control" name="nama_lokasiB" id="nama_lokasiB" onchange="ajaxlokasiB(this.value)">
                                 <option value="">Lokasi</option>
                                <?php foreach($lokasi as $location){?>
                                <option value="<?php echo $location->id_lokasi;?>"><?php echo $location->nama_lokasi?></option>
                                <?php } ?>
                        </select>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                          

                              <select class="form-control" name="neB" id="berubahB" onchange="ajaxneB(this.value)" >
                                <option value="">NE</option>
                              </select>
                          
                        </div>
                         <div class="col-md-3 col-sm-3 col-xs-12">
                            
                           

                              <select class="form-control" name="boardB" id="boardB" onchange="ajaxboardB(this.value)"  <?php echo set_value('board');?>>
                                <option value="">Board</option>
                              </select>
                          
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            
                        

                              <select class="form-control" name="shelfB" id="shelfB"  onchange="ajaxshelfB(this.value)" <?php echo set_value('shelf');?>>
                                <option value="">Shelf</option>
                              </select>
                          
                        </div>
                  
                           
                      </div>
                      <div class="item form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            

                              <select class="form-control" name="slotB" id="slotB"  onchange="ajaxslotB(this.value)"<?php echo set_value('slot');?>>
                                <option value="">Slot</option>
                              </select>
                          
                        </div>
            
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            
                    
                              <select class="form-control" name="portB" id="portB" <?php echo set_value('board');?>>
                                <option value="">Port</option>
                              </select>
                          
                        </div>
                        </div>



 

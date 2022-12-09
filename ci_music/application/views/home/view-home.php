<!-- Page Content  -->
<div id="content-page" class="content-page">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="iq-card iq-realease">
                     <div class="iq-card-header d-flex justify-content-between border-0">
                        <div class="iq-header-title">
                           <h4 class="card-title"><?= $subtitle ?></h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <?php 
                        if ($this->session->userdata("access") == "User"){
                        ?>
                            <div class="row" style="float:right;margin:1em 1em">
                                <a href="<?= base_url('page/songs') ?>" class="button-style"><i class="las la-plus-circle icon-size"></i></a>
                            </div>
                        <?php
                        }    
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center bg-danger text-white">ID</th>
                                        <?php 
                                        if ($this->session->userdata("access") == "User"){
                                        ?>
                                            <th class="text-center bg-danger text-white">Update At</th>
                                        <?php } ?>
                                        <?php 
                                        if ($this->session->userdata("access") == "Administrator"){
                                        ?>
                                        <th class="text-center bg-danger text-white">Client</th>
                                        <?php } ?>
                                        <th class="text-center bg-danger text-white">Title</th>
                                        <?php 
                                        if ($this->session->userdata("access") == "Administrator"){
                                        ?>
                                        <th class="text-center bg-danger text-white">Label</th>
                                        <?php } ?>
                                        <?php 
                                        if ($this->session->userdata("access") == "Administrator"){
                                        ?>
                                        <th class="text-center bg-danger text-white">Created At</th>
                                        <?php } ?>
                                        <th class="text-center bg-danger text-white">Status</th>
                                        <th class="text-center bg-danger text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($list_lagu) > 0){ ?>
                                        <?php foreach ($list_lagu as  $value) {?>
                                            <?php if($this->session->id == $value["user_id"] && $this->session->access == "User") {?>
                                                <tr>
                                                    <td><?= $value["lagu_id"] ?></td>
                                                    <td><?= $value["lagu_update_at"] ?></td>
                                                    <td><?= $value["lagu_title"] ?></td>
                                                    <td><?= $value["lagu_status"] ?></td>
                                                    <td></td>
                                                </tr>
                                            <?php } else if($this->session->access == "Administrator") {?>
                                                <tr>
                                                    <td><?= $value["lagu_id"] ?></td>
                                                    <td><?= $value["user_name"] ?></td>
                                                    <td><?= $value["lagu_title"] ?></td>
                                                    <td><?= $value["lagu_record_label"] ?></td>
                                                    <td><?= $value["lagu_created_at"] ?></td>
                                                    <td><?= $value["lagu_status"] ?></td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>    
                                        <?php } ?>    
                                    <?php }else{ ?>
                                    <?php }?>    
                                </tbody>
                            </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wrapper END -->
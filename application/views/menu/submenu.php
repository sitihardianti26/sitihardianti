<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

   <div class="row">
        <div class="col-lg">

             <!-- pesan error -->
             <?php if (validation_errors()) : ?>    
                 <div class="alert alert-success" role="alert">
                   </div>
             <?php endif; ?>
             <?= $this->session->flashdata('message'); ?>
             <!-- akhir pesan error -->

             <!-- tombol tambah -->
             <a href="" class="btn btn-primary mb-3" class="btn btn-primary"
             data-toggle="modal"
             data-target="#logoutModal">Add Menu</a>
             <!-- Tabel -->
             <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($SubMenu as $sm) : ?>
                          <tr>
                              <th scope="row"><?=$i; ?></th>
                              <td><?= $sm['title']; ?></td>
                              <td><?= $sm['menu']; ?></td>
                              <td><?= $sm['url']; ?></td>
                              <td><?= $sm['icon']; ?></td>
                              <td><?= $sm['is_active']; ?></td>
                              <td>
                                  <a href="" class="badge badge-success" data-toggle="modal"
                                  data-target="#exampleModalsubedit<?= $sm['id']; ?>">edit</a>
                                  <a href="<?= base_url('menu/hapus/'); ?><?= $sm['id']; ?>"
                                      class="badge badge-danger" onlick="return confirm('yakin akan dihapus?');">
                                      Delete</a>
                              </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- akhir tabel -->
            

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Button trigger modal -->
</div>
</div>
<!-- End of Main Content -->



<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="newMenuModalLabel">Add new Menu</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url('menu/submenu'); ?>" method="post">
            <div class="modal-body">
                <div class="from-group">
                     <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                     </div>
                     <div class="form-group">
                     <input type="text" class="form-control" id="url" name="url" placeholder="SubMenu url">
                </div>
                <div class="form-group">
                     <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                <div class="form-group">
                     <select name="menu_id" id="menu_id" class="form-control">
                       <option value="" class="value">Select Menu</option>
                       <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>"
                        <?php endforeach; ?>
                    </select>
                </div>
              
                </div>
                <div class="form-group">
                     <div class="form-check">

                          <input class="form-check-input" type="checkbox" value="1" name="is_active"
                          id="is_active" aria-label="Checkbox for following text input" checked>
                          <label for="is_active" class="form_check_label">Active?</label>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                     <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Add</button>
                 </div>
             </form>
          </div>
      </div>
  </div>

  <!-- Modal edit -->

  <?php foreach ($SubMenu as $sm) : ?>

<div class="modal fade" id="exampleModalsubedit<?= $sm['id']; ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabelsubedit">Edit submenu</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('menu/submenuedit/'); ?>" method="post">
            <div class="modal-body">
                <div class="from-group">
                     <input type="text" value="<?= $sm['title'] ?>" class="form-control" id="title" name="title" placeholder="Submenu title">
                     </div>
                     <div class="form-group">
                     <input type="hidden" class="form-control" id="id" name="id" readonly value="<?= $m['id'] ?>" >
                     </div>
                    

                <div class="form-group">
                   <select name="menu_id" id="menu_id" class="form-control">
                      <option value="<?= $sm['menu_id']; ?>"><?=$sm['menu']; ?></option>
                      <?php foreach ($menu as $m) : ?>
                         <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
                </select>
                  </div>
                <div class="form-group">
                     <input type="text" value="<?= $sm['icon'] ?>" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                     </div>
                <div class="form-group">
                     <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" id="is_active"
                          name="is_active" checked>
                          <label class="form-check-label" for="is_active">
                          active?
                     <select name="menu_id" id="menu_id" class="form-control">
                       <option value="<?= $m['menu_id']; ?>"><?= $m['menu']; ?></option>
                       <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>"
                        <?php endforeach; ?>
                    </select>
                </div>
              
                </div>
                <div class="form-group">
                     <div class="form-check">

                          <input class="form-check-input" type="checkbox" value="1" name="is_active"
                          id="is_active" aria-label="Checkbox for following text input" checked>
                          <label for="is_active" class="form_check_label">Active?</label>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                     <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Add</button>
                 </div>
             </form>
          </div>
      </div>
  </div>
  <?php endforeach; ?>



         
         






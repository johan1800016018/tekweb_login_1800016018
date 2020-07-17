<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>
<body>
    <div class="container">
    <p><h3><br><a href="/login/public/">Keluar</a></br></h3></p>
  
    
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Tambah User</button>
 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama depan</th>
                    <th>Nama belakang</th>
                    <th>Email</th>
                    <th>Password</th>
                   
                </tr>
            </thead>
            <tbody>
             <!-- $tuser adalah nama tabel  -->
            <?php foreach($user as $row):?> 
                <tr>
                    <td><?= $row->firstname;?></td>
                    <td><?= $row->lastname;?></td>
                    <td><?= $row->email;?></td>
                    <td><?= $row->password;?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-edit" data-id="<?= $row->firstname;?>" data-name="<?= $row->lastname;?>" data-email="<?= $row->email;?>" data-password="<?= $row->password;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row->firstname;?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>    
        </table>
 
    </div>
     
    <!-- Modal Add User-->
    <form action="<?= base_url('user_login/save/') ?>" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>UserID</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firstname">
                </div>
                 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="lastname" placeholder="name">
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control" name="password" placeholder="password">
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Add Product-->
 
    <!-- Modal Edit Product-->
    <form action="<?= base_url('/user_login/update/') ?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                    <label>UserID</label>
                    <input type="text" class="form-control firstname" name="firstname" disabled>
                </div>
                 
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control lastname" name="lastname">
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control email" name="email">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="text" class="form-control password" name="password">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="firstname" class="firstname">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Edit Product-->
 
    <!-- Modal Delete Product-->
    <form action="<?= base_url('/user_login/delete/') ?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Yakin ingin menghapus user ini?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="firstname" class="firstname">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <!-- End Modal Delete Product-->
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
 
        // get Edit Product
        $('.btn-edit').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            const name = $(this).data('name');
            const email = $(this).data('email');
            const password = $(this).data('password');
           
            // Set data to Form Edit
            $('.firstname').val(id);
            $('.lastname').val(name);
            $('.email').val(email);
            $('.password').val(password);
            // Call Modal Edit
            $('#editModal').modal('show');
        });
 
        // get Delete Product
        $('.btn-delete').on('click',function(){
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.firstname').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
     
         
    });
</script>
</body>
</html>
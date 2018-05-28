<section class="content-header">
    <h1>
        User details (<?= $user['username'] ?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
        <li><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?= $user['username'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info center">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-address-card-o"></i> User Information
                        <a class="pull-right" href="<?= site_url("User/edit/" . $user['user_id']); ?>">
                            Edit
                        </a>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="formTable">
                        <tr>
                            <th>Username</th>
                            <td> 
                                : <?= $user['username'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Contact Person</th>
                            <td> 
                                : <?= $user['contact_person'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Contact Number</th>
                            <td> 
                                : <?= $user['contact_number'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> 
                                : <?= $user['email'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td> 
                                : <?= $user['contact_number'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td> 
                                : <?= $user['address'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Allowed Devices</th>
                            <td> 
                                : <?= $user['allowed_devices'] ?>
                            </td>
                        </tr>
                      
                        
                    </table>
                </div>
            </div>
            <br>
           
        </div>

        <div class="col-md-8">
            <div class="box box-success center">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-book"></i>
                        Books 
                        <a class="pull-right" href="#" data-toggle="modal" data-target="#bookModal">
                            Add
                        </a>
                    </h3>
                </div>
                <div class="panel-body">
                <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Books</a>
                        </li>
                       
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                   
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="formTable table dataTable">
                            <thead>
                                <tr>
                                    <th>Book</th>
                                    <th>file</th>
                                    <th></th>
                                    
                                </tr>
                            
                            <thead>
                            <tbody>
                                <?php foreach($user_books as $row){ ?>
                                <tr>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['file']; ?></td>
                                    <td><a href="<?= site_url('User/delete_user_book/'.$row['user_books_id']."/".$user['user_id']); ?>" class="btn btn-danger">Remove</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-8">
        <div class="box box-primary center">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-phone"></i> Devices
                      
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="formTable">
                       <thead>
                            <tr>
                                <th>Device ID</th>
                                <th>Last Login</th>
                                <th>Tokens</th>
                                <th></th>
                            </tr>
                       </thead>
                       <tbody>
                        <?php 
                            $validity = array(
                                "SHORT" => "3 days",
                                "MEDIUM" => "7 days",
                                "LONG" => "14 days"
                            );
                        foreach($user_device as $row){ ?>
                        <tr>
                            <td><?= $row['device_id']; ?></td>
                            <td><?= count($row['tokens']) ? Date("Y-m-d",strtotime($row['tokens'][0]['timestamp'])) : ''; ?></td>
                            <td style="width:35%">
                                <table style="width:100%">
                                <tr>
                                <th>Device token id</th>
                                    <th>Value</th>
                                    <th>Expires in </th>
                                </tr>
                                    <?php foreach($row['tokens'] as $t){ ?>
                                    <tr>
                                        <td><?= $t['user_device_token_id']; ?></td>
                                        <td style="width:60%;"><?= $t['token']; ?></td>
                                        <td><?= $validity[$t['type']]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            
                            </td>
                            <td><a href="<?= site_url('User/delete_device/'.$row['user_device_id']."/".$user['user_id']); ?>" class="btn btn-danger">X</a></td>
                        </tr>
                        <?php } ?>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
     
    </div>
</section>


<!-- Add Book Modal -->
<div id="bookModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Book</h4>
      </div>
      <div class="modal-body">
        
        <form method="POST">
        <label>Select a book</label>
        <select name="book" class="form-control">
                                    <?php foreach($books as $row){ ?>

                                    <option value="<?= $row['books_id']; ?>"><?= $row['name']; ?></option>
                                    <?php } ?>
        </select>
        <br>
        <input type="submit" value="save" name="dummy" class="btn btn-info pull-right">
        <br><br>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

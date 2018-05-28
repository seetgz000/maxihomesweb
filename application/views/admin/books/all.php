<section class="content-header">
    <h1>
        Books
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Book/all"><i class="fa fa-users"></i> Book</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Book</h4>

               
                    <?php if($this->session->userdata('user_type') == "admin"){ ?>
                <a href='<?php echo site_url('books/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
                    <?php } ?>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Books</th>
                                <th>File</th>
                                <?php if($this->session->userdata("user_type") == "admin"){ ?>
                                <th></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($books as $book) {
                                ?>
                                <?php if($this->session->userdata("user_type") == "admin"){ ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>books/edit/<?= $book['books_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>books/edit/<?= $book['books_id'] ?>"><?php echo $book['name']; ?></a></td>
                                    <td><a href="<?= base_url() ?>books/edit/<?= $book['books_id'] ?>">
                                
                                            <a href="<?php echo site_url().$book['file']; ?>"
                                            class="btn btn-info"
                                            >Download</a>
                                             
                                    </td>
                                    <?php if($this->session->userdata("user_type") == "admin"){ ?>
                                    <td><a href="<?= site_url('books/delete/'.$book['books_id']); ?>" class="btn btn-danger">delete</a></td>
                                    <?php } ?>
                                </tr>
                                <?php }else{ ?>
                                    <tr>
                                    <td><a href="<?= base_url() ?>books/view/<?= $book['books_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>books/view/<?= $book['books_id'] ?>"><?php echo $book['name']; ?></a></td>
                                    <td><a href="<?= base_url() ?>books/view/<?= $book['books_id'] ?>">
                                
                                            <a href="<?php echo site_url().$book['file']; ?>"
                                            class="btn btn-info"
                                            >Download</a>
                                             
                                    </td>
                                    <?php if($this->session->userdata("user_type") == "admin"){ ?>
                                    <td><a href="<?= site_url('books/delete/'.$book['books_id']); ?>" class="btn btn-danger">delete</a></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
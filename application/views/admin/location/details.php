<section class="content-header">
    <h1>
        Location details
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Location/all"><i class="fa fa-book"></i> Location</a></li>
        <li><a href="<?= base_url() ?>location/details/<?= $location['location_id'] ?>"><?= $location['name'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="box box-primary center">
                <div class="box-header">
                    <h3 class="panel-title">Location Details
                        <a class="pull-right" href="<?= site_url("location/edit/" . $location['location_id']); ?>">
                            Edit
                        </a>
                    </h3>
                </div>
                <hr/>
                <div class="box-body">
                    <table class="formTable">
                        <tr>
                            <th>Location Name</th>
                            <td> 
                                : <?= $location["name"] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Location Address</th>
                            <td> 
                                : <?= $location["address"] ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-header">
    <h1>
        Event details
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Event/all"><i class="fa fa-book"></i> Event</a></li>
        <li><a href="<?= base_url() ?>Event/details/<?= $event['event_id'] ?>"><?= $event['title'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="box box-primary center">
                <div class="box-header">
                    <h3 class="panel-title">Event Details
                        <a class="pull-right" href="<?= site_url("event/edit/" . $event['event_id']); ?>">
                            Edit
                        </a>
                    </h3>
                </div>
                <div class="box-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a  data-toggle="tab" href="#event">Event Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="event">
                            <div class="event-thumbnail-container">
                                <img class="thumbnail img-responsive" src="<?= base_url() . $event['thumbnail'] ?>">
                            </div>
                            <h3><?= $event["title"] ?></h3>
                            <hr/>
                            <h4>Description</h4>
                            <hr/>
                            <p class="prewrap"><?=$event["description"]?></p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
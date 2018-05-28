<br />
<div id="user_add_content">
    <div class="mediumBox">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-header">
                        Add Event
                    </div>
                    <div class="box-body">

                        <div class="alert alert-danger hidden user_form_alert" id="form_alert">

                        </div>
                        <form id="event_form" method="POST" action="<?php echo site_url("event/add"); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required id="form_title" placeholder="Title">
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Banner</label>
                                    <input type="file" class="form-control" name="banner" id="form_banner">
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Created By</label>
                                    <select class="form-control" name="created_by">
                                        <?php
                                        foreach ($users as $row) {
                                            ?>
                                            <option value="<?= $row['user_id'] ?>"><?= $row['username'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Court</label>
                                    <select class="form-control" name="court_id">
                                        <?php
                                        foreach ($courts as $row) {
                                            ?>
                                            <option value="<?= $row['court_id'] ?>"><?= $row['name'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Date</label>
                                    <input type="text" class="form-control pull-right datepicker" placeholder="Date" name="date" required id="form_date">
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Time</label>
                                    <input type="text" class="form-control pull-right timepicker" placeholder="Time" name="time" required id="form_time">
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Link</label>
                                    <input type="text" class="form-control pull-right" placeholder="Link" name="link" id="form_link">
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                    <label>Approved</label>
                                    <br/>
                                    <label><input type="checkbox" value="1" name="approved"> Yes</label>
                                </div>
                            </div>
                            <br/>
                            <input type="submit" class="btn btn-flat btn-info pull-right" value="add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function form_submit(form) {
        var data = new FormData(form);
        var url = $(form).attr("action");
        $.ajax({
            url: url,
            data: data,
            processData: false,
            contentType: false,
            type: "POST",
            success: function (data) {
                if (data.status) {
                    $("body").loadingModal({
                        text: "Successfully added"
                    });
                    setTimeout(function () {
                        window.location = "<?= site_url('Event'); ?>";
                    }, 1500);
                } else {
                    $(".user_form_alert").html(data.message);
                    $(".user_form_alert").removeClass("hidden");
                }
            },

            dataType: "JSON"
        });
    }

    $(document).ready(function () {
        var event_form = document.getElementById("event_form");

        event_form.addEventListener("submit", function (e) {
            e.preventDefault();
            form_submit(event_form);
        });

    });

</script>
<section class="content-header">
    <h1>
        About Slider details
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>AboutSlider/all"><i class="fa fa-book"></i> About Slider</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="box box-primary center">
                <div class="box-header">
                    <h3 class="panel-title">About Slider Details
                        <a class="pull-right" href="<?= site_url("AboutSlider/edit/" . $about_slider['about_slider_id']); ?>">
                            Edit
                        </a>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="tab-pane fade in active" id="about_slider">
                        <div class="about-slider-thumbnail-container">
                            <img class="thumbnail img-responsive" src="<?= base_url() . $about_slider['thumbnail'] ?>">
                        </div>
                        <h5>Title : <?= $about_slider["title"] ?></h5>
                        <h5>Link : <?= $about_slider["link"] ?></h5>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
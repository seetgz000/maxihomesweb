<section class="content-header">
    <h1>
        Article details
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Article/all"><i class="fa fa-book"></i> Article</a></li>
        <li><a href="<?= base_url() ?>article/details/<?= $article['article_id'] ?>"><?= $article['title'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="box box-primary center">
                <div class="box-header">
                    <h3 class="panel-title">Article Details
                        <a class="pull-right" href="<?= site_url("article/edit/" . $article['article_id']); ?>">
                            Edit
                        </a>
                    </h3>
                </div>
                <div class="box-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a  data-toggle="tab" href="#article">Article Information</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="article">
                            <div class="article-thumbnail-container">
                                <img class="thumbnail" src="<?= base_url() . $article['thumbnail'] ?>">
                            </div>
                            <h3><?= $article["title"] ?></h3>
                            <h4>category : <?= $article["article_category"] ?></h4>
                            <h4>views : <?= $article["views"] ?></h4>
                            <hr/>
                            <h4>Description</h4>
                            <hr/>
                            <p class="prewrap"><?=$article["description"]?></p>
                            <hr/>
                            <h4>Content</h4>
                            <hr/>
                            <?= $article["content"] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
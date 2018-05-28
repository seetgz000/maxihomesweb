<section class="content-header">
    <h1>
        Add article
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>article/all"><i class="fa fa-articles"></i> Article</a></li>
        <li><a href="<?= base_url() ?>article/add"> Add article</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Add Article </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>Article/add" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                                <img id="thumbnail" src="<?= site_url(); ?>/images/default-article.jpg" class="profile_picture">

                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                            </div>
                        </div>
                        <hr />
                        <label>Article Title</label>
                        <input type='text' name='title' class='form-control' placeholder="Article Title" required/>
                        <label>Article Category</label>
                        <select class="form-control" name="article_category_id">
                            <?php
                            foreach ($article_categories as $row) {
                                ?>
                                <option value="<?= $row["article_category_id"] ?>"><?= $row["article_category"] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                         <label>Article Content</label>
                         <br>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addImageModal">Add image</button>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addLinkModal">Add link</button>
                         <hr>
                        <textarea class="form-control" rows="10" required name="content" placeholder="Article Content" id="textarea"></textarea>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="image_form" enctype="multipart/form-data">
                <input type="file" class="form-control" id="image_input" name='image'>
                <input type="hidden" name="dummy" value="123">
          </form> 
          <input type="text" class="form-control" placeholder="get your link here" id="image_output">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addLinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Link</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="link_form">
                <input type='url' class='form-control' name='link'>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function () {

        $("#image_input").change(function(){
            var form_data = new FormData($("#image_form")[0]);

            $.ajax({
                type: "POST",
                url: "<?= site_url('Article/add_image'); ?>",
                data: form_data,
                processData: false,
                contentType: false,
                dataType : 'json',
                success: function (response) {
                    if(response.status){
                       
                        $("#image_output").val( "<?= site_url(); ?>" + response.data);
                    }else{
                        alert(response.message);
                    }
                }
            });

        });
        $('#textarea').richText({
            // text formatting
            bold: true,
            italic: true,
            underline: true,

            // text alignment
            leftAlign: true,
            centerAlign: true,
            rightAlign: true,

            // lists
            ol: true,
            ul: true,

            // title
            heading: true,

            fontColor: true,

            // uploads
            imageUpload: true,
            fileUpload: false,

            // media
            videoEmbed: false,

            // link
            urls: true,

            // tables
            table: true,

            // code
            removeStyles: true,
            code: true,

            // colors
            colors: [],

            // dropdowns
            fileHTML: '',
            imageHTML: '',
            
            // developer settings
            useSingleQuotes: false,
            height: 0,
            heightPercentage: 0,
            id: "",
            class: "",
            useParagraph: false
        });
    });
</script>
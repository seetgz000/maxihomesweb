<!DOCTYPE html>
<html>
	<head>
	<title>admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/css/new_design.css">


    </head>
	<body>
    
		<div class="course_page_wrapper">
			<div class="container course_content_wrapper">

			
				<div class="books_logo">
					<img class="img-fluid" src="<?php echo site_url(); ?>images/logo.png" style="max-height:100px;max-width:200px;"/>
				</div>
				
				<!-- Courses Grid -->
				<div class="container course_container px-5">
					
					
				<h3 class="top_title">Select Your Course Now
					<a class="btn_logout" href="<?= site_url('Access/logout'); ?>"><span class="fa fa-sign-out pull-right" ></span> </a>
				</h3>

					<div class="row">
					<?php foreach($books as $book){ ?>
						<div class="col-lg-2 col-md-3 col-sm-4 mb-4" onclick="openModal(<?=$book['books_id']; ?>)">
							<div class="card course_item">
								<a data-toggle="modal"  style="height:100%;" data-target="#exampleModalCenter"><img class="card-img-top p-3 course_books" src="<?php echo site_url().$book['thumbnail']; ?>"></a>
							</div>
							<div class="course_title"><?= $book['name']; ?></div>
							<div class="course_decription"><?= $book['description']; ?></div>
								
						</div>
					<?php } ?>
					</div>
				</div>
				<!-- End of Courses Grid -->
				
				
				<!-- Courses Modal -->
				<div class="modal fade" id="bookModal" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal">
									<span>&times;</span>
								</button>
								<div class="row pt-4">
									<div class="col-md-6">
										<img class="modal_course_img" id="bookImg" src="<?php echo site_url(); ?>images/ukubear.png">
									</div>
									<div class="col-md-6">
										<h4 id="bookTitle">Title</h4>
										<p  id="bookDescription">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque enim arcu, interdum pretium dictum sit amet, malesuada scelerisque tellus. Aliquam sed neque vehicula...</p>
										<a target="_blank" id="bookLink"><button type="button" class="btn btn-primary float-right">Download</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End of Courses Modal -->
        <script>
            function openModal(id){
                $.post("<?= site_url('Books/getBook'); ?>",
                {
                    book_id: id
                },
                function(res){
                    if(res.status == "SUCCESS"){
                        $("#bookImg").attr('src',"<?= site_url(); ?>"+ res.data.thumbnail);
                        $("#bookTitle").html(res.data.name);
                        $("#bookDescription").html(res.data.description);
                        $("#bookLink").attr('href',res.data.file);

                        $("#bookModal").modal("show");
                    }
                    
                },'json'
                );

            }
        </script>
	
	</body>


</html>
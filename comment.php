<?php
       include ('inc/header_f.php');
?>

<body>
<script src="jquery-3.7.1.min.js"> </script>

<div class="page-holder">
  
  <!-- navbar-->
  <?php
        include('inc/topbar.php');
  ?>
  <section class="py-5 bg-light">
    <div>
      <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
        <div class="col-lg-6">
          <h1 class="h2 text-uppercase mb-0">Shop</h1>
        </div>
        <div class="col-lg-6 text-lg-right">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
</div>

<form id="commentForm">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="username">Username</label>
        <input type="text" id="username" name="name" class="form-control" placeholder="Username">
      </div>
      <div class="col-md-4 mb-3">
        <label for="description">Comment</label>
        <input type="text" id="description" name="disc" class="form-control" placeholder="Description">
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Add Comment</button>
      </div>
    </div>
  </div>
</form>

<script>
$(document).ready(function() {
    $('#commentForm').on('submit', function(e) {
        e.preventDefault(); // منع النموذج من الإرسال بالطريقة التقليدية

        $.ajax({
            type: 'POST',
            url: 'insert_comment.php',
            data: $(this).serialize(), // جمع البيانات من النموذج
            success: function(response) {
                alert('Comment added successfully!'); // عرض رسالة عند النجاح
                console.log(response); // عرض الاستجابة في وحدة التحكم
                
                // تفريغ الحقول بعد النجاح
                $('#commentForm')[0].reset();
            },
            error: function() {
                alert('There was an error submitting the comment.');
            }
        });
    });
});
</script>

</body>
</html>

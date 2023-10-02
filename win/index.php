<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
include './style.css';




?>

<?php include './header.php'; ?>

  


 


<div class="container">
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto">
    <img src="projectIt.jpg" alt="">
     <h2 class="display-6 font-weight-normal">اربح مع سلمان</h1>
    <p class="lead font-weight-normal">باقي على فتح التسجيل</p>
    <h3 class="sss" id="demo"></h3>
    <p class="lead font-weight-normal">للسحب على ربح نسخة مجانية من برنامج</p>
   </div>

  <div class="container">
    <h3> للدخول في السحب اتبع مايلي:</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن اسئلة وأجوبة حره للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل اسمك وايميلك </li>
  <li class="list-group-item">بنهاية البث سيتم أختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانيه من برنامج كامتازيا</li>
</ul>
</div>
</div>



<div class="container">
<div class="position-relative text-center">
  <div class="col-md-5 p-lg-5 mx-auto my-5 ">
<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
  <h3> الرجاء ادخل معلوماتك</h3>
  <div class="mb-6" >
    <label for="firstName"  class="form-label">الاسم الاول </label>
    <input type="text" name="firstName" class="form-control" id="firstName" value ="<?php echo $firstName ?>">
    <div  class="form-text error"><?php echo $errors['firstNameError']?></div>
  </div>
 

  <div class="mb-3">
    <label for="lastName"  class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName"  value ="<?php echo $lastName ?>">
    <div  class="form-text error"><?php echo $errors['lastNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="email"  class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value ="<?php echo $email ?>"  >
    <div  class="form-text error"><?php echo $errors['emailError']?></div>
  </div>

   <div class="mb-3" >
  <input type="checkbox" id="approve" name="approve" value="approve">
  <label for="approve"> بالضغط على هذا الخيارات فأنت توافق على تسجيل معلوماتك في قاعدة البيانات الخاصة بهذا النموذج
    فقط , حيث لن يتم استخدام هذه المعلومات في اي مكان اخر ولايحق لأي جهة شراء هذه المعلومات الا بعد الموافقة الشخصية بعد ارسال بريد الكتروني يوضح كيفية استخدام هذه المعلومات 
  </label><br>
</div>
</div>
   

   
  <button type="submit" name="submit" class="btn btn-primary mb-3">ارسال المعلومات</button>
</form>

</div>
</div>

<div class="loader-con" id="loaderId">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-5" id="winner">
<button type="button" id="winner" class="btn btn-primary winner">
 اختيار الرابح 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة</h5>
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"> <h1 class="card-title"><?php echo htmlspecialchars($user['firstName'])
     . ' ' . htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach; ?> 

        <button type="submit" name="submit" class="btn btn-primary mb-3 gap-1 col-3 mx-auto my-5">الف مبروك</button>
      </div>
       
    </div>
  </div>
</div>


     
 
   <script src="./js/script.js"></script>
    </div>


 

  
   
    <link rel="stylesheet" href="./style1.css">
    
    <!-- <script src="./parts/footer.php"></script>
    <script src="./parts/header.php"></script> -->
 
    <?php include_once './footer.php'; ?>
  

   <script src="./loader.js"></script>


 
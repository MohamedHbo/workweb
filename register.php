<?php
include_once("include/header.php");
?>

  <div class="col-md-2 col-lg-2"></div>
   <section class="col-md-8 col-lg-8 art_bg">
    <h1>تسجيل عضوية جديدة</h1>
    <form action="" class="form-horizontal">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label"> اسم المستخدم :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" placeholder="إدخل الأسم">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">  البريد :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" placeholder="إدخل الأسم">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">  كلمة المرور :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" placeholder="إدخل الأسم">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">  تأكيد الكلمة :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" placeholder="إدخل الأسم">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">  الجنس :</label>
            <div class="col-sm-4">
                <select class="form-control">
                    <option value="">إختر</option>
                    <option value="">ذكر</option>
                    <option value="">أنثى</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">   الصورة الرمزية :</label>
            <div class="col-sm-4">
                <input type="file" class="form-control" name="username">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <button type="submit" class="btn btn-danger btn-block">تسجيل</button>
            </div>
        </div>
    </form>
   </section>

<?php
include_once("include/footer.php");
?>
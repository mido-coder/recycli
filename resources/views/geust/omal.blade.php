
<!DOCTYPE html>
<html>
<head>
<title>نظفني</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<style type="text/css">
body{
  max-width: 880px;
  max-height: 100%;
  margin: auto;
  background: white;
  padding: 10px;
}
.w3-row-padding{
  width: 200%

}
</style>
</head>
<body>


<hr>
<h2 class="w3-center">تقديم طلب</h2>
</div>

<div class="w3-row-padding">

<div class="w3-half">
<form class="w3-container w3-card-4" action= "{{url('omals')}}"  method="POST" enctype="multipart/form-data" >
  @csrf
  <h2>ادخل معلوماتك و سيتصل بك فريقنا في اقرب وقت</h2>
  <div class="w3-section">      
    <input class="w3-input" type="text" name="phone" >
    <label>رقم الهاتف</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" name="location" >
    <label>العنوان</label>
  </div>
  <div class="w3-section">      
    <input class="w3-input" type="text" name="address" >
    <label>اضافة تفاصيل </label>
  </div>

  <div class="w3-row">
 
    
    <br><br>
    <button type="submit" > طلب الخدمة</button>
  



  </div>
</form>

</div>

</div>
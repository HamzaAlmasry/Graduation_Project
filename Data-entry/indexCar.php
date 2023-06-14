<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ادخل البيانات</title>

    <link rel="stylesheet" href="../font/goole-font.css">

    <link rel="stylesheet" href="cars.css">

</head>
<body>
   <div class="body">
       <h3>ادخل البيانات السيارة التاليه</h3>
       <form action="insert.php" method="post" enctype="multipart/form-data">
        <!-- start select for car manufacturer -->
        <div>
            <label for="select_1"> ماركة السيارة</label>
            <select id="select_1" name="Carbrand" title="Car Manufacturer" >
            <option value="">ماركة السياره</option>
            <option value="شيفروليه">شيفروليه</option>
            <option value="كيا">كيا</option>
            <option value="بيجو">بيجو</option>
            <option value="هيوندا">هيوندا</option>
            <option value="سكودا">سكودا</option>
            <option value="فيات">فيات</option> 
            <option value="اوبل">اوبل</option>
            <option value="دي اس">دي اس</option>
            <option value="تي واي دي">ني واي دي</option>
            <option value="تويوتا">تويوتا</option> 
            <option value="رينو"> رينو</option>
            <option value="هوندا">هوندا</option>
            <option value="الفاروميو">الفاروميو</option>
            <option value="نيسان">نيسان</option> 
            <option value="ني ام دابليو">بي ام دابليو</option>
            <option value="اودي">اودي</option>
            <option value="مرسيدس">مرسيدس</option>
            <option value="شانجان">شانجان</option> 
            <option value="هافال">هافال</option>
            <option value="جاكوار">جاكوار</option>
            <option value="جيب">جيب</option>
            <option value="شيري">شيري</option> 
            <option value="ام جي">ام جي</option>
            <option value="لأنسر">لأنسر</option>
            </select>
        </div>
        <!-- Eend select for car manufacturer -->

    <!-- start input text for Mark tyep -->
        <div>
            <label  id="label_2" for="input_text-1"> نوع العملية</label>
            <select  name="typebrand" id=""  title="نوع المركه">
                <option value="">نوع العملية</option>
                <option value="معروض للبيع">معروض للبيع</option>
                <option value="معروض لايجار">معروض للايجار</option>
            </select>
        </div>
    <!-- End input text for Mark tyep -->

    <!-- start input for car model -->
         <div>
            <label  id="label_3" for="input_text-2"> موديل السيارة</label>
            <input type="text"  id="input_text-2" placeholder="موديل السيارة" name="model">
         </div>
    <!-- End input for car model -->

        <!-- <div>
            <label for="" id="" > موقع السيارة </label>
            <input type="text" placeholder="موقع السيارة" name="location">
         </div> -->

        <!-- <div>
            <label for="" id="" > التاريخ </label>
            <input type="date" name="date">
        </div> -->

        <!-- <div>
            <label  id="" for="">طريقة الدفع</label>
            <select  name="payment"  title="payment method">
                <option value="">طريقة الدفع</option>
                <option value="كاش">كاش</option>
                <option value="قسط">قسط</option>
            </select>
        </div> -->

    <!-- start select for Year of manufacture  -->
        <!-- <div>
            <label  id="label_4" for="input_text-3"> سنة التصنيع</label>
            <select  name="manufacture" id="input_text-3" >
                <option value="">سنه التصنيع</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option> 
                <option value="2015">2015</option>
                <option value="2012">2012</option>
                <option value="2010">2010</option>

            </select>
        </div> -->
        <!-- END select for Year of manufacture -->

        <!-- start select for Fuel Typer -->
        <div>
            <label  id="label_5" for="input_text-3"> نوع الوقود</label>
             <select name="FuelType" title="نوع الوقود">
                <option value="">نوع الوقود</option>
                <option value="غاز طبيعي">غاز طبيعي</option>
                <option value="بنزين">بنزين</option>
            </select>
        </div>
        <!-- End select for Fuel Type -->

        <!-- start input for Mileage -->
        <div>
            <label  id="label_6" for="input_text-3"> المسافة المقطوعة كم </label>
            <input type="number" placeholder="المسافة المقطوعة كم" name="Mileage">
        </div>
        <!-- End input for Mileage-->

        <!-- start select for Car conditionr -->
         <div>
            <label  id="label_7" for="input_text-3"> حاله السيارة</label>
            <select name="condition" id="" title="حاله السياره">
                <option value="">حالة السياره</option>
                <option value="جديده">جديده</option>
                <option value="مستعمله">مستعمله</option>
            </select>
         </div>
        <!-- End select for Car condition -->

        <!-- start input for Engine Size -->
        <div>
            <label  id="label_8" for="input_text-3"> سعة المحرك</label>
            <input type="number" placeholder="سعه المحرك" name="EngineSize">
        </div>
        <!-- End input for Engine Size -->

        <!-- start select for Bodywork -->
        <div>
            <label  id="label_9" for="input_text-3"> هيكل السيارة</label>
            <select  name="Bodywork" id="" title="هيكل السياره">
                <Option value ="">هيكل السيارة</Option>
                <option value="سيدان">سيدان</option>
                <option value="كوبيه">كوبيه</option>
                <option value="دفع رباعي">دفع رباعي</option>
                <option value="رودستر">وردستر</option>
                <option value="كروس اوفر">كروس اوفر</option>
                <option value="بيك اب">بيك اب</option>
            </select>
        </div>
        <!-- End select for Bodyworkr -->

        <!-- start select for Transmission -->
        <div>
            <label  id="label_10" for="input_text-3"> ناقل الحركة</label>
            <select name="Transmission" id="" title="ناقل الحركه">
            <option value=""> ناقل الحركه</option>
            <option value="منول ">منول او عادة</option>
            <option value="اوتوماتيك">اوتوماتيك</option>
            </select>
        </div>
        <!-- End select forTransmission -->

        <!-- start select for Car color -->
        <div>
            <label id="label_11" for="input_text-3"> لون السيارة</label>
            <input type="text" placeholder="لون السيارة" name="Carcolor">
        </div>
        <!-- End select for Car colorr -->

        <!-- start select for Car price -->
        <div>
            <label  id="label_12" for="input_text-3"> سعر السيارة </label>
            <input type="number" placeholder="سعر السياره" name="price">
        </div>
        <!-- End select for Car price -->

        <!-- start select for Car condition -->
        <div>
            <label  id="label_13" for="input_text-3"> هل السعر نهائي</label>
            <select name="conditioncar" id=" carsHall"  title="condition">
                <option value="">هل السعر نهائي</option>
                <option value="نعم">نعم</option>
                <option value="لا">لا</option>
            </select>
        </div>
        <!-- End select for Car condition -->

        <div>
            <label  id="" for="">فيديو</label>
            <select name="car_video" id="" title="car_video">
                <option value="">فيديو</option>
                <option value="متوفر">متوفر</option>
                <option value="غير متوفر">غير متوفر</option>
            </select>
        </div>

        <div>
            <label  id="" for="">جولة افتراضية</label>
            <select name="virtual_tour" id="" >
                <option value="">جولة افتراضية</option>
                <option value="نعم">نعم</option>
                <option value="لا">لا</option>
            </select>
        </div>

        <!-- start textarea  -->
        <div class="textarea">
            <label  id="label_14" for="input_text-3"> حالة السيارة بتفصيل</label>
            <textarea placeholder="حاله السيارة بتفصيل " name="aboutCar"></textarea>  
        </div>
        <!-- End textarea  -->
        <div class="title-image">
            <h1>اضف بعض الصور للسيارة</h1> 
        </div>
        

        <!-- start indut imges -->
   <div class="form-img">
    <!-- /////////////////////////5/////////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره" >
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-1" type="file"  name="img_1"  placeholder="1">
            </div>
    </div>
     <!-- //////////////////////////////5////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-2" type="file" accept="image/"  name="img_2"  placeholder="1">
         </div>
    </div>
     <!-- //////////////////////////////////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
        </div>
        <div class="imgs">
            <input  id="file-3" type="file" accept="image/"  name="img_3"  placeholder="1">
        </div>
    </div>
     <!-- ////////////////////////////6//////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-4" type="file" accept="image/"  name="img_4"  placeholder="1">
            </div>
    </div>
     <!-- //////////////////////////////////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-5" type="file" accept="image/"  name="img_5"  placeholder="1">
            </div>
    </div>
     <!-- ///////////////////////////7///////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-6" type="file" accept="image/"  name="img_6"  placeholder="1">
            </div>
    </div>
     <!-- //////////////////////////////////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-7" type="file" accept="image/"  name="img_7"  placeholder="1">
            </div>
    </div>
     <!-- //////////////////////8////////////////////////////// -->
    <div class="img1">
        <div class="img-form">
            <img src="OIP.jpg" alt="اضف صوره">
            <h2>اضف صوره</h2>
          </div>
          <div class="imgs">
            <input  id="file-8" type="file" accept="image/"  name="img_8"  placeholder="1">
            </div>
    </div>
     <!-- //////////////////////8////////////////////////////// -->
    <!-- <div class="img1">
            <div class="img-form">
                <img src="OIP.jpg" alt="اضف صوره">
                <h2>اضف صوره</h2>
              </div>
              <div class="imgs">
                <input  id="file-8" type="file" accept="image/"  name="img_9"  placeholder="1">
                </div>
    </div> -->
    <!-- //////////////////////8////////////////////////////// -->


     </div>
       <!-- End indut imges -->
    <div class="btn-form">
        <button  name="upload" value="حفظ" >حفظ</button>
      
    </div>
    
    <!-- /////////////////////////////  -->
     
  
    </form>

</div>  
   
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>
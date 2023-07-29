<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/page2.css">
    <title>Raghad eissa</title>
</head>
<body>
    
    <header>
        <a href="#" class="logo">نسعد بخدمتــكم</a>
        <nav class="navigation"></nav>
    </header>


            <section class="main">
                <div>
                    <h2>الاستعلام عن شكوى<br><span></span></br></h2>
                    

                    
    <section class="ram">
        <div>
            <h3> الرجـاء ادخال البيانات الازمة</h3>
        </div>
    </div>
</section>
  <section>
    <div class="center">
    <label for="id-number"></label>
    <input type="text" id="id-number" name="id-number" required pattern="[0-9]{10,14}" placeholder="رقم الهاتف او الهوية">
    <button id="submit-btn">أستعلام</button>
    <div id="message"></div>
  </div>

    <script>


const idNumberInput = document.getElementById('id-number');
const errorMessageDiv = document.getElementById('error-messge');
const submitButton = document.getElementById('submit-btn');
const messageDiv = document.getElementById('message');

submitButton.addEventListener('click', () => {
  if (!idNumberInput.checkValidity()) {
    messageDiv.textContent = 'الرجاء إدخال رقم صحيح';
    return;
  }
  
  
  setTimeout(() => {
    messageDiv.textContent = 'تم إرسال النموذج بنجاح';
  }, 2000);
});
   


    </script>
   

  </section>   





</section>
       
</div>
</section>
            </body>
</html>
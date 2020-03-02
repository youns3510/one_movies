
   <!DOCTYPE html>
   <html lang="en">


   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Thank You</title>
      <style>
         body {
            text-align: center;
         }

         h1 {
            color: crimson;
         }

         p {
            color: red;
         }
      </style>
   </head>

   <body>

      <h1>Thanks</h1>
      <p>Thank you for contacting us. We will be in touch with you very soon.</p>
    


  <script type="text/javascript">
    var count = 10;
    var redirect = "/";

    function countDown() {
      var timer = document.getElementById("timer");
      if (count > 0) {
        count--;
        timer.innerHTML = "<p>you will redirect Back after <span class='count'> " + count + " </span> seconds.</p>";
        setTimeout("countDown()", 1000);
      } else {
        window.location.href = redirect;
      }
    }
  </script>
  <div id="timer">
    <script type="text/javascript">
      countDown();
    </script>
  </div>
   </body>

   </html>


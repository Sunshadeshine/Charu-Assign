
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <title>Calculator</title>
  </head>
  <body>
  
    <main>
      <header>
        <h2></h2>
        <h1>CALCULATOR</h1>  
        <p id="myBtn" class="Contact">Contact Us</p>
        <div class="container">
        
        <div id="myModal" class="modal">
         
         <div class="modal-content">
          <span class="close">&times;</span>
          <form id="myForm">
		    	<h3>Send an Email</h3>

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject">
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button"id="submit" onclick="sendEmai()" value="Send An Email">Submit</button>
		</form>
        </div></div></div>
      </header>
      <section>
      
        <div type="textarea" id="ans">
        </div>
        <div type="textarea" id="small">
        </div>
            <table  class="Main-container ">
              <tr>
                <td name="clear" id="clea">C</td>
                <td name='^' >^</td>
                <td name='%'>%</td>
                <td name='/'>/</td>
              </tr>
              <tr>
                <td name="7">7</td>
                <td name="8">8</td>
                <td name="9">9</td>
                <td name='*' value=*>*</td>
              </tr>
              <tr>
                <td name="4">4</td>
                <td name="5">5</td>
                <td name="6">6</td>
                <td name='-'>-</td>
              </tr>
              <tr>
                <td name="1">1</td>
                <td name="2">2</td>
                <td name="3">3</td>
                <td name='+'>+</td>
              </tr>
              <tr>
                <td name="0" colspan="2">0</td>
                <td name='.'>.</td>
                <td name="equal">=</td>
              </tr>
            </table>
            </div>
      </section>
    </main>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript">
        function sendEmail() {
         
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   
                   url: 'extra.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
  </body>
</html>

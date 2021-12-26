<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script type="text/javascript">
(function() {
emailjs.init("user_PrLzDYPz3tYaFhKo5kmsZ");
})();

var flag=0;
var state = {
    subject: "<?php echo $_POST["subject"]?>",
    name: "<?php echo $_POST["name"]?>",
    email: "<?php echo $_POST["email"]?>",
    desc: "<?php echo $_POST["desc"]?>",
  };
  emailjs.send("service_giq1obp","template_hmizxbu",state)
  .then(function(response) {
      console.log('SUCCESS!', response.status, response.text);
    }, function(error) {
      console.log('FAILED...', error);
      
    });
    
    <?php  if(response.status=="OK")  header("Location:contact.php?submit=1");?>
</script>

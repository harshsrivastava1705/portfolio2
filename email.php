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
       if(response.staus==200)
      flag=1;
    }, function(error) {
       console.log('FAILED...', error);
       flag=-1;
       
    });
    while(flag==0){}
     if(flag==1)
     {
         sleep(1);
    <?php header("Location:contact.php?submit=1");?>
     }
         else if(flag==-1)
         {       sleep(1);
          <?php header("Location:contact.php?fail=1");?>
    }

</script>
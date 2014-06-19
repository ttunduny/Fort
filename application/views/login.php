<center>
  <div id="login-div">    
    <div id="forms"><h3>LOGIN</h3></div>
    <div id="forms-data">
      <form name="login-form" id="login-form" >
        <label for="username">Username </label><br/>
        <input type="email" name="username" id="username" required placeholder="Enter Username" /><br/><br/>
        <label for="password">Password</label><br/>
        <input type="password" class="input" id="password" name="password"  required placeholder="Enter Password" /><br/><br/>
        <!--        <input type="" id="login-confirm" class="btn" style="width:20%" value="Log In">-->
      </form>      
      <button id="login-confirm" class="btn" style="width:20%">Login</button>   
      <a id="forgot-password" class="form-links" href="#" style="color:#000">Forgot Password?</a>
      <div id="result"></div>    
    </div>

  </div>
</center>


<style type="text/css">
#login-div{

  border-style: groove;
  border-color: #000;
  border-width: 1px;     
  width: 490px;
  height: 340px;
  margin-top: 100px;
  color: #000;            
}

#forms{
  height: 50px;      
  width: 100%;      
  border-bottom: groove 1px #ccc;
  background-color:#007C21;
  color: #ccc;
  margin-top: 0px;      
}
#forms h3{
  float: left;
  margin-left: 20px;
}

#login-form{
  margin-top: 20px;

}

#login-div input{
  width: 80%;
  height: 200%;
  font-size: 18px;
  font-weight: 200;
  text-align: center;
  border-radius: 0.35em;
  border-style: ridge;
  border-width: 1px;      
  line-height: 200%;
  border-color: #ccc;
}
#login-div label{      
  font-size: 14px;
  float: left;   
  margin-left: 10%;

}
#forms-data{
  padding: 10px;
}


#login-confirm{
  float: left;
  margin-left: 10%;
  background-color: #38DF64;
}
#result{
  color: red;
  font-style: italic;     
}
</style>
<script type="text/javascript">
$(function(){
  var error_login = "<hr/>Wrong Username or Password";
  var error_empty_field = "<hr/>All Fields are Required";
  var sending_message = "<hr/>Validating your Credentials";     
  $('#login-confirm').click(function() {  


    var base_url = '<?php echo base_url();?>';  

    var loginForm = $('#login-form').serialize();        
    $.post("<?php echo site_url() . 'user_management/checkLogin'; ?>", {
      loginForm: loginForm,                   
    }).done(function(data){
      alert("Data Loaded: " + data);
      $('Add_New').modal('hide');
      window.location = "<?php echo base_url(); ?>";
    });

  });
});
</script>
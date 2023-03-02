<div class="row">
  <div class="col-sm-12 border-bottom">
    <div class="container">
      <header class="p-1 text-secondary">Settings / Account</header>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 bg-light">
    <div class="container bg-white border-start border-end">
      <div class="row">
        <div class="col-sm-2 my-2">
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand d-md-none d-lg-none" href="#">Settings menu</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="sidenav">
        <ul class="navbar-nav d-block hov">
          <li class="nav-item rounded-start">
            <a class="nav-link text-primary active rounded-start" aria-current="page"
              style="cursor:pointer;" onclick="loadAccount();">Account</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;"
              onclick="loadPassword();">Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-primary rounded-start" aria-current="page"onclick="loadEmail();" style="cursor:pointer;">Emails</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;"
              onclick="loadGeneral();">General</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" onclick="loadAPI();" style="cursor:pointer;">API</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-primary rounded-start" aria-current="page" onclick="loadSingle();" style="cursor:pointer;">Single sign-on</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" onclick="loadSecurity();" style="cursor:pointer;">Security</a>
          </li>
        </ul>
          </div>
      </nav>
      
        </div>
        <div class="col-sm-9 my-4" id="content">
          
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  window.onload = function() {
    loadAccount()
    };
  function loadAccount(){
    $.ajax({
      url: '<?php echo base_url("Teacher/Account")?>',
      type: 'GET',
      datatype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadPassword(){
    $.ajax({
      url: '<?php echo base_url("Teacher/Password");?>',
      type: 'GET',
      datatype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadGeneral(){
    $.ajax({
      url: '<?php echo base_url("Teacher/General");?>',
      type: 'GET',
      dataype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadEmail(){
    $.ajax({
      url: '<?php echo base_url("Teacher/Email");?>',
      type: 'GET',
      dataype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadAPI(){
    $.ajax({
      url: '<?php echo base_url("Teacher/API");?>',
      type: 'GET',
      dataype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadSingle(){
    $.ajax({
      url: '<?php echo base_url("Teacher/Single");?>',
      type: 'GET',
      dataype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  function loadSecurity(){
    $.ajax({
      url: '<?php echo base_url("Teacher/Security");?>',
      type: 'GET',
      dataype: 'text/plain',
      success: function(response){
        $("#content").html(JSON.parse(response).html);
      }
    });
  }
  $("body").on("submit","#resetPassword",function(e){
                    e.preventDefault();
                    $.ajax({
                      url : '<?php echo base_url("LogIn/reset")?>',
                      type : 'POST',
                      data : $(this).serializeArray(),
                      datatype : 'text/plain',
                      success : function(response){
                       console.log(response);
                      }
                    });
                });
</script>
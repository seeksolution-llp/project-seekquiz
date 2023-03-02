<style type="text/css">
	.userHeight{
    min-height: 500px;
}
</style>
<div class="row border-bottom">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<p class="my-2"> total users : </p>
	</div>
	<div class="col-sm-1"></div>
</div>
<div class="row">
	<div class="col-sm-12 bg-light ">
	<div class="container bg-white border-start border-end mb-2">
        <form action="<?php echo base_url('Teacher/insertUser');?>" method="post">
          <div class="row pt-4">
            <div class="col-sm-6 ">
              <label for="Username"><b>Username</b></label><br/>
              <input type="text" value="" name="username" class="form-control mt-1"/>
            </div>
            <div class="col-sm-6">
              <label for="User type"><b>User type</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Respondent: Access to a personal portal to view and take assigned quizzez,tests,or courses. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Trainer: Access to assigned quizzes to view,manage,or edit depending on the permissions set. Administrator: Access to all quizzes and settings based on the permissiona set."></i></label><br/>
              <select class="form-control mt-1" name="type">
                <option value="respondent">Respondent</option>
                <option value="trainer">Trainer</option>
                <option value="administrator">Administrator</option>
              </select>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="Password"><b>Password</b></label><br/>
              <input type="text" value="" name="password" onclick="showAlert();" class="form-control mt-1" placeholder="{;{obS*H6"/><br/>
                      <div class="container"style="display:none;" id="myAlert">   
                          
                  </div> 
                <label for="Suspended"><b>Suspended</b></label>
                <input type="checkbox" value="" name="checkbox"/>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="First name"><b>First name</b></label><br/>
              <input type="text" value="" name="firstname" class="form-control mt-1"/>
            </div>
            <div class="col-sm-6">
            <label for="Last name"><b>Last name</b></label>
                <input type="text" value="" name="lastname" class="form-control mt-1"/>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-6">
              <label for="Email"><b>Email</b></label><br/>
              <input type="email" value="" name="email" class="form-control mt-1"/><br/>
            </div>
            <div class="col-sm-6">
            <label for="Organization"><b>Organization</b></label>
                <input type="text" value="" name="organization" class="form-control mt-1"/>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-10">
              <label for="Assigned quizzez"><b>Assigned quizzes</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="top" title="Assign a quiz to the user to access as a test taker." ></i></label><br/>
              <input type="text" value="" name="quizzes" class="form-control mt-1 h-75"/><br/>
            </div>
            <div class="col-sm-2">
            <button type="button" class="btn btn-sm btn-success mt-4">Assign Quizzes</button>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-sm-10">
              <label for="Assigned quizzez"><b>Assigned groups</b><i class="fa-solid fa-circle-info"  data-bs-toggle="tooltip" data-bs-placement="top" title="Assign a group to the user that contains quizzes for the user to access as a text taker."></i></label><br/>
              <input type="text" value="" name="groups" aria-colspan="" aria-rowspan="3" class="form-control mt-1 h-75"/><br/>
            </div>
            <div class="col-sm-2">
            <button type="button" class="btn btn-sm btn-success mt-4">Assign Groups</button>
          </div>
          <div class="row mt-3">
            <div class="col-sm-12">
              <label for="Notes"><b>Notes</b></label><br/>
              <textarea rows="3" name="notes" class="form-control mt-1"></textarea>
              </div>
          </div>
          <div class="row mt-3">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
            <button type="submit" class="btn btn-light me-1">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
	</div>
  </div>
</div>
<script>
  function showAlert(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-secondary alert-dismissable p-1' id='myAlert2'><h6>Password must contain the following :</h6><span>A <b>lowercase</b> letter</span><br/> <span>A <b>capital (uppercase)</b> letter</span><br/> <span>A <b>Number</b></span><br/><span>Minimun <b>6 charecters</b></span></div>");
  }
  $("#myAlert").css("display", "");
  $("#myAlert2 span").css({"font-size":"12px","color":"green"})
}
</script>
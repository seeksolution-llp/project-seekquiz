  <!-- nav bar start -->
  <div class="row">
    <div class="col-sm-12 p-0">
    <nav>
        <ul class="nav nav-tabs bg" id="myTab" role="tablist ">
            <li class="nav-item1" role="presentation">
                <button class="nav-link active text-dark mt-4" onclick="loadCreate();" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Create</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark mt-4" onclick="loadConfigure();" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Configure</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark mt-4" onclick="loadPublish();" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Publish</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link text-dark mt-4" onclick="loadAnalyze()" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Analyze</button>
            </li>

            <li class="nav-item head" role="presentation">


            <li class="nav-item icon text-dark fs1" role="presentation ">
                <span> <i class="fa-solid fa-print "></i> print</span>


                <span><i class="fa-regular fa-eye"> </i> Preview</span>

            </li>

        </ul>
    </nav>
    <!-- end nav bar -->
    </div>
  </div>
        <div class="row index">
            <div class="col-sm-12 p-0">
                <div class="container">
                <h6 class="text-end text-secondary p-1 me-4" style="font-size:12px;"><b>Quiz:</b> Quiz 1 <b>Status:</b> In Design</h6>
                </div>
                
            </div>
        </div>
        <div id="content2"></div>
        <script>
            window.onload = function() {
                loadCreate();
                };
            function loadCreate(){
                $.ajax({
                   url: '<?php echo base_url('Quiz/editor');?>',
                   type: 'GET',
                   datatype: 'text/plain',
                   success: function(response){
                    $("#content2").html(JSON.parse(response).html);
                   }
                });
            }
            function loadConfigure(){
                $.ajax({
                   url: '<?php echo base_url('Quiz/configure');?>',
                   type: 'GET',
                   datatype: 'text/plain',
                   success: function(response){
                    $("#content2").html(JSON.parse(response).html);
                   }
                });
            }
            function loadPublish(){
                $.ajax({
                   url: '<?php echo base_url('Quiz/publish');?>',
                   type: 'GET',
                   datatype: 'text/plain',
                   success: function(response){
                    $("#content2").html(JSON.parse(response).html);
                   }
                });
            }
            function loadAnalyze(){
                $.ajax({
                   url: '<?php echo base_url('Quiz/analyze');?>',
                   type: 'GET',
                   datatype: 'text/plain',
                   success: function(response){
                    $("#content2").html(JSON.parse(response).html);
                   }
                });
            }
        </script>

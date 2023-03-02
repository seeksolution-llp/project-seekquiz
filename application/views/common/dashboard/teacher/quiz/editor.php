<div class="row index1">
            <div class="container">
                <div class="page-container mt-5">
                    <div class="page-header py-2 ps-3 text-secondary">page
                        <i class="fa-sharp fa-solid fa-xmark text-secondary " style="float: right;padding: 10px;"></i>
                        <i class="fa-solid fa-arrows-up-down text-secondary " style="float: right; padding: 10px;"></i>
                        <i class="fa-solid fa-pen-to-square text-secondary " style="float: right; padding: 10px;"></i>
                    </div>
                    <div class="pt-5"><!-- Example single danger button -->
                        <div class="btn-group mb-4 mx-3">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Add item
                            </button>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="javascript:void(0);" onclick="questionModal();">Question</a></li>
                                <li><a class="dropdown-item" href="#">Text / Media</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Import questions</a></li>
                                <li><a class="dropdown-item" href="#">Question bank</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Example single danger button -->
                <div class="btn-group1 mt-4 mb-5">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Add Page
                    </button>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="#">Quiz page</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Welcome page</a></li>
                        <li><a class="dropdown-item" href="#">Thank you page</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div id="content3">
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	      <!-- //<script src="script.js"></script> -->
    <script>
        function questionModal(){
            $.ajax({
                url: '<?php echo base_url("Quiz/textEditor");?>',
                type: 'GET',
                datatype: 'text/plain',
                success: function(response){
                    // console.log(response);
                     $("#content3").html(JSON.parse(response).html);
                    //  jQuery.noConflict();
                    $('#myModal').modal("show");
                }
            });
        }
		function addMore(){
			$.ajax({
				url: '<?php echo base_url("Quiz/addOption");?>',
				type: 'GET',
				datatype: 'text/plain',
				success: function(response){
                    $(".option").append(JSON.parse(response).html);
				}
			});		
		}
    </script>
            
         
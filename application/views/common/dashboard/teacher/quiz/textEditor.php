<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="myModal">New Question</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="" id="Question">
			<div class="row">
				<div class="col-sm-2"><h6 class="text-end">Question Type</h6></div>
				<div class="col-sm-6">
				<select class="form-select bg-light" aria-label=".form-select-lg example" name="" id="">
                            <option value="Single Choice (Radio Button)">Single Choice (Radio Button)</option>  
                            <option value="Single Choice (Dropdown)">Single Choice (Dropdown)</option>  
                            <option value="Multiple Choice">Multiple Choice</option>  
                            <option value="Picture Choice">Picture Choice</option>  
                            <option value="Fill in the Blanks">Fill in the Blanks</option>  
                            <option value="Matching">Matching</option>  
                            <option value="Matching Text">Matching Text</option>  
                            <option value="Free Text">Free Text</option>  
                            <option value="File Upload">File Upload</option>  
                          </select>
				</div>
				<div class="col-sm-4">
					<td class="text-center"><span>Point :</span></td><td><input type="number" class="col-sm-3" name="" id=""></td>
				</div>
			</div>
			<!-- question -->
		<div class="row">
				<div class="col-sm-2"><h6 class="text-end">Question</h6></div>
				<div class="col-sm-10">
				<div class="border border-secondary m-1" style="min-height:100px" contenteditable="true" spellcheck="false"></div>
				</div>
			</div>
			<!-- question -->
			<div class="row">
				<div class="col-sm-12 d-flex flex-row-reverse" style="color:#585bfd;font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif!important;
    font-size: 12px!important;">
					<span class="text-end p-1"><input type="checkbox"> Required</span> <span class="p-1"><input type="checkbox"> Show Question Feedback</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10"><hr/></div>
			</div>
			<!-- option -->
			<div class="row option">
				<div class="col-sm-2"><h6 class="text-end">Option</h6></div>
				<div class="col-sm-8"><input type="text" class="form-control"></div>
				<div class="col-sm-2"><input type="checkbox"> <i class="fa-sharp fa-solid fa-xmark"></i></div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<a href="javascript:void(0)" onclick="addMore();" class="btn btn-sm btn-success mt-1">Add Option</a>
				</div>
			</div>
			<!-- option -->
		</form>
	</div>
	<script>
		
	</script>

		<!-- <div class="toolbar"> -->
			<!-- <div class="head">
				<input type="text" placeholder="Filename" value="untitled" id="filename"> -->
				<!-- <select onchange="fileHandle(this.value); this.selectedIndex=0">
					<option value="" selected="" hidden="" disabled="">File</option>
					<option value="new">New file</option>
					<option value="txt">Save as txt</option>
					<option value="pdf">Save as pdf</option>
				</select> -->
				<!-- <select onchange="formatDoc('formatBlock', this.value); this.selectedIndex=0;">
					<option value="" selected="" hidden="" disabled="">Format</option>
					<option value="h1">Heading 1</option>
					<option value="h2">Heading 2</option>
					<option value="h3">Heading 3</option>
					<option value="h4">Heading 4</option>
					<option value="h5">Heading 5</option>
					<option value="h6">Heading 6</option>
					<option value="p">Paragraph</option>
				</select> -->
				<!-- <select onchange="formatDoc('fontSize', this.value); this.selectedIndex=0;">
					<option value="" selected="" hidden="" disabled="">Font size</option>
					<option value="1">Extra small</option>
					<option value="2">Small</option>
					<option value="3">Regular</option>
					<option value="4">Medium</option>
					<option value="5">Large</option>
					<option value="6">Extra Large</option>
					<option value="7">Big</option>
				</select> -->
				<!-- <div class="color">
					<span>Color</span>
					<input type="color" oninput="formatDoc('foreColor', this.value); this.value='#000000';">
				</div> -->
				<!-- <div class="color">
					<span>Background</span>
					<input type="color" oninput="formatDoc('hiliteColor', this.value); this.value='#000000';">
				</div> -->
			
			<!-- <div class="btn-toolbar">
				<button onclick="formatDoc('undo')" class="btn btn-sm"><i class="fa-solid fa-rotate-left"></i></button>
				<button onclick="formatDoc('redo')" class="btn btn-sm"><i class="fa-solid fa-rotate-right"></i></button>
				<button onclick="formatDoc('bold')" class="btn btn-sm"><i class="fa-solid fa-bold"></i></button>
				<button onclick="formatDoc('underline')" class="btn btn-sm"><i class="fa-solid fa-underline"></i></button>
				<button onclick="formatDoc('italic')" class="btn btn-sm"><i class="fa-solid fa-italic"></i></button>
				<button onclick="formatDoc('strikeThrough')" class="btn btn-sm"><i class="fa-solid fa-strikethrough"></i></button>
				<button onclick="formatDoc('justifyLeft')" class="btn btn-sm"><i class="fa-solid fa-align-left"></i></button>
				<button onclick="formatDoc('justifyCenter')" class="btn btn-sm"><i class="fa-solid fa-align-center"></i></button>
				<button onclick="formatDoc('justifyRight')" class="btn btn-sm"><i class="fa-solid fa-align-right"></i></button>
				<button onclick="formatDoc('justifyFull')" class="btn btn-sm"><i class="fa-solid fa-align-justify"></i></button>
				<button onclick="formatDoc('insertOrderedList')" class="btn btn-sm"><i class="fa-solid fa-list-ol"></i></button>
				<button onclick="formatDoc('insertUnorderedList')" class="btn btn-sm"><i class="fa-solid fa-list"></i></button>
				<button onclick="addLink()" class="btn btn-sm"><i class="fa-solid fa-link"></i></button>
				<button onclick="formatDoc('unlink')" class="btn btn-sm"><i class="fa-solid fa-link-slash"></i></button>
				<button id="show-code" data-active="false" class="btn btn-sm">&lt;/&gt;</button>
			</div> -->
			<!-- </div> -->
		<!-- </div> -->
		
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-light btn-sm">Save and Add Another</button>
		<button type="submit" class="btn btn-primary btn-sm">Save</button>
      </div>
    </div>
  </div>
</div>
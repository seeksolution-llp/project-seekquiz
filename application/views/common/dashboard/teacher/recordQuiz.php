<?php foreach($rows as $row) { ?>
<tr id="row-<?php echo $row->quiz_id;?>">
    <td class="nameModal"><a href="<?php echo base_url('Teacher/addQuiz');?>" style="text-decoration:none"><?php echo $row->quiz_name;?></a></td>
    <td class="text-end">In Design</td>
    <td class="text-end"><a href="" class="btn btn-light btn-sm border border-light"><i class="fa-solid fa-chart-simple"></i> Analyze</a></td>
    <td class="text-end"><a href="" class="btn btn-light btn-sm border border-light"><i class="fa-solid fa-eye"></i> preview</a></td>
    <td class="text-end"><a href="" class="btn btn-light btn-sm border border-light">select</a></td>
    </tr>
    <?php } ?>
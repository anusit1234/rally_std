<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$id = $_SESSION[_ss . 'std_id']; 

$sql_std = "SELECT * FROM student WHERE std_id='$id' ";
$query_std = $db->query($sql_std);
$rs_std = $db->get($query_std);

$sql_rally = "SELECT * FROM rally ";
$query_rally = $db->query($sql_rally);
// $rs_rally = $db->get($query_rally);

$title = 'ยินดีต้อนรับ' .$rs_std['std_name'];
/*
 * php code///////////**********************************************************
 */

/*
 * header***********************************************************************
 */
require 'template/back/header.php';
/*
 * header***********************************************************************
 */
?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.form-validator.min.js"></script>


        <div align="center">
            <h1 class="page-header"><font size="5"><font color="#FFFFFF">ยินดีต้อนรับ <?php echo $rs_std['std_name']; ?></font></font></h1>
        </div>
    <br><br><br>
    <div align="center">
		<div class="wrap-contact100">


            <form  id="user-form" action="<?php echo $baseUrl; ?>/front/student/form_create" method="post" >

                <div align="center">
                    <select class="input100" id="rally_id" name="rally_id" required>
                        <option value="">&nbsp;&nbsp;&nbsp;&nbsp;เลือกชุมนุม</option>
                            <?php
                                $i = 0;
                                    while ($rs_rally = $db->get($query_rally)) {
                                        $tr = ($i % 2 == 0) ? "odd" : "even";
                            ?>
                        <option value="<?php echo $rs_rally['rally_id']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rs_rally['name']; ?></option>
                            <?php } ?> 
                    </select>
                    
                </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="std_id" id="std_id" type="hidden" value="<?php echo $rs_std['std_id']; ?>" />
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="std_name" id="std_name" type="hidden" value="<?php echo $rs_std['std_name']; ?>" />
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="classroom" id="classroom" type="hidden" value="<?php echo $rs_std['classroom']; ?>" />
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control input-sm" maxlength="100" name="year" id="year" type="hidden" value="<?php echo $rs_std['year']; ?>" />
                        </div>
                    </div>

                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" id="save">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							บันทึก
						</span>
					</button>
                </div>
                
            </form>

</div>
</div>

<script >
$("#user-form").validate();
$(document).ready(function) {
    $("#save").submit();
}
    
</script>

<?php
/*
 * footer***********************************************************************
 */
// require 'template/back/footer.php';
/*
 * footer***********************************************************************
 */


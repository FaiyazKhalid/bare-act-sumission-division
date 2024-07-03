<div class="page-margin">
  <div class="row">
    <div class="elavenn_sidebar"><?php echo Wo_LoadPage("sidebar/left-sidebar"); ?></div>
     <?php if($_GET['topic'] == "0" ){ ?>
<?php
$hostname = "localhost";
    $user = "*****************";
    $password = "*****************";
    $database = "*****************";
    $prefix = "";
    $database=mysqli_connect($hostname,$user,$password,$database);
 $user_username=$wo['user']['username'];
 
 
    $sql = "select * from saved_daily_topic where username='$user_username'";
    $result1 = mysqli_query($database,$sql) or die(mysqli_error($database));
     $row1 = mysqli_fetch_array($result1);
        $topica1 = mysqli_real_escape_string($database,$row1["topic1"]);
    $topica2 = mysqli_real_escape_string($database,$row1["topic2"]);
    $topica3 = mysqli_real_escape_string($database,$row1["topic3"]);
    $topica4 = mysqli_real_escape_string($database,$row1["topic4"]);
    $topica5 = mysqli_real_escape_string($database,$row1["topic5"]);
    $topica6 = mysqli_real_escape_string($database,$row1["topic6"]);
    $topica7 = mysqli_real_escape_string($database,$row1["topic7"]);
    $topica8 = mysqli_real_escape_string($database,$row1["topic8"]);
    $topica9 = mysqli_real_escape_string($database,$row1["topic9"]);
    $topica10 = mysqli_real_escape_string($database,$row1["topic10"]);
    $topicb1= str_replace(" ","_",$topica1);
    $topicb2= str_replace(" ","_",$topica2);
    $topicb3= str_replace(" ","_",$topica3);
    $topicb4= str_replace(" ","_",$topica4);
    $topicb5= str_replace(" ","_",$topica5);
    $topicb6= str_replace(" ","_",$topica6);
    $topicb7= str_replace(" ","_",$topica7);
    $topicb8= str_replace(" ","_",$topica8);
    $topicb9= str_replace(" ","_",$topica9);
    $topicb10= str_replace(" ","_",$topica10);
    $topic1= str_replace("&","AND",$topicb1);
    $topic2= str_replace("&","AND",$topicb2);
    $topic3= str_replace("&","AND",$topicb3);
    $topic4= str_replace("&","AND",$topicb4);
    $topic5= str_replace("&","AND",$topicb5);
    $topic6= str_replace("&","AND",$topicb6);
    $topic7= str_replace("&","AND",$topicb7);
    $topic8= str_replace("&","AND",$topicb8);
    $topic9= str_replace("&","AND",$topicb9);
    $topic10= str_replace("&","AND",$topicb10);
?>
<div class="row">
 <?php

date_default_timezone_set('Asia/Calcutta');
$date = date('Y-m-d');
$join = $wo['user']['user_joiningdate'];
if ($wo['user']['user_joiningdate'] > $date) {
  echo "Your Internship is yet to begin from $join";  
} elseif ($wo['user']['user_deadline'] < $date) {
  echo "Your Internship deadline is expired. You can reapply internship by <a href='startnew'>Apply here</a>";  
} else 

{ ?>  
<h2>Your today's assignment?</h2>
<h3> Court Cases Order/Judgments</h3>

<strong>1. <a href="?title=<?php echo $topic1; ?>"><?php echo $topic1; ?></a><br></strong>
<strong>2. <a href="?title=<?php echo $topic2; ?>"><?php echo $topic2; ?></a><br></strong>
<strong>3. <a href="?title=<?php echo $topic3; ?>"><?php echo $topic3; ?></a><br></strong>
<strong>4. <a href="?title=<?php echo $topic4; ?>"><?php echo $topic4; ?></a><br></strong>
<strong>5. <a href="?title=<?php echo $topic5; ?>"><?php echo $topic5; ?></a><br></strong>
<br>
<h3>Indian Bare Acts</h3>

<strong>6. <a href="?act=<?php echo $topic6; ?>"><?php echo $topic6; ?></a><br></strong>
<strong>7. <a href="?act=<?php echo $topic7; ?>"><?php echo $topic7; ?></a><br></strong>
<strong>8. <a href="?act=<?php echo $topic8; ?>"><?php echo $topic8; ?></a><br></strong>
<strong>9. <a href="?act=<?php echo $topic9; ?>"><?php echo $topic9; ?></a><br></strong>
<strong>10. <a href="?act=<?php echo $topic10; ?>"><?php echo $topic10; ?></a><br></strong>

<h4>How to Complete Bare Act assignment?</h4>
<P>Step 1: Click on the above allotted act.</P>
<P>Step 2: Search act from internet and count total sections and fill its total in the box and submit.</P>
<P>Step 3: On the basis of total sections text box will be appearing, copy section paragraph and paste in the section box in ech box as per section.</P>
<P>Step 4: After you fill all the section publish it.</P>
<P>Step 5: Your first assignment completed, complete rest of daily assignment today.</P>
<?php } ?><?php } ?>
 </div>
<?php if($_GET['act']){ 
$topic=$_GET['act'];
 ?> 
<strong>Please provide sections content of this <?php $acth= str_replace("_"," ",$act); echo  $acth; ?>"</strong>
 
<strong><h4>How many sections are there in this bare act "<?php $acth= str_replace("_"," ",$topic); echo  $acth; ?>"?</h4></strong><br> 

<form  method="post" > 
        <center>
        <input type="text" class="form-control" name="title" value="<?php echo $topic ?>" hidden>
        <input type="number" class="form-control" placeholder="How many sections?" name="number"  required><input type="submit" name="submit" class='btn btn-primary ladda-button' value="submit"  ><br><br/>
<p>Count total sections of this bare act and add here and submit</p>
    
    </form>
 </center>

<?php } ?> 


<form class="setting-general-form form-horizontal" method="post">
<h3>	<div class="setting-general-alert setting-update-alert"></div> </h3>
				<div class="errors"></div>
<?php if($_GET['act']){ 
$act=$_GET['act'];
 ?> 

<?php 
if (isset($_POST['submit'])){ 
$num=$_POST['number'];
$act=$_POST['title'];
$mode='act-publish';
 ?> 
<br>
<strong>Please provide sections content of this "<?php $acth= str_replace("_"," ",$act); echo  $acth; ?>"</strong>
<input type="text" name="topic" value="<?php echo $act; ?>" hidden>
<?php
$i = 1;
$ia = 1;
$iaa = 1;
$iaaa = 1;
for($z=0;$z<$num;$z++)

{ ?>  
<textarea readonly hidden class='form-textarea' name="section<?php echo $ia++;?>">==Section <?php echo $i++;?>==</textarea><br>
<strong>Section <?php echo $iaaa++;?>:</strong><br>
<textarea name="para<?php echo $iaa++;?>"  class="form-control" rows="3" required></textarea><br>


<?php } ?>
<br/>
<div class="text-center">
			<button type="submit" class="btn btn-main btn-mat btn-mat-raised add_wow_loader" id="update_user_data">Publish Act</button>
		</div>
<?php } ?>
<?php } ?>

<?php 
if (isset($_GET['title'])){
$case=$_GET['title'];
$mode='article-publish';
 ?> 
<br>

    <script>
        $(function () {
            $('a[href^="#"]').click(function () {
                var target = $(this).attr('href');
                $('html, body').animate(
                        {scrollTop: $(target).offset().top + 2}, 800);
                //800 - длительность скроллинга в мс
                return false;
            });
        });

        $(document).ready(function() {
            $('.tooltipR').tooltipster({
                theme: 'tooltipster-light',
                trigger: 'click',
                side: 'right'
            });
            $('.tooltipL').tooltipster({
                theme: 'tooltipster-light',
                trigger: 'click',
                side: 'left'
            });
        });
    </script>
<strong>Please provide original content of this case "<?php $casehyp= str_replace("_"," ",$case); echo  $casehyp; ?>"</strong>

<input name="topic" value='<?php echo $case; ?>' hidden> 
<br>
<h4>Add Category </h4>
<select  class="form-control" placeholder="<?php echo $w;?>" name="cat" value="<?php echo $w;?>" required>  
<option value="">Select</option>  
<option value="Supreme Court Of India Cases">Cases</option>
</select>   
<br>
<h4>Add Original Order/Summery of Full Judgement </h4>
 <textarea name="descr" class="form-control" style="height: 400px;" id="editor" cols="80" rows="10"><?php print_r($dat); ?></textarea>
             <button id="update_user_data"  name="copyBtn" onclick="getWiki()">Publish Case</button>
      
    </div> 
<strong>Tips:</strong>To Provide citations use this code format <strong><xmp><ref>add here your citation</ref></xmp></strong></div>
.   
		</div>
<?php } ?>

	
		<input type="hidden" name="user_id" value="<?php echo $wo['setting']['user_id'];?>">
		<input type="hidden" name="id" value="<?php echo $wo['user']['user_id'];?>">
		<input type="hidden" name="hash_id" value="<?php echo Wo_CreateSession();?>">
 <?php if (isset($wo['input']['recipient'])) { ?>
   <input type="hidden" name="recipient_id" value="<?php echo $wo['user_profile']['user_id']; ?>">
   <?php } ?>
   <?php if ($wo['page'] == 'page') {?>
   <input type="hidden" name="page_id" value="<?php echo $wo['page_profile']['page_id']; ?>">
   <?php } else if ($wo['page'] == 'group') {?>
   <input type="hidden" name="group_id" value="<?php echo $wo['group_profile']['id']; ?>">
   <?php } else if ($wo['page'] == 'events') { ?>
   <input type="hidden" name="event_id" value="<?php echo $wo['event']['id']; ?>">
   <?php } ?>
   <input type="hidden" name="hash_id" value="<?php echo Wo_CreateSession();?>">
   <input type="hidden" name="postRecord" value="" id="postRecord">
   <input type="hidden" name="postSticker" value="" id="postSticker" onchange="alert(this.value)">		
	</form>






<script type="text/javascript">
	$(function() {
	$("#usr_birthday").datepicker({
		changeMonth: true,
		changeYear: true,
		maxDate: new Date('<?php echo date('Y')-14; ?>-12-31'),
		dateFormat: 'dd-mm-yy',
		yearRange: "<?php echo date('Y')-129; ?>:<?php echo date('Y')-14; ?>",
		prevText: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" /></svg>',
		nextText: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" /></svg>'
    });
});
function Wo_ShowUpgrades() {
	$('.wo_sett_upgrade').addClass('hidden');
	$('.show-upgrades').removeClass('hidden');
}
function Wo_ConfirmUpdatingUserData(){
 $('form.setting-general-form').submit();
 $("#confirm_updatin_user_date").modal('hide');
}

$(function() {

  $("#update_user_data").click(function(event) {
	if ('<?php echo $wo['setting']['username']?>' != $('#username').val() && '<?php echo $wo['setting']['verified']?>' == 1) {
        event.preventDefault();
        
        $("#confirm_updatin_user_date").modal('show');
    }
    
  });

  $('form.setting-general-form').ajaxForm({
    url: Wo_Ajax_Requests_File() + '?f=<?php echo $mode?>',
    beforeSend: function() {
	  $('.wo_settings_page').find('.add_wow_loader').addClass('btn-loading');
    },
    success: function(data) {
      scrollToTop();
      if (data.status == 200) {
      	if (data.type == 'phone' || data.type == 'email') {
      		// if (data.type == 'email') {
      		// 	$('#two_factor_title').html("<?php echo $wo['lang']['confirmation_email_sent']; ?>");
      		// 	$('#two_factor_desc').html("<?php echo $wo['lang']['confirmation_email']; ?>");
      		// }
      		// else{
      		// 	$('#two_factor_title').html("<?php echo $wo['lang']['confirmation_message_sent']; ?>");
      		// 	$('#two_factor_desc').html("<?php echo $wo['lang']['confirmation_message']; ?>");
      		// }
      		$('#verify_email_phone').modal('show');
      	}
      	else{
	        <?php if($wo['user']['user_id'] == $wo['setting']['user_id']) { ?>
	        $('[id^=update-username]').attr('href', data.username);
	        <?php } ?>
	        $('.setting-general-alert').html('<div class="alert alert-success">' + data.message + '</div>');
	        $('.alert-success').fadeIn('fast', function() {
	           $(this).delay(2500).slideUp(500, function() {
	              $(this).remove();
	            });
	        });
	    }
	    window.location.href = "my-article";
      } else if (data.errors) {
          var errors = data.errors.join("<br>");
          $('.setting-general-alert').html('<div class="alert alert-danger">' + errors + '</div>');
          $('.alert-danger').fadeIn(300);
      }
      $('.wo_settings_page').find('.add_wow_loader').removeClass('btn-loading');
    }
  });

    $('form.verify_email_phone_form').ajaxForm({
    url: Wo_Ajax_Requests_File() + '?f=verify_email_phone',
    beforeSend: function() {
      $('#verify_email_phone_form_btn').text('<?php echo($wo['lang']['please_wait']) ?>');
    },
    success: function(data) {
      if (data.status == 200) {
        $('#verify_email_phone_form_alert').html('<div class="alert alert-success">' + data.message + '</div>');
        $('#verify_email_phone_form_alert').fadeIn('fast', function() {
          $(this).delay(2500).slideUp(500, function() {
              $(this).remove();
              $('#verify_email_phone').modal('hide');
              location.reload();
          });
        });
      } else if (data.status == 400) {
        $('#verify_email_phone_form_alert').html('<div class="alert alert-danger">' + data.message + '</div>');
        $('.alert-danger').fadeIn(300);
      }
      $('#verify_email_phone_form_btn').text('<?php echo($wo['lang']['send']) ?>');
    }
  });
});

function Wo_GetPayPal() {
   type = $('#upgrade').val();
   $('#upgrade-button').html("<?php echo $wo['lang']['please_wait']?>");
   $.post(Wo_Ajax_Requests_File() + '?f=get_paypal_url', {type:type, type2:'upgrade'}, function (data) {
    if (data.status == 200) {
       window.location.href = data.url;
    } else {
      $('#upgrade-button').html('<?php echo $wo["lang"]["upgrade"]?>');
      $('.please-wait').removeClass('hidden').find('#please-wait').text('<?php echo $wo["lang"]["error_please_try_again"]?>');
    }
   });
}

$("form :input").each(function(index, elem) {
    var eId = $(elem).attr("id");
    var label = null;
    if (eId && (label = $(elem).parents("form").find("label[for="+eId+"]")).length == 1) {
        $(elem).attr("placeholder", $(label).html());
        $(label).remove();
    }
 });
 $(function() {
  $('.stylish-select').stylishSelect();
});
</script>

<?php
//views/mailing_list/view_mailing_list_detail.php
if($query->num_rows() > 0): 
?>

<?php foreach($query->result() as $row) : ?>
<h1><?=$row->first_name?> <?=$row->last_name?></h1>
<p>
<?php
/*
	userid	first_name	last_name	email	address	state_code	zip_postal	username	password	bio	interests	num_tours
	*/
?>


	<p>userid: <b><?=$row->userid?></b></p>
	<p>first_name: <b><?=$row->first_name?></b></p>
	<p>last_name: <b><?=$row->last_name?></b></p>
	<p>email: <b><?=$row->email?></b></p>
	<p>address: <b><?=$row->address?></b></p>
	<p>state_code: <b><?=$row->state_code?></b></p>
	<p>zip_postal: <b><?=$row->zip_postal?></b></p>
	<p>username: <b><?=$row->username?></b></p>
	<p>password: <b><?=$row->password?></b></p>
	<p>bio: <b><?=$row->bio?></b></p>
	<p>interests: <b><?=$row->interests?></b></p>
	<p>num_tours: <b><?=$row->num_tours?></b></p>



<?php endforeach; ?>

<?php endif; ?>
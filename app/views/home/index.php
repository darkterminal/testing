<?php 

if (isset($data['users'])) {
	foreach ($data['users'] as $user) {
		echo $user->username .'<br>';
	}
}else{
	echo $data['user']['username'];
}

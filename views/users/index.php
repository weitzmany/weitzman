<p>Here is a list of all users</p>
<? foreach($users as $user){ ?>
<p>
	<?= $user->name; ?>
	<a href="/users/show/<?= $user->id; ?>">See content</a>
</p>
<? } ?>
<a href="/users/create">New user</a>
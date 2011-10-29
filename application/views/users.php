<div id="main-title">
   <h3>How many Yay freaks does it take to screw in a light bulb?</h3>
</div>

<div class="bottomdashed">
	<form name="search-box-user" id="search-box-user" method="" action="">
	Filter Usernames
	<input type="text" value="" name="search-phrase-user" id="search-phrase-user" />
	<input type="submit" value="Search" />
	Type the first few characters of the username.
	</form>

    Browse Users
	<a href="/users/0">0</a>

	<a href="/users/1">1</a>
	<a href="/users/2">2</a>
	<a href="/users/3">3</a>
	<a href="/users/4">4</a>
	<a href="/users/5">5</a>
	<a href="/users/6">6</a>

	<a href="/users/7">7</a>
	<a href="/users/8">8</a>
	<a href="/users/9">9</a>
	<a href="/users/A">A</a>
	<a href="/users/B">B</a>
	<a href="/users/C">C</a>

	<a href="/users/D">D</a>
	<a href="/users/E">E</a>
	<a href="/users/F">F</a>
	<a href="/users/G">G</a>
	<a href="/users/H">H</a>
	<a href="/users/I">I</a>

	<a href="/users/J">J</a>
	<a href="/users/K">K</a>
	<a href="/users/L">L</a>
	<a href="/users/M">M</a>
	<a href="/users/N">N</a>
	<a href="/users/O">O</a>

	<a href="/users/P">P</a>
	<a href="/users/Q">Q</a>
	<a href="/users/R">R</a>
	<a href="/users/S">S</a>
	<a href="/users/T">T</a>
	<a href="/users/U">U</a>

	<a href="/users/V">V</a>
	<a href="/users/W">W</a>
	<a href="/users/X">X</a>
	<a href="/users/Y">Y</a>
	<a href="/users/Z">Z</a>

</div>

<div id="thread-navigation" class="pagination top">
	<?php echo $pagination; ?>
</div>

<div id="users">

<?php foreach($users as $row) { ?>

  <div class="user-listing">
    <div class="username"><a href="/user/<?php echo $row['username']; ?>">
       <?php echo $row['username']; ?>
    </a></div>
    <div class="user_startdate">Member since
      <?php echo date('M jS y', strtotime($row['created'])); ?>
    </div>
    <div class="user_logdate">Last log date
      <?php echo date('M jS y', strtotime($row['last_login'])); ?>
    </div>
  </div>

<?php } ?>
</div>

<div class="blueline">&nbsp;</div>
<div class="pagination bottom">
	<?php echo $pagination; ?>
</div>

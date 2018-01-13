<ul id="menu">
	<li><a href="index.php" <?php if($activeTab == 'home') echo "class='on'";?>>Home</a></li>
	<li><a href="web.php" <?php if($activeTab == 'web') echo "class='on'";?>>Web</a></li>
	<li><a href="direct.php" <?php if($activeTab == 'direct') echo "class='on'";?>>Direct</a></li>
	<li><a href="wallet.php" <?php if($activeTab == 'wallet') echo "class='on'";?>>Wallet</a></li>
	<li><a href="extended.php" <?php if($activeTab == 'extended') echo "class='on'";?>>Extended</a></li>
	<li><a href="ajax.php" <?php if($activeTab == 'ajax') echo "class='on'";?>>API Ajax</a></li>
</ul>
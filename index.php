<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web App</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./script.js"></script>
    <title>Document</title>
</head>
<body>

	<div class="header">
	   <h1> Kawsar </h1>
	</div>

	<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>
	
	      
         
		 
		 
	

    <header class="grid-1">
        <ul>
            <li class="my-subs"><strong>CHROLLO</strong></li>
            <li>-</li>
            <li>HOME</li>
            <li>-</li>
            <li>POPULAR</li>
            <li>-</li>
            <li>All</li>
            <li>-</li>
            <li>TREND</li>
            <li>-</li>
            <li>USERS</li>
            <li>-</li>
        </ul>
    </header>
    <nav class="grid-3">
    <img src="./chrollo.png" alt ="CHROLLO" class="chrollo-pic">
    <div>
        <ul>
            <li id='hot-hack'>Hot</li>
            <li>New</li>
            <li>Top</li>
            <li>Most Disscussed</li>
            <li>Community</li>
        </ul>
    </div>
    <div class="profile-ops">
        <div>
                <ul><a href="login.php">Login</a> or
		             <a href="register.php">Register</a>
                   
                        <li><strong>Prefrences|</strong></li>
        
                </ul>

        </div>
    </div>
</nav>
<div id="main" class="grid-20-10-1">
    <div>        
        <div class="post">
            <div class="post-number">1</div>
            <div class="post-upvotes">
                <div class="arrow up" onclick="vote()" id="upvote"></div>
                <div id="votes">1500</div>
                <div class="arrow down" onclick="votedown()" id="downvote"></div>
            </div>
            <div class="post-body">
                <a href="#" class="post-title">Chrollo Is The New Trend</a>
                <span>(kafi)</span>
                <p>submitted 10 hours ago by<a class="submit-link" href="#"> User </a>to <a class="submit-link" href="#">Sports</a></p>
                <div class="post-options">
                    <span>150 comments</span>
                    <span>share</span>
                    <span>save</span>
                    <span>hide</span>
                    <span>report</span>
                 </div>
            </div>
        </div>
     </div>
     <div class='search-container'>
        <input placeholder='search' class='search-text-input'>
        <button class='search-button'>
          <a href='#'><img id='magnifier' src='./search.png'></a>
        </button>
        <button class="user-action-button">Submit New Link</button>
        <button class="user-action-button">Submit Text Post</button>
        <button class="user-action-button">Create Your Chrollo</button>
        <div class="chrollo-gold">
            <div>daily chrollo gold goal</div>
            <div>
              <div class='bar-container'>
                <div class="bar"></div>
              </div>
              <span class='gold-percent'>100%</span>
            </div>
            <button class='chrollo-gold-support'>help support chrollo</button>
          </div>
     </div>
    </div>

		 
		 
		 
		 
		 
		 
		 
		 
		
		
		
		
		
		

	<?php endif; ?>

</body>
</html>
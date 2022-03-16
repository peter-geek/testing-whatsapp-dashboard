<!DOCTYPE html>
<html lang="en">

<head>
	<link id="favicon" rel="shortcut icon" href="./images/icon.png" type="image/png">
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Whatsapp</title>
	<link href="./fa/css/all.css" rel="stylesheet" />
	<style>
		* {
			margin: 0;
			padding: 0;
			outline: none;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-color: #0b1014;
			font-family: Arial, Helvetica, sans-serif;
		}

		main {
			height: 90vh;
			max-width: 900px;
			min-width: 90%;
			display: flex;
		}

		.left {
			width: 320px;
			height: 100%;
			display: flex;
			flex-direction: column;
			background-color: #121b22;
			border-right: 1px solid #232f38;
		}

		.top-nav {
			display: flex;
			padding: 10px;
			background-color: #1f2c34;
		}

		.user-profile-picture {
			border-radius: 100%;
			width: 35px;
			height: 35px;
			background-size: cover;
			background-position: center;
		}

		.left-icons {
			flex-grow: 1;
			display: flex;
			align-items: center;
		}

		.left-icons>div:nth-child(1) {
			margin-left: auto;
		}

		.left-icons>div {
			width: 25px;
			height: 25px;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 100%;
			background: #454545;
			margin-right: 5px;
			cursor: pointer;
			transition: 0.5s all;
		}

		.left-icons>div:hover {
			transition: 0s;
			transform: scale(1.5);
			background-color: #f00;
		}

		.left-icons>div>* {
			font-size: 12px;
			color: #fff;
		}

		.search {
			border-bottom: 1px solid #232f38;
			padding: 10px;
		}

		.search>div {
			display: flex;
			border-radius: 5px;
			background-color: #232f38;
			overflow: hidden;
		}

		.search input {
			background-color: transparent;
			padding: 8px 10px;
			flex-grow: 1;
			border: none;
			color: #fff;
		}

		.search>div>div {
			width: 30px;
			height: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.search_icon>div>span {
			color: rgb(209, 202, 202);
			font-size: 10px;
		}

		.recent-chats {
			display: flex;
			flex-direction: column;
			overflow-y: auto;
		}

		.chat-list {
			display: flex;
			padding: 15px 0;
			border-bottom: 1px solid #454545;

		}

		.chat-list>.profile {
			width: 35px;
			height: 35px;
			background-color: #fff;
			border-radius: 100%;
			margin: 0 10px;
			flex-grow: 0;

		}

		.my-chats {
			flex-grow: 1;
			display: flex;
			flex-direction: column;
			padding: 10px 0;
		}

		.chats {
			display: flex;
			align-items: center;
		}

		.chats>span {
			color: #fff;
		}

		.chat-list:hover {
			background-color: #232f38;
		}

		.right {
			flex-grow: 1;
			position: relative;
		}

		.right>div.bg {
			background-image: url("./images/whatsapp-background.png");
			background-repeat: repeat;
			background-size: 400px;
			position: absolute;
			opacity: 0.06;
			width: 100%;
			height: 100%;
		}

		.right-body {
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
		}

		.right-body>div:nth-child(1) {
			background-color: #1f2c34;
			padding: 10px;
			display: flex;
		}

		.right-body>div:nth-child(2) {
			flex-grow: 1;
		}

		.right-body>div:nth-child(3) {
			padding: 10px;
			background-color: #1f2c34;
		}

		.top-icons {
			display: flex;
			align-items: center;
			flex-grow: 1;
		}

		.top-icons>span:nth-child(2) {
			margin-left: auto;
		}

		.top-icons>span {
			color: rgb(218, 218, 218);
			margin-right: 5px;
			padding: 0 8px;
		}

		.footer {
			display: flex;
			font-size: 15px;
		}

		.chat_footer {
			width: 100%;
		}

		.chat_footer>.my-footer {
			display: flex;
			/* padding: 0 10px; */
			align-items: center;
		}

		.chat_footer>.my-footer>span {
			margin: 10px;
			font-size: 20px;
			color: rgb(133, 130, 130);
			display: inline-block;
		}

		.text_msg {
			background-color: #293741;
			flex-grow: 1;
			overflow: hidden;
			border-radius: 8px;
		}

		.text_msg>input[type=text] {
			border: none;
			width: 95%;
			padding: 10px 2%;
			background: transparent;
			color: #ccc;
		}

		#chat-display {
			display: flex;
			flex-direction: column;
		}

		.message-bubble {
			flex-shrink: 1;
			display: flex;
		}

		.message-bubble>div {
			margin: 7px;
			background-color: #1f2c34;
			color: #fff;
			font-size: 12px;
			padding: 8px 10px;
			border-radius: 7px;
		}

		.message-bubble sub {
			color: #626262;
		}
	</style>
</head>

<body>
	<main>
		<div class="left">
			<div class="top-nav">
				<div class="user-profile-picture" style="
				background-image: url('https://static.displate.com/280x392/displate/2020-06-05/387118e405b0b54ed69d56b5912474e9_6c8adc22233d9df8a2ee9dad72f86bd0.jpg');
				"></div>
				<div class="left-icons">
					<div>
						<span class="fa-solid fa-bell-slash fa"></span>
					</div>
					<div>
						<span class="fa-solid fa-message fa"></span>
					</div>
					<div>
						<span class="fa-solid fa-ellipsis-vertical"></span>
					</div>
				</div>
			</div>
			<div class="search">
				<div class="search_icon">
					<div><span class="fa-solid fa-search"></span></div>
					<input type="text" placeholder="search ..." />
				</div>
			</div>
			<div class="recent-chats">
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Ivan walker</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats" style="display: flex; flex-grow: 1;">
						<div class="chats">
							<span>Peter Geeks</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Julian</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Shaffic Millers</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Remote Dev</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Josephine</span>
						</div>
					</div>
				</div>
				<div class="chat-list">
					<div class="profile">

					</div>
					<div class="my-chats">
						<div class="chats">
							<span>Ashraf</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="right">
			<div class="bg"></div>
			<div class="right-body">
				<div>
					<div class="user-profile-picture" style="
				background-image: url('https://static.displate.com/280x392/displate/2020-06-05/387118e405b0b54ed69d56b5912474e9_6c8adc22233d9df8a2ee9dad72f86bd0.jpg');
				"></div>
					<div class="top-icons">
						<span>Remote Dev</span>
						<span class="fa-solid fa-search"></span>
						<span class="fa-solid fa-ellipsis"></span>
					</div>
				</div>
				<?php
				// form submission
				$storedData = json_decode(file_get_contents('./messages/user-x.json'), 1);
				if (isset($_POST['message'])) {
					$message = $_POST['message'];
					$storedData[] = array("message" => $message, "time" => date('h:i:s A'));
					// print_r($storedData);
					file_put_contents('./messages/user-x.json', json_encode($storedData));
				}
				?>
				<div id="chat-display">
					<?php
					// to avoid, confusion, you may neglect understanding this line
					if (is_array($storedData)) {
						foreach ($storedData as $message) {
					?>
							<div class="message-bubble">
								<div>
									<p>
										<?= $message['message'] ?>
										<sub><?= $message['time'] ?></sub>
									</p>
								</div>
							</div>
					<?php
						}
					}
					?>
				</div>
				<div class="footer">
					<form class="chat_footer" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
						<div class="my-footer">
							<span class="fa-solid fa-face-grin-beam"></span>
							<span class="fa-solid fa-paperclip"></span>
							<div class="text_msg">
								<input type="text" name="message" placeholder="Text a message">
							</div>
							<span class="fa-solid fa-microphone"></span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
</body>

</html>
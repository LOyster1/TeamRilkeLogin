		<div class="container">
			<div class="nav" id="nav-bar">
				<ul>
					<?php if(!empty($user)): ?>
						<li><a href="#">Hello, <?= ucfirst($user['first_name']); ?></a>
							<ul>
								<li><a href="#">Account</a></li>
								<li><a href="../script/logout.php">Logout</a></li>
							</ul>
						</li>
					<?php else: ?>
				
					<li><a href="#">Forgot Password</a></li>
					<li><a href="../register.php">Register</a></li>
					<li><a href="../index.php">Login</a></li>
				
					


					<?php endif; ?>
				</ul>
			</div>
		</div>
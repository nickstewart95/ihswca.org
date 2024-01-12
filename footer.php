			<div class="section membership-signup">
				<h2>Help Grow The Sport</h2>
				<p>Join the IHSWCA today!</p>
				<a href="/membership/signup/">Register</a>
			</div>
            <footer class="section">
				<div class="links">
					<h3>
						<img
							src="<?php echo get_template_directory_uri(); ?>/res/img/logo.png"
							alt="Logo"
						/>
						<span>IHSWCA</span>
					</h3>
					<div>
						<h4>Popular Pages</h4>
                        <?php echo wp_nav_menu([
                        	'theme_location' => 'footer-popular-pages',
                        ]); ?>
					</div>
					<div>
						<h4>Wrestling Links</h4>
                        <?php echo wp_nav_menu([
                        	'theme_location' => 'footer-wrestling-links',
                        ]); ?>
					</div>
					<div>
						<h4>About</h4>
                        <?php echo wp_nav_menu([
                        	'theme_location' => 'footer-about',
                        ]); ?>
					</div>
				</div>
				<div class="copyright">
					<p>
						&copy; IHSWCA <?php echo date('Y'); ?>. All rights reserved <br />Developed by
						<a href="https://nickstewart.me">Nick Stewart</a>
					</p>
				</div>
			</footer>
		</div>
		<div class="block"></div>
<?php wp_footer(); ?>
    </body>
</html>
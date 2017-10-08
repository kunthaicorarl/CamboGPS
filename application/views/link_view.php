<?php $this->load->view('header');?>
<div class="container">

	<div class="row">
		<div class="col-md-4">
			<div style="text-align: center; padding: 10px 0;">
				<script type="text/javascript">
			    google_ad_client = "ca-pub-9437881386572881";
			    google_ad_slot = "7078238155";
			    google_ad_width = 336;
			    google_ad_height = 280;
			</script>
			<!-- AD336x280 -->
			<script type="text/javascript"
			src="//pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
			</div>
		</div>
		<div class="col-md-8">
			<div style="padding: 10px 0 0 0;">
				<h4><?php echo $post['title'] ?></h4>
				<p>
					<b>File size:</b> <?php echo $post['size']; echo $post['type'] ?><br/>
					<b>Uploaded:</b> <?php echo $post['date'] ?><br/>
					<b>Country:</b> <?php echo $post['country'] ?><br/>
				</p>
				<a href="<?php echo $post['url'] ?>" class="btn btn-success" target="_blank"">Download</a>
			</div>
			<div class="row">
				<div class="text-center">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- AD-Re -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-9437881386572881"
					     data-ad-slot="1473368319"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12" style="padding-top: 20px;">
			<h3 class="text-center">SEO TIPS</h3>
				<div class="row" style="padding: 20px 0;">
					<div class="col-md-6">
						<p>
							1. Make the website about one thing.<br/>
							2. Mention keywords where they matter most.<br/>
							3. Link to internal pages on your site.<br/>
							4. Use a permalink structure that includes keywords.<br/>
							5. Remove anything that slows down your website.<br/>
						</p>
					</div>
					<div class="col-md-6">
						<p>
							6. Use keywords in your images.<br/>
							7. Link to other websites with relevant content.<br/>
							8. Update your website frequently.<br/>
							9. Make sure your website is indexed in search engines.<br/>
							10. Have other websites link to you.<br/>
						</p>
					</div>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div style="text-align: center; padding: 10px 0;">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- AD-RE2 -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-9437881386572881"
				     data-ad-slot="4221696255"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
	</div>	
</div>

<?php $this->load->view('footer');?>
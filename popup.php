
<div class="dialog" id="dialog-2" style="color:#000000;">
			<div class="mover-wrap dialog__content">
				<div class="handle"></div>
					<div class="mover">
						<div class="dialog__content-inner" style="width: 50%; margin-left: 24%;">
							<div class="dialog__header" style="background-color:#0c1232;">
								<h2 align="center" style="font-size:1.5em;">FAQ</h2>
								<button class="action action--close">
									<i class="icon icon--cross"></i>
								</button>
							</div>
					<div class="dialog__body" style="text-align:left; pointer-events:auto; padding-top:1%; padding-bottom:1%;"><!--start here-->
						<details class="faq">
							<summary style="font-family:Bradley Hand ITC; font-size:1.5em;"><b>Why Smapsters?</b></summary>
							<h3 style="text-transform:none; font-size:1em;">At Smapsters, we aim at providing a 360 degree travel experience for anybody and everybody.
							We take travellers to offbeat locations at affordable costs with one of the best execution teams on ground.</h3>
						</details>
						<br>
						<details class="faq">
							<summary style="font-family:Bradley Hand ITC; font-size:1.5em;"><b>How do I became a part of a Smapsters trip?</b></summary>
							<h3 id="A2" style="text-transform:none; font-size:1em;">
							 Book your seat in any one of the <a href="upcoming.php" style="color:#0c1026; text-decoration:underline;">upcoming trips</a> or ask us to make one for your group by filling this 
							 <a href="customise.php" style="color:#0c1026; text-decoration:underline;">customise form</a> or select one for your group from <a href="destinations.php" style="color:#0c1026; text-decoration:underline;">destination archive</a>.
							</h3>
						</details>
						<br>
						<details  class="faq">
							<summary style="font-family:Bradley Hand ITC; font-size:1.5em;"><b>How can I get a trip organised for my group?</b></summary>
							<h3 id="A3" style="text-transform:none; font-size:1em;">
							  Ask us to make one for your group by filling this <a href="customise.php" style="color:#0c1026; text-decoration:underline;">customise form</a> or select one for your group from <a href="destinations.php" style="color:#0c1026; text-decoration:underline;">destination archive</a>.
							</h3>
						</details>						
					</div>	<!--end here-->
					</div>
				</div>
			</div>
			</div>
		<script src="pop up/js/js_new_registeration/draggabilly.pkgd.min.js"></script>
		<script src="pop up/js/js_new_registeration/main.js"></script>
		<script>
			(function() {
				var dialog = new DialogEl(document.getElementById('dialog-2'), {
					mainElement : {
						minscale : 0.6,
						minopacity : 0.5,
						rY : 40
					},
					innerElements : {tx : 100, ty : 100},
					outofbounds: {x : 0, y: 0}
				});

				document.getElementById('trigger-dialog2').addEventListener('click', function(ev) {
					dialog.open();
				});
			})();
		</script>
		<!--End dialog box-->
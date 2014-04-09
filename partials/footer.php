<!-- +++++ Footer Section +++++ -->

	<div id="footer">
		<div class="container">
			<div class="row">
				<p>&copy;2014 Michael Dionne</p>
			</div><!-- /row -->

		</div><!-- /container -->
	</div><!-- /#footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo theme_url('assets/js/bootstrap.min.js'); ?>"></script>
    
    <!-- Reftagger -->
    	<script>
	var refTagger = {
		settings: {
			bibleVersion: "ESV",			
			roundCorners: true,
			socialSharing: ["twitter"],
			tooltipStyle: "dark",
			customStyle : {
				heading: {
					fontFamily : "Open+Sans, Times, 'Times New Roman', serif",
					fontSize : "14px"
				},
				body   : {
					fontFamily : "Open+Sans, Times, 'Times New Roman', serif"
				}
			}
		}
	};
	(function(d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = "//api.reftagger.com/v2/RefTagger.js";
		s.parentNode.insertBefore(g, s);
	}(document, "script"));
</script>
    

</body>
</html>

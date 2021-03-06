<!-- +++++ Footer Section +++++ -->

	<div id="footer">
		<div class="container">
			<div class="row" >
				<p class="col-md-4">&copy;2014 Michael Dionne</p>
				<p class=".col-md-4 .col-md-offset-4">If you want to follow me, you can reach me here: <a href="https://twitter.com/itsmikedionne" title="Twitter">Twitter</a> | <a href="http://instagram.com/mr_dionne" title="Instagram">Instagram</a>  | <a href="http://michaeldionne.vsco.co" title="VSCO">VSCO</a> | <a href="mailto:me@michaeldionne.co" title="Email">Email</a></p>
			</div>
			<!-- /row -->

		</div><!-- /container -->
	</div><!-- /#footer -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo theme_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script>
        var share_button_right = new Share(".share-button", {
      title: $('title').text(),
      ui: {
        flyout: "bottom right",
        button_text: "Share",
        button_background: "#16a085",
        button_color: "#555",
      },
    });
  </script>

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
					fontFamily : "Georgia, Times, 'Times New Roman', serif",
					fontSize : "14px"
				},
				body   : {
					fontFamily : "Georgia, Times, 'Times New Roman', serif"
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

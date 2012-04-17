<![if !IE]><!DOCTYPE html><![endif]><!--[if lte IE 9]><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><![endif]-->
<html lang="en" class="wf-inactive">
<head>
	<title>Moodboard</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
	<script type="text/javascript">
		WebFont.load({
			typekit: { id: 'hwr5tkh' },
			custom: { families: ['familyName'], urls: ['/css/assets/FONT-family.css'] }
		});
	</script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="https://github.com/jeresig/jquery.hotkeys/raw/master/jquery.hotkeys.js"></script>
</head>

<body>

<!-- GRID -->
	
	<style type="text/css" media="screen">
ul#grid{background:url("css/assets/grid.gif") repeat scroll left top transparent;/* display:none; */height:100%;list-style-type:none;margin:0 auto;opacity:.3;padding:0;position:fixed;top:0;left:0px;width:100%;z-index:1000}
ul#grid li{background:url("css/assets/grid.gif") repeat scroll left top red;height:100%;display:inline;float:left;padding:0}
ul#grid.large{background-color:green;min-width:1025px;max-width:1200px;right:0;}
ul#grid.medium{background-color:gray;min-width:769px;max-width:1024px}
ul#grid.small{background-color:yellow;min-width:481px;max-width:768px}
ul#grid.mobile{background-color:blue;min-width:320px;max-width:480px}
ul#grid.col12 li{margin-left:1.25%;margin-right:1.25%;width:5.625%}
ul#grid.col12 li:first-child{margin-left:2.5%}
ul#grid.col10 li{margin-left:1.25%;margin-right:1.25%;width:7.25%}
ul#grid.col10 li:first-child{margin-left:2.5%}
ul#grid.col9 li{margin-left:1.4%;margin-right:1.4%;width:8%}
ul#grid.col9 li:first-child{margin-left:2.8%}
ul#grid.col8 li{margin-left:1.6%;margin-right:1.6%;width:8.9%}
ul#grid.col8 li:first-child{margin-left:3.2%}
ul#grid.col7 li{margin-left:1.7%;margin-right:1.7%;width:10.4%}
ul#grid.col7 li:first-child{margin-left:3.4%}
ul#grid.col6 li{margin-left:2%;margin-right:2%;width:12%}
ul#grid.col6 li:first-child{margin-left:4%}
ul#grid.col3 li{margin-left:3.5%;margin-right:3.5%;width:24%}
ul#grid.col3 li:first-child{margin-left:7%}
ul#grid.col1 li{margin-left:5.5%;margin-right:5.5%;width:89%}
ul#grid.col1 li:nth-child(n+2),ul#grid.col3 li:nth-child(n+4),ul#grid.col6 li:nth-child(n+7),ul#grid.col7 li:nth-child(n+8),ul#grid.col8 li:nth-child(n+9),ul#grid.col10 li:nth-child(n+11),ul#grid.col9 li:nth-child(n+10){display:none}
	</style>

	<style type="text/css" media="screen and (max-width: 480px)">
/* mobile col3 */
ul#grid{background-color:blue;min-width:320px;max-width:480px}
ul#grid li{margin-left:3.5%;margin-right:3.5%;width:24%}
ul#grid li:first-child{margin-left:7%}
ul#grid li:nth-child(n+4){display:none}
	</style>

	<style type="text/css" media="screen and (min-width: 481px) and (max-width: 768px)">
/* small col6 */
ul#grid{background-color:yellow;min-width:481px;max-width:768px}
ul#grid li{margin-left:2%;margin-right:2%;width:12%}
ul#grid li:first-child{margin-left:4%}
ul#grid li:nth-child(n+7){display:none}
	</style>

	<style type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)">
/* medium col9 */
ul#grid{background-color:gray;min-width:769px;max-width:1024px;}
ul#grid li{margin-left:1.4%;margin-right:1.4%;width:8%}
ul#grid li:first-child{margin-left:2.8%}
ul#grid li:nth-child(n+10){display:none}
	</style>

	<style type="text/css" media="screen and (min-width: 1025px)">
/* large col12 */
ul#grid{background-color:green;min-width:1025px;max-width:1200px;right:0;}
ul#grid li{margin-left:1.25%;margin-right:1.25%;width:5.625%}
ul#grid li:first-child{margin-left:2.5%}
	</style>
	
	<ul id="grid">
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
		<li class="img-txt">column</li>
	</ul>

<!-- END #grid -->

	<div class="wrapper">
		<header>
			<a href="#" class="img-txt logo">Logo</a>
			<h1>Evocative adjectives and the general description of the mood goes here.</h1>
		</header><!-- END header -->

		<div class="content">

			<div class="genbox columnFull" id="col-pat-text">
				<h2>Colour, Pattern & Texture</h2>
				<p>The palette is ... with a combination of ... colours used for highlights are ... <br />
				... form the base colour for the majority of the layout. The overall colour is ... with ... for contrast and interest.</p>
				<p>The texture includes the use of subtle gradients, shadows and highlights to give a sense of realism. ... patterns are used to bring attention and interest to an object or area of the layout. The texture is ...</p>
				<p>Drop shadows are used to give elements a sense of realism. Subtle patterns ... is used to bring attention to an object or as a background.</p>
			</div><!-- END #col-pat-text -->
			
			<div class="genbox columnFull" id="photography">
				<h2>Photography</h2>
				<span class="image align-right">
					<img src="images/img.jpg" alt="image" width="567" height="414" />
					<small>This is an image caption</small>
				</span>
				<p>... photography used as background elements and images, focusing on people ... Photography is used in two principle ways:</p>
				<ul>
					<li>As an aesthetic element that is part of the layout(ex: the above branch with leaves)</li>
					<li>As an actual image/photograph that’s inline with the copy(ex: an image of a person in an article/blogpost)</li>
				</ul>
				<p>In the former instance the style should be ... The theme for these images ... In the latter instance, to set the photographs apart from the background and give them prominences ... These images should be properly labeled and, where possible, a caption should be attributed.</p>
				<p>Photographs are displayed in pop-out or modal windows. Thumbnails, focusing on a part of the piece, are used as previews (click on any of the thumbnails to the left for a demonstration).</p>
			</div><!-- END #photography -->
			
			<div class="genbox columnFull" id="layout-posish">
				<h2>Layout & Positioning</h2>
				<p>A traditional layout with a set width and a strong reliance on an underlying grid is used in this approach. The layout is characterized by a symmetrical and balanced positioning of elements. Vertical rhythm is achieved with a baseline grid to facilitate easier reading, useful for long articles. A traditional layout using vertical “banding” to create separation and focus.</p>
				<p>... are used to separate sections and create focus. A tighter placement of elements, conserves space to better suit visitors with small to medium size screens.</p>
				<p>A clean and open layout using ample white space to create separation and focus. A strong grid underpins the placement of elements. However, the positioning is quite fluid with objects moving and adjusting based on the size and resolution of users’ screens. This allows the design to be more customizable to suit the needs of users better. Click on the thumbnails to the left to see a couple examples of such sites (to get the full effect try re-sizing your browser window).</p>
				<p>Interest is also created through the use of real life objects as aesthetic elements that break-up the layout and give the visitors a sense of the tactility. ... shapes that accentuate ... and allow the layout to be quite open.</p>
			</div><!-- END #layout-posish -->
			
			<div class="genbox columnFull" id="typography">
				<h2>Typography</h2>
				<h3>Headings</h3>
				<p>The font that’s used for main headings and sets the tone ... It is an ... It has several weights ... This font is used for secondary headings as well as other elements like buttons.</p>
				<h3>Body copy</h3>
				<p>... is used for the body copy and most other elements. It is a sturdy, and somewhat compact serif font that displays well on screen. Unibody 8&mdash;a pixel font that works great at small sizes&mdash;is used for smaller elements. An example of this would be captions and by-lines for images.</p>
				<h4>Font stacks</h4>
				<p>In order to accommodate older web browsers that don’t support non-standard fonts the following font stacks we’ll be used to make sure that the appearance of the page will degrade gracefully:</p>
				<ul>
					<li>Optima › Lucida Sans › sans-serif</li>
					<li>News Gothic › Helvetica › Arial › sans-serif</li>
					<li>Unibody 8 › Verdana › sans-serif</li>
				</ul>
				<h3>Other typographic elements</h3>
				<p>This sentence has emphasis and a link element.</p>
				<ul>
					<li>This is an Unordered list</li>
					<li>Ornare eget volutpat dolor</li>
					<li>Primis in faucibus orci in faucibus orci quis eget dolor</li>
				</ul>
				<ol>
					<li>This is an Ordered list</li>
					<li>Vestibulum ante ipsum pellen tesque quis erat undre upsto</li>
					<li>Ultrices posuere cubilia</li>
				</ol>
				<blockquote>This is a block quote lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <span class="author">Author Name</span></blockquote>
			</div><!-- END #typography -->
			
			<div class="genbox columnFull" id="forms">
				<h2>Forms & Buttons</h2>
				<p>A simple approach to form elements that focuses on guiding the user experience while using icons and colours to indicate different states.</p>
				<form>
					<fieldset>
						<h3><legend>Inputs & Textarea</legend></h3>
						<div class="fieldrow text-input">
							<label for="text-input">Text input</label>
							<input type="text" id="text-input" name="text_input">
						</div>
						<div class="fieldrow file-input">
							<label for="file-input">Address</label>
							<input type="file" id="file-input" name="file_input">
							<input type="text" class="fake-file" value=""><a href="#" class="btn fake-file"><span>Browse</span></a>
						</div>
						<div class="fieldrow textarea">
							<label for="textarea">Where did you learn about our school? (optional)</label>
							<textarea id="textarea" name="textarea"></textarea>
						</div>
					</fieldset>
					<fieldset>
						<h3><legend>Select, Radios & Checkboxes</legend></h3>
						<div class="fieldrow select">
							<label for="select">Select</label>
							<select id="select" name="select" >
								<option>&ndash; select &ndash;</option>
								<option value="A">Option A</option>
								<option value="B" >Option B</option>
								<option value="C">Option C</option>
							</select>
						</div>
						<div class="fieldrow radio">
							<label>Radio buttons</label>
							<input type="radio" value="yes" id="option-yes" name="radio-butts"><label for="option-yes">Yes</label>
							<input type="radio" value="no" id="option-no" name="radio-butts"><label for="option-no">No</label>
						</div>
						<div class="fieldrow checkbox">
							<label>Checkboxes</label>
							<input type="checkbox" value="A" id="option-a" name="checkboxes"><label for="option-a">Option A</label>
							<input type="checkbox" value="B" id="option-b" name="checkboxes"><label for="option-b">Option B</label>
							<input type="checkbox" value="C" id="option-c" name="checkboxes"><label for="option-c">Option C</label>
						</div>
					</fieldset>
					<div class="buttons">
						<a href="#" class="btn btn-small"><span>Small</span></a>
						<a href="#" class="btn"><span>Cancel</span></a>
						<button class="btn-large"><span>Submit</span></button>
					
					</div>
				</form>
				<p>Buttons use size, colour to indicate importance and function.</p>
			</div><!-- END #forms -->
			
		</div><!-- END .content -->
	</div><!-- END .wrapper -->

	<footer class="wrapper">
		<div>
			<p class="genbox columnFull"><span>Client: Project&mdash;Mood-board N</span> &copy; <?php echo date('Y') ?> Array Design Studio</p>
		</div>
	</footer><!-- END footer -->
	<script type="text/javascript" src="js/moods.js"></script>
</body>
</html>
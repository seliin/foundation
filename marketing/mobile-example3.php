<? $page_title = "Rapid Prototyping and Building Framework from ZURB" ?>
<?php include("includes/_header.php"); ?>
  
  <style>
  
  	.example .row, .example .row .column, .example .row .columns { background: #eee; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; height: 32px; text-indent: 4px; line-height: 32px; }
  	.example .row { margin-bottom: 10px; }
  	.example .row .column, .example .row .columns { background: #ccc; }
  	
  	@media handheld, only screen and (max-width: 767px) {
		.example .row { height: auto; }
		.example .row .column, .example .row .columns { margin-bottom: 10px; }
		.example .row .column:last-child, .example .row .columns:last-child { margin-bottom: 0; }
	}
  
  </style>
  
  <header>
    <div class="row">
      <div class="twelve columns">
        <h1>Mobile Visibility</h1>
        <h4>Foundation is designed to quickly prototype, and one thing we've found very helpful is a series of visibility classes that can be applied to turn things on and off for different devices. On this page, you'll see slightly different interfaces on each class of device (desktop, tablet, and phone).</h4>
      </div>
    </div>
  </header>
  
  <section id="mainContent">
  
	 <div class="row show-for-large">
	  	<div class="twelve columns">
	  		<h3>Desktop Interface</h3><br />
	  		<dl class="nice tabs">
	  			<dd class="active"><a href="#" class="active">Homepage</a></dd>
	  			<dd><a href="#">Secondary Page</a></dd>
	  			<dd><a href="#">Tertiary Page</a></dd>
	  		</dl>
	  	</div>
	  </div>
	  <div class="row show-for-large">
	  	<div class="eight columns">
	  		<p>As an example, you'll only see this interface if you're on a desktop machine (something with a resolution higher than 768px wide, and not matching specific tablet resolutions). On a desktop we might make more use of columns for layout, as well as show more information for content.</p>
	  		<div class="row">
	  			<div class="six columns">
			  		<ul class="block-grid three-up">
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  		</ul>
	  			</div>
	  		</div>
	  	</div>
	  	<div class="four columns">
	  		<div class="panel">
	  			<h5>Example Download</h5>
	  			<p>Since downloads only work on desktops (well, or with Dropbox on mobile devices) we only show this for desktops.</p>
	  			<p><a href="#" class="nice blue radius button">Example Download</a></p>
	  		</div>
	  	</div>
	  </div>
	  
	  <div class="row show-for-medium">
	  	<div class="twelve columns">
	  		<h3>Tablet Interface</h3><br />
	  		<dl class="nice tabs">
	  			<dd class="active"><a href="#" class="active">Homepage</a></dd>
	  			<dd><a href="#">Secondary Page</a></dd>
	  			<dd><a href="#">Tertiary Page</a></dd>
	  		</dl>
	  	</div>
	  </div>
	  <div class="row show-for-medium">
	  	<div class="twelve columns">
	  		<p>As an example, you'll only see this interface if you're on a tablet device (something with a resolution matching specific tablet resolutions). On a tablet we might make more use of columns for layout but we would not show items like download links.</p>
	  		<div class="row">
	  			<div class="six columns">
			  		<ul class="block-grid three-up">
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  			<li><img src="http://placehold.it/100x100" /></li>
			  		</ul>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	  
	  <div class="row show-for-small">
	  	<div class="twelve columns">
	  		
	  		<h3>Phone Interface</h3><br />
	  		<p>As an example, you'll only see this interface if you're on a phone (something with a resolution lower than desktops or tablets). On a phone our columns will all stack, and we would place navigation at the bottom of the page.</p>
	  		<ul class="block-grid three-up">
	  			<li><img src="http://placehold.it/100x100" /></li>
	  			<li><img src="http://placehold.it/100x100" /></li>
	  			<li><img src="http://placehold.it/100x100" /></li>
	  			<li><img src="http://placehold.it/100x100" /></li>
	  			<li><img src="http://placehold.it/100x100" /></li>
	  			<li><img src="http://placehold.it/100x100" /></li>
	  		</ul>
	  	</div>
	  </div>
	  
	  <div class="row show-for-small">
	  	<div class="twelve columns">
	  		<dl class="nice mobile tabs">
	  			<dd class="active"><a href="#" class="active">Homepage</a></dd>
	  			<dd><a href="#">Secondary Page</a></dd>
	  			<dd><a href="#">Tertiary Page</a></dd>
	  		</dl>
	  	</div>
	  </div>
  </section>
	 
  
    
  	
<?php include("includes/_footer.php");  ?>

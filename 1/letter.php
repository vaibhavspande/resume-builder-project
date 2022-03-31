<html>
<head>
	<title>Formal Letter</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/scroll.css"> -->
	<link rel="stylesheet" type="text/css" href="css/column_scroll.css">
	<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/thin_scroll.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css"> 
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "letter-template/letter.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" type='text/css'>
	<meta name="description" content="Online document editor like interface to create and save Resume">
	<meta name="keywords" content="resume,cv,maker,creator,generator,nitw,warangal,nit warangal,projects,computer science">
</head>

<body>
    <style>
    body {
	background-color: #C17B2C;
	line-height: 1.4em;
	padding: 0;
	margin: 0;
}
        #left {
	background-color: #C17B2C;
	line-height: 1em;
}
    </style>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 no-print" id="left">
			<div id="panel">
					<h3 class="text-center" data-toggle="modal">Formal Letter</h3>
             <!--   <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#usageModal">VIEW INSTRUCTIONS</button> -->
				<button class="btn btn-block btn-success" onclick="window.print()">PRINT AS PDF</button>

				<hr>

				<h4 class="text-center">Template settings</h4>
				<h5>
					Horizontal margin
					<div class="toggle-button">
						<div class="toggle-option" data-toggle="margin" id="margin1">1</div>
						<div class="toggle-option" data-toggle="margin" id="margin2">2</div>
						<div class="toggle-option" data-toggle="margin" id="margin3">3</div>
						<div class="toggle-option selected" data-toggle="margin" id="margin4">4</div>
						<div class="toggle-option" data-toggle="margin" id="margin5">5</div>
						<div class="toggle-option" data-toggle="margin" id="margin6">6</div>
					</div>
				</h5>
                
                <h5>
						Font type
						<div class="toggle-button">
							<div class="toggle-option" data-toggle="font" id="fontVerdanaSans">1</div>
							<div class="toggle-option" data-toggle="font" id="fontRoboto">2</div>
							<div class="toggle-option selected" data-toggle="font" id="fontDroid">3</div>
						</div>
					</h5>


			</div>

		</div>


		<div class="col-sm-9 text-center" id="right">

			<div id="page" class="droid">
                <p class = "address">
221B Baker Street<br>
London,UK</p>
<p class = "insideaddress">
Basil of Baker Street<br>
221&frac12 Baker Street <br>
London,UK </p>
<p class = "date">
  January 6, 1914
</p>
<p class = "greetings">
  To Whom It May Concern,
</p>
<p class = "letter">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  In ut libero eleifend, convallis risus et, luctus ipsum.
   Vivamus pretium lorem eget hendrerit porta.
   Suspendisse commodo nibh accumsan ligula blandit mattis.
   Donec in eleifend nibh. Ut in tincidunt nisl, vitae vestibulum erat.
   Vivamus sit amet accumsan velit.
   Donec sit amet mi massa.
   Nunc in diam nec tellus aliquam consectetur vitae at tellus.
    Phasellus id pharetra urna.
    Phasellus dapibus ante quis metus fermentum tempor id sed nibh.

Maecenas sodales erat non enim varius congue.
Proin semper nulla eu eros faucibus tristique.
Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam lobortis augue quis magna convallis lacinia. Proin luctus libero et gravida tincidunt. Nunc ornare eget magna ac semper. Aliquam commodo, mi a varius varius, nisi eros placerat velit, a rutrum eros metus et nulla.
Donec suscipit turpis sit amet urna vestibulum, nec mollis quam consequat.
Ut ac auctor risus. Maecenas sagittis sodales dolor id porttitor.

 ut aliquam lorem dui ac nulla. Phasellus vitae elit rutrum ipsum pulvinar aliquam sit amet a massa. Morbi quis accumsan nisi. Etiam vulputate arcu a enim sodales, id laoreet augue consectetur. Integer tincidunt odio ornare mauris pharetra gravida et commodo quam.
</p>
<p class = "closing">
Sincerely
</p>
<p class = "name">
Sherlock Holmes
</p>

			</div>

		</div>


	</div>

</div>
<!--

<div class="modal fade" id="usageModal" tabindex='-1'>
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h5><strong>Note : </strong>Use <strong>Google Chrome</strong>. Other browsers are unable to print properly and don't support some features.</h5>
				<h4><strong>Editing content</strong></h4>
				<ul>
					<li>Edit the Resume content just like a normal document editor (cut,copy,undo etc).</li>
					<li>Entire sections can be added, reordered, removed just by cut,copy,pasting method. (Use "show/hide sections" button to hide but retain content)</li>
					<li>To remove a section/point/mentor/link etc, just delete it.</li>
					<li>For styled/formatted text, select the text portion and press <kbd>Ctrl+b</kbd> for bold, <kbd>Ctrl+i</kbd> for italics, <kbd>Ctrl+u</kbd> for underlined text.</li>
					<li>Use "Insert sub-list" button to insert sub-points in a point. (like as in achivements section)</li>
					<li>Change indentation and bullet style of the list where your cursor is placed.</li>
				</ul>
				<h4><strong>Editing template</strong></h4>
				<ul>
					<li>Use the options in the left panel to modify the template/look.</li>
					<li>In case you want to use a different template than the official IITG template, choose the corresponding button to see other setting options. (For on-campus purpose, you must use official IITG template)</li>
				</ul>
				<h4><strong>Saving</strong></h4>
				<ul>
					<li>Close any popup box (like this instructions popup	) if opened. Press <kbd>Ctrl+s</kbd></li>
					<li>This will save the webpage (a .html file and a folder will be saved. Keep them together)</li>
					<li>Open the .html file in browser from your PC.</li>
					<li>This way, you can maintain multiple saved copies for each profile/template on your PC.</li>
				</ul>
				<h4><strong>Print as PDF</strong></h4>
				<ul>
					<li>Adjust margin in the Chrome's print dialog box. You may need it if a section is getting split between two pages. Print each page separately with different margins if needed.</li>
					<li>If URLs or some stray text is being shown in print preview, disable the options "Include headers and footers","Include background graphics" etc in the print dialog box.</li>
				</ul>
				<h4><strong>Merge and compress PDFs</strong></h4>
				<ul>
					<li><a class="blue" target="_blank" href="http://www.pdfmerge.com/">pdfmerge.com/</a> is one of the best sites available for this task.</li>
				</ul>
			</div>

		</div>
	</div>
</div>

-->

<div class="modal fade" id="sectionToggleModal" tabindex='-1'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionEducation">Education</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionExperience">Experience</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionPublications">Publications</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionProjects">Projects</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionSkills">Technical Skills</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionResponsibility">Positions of Responsibility</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionAchievements">Achievements</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionCourses">Key courses taken</label></div>
                <div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionlinks">Links</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" checked="true" value="sectionCurricular">Hobbies</label></div>
				<div class="checkbox"><label><input type="checkbox" name="sectionToggle" value="sectionFooterMessage">References message</label></div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/header.js"></script>

</body>

</html>

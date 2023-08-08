<?php
    $page_title="Call for Papers";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
	<div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
		<b><h2>The 19th International Conference on Mobility, Sensing and Networking (MSN 2023)</h2>
		<p>December 14-16, 2023 · Nanjing, China.</p></b>
		<a href="TBD">https://ieee-msn.org/2023</a>

		<h1>Call for Papers</h1>
		<p>MSN 2023 provides a forum for academic researchers and industry practitioners to present research progresses, exchange new ideas, and identify future directions in the field of Mobility, Sensing and Networking. </p>

       	<h2>Scope and Objectives</h2>

        <p>Mobility, sensing and networking are the key areas of enabling technologies for the next-generation networks, Internet of Things and Cyber-Physical Systems.</p>

        <p>Recent years have witnessed the increasing convergence of algorithms, protocols, and applications for mobility, sensing and networking in a range of applications including connected vehicles, smart cities, smart manufacturing, smart healthcare, smart agriculture, and digital twins. </p>

        <p>Building on the past 18 years of success, the 19th International Conference on Mobility, Sensing and Networking (MSN 2023) provides a forum for academic researchers and industry practitioners to exchange new research ideas, present their progress, and identify future directions in the field of mobility, sensing and networking.</p>

        <p>The conference solicits submissions from all research areas related to mobility, sensing and networking, as well as their corresponding systems and applications. Topics of interests are covered by the following tracks:</p>

	      <ul>
	        <li>Mobile & Wireless Sensing and Networking</li>
	        <li>Edge Computing, IoT and Digital Twins</li>
	        <li>Security, Privacy, Trust, and Blockchain</li>
	        <li>Big Data and AI</li>
	        <li>Systems, Tools and Testbed</li>
	        <li>Applications in Smart Cities, Healthcare and Other Areas</li>
	 	 </ul>

<!-- 	 	<h2>Submission Procedures</h2>
	 	<p>Submitted manuscripts must be prepared according to IEEE Computer Society Proceedings Format (double column, 10pt font, letter paper) and submitted in the PDF format. The manuscript submitted for review should be no longer than 8 pages. After the manuscript is accepted, the camera-ready paper may have up to 10 pages, subject to an additional fee per extra page. Manuscripts should be submitted to one of the research tracks. Submitted manuscripts must not contain previously published material or be under consideration for publication in another conference or journal at the time of submission. The accepted papers will be included in IEEE Xplore.</p> -->

	 	<h2>Paper Submission and Publication</h2>
	 	<p>Details of paper submission and publication can be found <a href="submission.php">here</a>.</p>

		
		<h2 style="color: black">Organization Committee</h2>

		<p>Details of organization committee can be found <a href="organization.php">here</a>.</p>
		
<!-- 		<h2>Best Paper Award and Journal Special Issues</h2>

		<p><span style="color: red;font-weight: bold">Three accepted papers will be selected for best paper awards.</span> . Selected papers will be recommended to IEEE Transactions on Network Science and Engineering (TNSE, IF: 5.213), and Elsevier Computer Communications for <span style="color: red;font-weight: bold">potential fast-track publications.</span></p> -->

		<h2>Important Dates</h2>

		<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
		   <?php add_dateitem("<del>Jul 20, 2023<del>", "<del>Paper Submission Due<del>"); ?>
    <?php add_dateitem("<del><span style=\"color: red;font-weight: bold\">Aug 5, 2023</span><del>", "<del><span style=\"color: red;font-weight: bold\">Paper Submission Due (extended)</span><del>"); ?>
    		
<?php add_dateitem("Sep.15, 2023", "Workshop Proposal Submission Due"); ?>
<?php add_dateitem("Oct. 1, 2023", "Author Notification"); ?>
    	
		    <?php add_dateitem("Oct 25, 2023", "Camera-Ready Due"); ?>
		    <?php add_dateitem("Dec 14-16, 2023", "Conference Date"); ?>  
		</ul>

		<br><br>
	</div>
	<div  class="ui-block-b" style="width:30%;height:100%;background-color:#e4e5e6;padding:20px 15px 15px 15px">
		<h1>News</h1>
			<?php
			include("include/news.php")
			?>
		<h1>Important Dates</h1>
			<?php
			include("include/dates.php")
			?>
	</div>
</div>



<?php include ("include/footer.php"); ?>
s

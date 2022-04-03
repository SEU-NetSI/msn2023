<?php
    $page_title="Call for Papers";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
	<div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
		<b><h2>The 17th International Conference on Mobility, Sensing and Networking (MSN 2021)</h2>
		<p>December 13-15, 2021 · Exeter, U. K.</p></b>
		<a href="https://ieee-msn.org/2021">https://ieee-msn.org/2021</a>

		<h1>Call for Papers</h1>
		<p>MSN 2021 provides a forum for academic researchers and industry practitioners to present research progresses, exchange new ideas, and identify future directions in the field of Mobility, Sensing and Networking. MSN 2021 is technically sponsored by IEEE.</p>

       	<h2>Scope and Objectives</h2>
        <p>Mobility, sensing and networking are the key areas of enabling technologies for the next-generation networks, Internet of Things and Cyber-Physical Systems. Recent years have witnessed the increasing convergence of algorithms, protocols, and applications for mobility, sensing and networking in a range of applications including connected vehicles, smart cities, industries, and smart health. Building on the past 16 years of success, the 17th International Conference on Mobility, Sensing and Networking (MSN 2021) provides a forum for academic researchers and industry practitioners to exchange new research ideas, present their progress, and identify future directions in the field of mobility, sensing and networking.</p>

        <p>The conference solicits submissions from all research areas related to mobility, sensing and networking, as well as their corresponding systems and applications. Topics of interests are covered by the following tracks:</p>

	      <ul>
	        <li>Algorithms, Theory, and Protocols</li>
	        <li>Systems, Tools, Experiments & Applications</li>
	        <li>Mobile & Wireless Sensing and Networking</li>
	        <li>Edge Computing and IoT</li>
	        <li>Network Security, Privacy, Trust, and Blockchain </li>
	        <li>Big Data and AI in Networking </li>
	 	 </ul>

	 	<h2>Submission Procedures</h2>
	 	<p>Submitted manuscripts must be prepared according to IEEE Computer Society Proceedings Format (double column, 10pt font, letter paper) and submitted in the PDF format. The manuscript submitted for review should be no longer than 8 pages. After the manuscript is accepted, the camera-ready paper may have up to 10 pages, subject to an additional fee per extra page. Manuscripts should be submitted to one of the research tracks. Submitted manuscripts must not contain previously published material or be under consideration for publication in another conference or journal at the time of submission. The accepted papers will be included in IEEE Xplore. </p>

	 	<h2>Paper Submission and Publication</h2>
	 	<p>Details of paper submission and publication can be found <a href="https://ieee-msn.org/2021/submission.php">here</a>.</p>

		
		<h2 style="color: black">Organization Committee</h2>

		<p>Details of organization committee can be found <a href="organization.php">here</a>.</p>
		
		<h2>Best Paper Award and Journal Special Issues</h2>

		<p><span style="color: red;font-weight: bold">Three accepted papers will be selected for best paper awards.</span> . Selected papers will be recommended to IEEE Transactions on Network Science and Engineering (TNSE, IF: 5.213), and Elsevier Computer Communications for <span style="color: red;font-weight: bold">potential fast-track publications.</span></p>

		<h2>Important Dates</h2>

		<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
		    <?php add_dateitem("<del>July 2, 2021</del>", "<del>Paper Submission Due</del>"); ?>
		    <?php add_dateitem("<del><span style=\"color: red;font-weight: bold\">July 23, 2021</span></del>", "<del><span style=\"color: red;font-weight: bold\">Paper Submission Due(extended)</span></del>"); ?>
		    <?php add_dateitem("<span style=\"color: red;font-weight: bold\">August 3, 2021</span>", "<span style=\"color: red;font-weight: bold\">Paper Submission Due(Frim)</span>"); ?>
		    <?php add_dateitem("Sep 15, 2021", "Author Notification"); ?>
		    <?php add_dateitem("Oct 20, 2021", "Camera-Ready Due"); ?>
		    <?php add_dateitem("Dec 13-15, 2021", "Conference Date"); ?>  
		</ul>

		<br><br>
	</div>
	<div  class="ui-block-b" style="width:30%;height:100%;background-color:#e4e5e6;padding:20px 15px 15px 15px">
		<h1>News</h1>
			<?php
			include("include/news.php")
			?>
		<h1>Important Days</h1>
			<?php
			include("include/dates.php")
			?>
	</div>
</div>



<?php include ("include/footer.php"); ?>
s
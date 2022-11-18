<?php
    $page_title="Presentation Guidelines";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
<h1>Virtual Presentation Guidelines</h1>
<p>As MSN 2022 will be held as an online conference, <b>authors of accepted papers are required to record and submit a video, and slides of your talk by November 30, 2022.</b></p>

<p>Please <b>be present in your session at least 10 minutes before the beginning of the session</b> and <b>report to the session chair</b>. Papers without the slide and video submission before the deadline and the absence of the registered author during the scheduled presentation time will be treated as NO SHOW, and the paper will not be published in the final proceedings.</p>

<p>MSN 2022 requires authors to prepare a <b>20-minute</b> talk for <b>full papers</b> or a <b>10-minute</b> talk for <b>short papers and workshop papers</b>.</p>

<h2>Video Preparation</h2>
<p>Please refer to the step-by-step tutorial (<a href="files/record_tutorial.pdf" target="_blank">here</a> ) on how your video should be prepared (including a requirement for including picture-in-picture window). Once you finish preparing your video, please follow the instructions below and <a>upload your slides and talk videos by November 30, 2022.</a></p>

<h2>Uploading Video and Slides</h2>
    <ol>
        <li>Visit the URL for the online conference website (<a href="https://msn2022.info">https://msn2022.info</a>), and sign up with your name, affiliation, and email address. In the activation email you receive, click the link to activate the account.</li><br>

        <li>Click your avatar on the top right corner, select "Profile", enter the Order Number from your MSN 2022 registration receipt as your registration ID, and click the "Update profile" button. Your Order Number should appear in the format of “MSNTYXXX”, where XXX is a number generated by the registration system. If you just registered, your registration data may require 1-2 days to be imported into the <a href="https://msn2022.info">https://msn2022.info</a> website. </li><br>

        <li>Click your avatar on the top right corner, select “Papers”, then click the “Add all your authored papers and talks to this list” button. If you are unable to find your papers, please first check your name to make sure it is spelled exactly as what appeared in the author list of your paper. You may also use your paper ID in the easychair.org website to add your paper manually.</li><br>

        <li>Click the “Upload Video” button (for talk videos) and the “Upload Slides” button (for slides). These buttons will not be visible before you enter your Order Number from a valid registration into your profile.</li><br>

        <li>For uploading your video, click “Select your video as an MP4 file”, select your video file, and then click “Upload”. After the upload is completed successfully, you will receive a confirmation email message. Please make sure that your MP4 video uses the H.264 codec, otherwise it may not be played back correctly in modern web browsers.</li><br>

        <li>You should now be able to download your video by clicking the “Video” Button and verify that your upload is indeed successful. The video will not be available to attendees in the conference until it is approved by the conference chairs. You will receive another email message when your video is approved.</li><br>

        <li>For uploading your slides, follow similar steps as (5)-(6) above.</li><br>
    </ol>
<br><br><br><br><br><br><br>

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
<?php
    $page_title="Call for posters";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <b><h2>The 17th International Conference on Mobility, Sensing and Networking (MSN 2021)</h2>
        <p>December 13-15, 2021 · Exeter, U. K.</p></b>
        <a href="https://ieee-msn.org/2021">https://ieee-msn.org/2021</a>

        <h2>CALL FOR POSTERS</h2>
        <p>Technical posters showing/presenting innovative and original research are solicited. In general IEEE MSN is interested in posters of technology that validate important research issues or showcase realistic applications in the following topics of interest (but not limited to): </p>


          <ul>
            <li>Algorithms, Theory, and Protocols</li>
            <li>Systems & Tools</li>
            <li>Experiments & Applications</li>
            <li>Mobile & Wireless Networks</li>
            <li>Edge and Fog Computing Network</li>
            <li>Security, Privacy, Trust, and Blockchain</li>
            <li>Big Data and AI in Networking</li>
            <li>Wireless and Ubiquitous Sensing</li>
         </ul>

        <h2>POSTER SUBMISSION INSTRUCTIONS</h2>
        <p>Submissions should be a two-page abstract/proposal that follows IEEE Computer Society Proceedings Format (double column, 10pt font, letter paper) and submitted in PDF file format: refer to the IEEE submission instructions for details. Be as specific as possible in describing what you will demonstrate or display as poster. The poster session will have power and wireless Internet connectivity available. All additional equipment/needs are subject to budget approval. Abstracts of accepted posters will be included in the MSN2021 Proceedings. Accepted and presented abstracts will be submitted to IEEE Xplore®.</p>

        <p>Poster submissions should be made using this link: <br>
            <a href="https://easychair.org/conferences/?conf=msn2021">https://easychair.org/conferences/?conf=msn2021</a>
        </p>

        <h2>IMPORTANT DATES</h2>
        <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
            <?php add_dateitem("September 22, 2021", "Two-page poster descriptions"); ?>
            <?php add_dateitem("October 10, 2021", "Notification of acceptance"); ?>
            <?php add_dateitem("December 13-15, 2021", "IEEE MSN 2021 Conference dates"); ?>
            <?php add_dateitem("To Be Announced", "IEEE MSN 2021 Poster Session Dates"); ?>
        </ul>


        <h2>IEEE MSN 2021 DEMO/POSTER CO-CHAIRS</h2>
        <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">

          <?php
            add_listitem_email("Wei Wang", "San Diego State University, USA", "");
            add_listitem_email("Constandinos X. Mavromoustakis", "University of Nicosia, Cyprus", "");
          ?>
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
<?php
    $page_title="Call for Workshops";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <b><h2>The 17th International Conference on Mobility, Sensing and Networking (MSN 2021)</h2>
        <p>December 13-15, 2021, Exeter, UK</p></b>
        <a href="https://ieee-msn.org/2021/index.php">https://ieee-msn.org/2021</a>
        <h1>Call for Workshops</h1>
        <p>IEEE MSN has been a premier venue for presenting scholarly research on mobile ad-hoc and sensor networks. Advances in this field are leading to innovative platforms, protocols, systems, and applications for the next-generation mobile networks, Internet of Things, and Cyber-Physical Systems. With its 17th anniversary, MSN 2021 will be held at Exeter, UK.</p>

        <p>In 2020, we successfully organized six workshops, and this year the MSN 2021 will continue inviting proposals for one-day or half-day workshops, to be held prior to or immediately after the main conference. The purpose of the workshops is to provide a venue for presenting novel ideas in a less formal and typically more focused area than the main conference. Workshops should be organized to promote lively interaction, and plans to promote interaction and discussion must be clearly addressed in the written workshop proposals. The organizers of accepted workshops are required to announce the workshop and call for papers, solicit submissions, conduct the reviewing process, and decide upon the final workshop program. At least one organizer must be physically present at the workshop.</p>

        <p>Workshop proposals are solicited in all areas and topics pertaining to research and applications in Mobility, Sensing and Networking. Workshops addressing new emerging research directions in Mobility, Sensing and Networking are especially welcome. Further, workshops with novel formats, e.g., focused on a specific topic in a tutorial-style fashion, are strongly encouraged. Workshop papers will be included and indexed in the IEEE digital libraries (Xplore). The page limit for accepted regular workshop papers is 6 pages, including all figures, tables, and references.</p>

        <h2>Proposal Submission Guidelines</h2>
        <p>Workshop proposals should be submitted (in PDF format) no later than May 14, 2021 by e-mail to the MSN 2021 Workshop Co-chairs (see email id below), with "MSN 2021 Workshop Proposal" in the subject. Each proposal must include:</p>

        <ol>
            <li>  The workshop title and acronym.</li>
            <li>  The name, address, and a short bio of up to 200 words for each of the workshop’s organizers; workshops may have up to three organizers. It is strongly recommended that organizers belong to at least two different institutions.</li>
            <li>  A brief description of the workshop with a list of the technical issues/topics that the workshop will address. Some example topics of interest might be Edge computing, Mobile crowdsensing, Using AI for intelligent management and communications in Ad Hoc networks, etc.</li>
            <li>  A description of the publicity plan.</li>
            <li>  The names of potential program committee members.</li>
            <li>  The workshop website address (preliminary).</li>
            <li>  A preliminary call for papers.</li>

        </ol>

        <h2>Important Dates</h2>

        <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
            <?php add_dateitem("May 14, 2021", "Deadline for Workshop Proposals"); ?>
            <?php add_dateitem("May 22, 2021", "Notification of Workshop Proposals"); ?>
            <?php add_dateitem("Sep.17, 2021", "Deadline for Workshop Papers"); ?>
            <?php add_dateitem("Oct. 10, 2021", "Notification of Workshop Papers"); ?>
            <?php add_dateitem("Oct. 20, 2021", "Camera-ready for Workshop Papers"); ?> 
        </ul>


        <h2>Workshop Chairs</h2>
        <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">

          <?php
            add_listitem_email("Tian Wang", "Beijing Normal University & UIC, China", "tianwang@uic.edu.cn");
            add_listitem_email("Prosanta Gope", "University of Sheffield, UK", "p.gope@sheffield.ac.uk");
          ?>
        </ul>
        <br>
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
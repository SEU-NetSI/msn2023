<?php
    $page_title="Camera Ready Submission";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 50px;padding-right:80px;padding-top: 15px;">

    <h1 style="color: black">Camera Ready Submission</h1>

    <p>Please read the information below before submitting your camera ready.</p>

    <a style="text-decoration: none;" target="_blank" href="https://ieeecps.org/#!/auth/login?ak=1&pid=1eAFgk5WrVBi2CLSSgstxk"><button style="width: auto;background: rgb(192,0,0);"><b style="font-size: 20px;color:white">Camera Ready and Copyright Submission Link</b></button></a>
    <br>

    <p>Camera ready versions of accepted papers must be submitted by using the recommended format and presented by one of the authors at the conference for inclusion in the conference proceedings and submission to IEEE Xplore. In addition, the IEEE copyright form has to be submitted and at least one author of the paper must <a href="registration.php">register</a> to the conference as an AUTHOR at the author registration rate <b>20 October 2021</b> even if the author is a student.</p>

    <p>Please follow the instructions below to ensure the submission of camera ready is completed successfully. We will not be able to include your paper in the conference proceedings or in IEEE Xplore if you do not follow the instructions below. The conference organizer also reserves the right to exclude a paper from distribution after the conference (e.g., removal from IEEE Xplore) if it is not presented at the conference.</p>

    <h2>Paper Template</h2>

    <p>The paper should use the <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html">IEEE manuscript templates for conference proceedings</a>. Make sure to use the conference mode of the template. LaTeX users should use the conference option of the IEEEtran document class. Refer to the template documentation for additional information.</p>

    <h2>Page Limit</h2>

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th style="text-align: center;">Paper Type</th>
            <th style="text-align: center;">&nbsp; &nbsp;&nbsp;No. of pages&nbsp; &nbsp;&nbsp;</th>
            <th style="text-align: center;">&nbsp; &nbsp;&nbsp;Extra pages&nbsp; &nbsp;&nbsp;
                <br>&nbsp; &nbsp;&nbsp; allowed&nbsp; &nbsp;&nbsp;</th>
            <th style="text-align: center;">Remarks</th>
        </tr>
        <tr>
            <td>Conference</td>
            <td style="text-align: center;">8</td>
            <td style="text-align: center;">2</td>
            <td rowspan="3" >&nbsp;&nbsp;including all the figures,&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;references, and <br>&nbsp;&nbsp;appendices</td>
        </tr>
        <tr>
            <td>Workshop &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="text-align: center;">6</td>
            <td style="text-align: center;">2</td>
        </tr>
        <tr>
            <td>Poster & Demo &nbsp; &nbsp; &nbsp; &nbsp;</td>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">___</td>
        </tr>
    </table>
    <p><i>Fee for extra page: USD 100 per page </i></p>

    <h2>Important Deadlines</h2>
    <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
        <?php add_dateitem("<b>20 October 2021</b>", "Author Registration Deadline"); ?>
        <?php add_dateitem("<b>20 October 2021</b>", "Final Paper Submission Deadline"); ?>
        <?php add_dateitem("<b>20 October 2021</b>", "Copyright Deadline"); ?>
    </ul>

    <h2>Submission of the Camera Ready and Copyright Form</h2>
    <p>Detailed instructions for submitting the camera ready version of accepted papers and copyright forms are available at the link: <a href="https://ieeecps.org/#!/auth/login?ak=1&pid=1eAFgk5WrVBi2CLSSgstxk">https://ieeecps.org/#!/auth/login?ak=1&pid=1eAFgk5WrVBi2CLSSgstxk</a></p>

    <h2>Contact Information</h2>
    <p>For help with submitting your paper, please contact the proceedings production editor, <a href="mailto:jgurrola625@gmail.com">Javier Gurrola</a>. For any other matters related to the publication process, please contact <a href="mailto:dan.wang@polyu.edu.hk">Dan Wang</a>.</p>

    <br><br><br><br>

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
<?php
    $page_title="Call for Workshops";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <b><h2>The 19th International Conference on Mobility, Sensing and Networking (MSN 2023)</h2>
        <p>December 14-16, 2023, Nanjing, China</p></b>
        <a href="https://ieee-msn.org/2023">https://ieee-msn.org/2023</a>
        <h1>Call for Workshops</h1>
        <p>TBD</p>

        


        <h2>Proposal Submission Guidelines</h2>
        <p>TBD</p>

        <ol>
            

        </ol>

        <h2>Important Dates</h2>
       <p>TBD


        <h2>Workshop co-Chairs</h2>
        <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">

          <?php
            add_listitem_email("Haipeng Dai", "Nanjing University, China","");
            add_listitem_email("Tian Wang", "Beijing Normal University, China","");
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
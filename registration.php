<?php
    $page_title="Registration";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h1>Registration</h1>
        <p>Online registration is now available. Before registering for the conference, please read the following policies and procedures. If you are ready to start the registration process, then click on the button below. </p>

        <a style="text-decoration: none;" target="_blank" href="https://www.polyu.edu.hk/pfs/index.php/725318?lang=en"><button style="width: auto;background: rgb(192,0,0);"><b style="font-size: 24px;color:white">Register Now</b></button></a>

        <h2>General Rules</h2>
        <p>All participants must register and pay the appropriate fee in order to attend MSN 2021.</p>

        <p><b style="color:rgb(46,116,181);">Author Registration Includes:</b> Presentation and publication of one paper (including conference/ workshop/ poster paper), and access to all live presentations</p>

        <p><b style="color:rgb(46,116,181)">Conference Registration Includes:</b> Access to all live presentations</p>

        <h2>Author Registration Requirements</h2>
        <ul>
            <li><b>Every accepted paper</b> (in the conference/ workshop/ poster) must have one author register as an AUTHOR at the Author Registration rate, even if the author is a student, <b>by 20 October 2021</b>, and presented by the author at the conference. </li>

            <li>Each author registration only covers one accepted paper. Authors with multiple papers must either pay for multiple registrations or ask their co-authors to register for the other papers. </li>

            <li>Papers without registered author(s) will be withdrawn from the conference program and the proceedings.</li>
        </ul>

        <h2>Registration Fees</h2>

        <b style="color:rgb(46,116,181)">Author Registration (Deadline: 20 October 2021)</b><br><br>

        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th style="text-align: center;">Author Type</th>
                <th style="text-align: center;">&nbsp; &nbsp;&nbsp; &nbsp;Fee (USD)&nbsp; &nbsp;&nbsp; &nbsp;</th>
            </tr>
            <tr>
                <td>IEEE Member</td>
                <td style="text-align: center;">300</td>
            </tr>
            <tr>
                <td>Non-IEEE Member &nbsp; &nbsp; &nbsp; &nbsp;</td>
                <td style="text-align: center;">355</td>
            </tr>
            <tr>
                <td>Invited Paper</td>
                <td style="text-align: center;">240</td>
            </tr>
        </table>

        <p><b style="color:rgb(46,116,181)">Conference Registration (for non-authors and non-presenting authors)</b></p>

        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th style="text-align: center;">&nbsp; &nbsp;&nbsp; &nbsp;Fee (USD)&nbsp; &nbsp;&nbsp; &nbsp;</th>
            </tr>
            <tr>
                <td style="text-align: center;">50</td>
            </tr>
        </table>

        <h2>Registration Procedure</h2>
        <p>Registrations are handled only in electronic form. Only fully completed registration forms will be accepted. The registration fee is based on the date of the receipt of the registration form and the payment in full, in accordance with the deadlines mentioned above. Should one deadline be missed, the next applicable fee will be charged automatically. The registration will only be confirmed upon receipt of payment in full. </p>

        <h2>Payment</h2>
        <p>All registrations must be submitted online and paid by credit card.</p>

        <h2>Terms and Policies</h2>

        <p><u><i>Registration Policies for Authors</i></u></p>
        <ul>
            <li>Each Author Registration is valid for ONE paper.</li>
            <li>To be published in the MSN 2021 Conference Proceedings and to be eligible for publication in IEEE Xplore, at least one author of an accepted paper is required to register for the conference as an AUTHOR at the full registration rate even if the author is a student.</li>
            <li>The accepted paper must be presented by an author of that paper at the conference.</li>
            <li>Papers without registered author(s) will be withdrawn from the program and the proceedings.</li>
        </ul>

        <p><u><i>Registration Policies for All Attendees</i></u></p>
        <p>Each attendee must have a distinct registration. Registrations are not transferable.</p>

        <p><u><i>No-show Policies </i></u></p>
        <p>Each paper must be presented by an author of the paper in person at the conference. An accepted paper not presented by one of the authors will be removed from the final conference proceedings. No refund will be made to authors of these papers.</p>

        <p><u><i>Cancellation Policies</i></u></p>
        <ul>
            <li>All cancellation requests must be received in writing to <a href="mailto:carmen.au@polyu.edu.hk">carmen.au@polyu.edu.hk</a> <b>by 13 November 2021.</b> No refund will be provided after this date. There will be <b>an administrative fee of US$ 40</b> deducted from each cancellation.</li>
            <li>Author registration is not refundable.</li>
            <li>If payment is not received, registration will be automatically cancelled.</li>
        </ul>


        <p><u><i>Privacy Policy</i></u></p>
        <p>By registering for the conference, relevant details will be incorporated into a participant list for the benefit of all delegates. Normally this information would be: first name, last name, institution, country and email address. These details may also be available to parties directly related to the conference organization including the venues and accommodation providers. We may use these details to inform current participants of conference updates or future conferences via email. Participants are responsible for advising us if they do not wish to have their email addresses included in the conference participant list or distribution list for future events.</p>


    
        <br><br><br><br><br>
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

<?php
    $page_title="Keynote II";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote II: Toward Virtualized Edge Computing</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/FD.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Falko Dressler</p>
            <p style="font-weight: bold;text-align: center;">TU Berlin</p>
            <!-- <p style="font-weight: bold;text-align: center;">Web: <a href="www.commsp.ee.ic.ac.uk/~kkleung/">www.commsp.ee.ic.ac.uk/~kkleung/</a></p> -->

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>We will discuss the challenges and opportunities of the connected cars vision in relation to the need for distributed data management solutions ranging from the vehicle to the mobile edge and to the data centers. Vehicular networking solutions have been investigated for more than a decade but recent standardization efforts just enable a broad use of this technology to build large scale Intelligent Transportation Systems (ITS). Modern 5G networks promise to provide all means for communication in this domain, particularly when integrating Mobile Edge Computing (MEC). However, it turns out that despite the many advantages, it is unlikely that such services will be provided with sufficient coverage. As a novel concept, vehicle micro clouds have been proposed that bridge the gap between fully distributed vehicular networks based on short range device to device communication and 5G-based infrastructure. Using selected application examples, we assess the advantages of such systems. We conclude the talk by shedding light on future virtual edge computing concepts that will enable edge computing even considering minimal deployment and coverage of 5G MEC.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Falko Dressler is full professor and Chair for Telecommunication Networks at the School of Electrical Engineering and Computer Science, TU Berlin. He received his M.Sc. and Ph.D. degrees from the Dept. of Computer Science, University of Erlangen in 1998 and 2003, respectively. Dr. Dressler has been associate editor-in-chief for IEEE Trans. on Mobile Computing and Elsevier Computer Communications as well as an editor for journals such as IEEE/ACM Trans. on Networking, IEEE Trans. on Network Science and Engineering, Elsevier Ad Hoc Networks, and Elsevier Nano Communication Networks. He has been chairing conferences such as IEEE INFOCOM, ACM MobiSys, ACM MobiHoc, IEEE VNC, IEEE GLOBECOM. He authored the textbooks Self-Organization in Sensor and Actor Networks published by Wiley & Sons and Vehicular Network.</p>
            <br><br><br><br><br><br>
        </div>
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

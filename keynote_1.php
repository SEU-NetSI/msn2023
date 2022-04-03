<?php
    $page_title="Keynote I";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote I: IoT Security</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/EB.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Elisa Bertino</p>
            <p style="font-weight: bold;text-align: center;">Purdue University, USA</p>
            <p style="font-weight: bold;text-align: center;">Web: <a href="https://www.cs.purdue.edu/homes/bertino/ ">https://www.cs.purdue.edu/homes/bertino/</a></p>

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>The Internet of Things (IoT) paradigm refers to the network of physical objects or "things" embedded with electronics, software, sensors, and connectivity to enable objects to exchange data with servers, centralized systems, and/or other connected devices based on a variety of communication infrastructures.  IoT makes it possible to sense and control objects creating opportunities for more direct integration between the physical world and computer-based systems. Furthermore, the deployment of AI techniques enhances the autonomy of IoT devices and systems. IoT will thus usher automation in a large number of application domains, ranging from manufacturing and energy management (e.g. SmartGrid), to healthcare management and urban life (e.g. SmartCity).  However, because of its fine-grained, continuous and pervasive data acquisition and control capabilities, IoT raises concerns about security, privacy, and safety. Deploying existing solutions to IoT is not straightforward because of device heterogeneity, highly dynamic and possibly unprotected environments, and large scale. In this talk, after outlining key challenges in IoT security and privacy, we outline a security lifecycle approach to securing IoT data, and then focus on our recent work on security analysis for cellular network protocols and edge-based anomaly detection based on machine learning techniques.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Elisa Bertino is professor of Computer Science at Purdue University. Prior to joining Purdue, she was a professor and department head at the Department of Computer Science and Communication of the University of Milan. She has been a visiting researcher at the IBM Research Laboratory (now Almaden) in San Jose, at the Microelectronics and Computer Technology Corporation, at Rutgers University, and at Telcordia Technologies. Her recent research focuses on digital identity management, biometrics, IoT security, security of 4G and 5G cellular network protocols, and policy infrastructures for managing distributed systems. Prof. Bertino has published more than 700 papers in all major refereed journals, and in proceedings of international conferences and symposia. She has given keynotes, tutorials and invited presentations at conferences and other events. She is a Fellow member of ACM, IEEE, and AAAS. She received the 2002 IEEE Computer Society Technical Achievement Award "For outstanding contributions to database systems and database security and advanced data management systems", the 2005 IEEE Computer Society Tsutomu Kanai Award for "Pioneering and innovative research contributions to secure distributed systems", and the ACM 2019-2020 Athena Lecturer Award.
            </p>
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

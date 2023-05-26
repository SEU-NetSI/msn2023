<?php
    $page_title="Keynote III";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote III: Real-Time AI for Infrastructure-assisted Autonomous Driving</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/GX.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Guoliang Xing </p>
            <p style="font-weight: bold;text-align: center;">The Chinese University of Hong Kong</p>
            <!-- <p style="font-weight: bold;text-align: center;">Web: <a href="https://www.cs.purdue.edu/homes/bertino/ ">https://www.cs.purdue.edu/homes/bertino/</a></p> -->

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>Autonomous driving will greatly improve the mobility and safety of future transportation. However, recent pilot commercial deployments have caused widespread concerns about the reliability and safety of existing autonomous driving systems. In particular, many recent accidents are caused by the delayed or erroneous perception by autonomous vehicles. Despite the significant progress on machine learning algorithms and new vehicular sensors, the limited perception capability of a single car remains the major challenge of large-scale commercial deployment of autonomous driving.</p>

            <P>An emerging technical paradigm to address this grand challenge is to improve the safety of autonomous vehicles by leveraging intelligent roadside infrastructure such as lampposts equipped with sensors and compute units. In this talk, I will discuss our recent work on real-time AI technologies for infrastructure-assisted autonomous driving. First, we have developed and deployed the world’s largest open smart lamppost testbed on CUHK campus. Consisting of 25 roadside units equipped with network coding-enabled wireless multi-hop networks and advanced sensors including LiDAR, mmWave radar, thermal cameras, our testbed offers various real-time services such as target detection and dynamic route planning for autonomous vehicles. Second, we propose a novel real-time deep learning task framework RT-mDL, which integrate model compression and real-time scheduling to systematically optimize concurrent execution of multiple deep learning tasks. RT-mDL enables edge platforms such as roadside units and connected vehicles to perform multiple concurrent deep learning tasks simultaneously with limited compute and communication resources.  Third, I will present VI-Eye and VIPS, the first systems for real-time 3D perception fusion of vehicle and infrastructure with centimeter accuracy, leading to vehicular perception enhancement, robust object detection/tracking, localization, and navigation. Lastly, I will discuss milliEye, a new real-time mmWave radar and camera fusion system for robust object detection on the edge platforms, which requires only a small amount of labeled image/radar data through a decoupled learning architecture.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Guoliang Xing is currently a Professor of Information Engineering at The Chinese University of HongKong. Previously, he was a faculty member at Michigan State University. He received the D.Sc. degree from Washington University in St. Louis, in 2006. He received three Best Paper Awards and seven Best Paper Nominations/Runner-Ups at leading international conferences, including ICNP, IPSN, MobiCom, and IoTDI.  His research interests include Internet of Things (IoT), Autonomous Driving, Smart Health, Edge Computing, and wireless networking. Several mobile technologies developed in his lab were successfully transferred to the industry. He received the U.S. NSF CAREER Award in 2010 and the Withrow Distinguished Faculty Award from Michigan State University in 2014.  He has published 150+ papers which have been cited for 10,000+. He is a Fellow of IEEE.
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

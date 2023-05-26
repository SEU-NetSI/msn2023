<?php
    $page_title="Program";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote I: Understanding and Pushing the Sensing Limits of WiFi/4G/5G Signals</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/DZ.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Daqing Zhang</p>
            <p style="font-weight: bold;text-align: center;">Peking University and IP Paris</p>
            <!-- <p style="font-weight: bold;text-align: center;">Web: <a href="https://www.cs.purdue.edu/homes/bertino/ ">https://www.cs.purdue.edu/homes/bertino/</a></p> -->

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>WiFi/4G/5G based wireless sensing has attracted a lot of attention from both academia and industry in the last decade. However, fundamental questions such as the sensing limit, sensing boundary and sensing quality of WiFi/4G/5G signals have not been answered, making the wireless sensing system design and deployment in a trial-and-error manner. In this talk, I will first introduce the Fresnel zone model as a generic theoretic basis for device-free and contactless human sensing with WiFi/4G/5G signals. Then we propose to define and deploy the Sensing Signal to Noise Ratio (SSNR) as a new metric to reveal the sensing limit, sensing boundary and sensing signal quality of WiFi/4G/5G-based human sensing systems. We further apply the SSNR metric to show how we can push the sensing range of a commodity WiFi-based human respiration monitoring system to more than 30 meters by exploiting the time, space and frequency diversity of WiFi signals.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Daqing Zhang is a Chair Professor with Peking University, China and IP Paris, France. His research interests include ubiquitous computing, context-aware computing, big data analytics and Intelligent IoT. He has published more than 300 technical papers in leading conferences and journals, where his work on context model and WiFi-based sensing theory is widely accepted by pervasive computing, mobile computing and service computing communities. He is the winner of the Ten Years CoMoRea Impact Paper Award at IEEE PerCom 2013 and Ten Years Most Influential Paper Award at IEEE UIC 2019, the Best Paper Award Runner-up at ACM MobiCom 2022, the Distinguished Paper Award of IMWUT (Ubicomp 2021), Honorable Mention Award at ACM UbiComp 2015 and 2016, etc.. He served as the general or program chair for more than a dozen of international conferences, and in the editorial board of IEEE Pervasive Computing and Proceeding of ACM IMWUT. Daqing Zhang is a Fellow of IEEE and Member of Academy of Europe.
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

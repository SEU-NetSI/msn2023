<?php
    $page_title="Program";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote I: Human-Centric Contactless Sensing Design in the Age of AIoT</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/Dr.Zhang.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Qian Zhang</p>
            <p style="font-weight: bold;text-align: center;">Hong Kong University of Science and Technology</p>
            <!-- <p style="font-weight: bold;text-align: center;">Web: <a href="https://www.cs.purdue.edu/homes/bertino/ ">https://www.cs.purdue.edu/homes/bertino/</a></p> -->

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>The integration of AI and IoT, especially the development of intelligent sensing technology, creates opportunities for human-centered applications and also brings related challenges. The heterogeneous characteristics of sensed data, the incompleteness of different end-user data, low-quality data caused by limited sensing device resources, as well as related issues such as the privacy of sensing data and the security of intelligent models have brought challenges to the design of intelligent sensing. At the same time, the diversity of sensing modalities and the advancement of contactless sensing have also brought new opportunities for breakthroughs in sensing capabilities and the convenience of sensing services. In this talk, I will focus on sharing cases of how we deal with the above challenges and take advantage of related opportunities in multiple human-centered application scenarios.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Dr. Zhang joined Hong Kong University of Science and Technology (HKUST) in Sept. 2005 where she is now Tencent Professor of Engineering and Chair Professor of the Department of Computer Science and Engineering. She is also serving as the co-director of Huawei-HKUST innovation lab and the director of digital life research center of HKUST. Before that, she was in Microsoft Research Asia, Beijing, from July 1999, where she was the research manager of the Wireless and Networking Group. Dr. Zhang has published more than 400 refereed papers in international leading journals and key conferences. She is the inventor of more than 50 granted international patents. Her current research interests include Internet of Things (IoT), smart health, mobile computing and sensing, wireless networking, as well as cyber security.She is a Fellow of the IEEE and a Fellow of the Hong Kong Academy of Engineering Science (HKAES). Dr. Zhang has received MIT TR100 (MIT Technology Review) world's top young innovator award. She received the Best Paper Awards in several international conferences.Dr. Zhang served as Editor-in-Chief of IEEE Trans. on Mobile Computing (TMC) from 2020 to 2022. She is a member of Steering Committee of IEEE Infocom. Dr. Zhang received the B.S. and Ph.D. degrees from Wuhan University, China, in 1994, and 1999, respectively, all in computer science.

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

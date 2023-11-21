<?php
    $page_title="Conference Venue";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h1>Conference Venue and Hotel Reservation</h1>
        <p>
        MSN 2023 will be held at <b>Nanjing</b>. Nanjing (南京; Nánjīng), historically also Nanking, is the capital city of Jiangsu Province in the People's Republic of China. It is situated in the lower reaches of the Yangtze River and is the central city of the lower <b>Yangtze</b> Basin. ( See also <a href="https://wikitravel.org/en/Nanjing">https://wikitravel.org/en/Nanjing</a> )
        </p>
        <h2>Conference Venue</h2>
        <p><b>Address:</b> Nanjing Golden Eagle Summit Hotel(南京金鹰尚美酒店，江宁经济开发区双龙大 道 1688 号), Jiangning, Nanjing</p>
        <div class="swiper-slide" style="width: 100%">
           <img style="width: 90%"src="images/nanjing/Map.jpg">
        </div>
        <h2>Venue Information</h2>
        <p>Golden Eagle Summit Hotel which is located in the beautiful scenery of Baijiahu (hundreds of lakes) CBD (central business district) core area, adjacent to Jiangning's 1912 Fashion Bar community. KINGMO and Sun city in the 21st century Shopping Mall. Seamless connection with subway line 1 baijiahu station which is quite convenient.</p>
            <ul>
                <li><b>Distance from Nanjing Lukou International Airport is about 28 km</b></li>
                <ul>
                <li>Taxi about 30 minutes</li>
                <li>Metro line S1 to Nanjingnan Station(南京南站), and then transfer to Metro line 1 to Baijiahu station(百家湖站)</li>
                </ul>
                <br>
                <li><b>Distance from Nanjing South Railway Station is about 7 km</b></li>
                <ul>
                <li>Taxi about 16 minutes</li>
                <li>Metro line 1 to Baijiahu station(百家湖站)</li>
                </ul>
                <br>
                <li><b>Distance from Nanjing Railway Station is about 20 km</b></li>
                <ul>
                <li>Taxi about 40 minutes</li>
                <li>Metro line 1 to Baijiahu station(百家湖站)</li>
                </ul>
            </ul>

        <h2>Hotel reservation</h2>
        <p>Accommodation at the conference venue is proposed at a preferential rate of 80 USD/night. If you need to book a hotel room, please download the following form <a href="MSN 2023 hotel registration form.xlsx" target="_blank">(hotel reservation form)</a>  and fill it out before submitting it to the conference team email: <a href="mailto:ieee.msn2023@gmail.com">ieee.msn2023@gmail.com</a>
We will send a confirmation email to you when your accommodation fee is successfully received.</p>
        
        <p>如需预订会议酒店（协议优惠价：490 元/晚）请下载如下表格<a href="MSN 2023 International Conference 酒店预订final.doc" target="_blank">（会议酒店预定回执）</a>，填写后提交到会务组邮箱<a href="mailto:ieee.msn2023@gmail.com">ieee.msn2023@gmail.com</a>，我们将回复邮件确认。</p>
        <p>如果您有其他问题，请加入此微信群向我们咨询。 </p>
        <div class="swiper-slide" style="width: 100%">
           <img style="width: 40%"src="images/nanjing/msn2023QRcode.jpg">
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
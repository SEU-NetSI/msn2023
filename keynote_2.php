<?php
    $page_title="Keynote II";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote II: Security of Large Models: Frontiers and Challenges</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/Dr.Ren.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Prof. Kui Ren</p>
            <p style="font-weight: bold;text-align: center;">Zhejiang University</p>
            <!-- <p style="font-weight: bold;text-align: center;">Web: <a href="www.commsp.ee.ic.ac.uk/~kkleung/">www.commsp.ee.ic.ac.uk/~kkleung/</a></p> -->

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>The development of Artificial Intelligence (AI) has spanned more than seventy years and has now reached a critical stage with the emergence of large models, leading to a significant paradigm shift in AI's evolution. However, large models also pose several security threats across various domains, including data, model, and content security. Developing a comprehensive security infrastructure to address these challenges is not easy and still needs lots of follow-through. This report delves into the AI security challenges and advancements in the era of large models. Specifically, it highlights the researches undertaken by the School of Cyber Science and Technology at Zhejiang University, focusing on three fundamental areas: data security, model security, and content security in large AI models. Furthermore, this report also discusses the future trends and directions for large AI model security.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Dr. Kui Ren is a Qiushi Chair Professor at Zhejiang University, an ACM Fellow, IEEE Fellow, and CCF Fellow. He currently serves as the Dean of the College of Cyberspace Research, the Executive Vice Director of the State Key Laboratory of Blockchain and Data Security, and a member of the Academic Committee at Zhejiang University. He has previously held positions as a SUNY Empire Innovation Professor and Director of the Ubiquitous Information Security and Privacy Lab at the State University of New York at Buffalo. Professor Kui Ren's research focuses on data security, privacy protection, AI security, and IoT security. He has led numerous research projects funded by the Ministry of Science and Technology, the National Natural Science Foundation of China, Zhejiang Province's leading innovative teams, the National Science Foundation of the USA, the US Department of Energy, the Research Grants Council of Hong Kong, the National Research Foundation of Korea, Huawei, Alibaba, Ant Group, Amazon, and other institutions and companies, with wide industrial applications of his research findings. Professor Kui Ren has received a series of awards, including the Zhejiang University Guohua Distinguished Scholar Award, the IEEE Security and Privacy Technical Achievement Award, the SUNY Chancellor's Award for Excellence in Scholarship and Creative Activities, the US National Science Foundation CAREER Award, and the Sigma Xi Young Investigator Award. He has published over 400 peer-reviewed journal and conference papers, received several Best Paper and Test-of-Time Paper Awards at venues like ACSAC'22, IEEE ICDCS’20, ACM MobiSys’20, IEEE INFOCOM’20, IEEE Globecom’19, China Cryptology Conference’18, ACM/IEEE IWQoS’17, IEEE ICNP’11, and holds an H-index of 91 with over 46,000 citations. He has been granted more than 30 patents and has been listed as a Highly Cited Researcher by Clarivate Analytics for four consecutive years. Professor Kui Ren currently holds several academic positions, including member of the Committee of the Ministry of Education on Science and Technology, expert group member of the Ministry of Science and Technology on Cyberspace Security Governance, member of the Committee of the Ministry of Education on Higher Education Teaching Guidance, Vice-Chair of the IEEE Computer Society Fellow Evaluation Committee, Chair of the IEEE Information Infrastructure Achievement Award Committee, member of the Steering Committee of the ACM Asia Conference on Computer and Communications Security, Chair of the ACM China Security Chapter, and serves as an editorial board member for several international authoritative journals and as a conference chair for top-tier international conferences.</p>
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

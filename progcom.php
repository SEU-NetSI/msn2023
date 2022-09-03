<?php
    $page_title="Technical Program Committee";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
    <h1 style="color: black">Technical Program Committee</h1>
    
    <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
      <li data-role="list-divider">Track 1: Mobile & Wireless Sensing and Networking</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Armir Bujari", "University of Bologna, Italy", "");
            add_listitem("Enrico Natalizio", "Technology Innovation Institute, UAE (Université de Lorraine, France)", "");

            add_listitem("<b>TPC Members:</b>","","");
            add_listitem("Anna Maria Vegni", "Roma Tre University, Italy", "");
            add_listitem("Carlos Calafate", "Universitat Politecnica de Valencia, Spain", "");
            add_listitem("Claudio E. Palazzi", "University of Padua, Italy", "");
            add_listitem("Eirini Eleni Tsiropoulou", "University of New Mexico Albuquerque, USA", "");
            add_listitem("Fabio D'Andreagiovanni", "French National Center for Scientific Research, France", "");
            add_listitem("Francesca Righetti", "University of Pisa, Italy", "");
            add_listitem("Francesco Betti Sorbelli", "University of Perugia, Italy", "");
            add_listitem("Imad Jawhar", "Al Maaref University, Lebanon", "");
            add_listitem("Johann Marquez Barja", "University of Antwerpen - imec, Belgium", "");
            add_listitem("Merve Saimler", "Ericsson, Turkey", "");
            add_listitem("Mirco Musolesi", "University College London - University of Bologna, United Kingdom", "");
            add_listitem("Pietro Manzoni", "Universitat Politecnica de Valencia, Spain", "");

      ?>

      <li data-role="list-divider">Track 2: Edge Computing, IoT and Digital Twins</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Eirini Eleni Tsiropoulou", "University of New Mexico Albuquerque, USA", "");
            add_listitem("Suzan Bayhan", "University of Twente, Netherlands", "");

            add_listitem("<b>TPC Members:</b>","","");
            add_listitem("Aleksandr Zavodovski", "Max Planck Institute","");
            add_listitem("Aris Leivadeas", "École de technologie supérieure","");
            add_listitem("Atakan Aral", "University of Vienna","");
            add_listitem("Carlo Puliafito", "University of Pisa","");
            add_listitem("Chandra Krintz", "UC Santa Barbara","");
            add_listitem("Chiu Tan", "Temple University","");
            add_listitem("David Bermbach", "TU Berlin","");
            add_listitem("Eleni Stai", "ETH Zurich","");
            add_listitem("Ella Peltonen", "University of Oulu","");
            add_listitem("Hao Han", "Nanjing University of Aeronautics & Astronautics","");
            add_listitem("Hong Zhang", "Hong Kong University of Science and Technology","");
            add_listitem("Kwangsung Oh", "University of Nebraska at Omaha","");
            add_listitem("Lorenzo Corneo", "Aalto University","");
            add_listitem("Luca Davoli", "University of Parma","");
            add_listitem("Luiz F. Bittencourt", "University of Campinas","");
            add_listitem("Mohammad Arif Ul Alam", "University of Massachusetts Lowell","");
            add_listitem("Nathalie Mitton", "INRIA","");
            add_listitem("Olga Saukh", "TU Graz / CSH Vienna","");
            add_listitem("Özlem Durmaz Incel", "Bogazici University","");
            add_listitem("Qiong Wu", "College of William and Mary","");
            add_listitem("Rolando Martins", "University of Porto","");
            add_listitem("Sanglu Lu", "State Key Laboratory for Novel Software Technology, Nanjing University, China","");
            add_listitem("Seyyedali Hosseinalipour", "Purdue University","");
            add_listitem("Symeon Papavassiliou", "National Technical University of Athens","");
            add_listitem("Valeria Cardellini", "University of Roma \"Tor Vergata\"","");
            add_listitem("Yanqiu Huang", "University of Twente","");
            add_listitem("Yutao Tang", "Guilin University of Electronic and Technology","");

      ?>

      <li data-role="list-divider">Track 3: Security, Privacy, Trust, and Blockchain</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Sokratis K. Katsikas", "Norwegian University of Science and Technology, Norway","");
            add_listitem("Weizhi Meng", "Technical University of Denmark, Denmark","");

            add_listitem("<b>TPC Members:</b>","","");
            add_listitem("Daehun Nyang", "Ewha Womans University","");
            add_listitem("Eric Chan-Tin", "Loyola University Chicago","");
            add_listitem("Francesco Buccafurri", "Mediterranea University of Reggio Calabria","");
            add_listitem("Jiangshan Yu", "Monash University","");
            add_listitem("Joongheon Kim", "Korea University","");
            add_listitem("Josef Pieprzyk", "CSIRO/Data61","");
            add_listitem("Lingchen Zhao", "Wuhan University","");
            add_listitem("Qianhong Wu", "Beihang University","");
            add_listitem("Rhongho Jang", "Wayne State University","");
            add_listitem("Shengshan Hu", "Huazhong University of Science and Technology","");
            add_listitem("Wenjuan Li", "Hong Kong Polytechnic University","");
            add_listitem("Xingliang Yuan", "Monash University","");
            add_listitem("Xuyun Zhang", "Macquarie University","");
            add_listitem("Yifeng Zheng", "Harbin Institute of Technology","");
      ?>


    </ul>
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


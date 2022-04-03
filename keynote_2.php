<?php
    $page_title="Keynote II";
    include("include/header.php");
?>

<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
    <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
        <h2 style="text-align: left;">Keynote II: Deep Reinforcement Learning for Control and Management of Communications Networks</h2>
        <div style = "margin-top: 50px">
            <div style="text-align: center;"><img style="text-align:center;width: 30%" src="./images/keynotes/KKL.jpg"></div>
            <p style="font-weight: bold;text-align: center;">Kin K. Leung</p>
            <p style="font-weight: bold;text-align: center;">EEE and Computing Departments Imperial College, London</p>
            <p style="font-weight: bold;text-align: center;">Web: <a href="www.commsp.ee.ic.ac.uk/~kkleung/">www.commsp.ee.ic.ac.uk/~kkleung/</a></p>

            <h3 style="font-weight: bold;">Abstract</h3>
            <p>Deep RL techniques have been applied to many application domains.  In communications networks, deep RL has been used to solve routing, service-placement and power-allocation problems in the software defined networks (SDN) as well as the software defined coalitions (SDC) developed in the DAIS ITA Program.</p>

            <p>This speaker begins with a brief introduction to RL. For illustration purposes, he presents use of RL to train a smart policy for synchronization of domain controllers in order to maximize performance gains in SDN. Results show that the RL policy significantly outperforms other algorithms for inter-domain routing tasks.</p>

            <p>As shown in the above work, a challenging issue for deep RL is the huge state and action spaces, which increase model complexity and training time beyond practical feasibility. The speaker will present a method to decouple actions from the state space for the value-function learning process and a relatively simple transition model is learned to determine the action that causes the associated state transition.  Experimental results show that the state-action separable RL can greatly reduce training time without noticeable performance degradation.</p>

            <p>The speaker will conclude by highlighting the open issues for use of RL for control of large-scaled communications networks.</p>

            <h3 style="font-weight: bold;">Biography</h3>
            <p>Kin K. Leung received his B.S. degree from the Chinese University of Hong Kong in 1980, and his M.S. and Ph.D. degrees from University of California, Los Angeles, in 1982 and 1985, respectively. He joined AT&T Bell Labs in New Jersey in 1986 and worked at its successor companies until 2004. Since then, he has been the Tanaka Chair Professor in the Electrical and Electronic Engineering (EEE), and Computing Departments at Imperial College in London. He serves as the Head of Communications and Signal Processing Group in the EEE Department at Imperial. His current research focuses on optimization and machine-learning techniques for system design and control of large-scale communication networks and computer infrastructures. He also works on multi-antenna and cross-layer designs for wireless networks.
            </p>
            <p>He received the Distinguished Member of Technical Staff Award from AT&T Bell Labs in 1994, and was a co-recipient of the 1997 Lanchester Prize Honorable Mention Award.  He was elected as a Fellow of the IEEE and IET in 2001 and 2021, respectively. He received the Royal Society Wolfson Research Merits Award from 2004 to 2009 and became a member of Academia Europaea in 2012. Jointly with his co-authors, he also received the IEEE ComSoc Leonard G. Abraham Prize (2021) and several best conference paper awards, including at the IEEE PIMRC 2012, ICDCS 2013 and ICC 2019. He serves as a member (2009-11) and the chairman (2012-15) of the IEEE Fellow Evaluation Committee for Communications Society. He was a guest editor for the IEEE JSAC, IEEE Wireless Communications and the MONET journal, and as an editor for the JSAC: Wireless Series, IEEE Transactions on Wireless Communications and IEEE Transactions on Communications. Currently, he chairs the Steering Committee for the IEEE Transactions on Mobile Computing and is an editor for the ACM Computing Survey and International Journal on Sensor Networks.</p>
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

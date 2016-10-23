<!DOCTYPE html>
<html lang="en">        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />

    <head>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />

    </head>
    <body>
        <div class="header-top grey darken-3 ">

            <div class="row">
                <div class="col s12 ">
                    <ul class="top-nav">
                        <li><a href="#">INFO@ETHIOEDU.COM</a></li>


                        <li><a href="#">CONTACT/HOTLINE</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/About_us' ?>">ABOUT US</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/c' ?>">CONTACT US</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/csregister' ?>">REGISTER </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/login' ?>">LOGIN</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="header-top1 grey darken-4 ">

            <div class="row">
                <div class="col s3 ">
                    <img class="logo_bar" src="<?php echo base_url() . 'images/logo.png' ?>">
                </div>
                <div class="col s9 ">
                    <div class="upper_slider">
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/benner_Horizontal1.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal2.png' ?>"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="navbar-fix">
            <nav class="grey darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <ul id="dropdown1" class="dropdown-content dropdown-menu">
                        <li><a href="<?php echo base_url() . 'index.php/news' ?>">Latest News</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/reportnews' ?>">Report News</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() . 'index.php/gist' ?>">Latest Gist & Gossip</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="active" href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" data-hover="true" data-activates="dropdown1">LATEST NEWS </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/schools' ?>">SCHOOLS</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/course' ?>">COURSES</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/vactender' ?>">VACANCY/TENDER</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/connectme' ?>">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>

                    </ul>

                    <ul id="nav-mobile" class="side-nav mobile-nav">
                        <li><a class="active" href="#">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" >LATEST NEWS</a></li>
                        <li><a href="#">SCHOOLS</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 z-depth-1 white ">
                    <div class="content_sec">
                    <p style="color:black;"> Do you know that most related questions about your school have already been answered? Also, you will likely get a response 10 times faster if you ask the entire school community of members. It's easy to ask a question;
</p>
                      <form action="#" method="post">
<table width="100%" cellpadding="2" cellspacing="2">
<tbody><tr>
<td align="right">All fields are required</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="20%" align="right">Full Name: * </td>
<td width="80%"><input name="name" type="text" class="formTextField" id="name" value="" style="width:30"></td>
</tr>
<tr>
<td align="right">Email Address: * </td>
<td><input name="email" type="text" class="formTextField" id="email" value="" style="width:30"></td>
</tr>
<tr>
<td align="right">School Community: * </td>
<td> <select name="comm_name" id="comm_name">
<option selected="selected" value="">Select</option>
<option value="agp">Abdul-gusau Polytechnic, Nigeria</option>
<option value="ascoed">Abia State College Of Education, Nigeria</option>
<option value="abscohtech">Abia State College of Health Sciences and Management Technology, Nigeria</option>
<option value="abiapoly">Abia State polytechnic , Nigeria</option>
<option value="absu">Abia State University, Nigeria</option>
<option value="aap">Abraham Adesanya Polytechnic, Nigeria</option>
<option value="atbu">Abubakar Tafawa Balewa University, Nigeria</option>
<option value="atap">Abubakar Tatari Ali Polytechnic, Nigeria</option>
<option value="achievers">Achievers University, Nigeria</option>
<option value="adamawapoly">Adamawa State polytechnic, Nigeria</option>
<option value="adsu">Adamawa State University, Nigeria</option>
<option value="adacoed">Adamu Augie College Of Education, Nigeria</option>
<option value="aaua">Adekunle Ajasin University, Nigeria</option>
<option value="adeleke">Adeleke University, Nigeria</option>
<option value="aocoed">Adeniran Ogunsanya College of Education, Nigeria</option>
<option value="aceondo">Adeyemi College Of Education, Ondo, Nigeria</option>
<option value="abuad">Afe Babalola University, Nigeria</option>
<option value="aflon">Aflon Digital Institute, Nigeria</option>
<option value="atcoicoed">African Thinkers Community Of Inquiry College Of Education, Nigeria</option>
<option value="afrihub">Afrihub Ict Institute, Nigeria</option>
<option value="abu">Ahmadu Bello University, Nigeria</option>
<option value="abuth">Ahmadu Bello University Teaching Hospital, Nigeria</option>
<option value="afit">Air Force Institute Of Technology, Nigeria</option>
<option value="ajayi">Ajayi Crowther University, Nigeria</option>
<option value="akanupoly">Akanu Ibiam Federal polytechnic, Nigeria</option>
<option value="aocayandev">Akperan Orshi College Of Agriculture, Nigeria</option>
<option value="aiscas">Akwa Ibom State College Of Arts And Science, Nigeria</option>
<option value="akwaibompoly">Akwa Ibom State polytechnic , Nigeria</option>
<option value="akutech">Akwa Ibom State University, Nigeria</option>
<option value="akscoed">Akwa-ibom State College Of Education, Nigeria</option>
<option value="al-hikmah">Al-Hikmah University, Nigeria</option>
<option value="alibadan">Al-Ibadan College of Education, Nigeria</option>
<option value="auk">Al-Qalam University, Katsina, Nigeria</option>
<option value="alhikma">Alhikma College Of Education, Nigeria</option>
<option value="">All School Communities, Nigeria</option>
<option value="alloverpoly">Allover central polytechnic, Nigeria</option>
<option value="alvan">Alvan Ikoku College Of Education, Nigeria</option>
<option value="acmgt">Ambassador College Of Management And Technology, Nigeria</option>
<option value="actps">Ambassador College Of Technology And Paralegal Studies, Nigeria</option>
<option value="aau">Ambrose Alli University, Nigeria</option>
<option value="ascas">Ameer Shehu Idris College of Advance Studies, Nigeria</option>
<option value="aun">American University of Nigeria, Nigeria</option>
<option value="akcils">Aminu Kano College of Islamic and Legal Studies, Nigeria</option>
<option value="akath">Aminu Kano Teaching Hospital, Nigeria</option>
<option value="akth">Aminu Kano Teaching Hospital,, Nigeria</option>
<option value="anscoam">Anambra State College of Agriculture, Nigeria</option>
<option value="ansu">Anambra State University, Nigeria</option>
<option value="angelcrown">Angel Crown College Of Education, Nigeria</option>
<option value="anise">Annur Institute for Islamic Education, Nigeria</option>
<option value="ansaruddeen">Ansar-ud-deen College Of Education, Nigeria</option>
<option value="apacoed">Apa College Of Education, Nigeria</option>
<option value="ariscoed">Arabic And Islamic College Of Education, Nigeria</option>
<option value="arewa">Arewa Paralegal Innovation Enterprise, Nigeria</option>
<option value="asscoed">Assanusiyah College Of Education, Nigeria</option>
<option value="auchipoly">Auchi polytechnic, Nigeria</option>
<option value="audubako">Audu Bako College Of Agriculture Danbatta, Nigeria</option>
<option value="aui">Augustine University, Nigeria</option>
<option value="adcoed">Awori District College Of Education, Nigeria</option>
<option value="babamayakicoe">Baba Mayaki College of Education, Nigeria</option>
<option value="babcock">Babcock University, Nigeria</option>
<option value="bascoa">Bauchi College of Agriculture, Nigeria</option>
<option value="bauchiiais">Bauchi Institute For Arabic And Islamic Studies, Nigeria</option>
<option value="basu">Bauchi State University, Nigeria</option>
<option value="bycas">Bayelsa State College of Arts and Science, Nigeria</option>
<option value="bycoed">Bayelsa State College Of Education, Nigeria</option>
<option value="buk">Bayero University Kano, Nigeria</option>
<option value="bayotijani">Bayotijani College Of Education, Nigeria</option>
<option value="baze">Baze University, Nigeria</option>
<option value="bells">Bells University of Technology, Nigeria</option>
<option value="biu">Benson Idahosa University, Nigeria</option>
<option value="benpoly">Benue State Poly, Nigeria</option>
<option value="bsu">Benue State University , Nigeria</option>
<option value="blcoed">Best Legacy College Of Education, Nigeria</option>
<option value="bethelcollege">Bethel College of Education,, Nigeria</option>
<option value="bigacoe">Biga College of Education, Nigeria</option>
<option value="Bingham">Bingham University, Nigeria</option>
<option value="bupoly">Binyaminu Usman College of Agriculture, Nigeria</option>
<option value="bolmorpoly">Bolmor Polytechnic, Nigeria</option>
<option value="bu">Bowen University, Nigeria</option>
<option value="buckiepoly">Buckingham Academy Of Management And Technology, Nigeria</option>
<option value="bukar">Bukar Abba Ibrahim University, Nigeria</option>
<option value="beec">Business Education Examination Council, Nigeria</option>
<option value="caleb">Caleb University, Nigeria</option>
<option value="cfcoed">Calvin Foundation College Of Education, Nigeria</option>
<option value="caritas">Caritas University, Nigeria</option>
<option value="catholic">Catholic University of Nigeria, Nigeria</option>
<option value="ccae">Centre For Creative Arts Education, Nigeria</option>
<option value="cetep">Cetep University, Nigeria</option>
<option value="chrisland">Chrisland University, Nigeria</option>
<option value="christopher">Christopher University, Nigeria</option>
<option value="cifman">Cifman Institute Of Techn. &amp; Management, Nigeria</option>
<option value="citycoed">City College Of Education, Nigeria</option>
<option value="citygate">City Gate Institute Of Innovation And Technology, Nigeria</option>
<option value="coabs">College Of Administrative And Business Studies, Nigeria</option>
<option value="coaas">College Of Agriculture And Animal Science, Nigeria</option>
<option value="colagric-bak">College of Agriculture and Animal Science, Bakura, Nigeria</option>
<option value="coaha">College Of Agriculture, Hadijia, Nigeria</option>
<option value="coaja">College Of Agriculture, Jalingo, Nigeria</option>
<option value="coaka">College Of Agriculture, Kabba, Nigeria</option>
<option value="coala">College Of Agriculture, Lafia, Nigeria</option>
<option value="coazu">College Of Agriculture, Zuru, Nigeria</option>
<option value="coeaghor">College Of Education, Agbor, Nigeria</option>
<option value="coeakwanga">College Of Education, Akwanga, Nigeria</option>
<option value="coeankpa">College Of Education, Ankpa, Nigeria</option>
<option value="coeazare">College Of Education, Azare, Nigeria</option>
<option value="coeeki">College Of Education, Ekiadolor, Nigeria</option>
<option value="coeero">College of Education, Ero-Akure, Nigeria</option>
<option value="foreignlinks">College Of Education, Foreign Links Campus Moro, Nigeria</option>
<option value="coekc">College Of Education, Gidan-waya, Kafanchan, Nigeria</option>
<option value="coegindiri">College Of Education, Gindiri, Nigeria</option>
<option value="coehong">College Of Education, Hong, Nigeria</option>
<option value="coeigueben">College Of Education, Igueben, Nigeria</option>
<option value="coeikere">College Of Education, Ikere, Nigeria</option>
<option value="coeilemona">College Of Education, Ilemona, Nigeria</option>
<option value="coeilesa">College Of Education, Ilesha, Nigeria</option>
<option value="coeilorin">College Of Education, Ilorin, Nigeria</option>
<option value="coejalingo">College Of Education, Jalingo, Nigeria</option>
<option value="coekatsina">College Of Education, Katsina-ala, Nigeria</option>
<option value="coedlfg">College Of Education, Lafiagi, Nigeria</option>
<option value="coemaru">College Of Education, Maru, Nigeria</option>
<option value="coeminna">College Of Education, Minna, Nigeria</option>
<option value="coemoro">College Of Education, Moro-ife, Nigeria</option>
<option value="coeoju">College Of Education, Oju, Nigeria</option>
<option value="coeoro">College Of Education, Oro, Nigeria</option>
<option value="coeport">College Of Education, Port Harcourt, Nigeria</option>
<option value="coewaka">College Of Education, Waka-biu, Nigeria</option>
<option value="coewarri">College Of Education, Warri, Nigeria</option>
<option value="coezing">College of Education, Zing, Nigeria</option>
<option value="chtcalabar">College of Health Technology, Calabar, Nigeria</option>
<option value="chtzawan">College of Health Technology, Zawan, Nigeria</option>
<option value="cti">College of Technology, Iresi, Nigeria</option>
<option value="cornerstone">Cornerstone College Of Education, Lagos, Nigeria</option>
<option value="corona">Corona College of Education, Lekki, Nigeria</option>
<option value="copoly">Covenant Polytechnic, Aba, Nigeria</option>
<option value="cu">Covenant University, Nigeria</option>
<option value="crawford">Crawford University, Nigeria</option>
<option value="crescent">Crescent University, Nigeria</option>
<option value="crscoed">Cross River State College Of Education, Nigeria</option>
<option value="crutech">Cross River State University of Technology, Nigeria</option>
<option value="crownpoly">Crown Polytechnic, Nigeria</option>
<option value="dsa">D. S. Adegbenro ICT Polytechnic, Nigeria</option>
<option value="dalewares">Dalewares Institute Of Technology, Nigeria</option>
<option value="delarcoed">Delar College Of Education, Nigeria</option>
<option value="delscoa">Delta State College Of Agriculture, Nigeria</option>
<option value="dscope">Delta State College Of Physical Education, Nigeria</option>
<option value="deltapoly">Delta state polytechnic, Nigeria</option>
<option value="delsu">Delta State University, Nigeria</option>
<option value="diabo">Diabo Paralegal Training Institute, Nigeria</option>
<option value="dorbenpoly">Dorben polytechnic, Nigeria</option>
<option value="dreamville">Dreamville Ltd (ladela School Abuja), Nigeria</option>
<option value="eastpoly">Eastern Polytechnic, Nigeria</option>
<option value="ebecoed">Ebenezer College Of Education, Nigeria</option>
<option value="ebscoed">Ebonyi State College Of Education, Nigeria</option>
<option value="ebsu">Ebonyi State University, Nigeria</option>
<option value="ecwacoe">ECWA College of Education, Igbaja, Nigeria</option>
<option value="ecwajos">ECWA College of Education, Jos, Nigeria</option>
<option value="edsca">Edo State College Of Agriculture, Nigeria</option>
<option value="esitm">Edo State Institute Of Technology And Management, Nigeria</option>
<option value="ecu">Edwin Clark University, Nigeria</option>
<option value="eksu">Ekiti State University, Nigeria</option>
<option value="elderoyama">Elder Oyama Memorial College Of Education, Nigeria</option>
<option value="elizade">Elizade University, Nigeria</option>
<option value="eacoedoyo">Emmanuel Alyande College Of Education, Nigeria</option>
<option value="escaiedu">Enugu State College of Agriculture, Nigeria</option>
<option value="escet">Enugu State College Of Education, Technical, Nigeria</option>
<option value="esut">Enugu State University Of Science And Technology, Nigeria</option>
<option value="evangel">Evangel University, Nigeria</option>
<option value="farmark">Farmark Institute Of Employment And Creativity Kaduna, Nigeria</option>
<option value="fctcoezuba">FCT College Of Education, Zuba, Nigeria</option>
<option value="fcapt-kano">Federal College of Agricultural Produce Technology, Nigeria</option>
<option value="fcaa">Federal College Of Agriculture, Akure, Nigeria</option>
<option value="fcai">Federal College Of Agriculture, Ishiagu, Nigeria</option>
<option value="fcamp">Federal College Of Agriculture, Moor Plantation, Nigeria</option>
<option value="fcahptib">Federal College Of Animal Health &amp; Production Tech, Ibadan, Nigeria</option>
<option value="fcahptvom">Federal College Of Animal Health &amp; Production Tech, Vom, Nigeria</option>
<option value="fceoyo">Federal College Of Education (Special), Oyo, Nigeria</option>
<option value="fcetbichi">Federal College Of Education (Techinical) Bichi, Nigeria</option>
<option value="fcetakoka">Federal College Of Education (Technical) Akoka, Nigeria</option>
<option value="fcegusau">Federal College Of Education (Technical) Gusau, Nigeria</option>
<option value="fcetomoku">Federal College Of Education (Technical) Omoku, Nigeria</option>
<option value="fcetasaba">Federal College of Education (Technical), Asaba, Nigeria</option>
<option value="fceabeokuta">Federal College Of Education Abeokuta, Nigeria</option>
<option value="fceasaba">Federal College Of Education Asaba, Nigeria</option>
<option value="fcekatsina">Federal College Of Education Katsina, Nigeria</option>
<option value="fcekg">Federal College Of Education Kontagora, Nigeria</option>
<option value="fceobudu">Federal College Of Education Obudu, Nigeria</option>
<option value="fceokene">Federal College Of Education Okene, Nigeria</option>
<option value="fceumunze">Federal College Of Education Umunze, Nigeria</option>
<option value="fceyola">Federal College Of Education Yola, Nigeria</option>
<option value="fcezaria">Federal College Of Education Zaria, Nigeria</option>
<option value="fceahaamufu">Federal College Of Education, Eha-amufu, Nigeria</option>
<option value="fcegombe">Federal College Of Education, Gombe, Nigeria</option>
<option value="fcekano">Federal College Of Education, Kano, Nigeria</option>
<option value="fcepankshin">Federal College of Education, Pankshin, Nigeria</option>
<option value="fcepotiskum">Federal College Of Education, Potiskum, Nigeria</option>
<option value="fcfmt">Federal College Of Fisheries And Marine Technology, Nigeria</option>
<option value="fcftib">Federal College Of Forestry Technology, Ibadan, Nigeria</option>
<option value="fcfjos">Federal College Of Forestry, Jos, Nigeria</option>
<option value="fcfmaf">Federal College Of Forestry, Mechanisation, Afaka, Nigeria</option>
<option value="fcfftbo">Federal College Of Freshwater Fisheries Tech, Baga, Nigeria</option>
<option value="fcfftnewbussa">Federal College Of Freshwater Fisheries Tech, New Bussa, Nigeria</option>
<option value="fchkowa">Federal College Of Horticulture, Dadin Kowa, Nigeria</option>
<option value="fclrtkuru">Federal College Of Land Resources Technology, Kuru, Nigeria</option>
<option value="fclrto">Federal College Of Land Resources Technology, Owerri, Nigeria</option>
<option value="fecot">Federal College Of Orthopedic Technology, Igbobi, Nigeria</option>
<option value="fcwm">Federal College Of Wildlife Management, New Bussa, Nigeria</option>
<option value="fccibadan">Federal Cooperative College, Ibadan, Nigeria</option>
<option value="fcckaduna">Federal Cooperative College, Kaduna, Nigeria</option>
<option value="fccojiriver">Federal Cooperative College, Oji River, Nigeria</option>
<option value="ekitipoly">Federal polytechnic, Ado-Ekiti , Nigeria</option>
<option value="balipoly">Federal Polytechnic, Bali, Nigeria</option>
<option value="bauchipoly">Federal polytechnic, Bauchi , Nigeria</option>
<option value="bidapoly">Federal polytechnic, Bida , Nigeria</option>
<option value="birnin-kebbipoly">Federal polytechnic, Birnin-Kebbi , Nigeria</option>
<option value="damaturupoly">Federal polytechnic, Damaturu , Nigeria</option>
<option value="edepoly">Federal polytechnic, Ede , Nigeria</option>
<option value="fedpoeko">Federal Polytechnic, Ekowe, Nigeria</option>
<option value="idahpoly">Federal polytechnic, Idah , Nigeria</option>
<option value="ilaropoly">Federal polytechnic, Ilaro, Nigeria</option>
<option value="fedponam">Federal Polytechnic, Kaura Namoda, Nigeria</option>
<option value="mubipoly">Federal polytechnic, Mubi , Nigeria</option>
<option value="nasarawapoly">Federal polytechnic, Nasarawa , Nigeria</option>
<option value="nekedepoly">Federal polytechnic, Nekede, Nigeria</option>
<option value="offapoly">Federal Polytechnic, Offa , Nigeria</option>
<option value="okopoly">Federal polytechnic, Oko, Nigeria</option>
<option value="fedpolyukana">Federal Polytechnic, Ukana, Nigeria</option>
<option value="fedsdtten">Federal School Of Dental Technology And Therapy, Enugu, Nigeria</option>
<option value="fssmanchok">Federal School of Statistics, Manchok, Nigeria</option>
<option value="fssoyo">Federal School Of Surveying, Oyo, Nigeria</option>
<option value="fugashua">Federal University Gashua, Nigeria</option>
<option value="fugus">Federal University Gusau, Nigeria</option>
<option value="fuam">Federal University Of Agriculture, Makurdi, Nigeria</option>
<option value="fupre">Federal University of Petroleum Resource, Nigeria</option>
<option value="futa">Federal University of Technology Akure, Nigeria</option>
<option value="futminna">Federal University of Technology Minna, Nigeria</option>
<option value="futo">Federal University of Technology, Owerri, Nigeria</option>
<option value="fubk">Federal University, Birnin Kebbi, Nigeria</option>
<option value="fud">Federal University, Dutse, Nigeria</option>
<option value="fudma">Federal University, Dutsin-ma, Nigeria</option>
<option value="fuk">Federal University, Kashere, Nigeria</option>
<option value="ful">Federal University, Lafia, Nigeria</option>
<option value="fulokoja">Federal University, Lokoja, Nigeria</option>
<option value="funai">Federal University, Ndufu-alike, Nigeria</option>
<option value="fuotuoke">Federal University, Otuoke, Nigeria</option>
<option value="fuoye">Federal University, Oye-ekiti, Nigeria</option>
<option value="fuwukari">Federal University, Wukari, Nigeria</option>
<option value="festmed">Festmed College of Education, Nigeria</option>
<option value="fideipoly">Fidei Polytechnic, Gboko, Nigeria</option>
<option value="flyingdove">Flyingdove Institute Of Information Technology, Abuja, Nigeria</option>
<option value="fountain">Fountain University, Nigeria</option>
<option value="gatewaypoly">Gateway polytechnic Saapade , Nigeria</option>
<option value="gcoe">Gboko College of Education, Nigeria</option>
<option value="gcejos">Global College of Education, Nigeria</option>
<option value="go">Godfrey Okoye University, Nigeria</option>
<option value="gomsu">Gombe State university , Nigeria</option>
<option value="gracepoly">Grace Polytechnic, Lagos, Nigeria</option>
<option value="guu">Gregory University, Uturu, Nigeria</option>
<option value="hallmark">Hallmark University, Nigeria</option>
<option value="hukpoly">Hassan Usman Katsina Poly, Nigeria</option>
<option value="hwcoed">Havard Wilson College Of Education, Aba, Nigeria</option>
<option value="heritage">Heritage Polytechnic, Nigeria</option>
<option value="unihez">Hezekiah University, Nigeria</option>
<option value="highland">Highland College Of Tech. &amp; Further Education, Nigeria</option>
<option value="hillcoed">Hill College Of Education, Nigeria</option>
<option value="hopecoe">Hope and Anchor College of Education, Nigeria</option>
<option value="hussainipoly">Hussaini Adamu Federal polytechnic, Nigeria</option>
<option value="icp">Ibadan City Polytechnic, Nigeria</option>
<option value="ibbu">Ibrahim Badamasi Babangida University, Nigeria</option>
<option value="ifotech">Ifo College Of Management And Technology, Nigeria</option>
<option value="igbajopoly">Igbajo Polytechnic, Nigeria</option>
<option value="iuo">Igbinedion University, Nigeria</option>
<option value="iaue">Ignatius Ajuru University, Nigeria</option>
<option value="imfi">Imfi, Ict Academy, Uyo, Nigeria</option>
<option value="imopoly">Imo State Polytechnic, Nigeria</option>
<option value="imsu">Imo State University, Nigeria</option>
<option value="iitkad">Innovation Institute Of Technology, Kaduna, Nigeria</option>
<option value="iaisolodo">Institute Of Arabic And Islamic Studies, Olodo, Nigeria</option>
<option value="iece">Institute of Ecumenical Education, Thinker Corner, Enugu, Nigeria</option>
<option value="imte">Institute of Management Technology, Enugu, Nigeria</option>
<option value="iphoau">Institute Of Public Health (OAU), Ile-ife, Nigeria</option>
<option value="itmugep">Institute of Technology and Management, Nigeria</option>
<option value="interlink">Interlink Polytechnic, Nigeria</option>
<option value="iperecoe">Ipere College of Education, Nigeria</option>
<option value="ikcoed">Isa Kaita College Of Education, Nigeria</option>
<option value="ijbcoe">Isaac Jasper Boro College of Education, Nigeria</option>
<option value="jnicoed">Jama'atu Nasir Islam College Of Education, Kaduna, Nigeria</option>
<option value="jcaie">Jibwis College Of Arabic And Islamic Education, Gombe, Nigeria</option>
<option value="jigcoed">Jigawa State College Of Education, Gumel, Nigeria</option>
<option value="jscils">Jigawa State College of Islamic and Legal Studies, Nigeria</option>
<option value="jsiit">Jigawa State Institute Of Information Technology, Nigeria</option>
<option value="jigpoly">Jigawa State Polytechnic, Nigeria</option>
<option value="jsu">Jigawa State University, Nigeria</option>
<option value="jabu">Joseph Ayo Babalola University, Nigeria</option>
<option value="kbs">Kaduna Business School, Nigeria</option>
<option value="kadpoly">Kaduna Polytechnic, Nigeria</option>
<option value="kasu">Kaduna State university, Nigeria</option>
<option value="kcpoly">Kalac Christal Polytechnic, Nigeria</option>
<option value="kanocas">Kano State College of Arts, Science and Remedial Studies, Nigeria</option>
<option value="kanocoek">Kano State College Of Education, Kambotso, Nigeria</option>
<option value="kanopoly">Kano State polytechnic, Nigeria</option>
<option value="kust">Kano University Of Science And Technology, Nigeria</option>
<option value="karrox">Karrox-ugrl Computer Education &amp; Training Centre, Nigeria</option>
<option value="kicoem">Kashim-ibrahim College Of Education, Maiduguri, Nigeria</option>
<option value="katsu">Katsina University, Nigeria</option>
<option value="kscoed">Kebbi State College Of Education, Argungu, Nigeria</option>
<option value="ksusta">Kebbi State University Of Science And Technology, Nigeria</option>
<option value="kingspoly">Kings Polytechnic, Nigeria</option>
<option value="unikings">Kings University, Nigeria</option>
<option value="kinseycoed">Kinsey College Of Education, Ilorin, Nigeria</option>
<option value="kgscoekabba">Kogi State College of Education (Technical), Nigeria</option>
<option value="ksp">Kogi State Polytechnic, Nigeria</option>
<option value="ksu">kogi State University, Nigeria</option>
<option value="kwcoeilorin">Kwara State College of Education, Nigeria</option>
<option value="kwarapoly">Kwara State polytechnic , Nigeria</option>
<option value="kwasu">Kwara State University, Nigeria</option>
<option value="kcoeo">Kwararafa College Of Education, Otukpo, Nigeria</option>
<option value="kwararafa">Kwararafa University, Nigeria</option>
<option value="lautech">Ladoke Akintola University of Technology, Nigeria</option>
<option value="lcccl">Lagos City Computer College, Lagos, Nigeria</option>
<option value="lagoscitypoly">Lagos City polytechnic , Nigeria</option>
<option value="laspotech">Lagos State polytechnic , Nigeria</option>
<option value="lasu">Lagos State University, Nigeria</option>
<option value="luth">Lagos University Teaching Hospital, Nigeria</option>
<option value="Landmark">Landmark University, Nigeria</option>
<option value="lanistephens">Lani Stephens Music Institute, Nigeria</option>
<option value="laserpgc">Laser Petroleum Geo-sciences Centre, Nigeria</option>
<option value="lcu">Lead City University, Nigeria</option>
<option value="lesselcoe">Lessel College of Education, Nigeria</option>
<option value="lighthousepoly">Light House Polytechnic, Nigeria</option>
<option value="linetpaul">Linet Paul Innovative Institute, Nigeria</option>
<option value="lcmt">Literacy College Of Management And Technology, Nigeria</option>
<option value="lufodo">Lufodo Academy Of Performing Arts, Nigeria</option>
<option value="madonna">Madonna University, Nigeria</option>
<option value="mlcamai">Mahammed Lawan College Of Agriculture, Maiduguri, Nigeria</option>
<option value="alooma">Mai Idris Alooma Polytechnic, Nigeria</option>
<option value="myhias">Mallam Yahaya Hamza Institute Of Advance Studies,, Nigeria</option>
<option value="maritimeacademy">Maritime Academy of Nigeria, Nigeria</option>
<option value="mcu">McPherson University, Nigeria</option>
<option value="metit">Metropolitan Institute Of Technology, Nigeria</option>
<option value="minils">Michael Imodu National Institute for Labour Studies, Nigeria</option>
<option value="moua">Michael Okpara University of Agriculture, Nigeria</option>
<option value="mocped">Michael Otedola College Of Primary Education, Moforiji, Nigeria</option>
<option value="mciu">Micheal and Cecilia Ibru University, Nigeria</option>
<option value="mautech">Modibbo Adama University of Technology, Nigeria</option>
<option value="mogcolis">Mohammed Goni College Of Legal And Islamic Studies, Nigeria</option>
<option value="mapoly">Moshood Abiola polytechnic, Nigeria</option>
<option value="mtu">Mountain Top University, Nigeria</option>
<option value="mulcoed">Muftau' Lanihun College Of Education, Nigeria</option>
<option value="mcoed">Muhyldeen College Of Education, Ilorin, Nigeria</option>
<option value="mcoeiails">Murtadha Col. Of Edu. Inst. Of Arabic &amp; Islamic Legal Studies, Nigeria</option>
<option value="nacabs">Nacabs Polytechnic, Nigeria</option>
<option value="namcoed">Nana Aishat Memorial College Of Education, Nigeria</option>
<option value="naspoly">Nasarawa State Polytechnic, Nigeria</option>
<option value="Nsuk">Nasarawa State University, Nigeria</option>
<option value="noun">National Open University of Nigeria, Nigeria</option>
<option value="ndu">Niger Delta University, Nigeria</option>
<option value="coamokwa">Niger State College Of Agriculture, Mokwa, Nigeria</option>
<option value="nigerpoly">Niger State polytechnic, Nigeria</option>
<option value="nasme">Nigeria Army School Of Military Engineering, Makurdi, Nigeria</option>
<option value="ntnu">Nigeria Turkish Nile University, Nigeria</option>
<option value="ncat">Nigerian College of Aviation Technology, Nigeria</option>
<option value="nda">Nigerian Defence Academy, Nigeria</option>
<option value="nilest">Nigerian Institution of Leather Technology and Science Technology, Nigeria</option>
<option value="npa">Nigerian Police Academy, Wudil, Kano State, Nigeria</option>
<option value="niit">NIIT, Nigeria</option>
<option value="nkstchtmkar">NKST College of Health Technology, Nigeria</option>
<option value="unizik">Nnamdi Azikiwe University, Nigeria</option>
<option value="nauth">Nnamdi Azikiwe University Teaching Hospital, Nigeria</option>
<option value="nogak">Nogak Polytechnic, Nigeria</option>
<option value="nwu">Northwest University, Kano, Nigeria</option>
<option value="novena">Novena University, Nigeria</option>
<option value="nubapoly">Nuhu Bamalli polytechnic, Nigeria</option>
<option value="nocoed">Nwafor Orizu College Of Education, Nsugbe, Nigeria</option>
<option value="oau">Obafemi Awolowo University, Nigeria</option>
<option value="oauthc">Obafemi Awolowo University Teaching Hospital Complex, Nigeria</option>
<option value="ou">Obong University, Nigeria</option>
<option value="oduduwa">Oduduwa University, Nigeria</option>
<option value="ogcohtech">Ogun State College of Health Technology, Nigeria</option>
<option value="ogitech">Ogun State Institute of Technology, Nigeria</option>
<option value="oou">Olabisi Onabanjo University , Nigeria</option>
<option value="soheltecha">Ondo State School of Health Technology, Nigeria</option>
<option value="osustech">Ondo State University of Science and Technology, Nigeria</option>
<option value="ocoeda">Onit College Of Education Abagana, Nigeria</option>
<option value="ossceila">Osun State College Of Education, Ila-orangun, Nigeria</option>
<option value="osuntechcollege">Osun State College of Technology, Nigeria</option>
<option value="ospoly">Osun State polytechnic, Nigeria</option>
<option value="uniosun">Osun State University , Nigeria</option>
<option value="osisatech">Our Saviour Institute of Science, Agric. &amp; Tech., Nigeria</option>
<option value="oyscai">Oyo State College Of Agriculture, Nigeria</option>
<option value="oyocoed">Oyo State College Of Education, Nigeria</option>
<option value="pau">Pan-Atlantic University, Nigeria</option>
<option value="paul">Paul University, Nigeria</option>
<option value="peaceland">Peace land College of Education, Nigeria</option>
<option value="pti">Petroleum Training Institute, Nigeria</option>
<option value="piagetcoe">Piaget College of Education, Nigeria</option>
<option value="plascag">Plateau State College Of Agriculture, Garkawa, Nigeria</option>
<option value="plapoly">Plateau State Polytechnic, Nigeria</option>
<option value="plasu">Plateau State University, Nigeria</option>
<option value="polysok">Polytechnic Of Sokoto, Nigeria</option>
<option value="ramatpoly">Ramat polytechnic, Nigeria</option>
<option value="run">Redeemer's University, Nigeria</option>
<option value="rnu">Renaissance University, Nigeria</option>
<option value="rhema">Rhema University, Nigeria</option>
<option value="ritman">Ritman University, Nigeria</option>
<option value="rivcas">Rivers State College Of Arts And Science, Nigeria</option>
<option value="rschst">Rivers State College Of Health Science And Technology, Nigeria</option>
<option value="rivpoly">Rivers State polytechnic, Nigeria</option>
<option value="rsust">Rivers State University of Science and Technology, Nigeria</option>
<option value="ronik">Ronik Polytechnic, Nigeria</option>
<option value="royalcoed">Royal City College Of Education, Nigeria</option>
<option value="rugipo">Rufus Giwa polytechnic, Nigeria</option>
<option value="salem">Salem University, Nigeria</option>
<option value="samca">Samaru College Of Agriculture, Nigeria</option>
<option value="sau">Samuel Adegboyega University, Nigeria</option>
<option value="soab">School Of Agriculture, Bauchi, Nigeria</option>
<option value="soai">School Of Agriculture, Ikorodu, Nigeria</option>
<option value="socast">School of Orthopedic Hospital, Nigeria</option>
<option value="shakapoly">Shaka Momodu Polytechnic, Nigeria</option>
<option value="sichstmakarfi">Shehu Idris College Of Health Sci &amp; Tech, Makarfi, Nigeria</option>
<option value="sscoesok">Shehu Shagari College Of Education, Sokoto, Nigeria</option>
<option value="ssu">Sokoto State University, Nigeria</option>
<option value="secceit">South Eastern College of Computer Engineering and Info. Tech., Nigeria</option>
<option value="sniit">Southern-nigeria Institute Of Innovative Technology, Nigeria</option>
<option value="swu">SouthWestern University, Nigeria</option>
<option value="sacoed">St. Augustine College Of Education, Nigeria</option>
<option value="stmarypoly">St. Mary Polytechnic, Nigeria</option>
<option value="steadyflowcoe">Steady Flow College of Education, Nigeria</option>
<option value="summit">Summit University Offa, Nigeria</option>
<option value="tasued">Tai Solarin University of Education , Nigeria</option>
<option value="tansian">Tansian University, Nigeria</option>
<option value="tasu">Taraba State University, Nigeria</option>
<option value="templegatepoly">Temple-gate Polytechnic, Nigeria</option>
<option value="taccoed">The African Church College Of Education, Nigeria</option>
<option value="coensukka">The College Of Education, Nsukka, Nigeria</option>
<option value="ibarapapoly">The Ibarapa Polytechnic, Eruwa, </option>
<option value="tops">The Oke-Ogun Polytechnic, Saki, Nigeria</option>
<option value="polyigbo">The Polytechnic Igbo-Owu, Nigeria</option>
<option value="ibadanpoly">The polytechnic, Ibadan , Nigeria</option>
<option value="polyife">The Polytechnic, Ile-Ife, Nigeria</option>
<option value="tpii">The Polytechnic, Imesi-Ile, Nigeria</option>
<option value="simtech">The School Of Information And Media Technology, Nigeria</option>
<option value="tunedik">The University Of Education, Ikere-Ekiti, Nigeria</option>
<option value="topcoed">Topmost College Of Education, Nigeria</option>
<option value="towerpoly">Tower Polytechnic, Ibadan, Nigeria</option>
<option value="uscoega">Umar Suleiman College Of Education, Gashua, Nigeria</option>
<option value="uecoeddut">Umar-ibn Ei-kanemi College Of Education, Dutsinma, Nigeria</option>
<option value="umyu">Umaru Musa Yar'adua University, Nigeria</option>
<option value="unitycoed">Unity College Of Education, Aukpa-adoka, Nigeria</option>
<option value="uchibadan">University College Hospital, Ibadan, Nigeria</option>
<option value="uniabuja">University of Abuja, Nigeria</option>
<option value="unaab">University of Agriculture, Abeokuta, Nigeria</option>
<option value="uniben">University of Benin, Nigeria</option>
<option value="unical">University of Calabar, Nigeria</option>
<option value="ui">University of Ibadan, Nigeria</option>
<option value="unilorin">University of Ilorin, Nigeria</option>
<option value="uith">University of Ilorin Teaching Hospital, Nigeria</option>
<option value="unijos">University of Jos, Nigeria</option>
<option value="unilag">University of Lagos, Nigeria</option>
<option value="unimaid">University of Maiduguri, Nigeria</option>
<option value="umth">University of Maiduguri Teaching Hospital, Nigeria</option>
<option value="unimed">University of Medical Sciences, Ondo State, Nigeria</option>
<option value="unimkar">University Of Mkar, Nigeria</option>
<option value="unn">University of Nigeria, Nigeria</option>
<option value="uniport">University of Port-Harcourt, Nigeria</option>
<option value="usti">University Of Science And Technology, Ifaki-ekiti, Nigeria</option>
<option value="uniuyo">University of Uyo, Nigeria</option>
<option value="udusok">Usman Dan Fodio University , Nigeria</option>
<option value="ucp">Uyo City Polytechnic, Nigeria</option>
<option value="veritas">Veritas University, Abuja, Nigeria</option>
<option value="wavecrest">Wavecrest College of Hospitality, Nigeria</option>
<option value="wufpbk">Waziri Umaru Fed. Polytechnic Birnin Kebbi, Nigeria</option>
<option value="wellspring">Wellspring University, Nigeria</option>
<option value="wusto">Wesley University Of Science And Technology, Nigeria</option>
<option value="wdu">Western Delta University, Nigeria</option>
<option value="wolex">Wolex Polytechnic, Nigeria</option>
<option value="yabatech">Yaba College of Technology, Nigeria</option>
<option value="yewacoed">Yewa Central College Of Education, Nigeria</option>
<option value="colagric-guj">Yobe State College of Agriculture, Nigeria</option>
<option value="ysu">Yobe State University, Nigeria</option>
<option value="ybuscolgs">Yusuf Bala Usman College Of Legal And General Studies, Nigeria</option>
<option value="zacas">Zamfara State College of Arts and Science, Nigeria</option>
</select>
</td>
</tr>
<tr>
<td align="right">Message Category: * </td>
<td><select name="msg_cate" class="formTextField" id="msg_cate"><option selected="selected" value="">Select</option><option value="Advert Placement">Advert Placement</option><option value="Complain">Complain</option><option value="Suggestion">Suggestion</option><option value="Observation">Observation</option><option value="Commendation">Commendation</option></select></td>
        </tr>
        <tr>
          <td align="right">Subject: * </td>
          <td><input name="subject" type="text" class="formTextField" id="subject" value="" style="width:100%"></td>
        </tr>
        <tr>
          <td align="right">Message: * </td>
          <td><textarea name="message" class="formTextField" style="width:100%" rows="5" id="message"></textarea></td>
        </tr>
        
                <tr>
          <td align="right">SPAM Challenge: * </td>
          <td>
Click the check-box below to start.
<div class="g-recaptcha" data-sitekey="6LevmtYSAAAAAJ5c1hSK5kRxlXTEnpi5JdM-HD3B"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LevmtYSAAAAAJ5c1hSK5kRxlXTEnpi5JdM-HD3B&amp;co=aHR0cDovL215c2Nob29sLmNvbS5uZzo4MA..&amp;hl=en&amp;v=r20161004153729&amp;size=normal&amp;cb=wdssdp5e714k" title="recaptcha widget" width="304" height="78" role="presentation" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div></td>
        </tr>
                
        <tr>
          <td>&nbsp;</td>
          <td>            <input name="s_u_v_c" type="hidden" id="s_u_v_c" value=""><input name="send" type="submit" class="btn black" id="send" value="Send Email Now">          </td>
        </tr>
      </tbody></table>
    </form>
</div>

                </div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . '/images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . '/images/slider/Banner-Vertical.jpg' ?>">
                                                    </a>


                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer grey darken-3">
            <div class="row">
                <div class="col l2 s12">
                    &nbsp;


                </div>
                <div class="col l2 s12">
                    <h5 class="red-text">Navigation</h5>
                    <ul>
                        <li><a class="white-text" href="#">HOME</a></li>
                        <li><a class="white-text" href="#">LATEST NEWS</a></li>
                        <li><a class="white-text" href="#">SCHOOLS</a></li>
                        <li><a class="white-text" href="#">COURSES</a></li>
                        <li><a class="white-text"  href="#">VACANCY/TENDER</a></li>
                        <li><a class="white-text" href="#">CONNECT TO ME</a></li>
                        <li><a class="white-text" href="#">SERVICE</a></li>
                        <li><a class="white-text" href="#">HOW TO PAY USING <span class="red-text"> M-BIRR</span> / <span class="red-text"> Hello-Cash</span></a></li>
                    </ul>

                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">Get In Touch</h5>
                    <ul class="white-text">
                        <li>2144 - 007 - 1566</li>
                        <li>No 48, Season street,</li>
                        <li>Livingstone,</li>
                        <li>ETHIOPIA, Africa</li>
                        <li>Email : <a href="mailto:info@example.com">info@ethioedu.com</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">About Us</h5>
                    <p class="grey-text text-lighten-4">
                        The ETHIOEDU.COM started with the aim of easing the process of searching for educational information in ETHIOPIA.
                    </p>


                    <h5 class="red-text">Follow Us</h5>
                    <div class="footer-social-bookmark">
                        <ul class="white-text social-media">
                            <li><a class="white-text"  target="_blank" href="#" class="facebook"><i class="fa fa-facebook "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="twitter"><i class="fa fa-twitter "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-linkedin "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-pinterest "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="youtube"><i class="fa fa-youtube "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="instagram"><i class="fa fa-instagram "></i></a></li>

                        </ul>
                    </div>


                </div>
            </div>

            <div class="footer-copyright red darken-1">
                <div class="container center-align">
                    Copyright © 2016 ethioedu.com | <a href="http://ethioedu.com/contact-us/">Contact Us</a>.
                    All Names, Acronyms and Trademarks displayed on this website are those of their respective owners.
                    Read our <a href="http://ethioedu.com/school/docs/privacy-policy/">privacy policy</a> and <a href="http://ethioedu.com/school/docs/terms-of-use/">terms of use. </a>

                </div>
            </div>
        </footer>

        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

    </body>
</html>




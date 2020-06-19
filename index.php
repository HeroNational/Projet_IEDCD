<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Institut Europeen de la Diapora Camerounaise pour le Developpement</title>

    <link rel="stylesheet" type="text/css" href="css/distM/components/reset.css">
    <link rel="stylesheet" type="text/css" href="css/distM/components/site.css">

    <link rel="stylesheet" type="text/css" href="css/distM/semantic.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/socicon.css">
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">

    <style type="text/css">
        body {
            background-color: rgba(240, 240, 240, 0.2);
        }

        .ui.menu .item img.logo {
            margin-right: 1.5em;
            width: 110px;
        }

        .main.container {
            margin-top: 7em;
        }

        .wireframe {
            margin-top: 2em;
        }

        .ui.footer.segment {
            margin: 5em 0em 0em;
            padding: 5em 0em;
        }
    </style>

</head>

<body>

    <div class="ui fixed inverted blue menu">
        <div class="ui container">
            <a href="#" class="header item">
                <img class=" logo" src="./images/logo.jpg">
                IEDDC
            </a>
            <a href="#" class="item">Accueil</a>
            <div class="ui simple dropdown item">
                Activites<i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" href="#">kh</a>
                    <a class="item" href="#">kh</a>
                    <div class="divider"></div>
                    <div class="header">Header Item</div>
                    <div class="item">
                        <i class="dropdown icon"></i>
                        Sub Menu
                        <div class="menu">
                            <a class="item" href="#">kh</a>
                            <a class="item" href="#">kh</a>
                        </div>
                    </div>
                    <a class="item" href="#">kh</a>
                </div>
            </div>
            <div class="ui right menu" style="background:transparent!important;border:transparent!important">
                <div class="item">
                    <a href="#">
                        <i class=" socicon socicon-twitter"></i>
                    </a>
                    <a href="#">
                        <i class=" socicon socicon-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="ui icon rss"></i>
                    </a>
                    <a href="#">
                        <i class="ui icon mail"></i>
                    </a>
                </div>
                <div class="item">
                    Rechercher&nbsp;&nbsp;
                    <div class="ui left input icon">
                        <input type="text" name="" id="">
                        <i class="ui icon search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <p class="slides-img" style="background-image: url(images/photo_2020-06-19_08-44-49.jpg)">
                <img src="" style="width:100%">
            </p>
            <div class="slider-text" style="bottom: 120px;left:40px">
                <div class="ui grid">
                    <div class="ui row ">
                        <div class="ui column"></div>
                        <div class="ui ten wide column grid-message">
                            <div class="ui container" style="padding-bottom:26px">
                                <div class="ui blue header" style="padding-top:26px">
                                    IDCD
                                </div>
                                <div class="ui white header" style="color:white">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, quam consectetur
                                    adipisicing elit. Velit, quam
                                </div>
                                <div class="ui orange button">
                                    Lire plus <i class="ui icon chevron right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <p class="slides-img" style="background-image: url(images/photo_2020-06-19_08-47-09.jpg)">
                <img src="" style="width:100%">
            </p>
            <div class="slider-text" style="top: 90px;left:79px;">
                <div class="ui grid">
                    <div class="ui row ">
                        <div class="ui column"></div>
                        <div class="ui ten wide column grid-message">
                            <div class="ui container" style="padding-bottom:26px">
                                <div class="ui orange header" style="padding-top:26px">
                                    IDCD
                                </div>
                                <div class="ui white header" style="color:white">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, quam consectetur
                                    adipisicing elit. Velit, quam
                                </div>
                                <div class="ui orange button">
                                    Lire plus <i class="ui icon chevron right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <p class="slides-img" style="background-image: url(images/photo_2020-06-19_08-47-23.jpg);">
                <img src="" style="width:100%">
            </p>
            <div class="slider-text" style="top:100px; right:10px;">
                <div class="ui grid">
                    <div class="ui row ">
                        <div class="ui column"></div>
                        <div class="ui ten wide column grid-message">
                            <div class="ui container" style="padding-bottom:26px">
                                <div class="ui blue header" style="padding-top:26px">
                                    IDCD
                                </div>
                                <div class="ui white header" style="color:white">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit, quam consectetur
                                    adipisicing elit. Velit, quam
                                </div>
                                <div class="ui orange button">
                                    Lire plus <i class="ui icon chevron right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div style="background:grey;background-size:cover  ; text-align:center;padding:40px;">
        Click here for all of IFPRI’s analysis of the impacts of the COVID-19 pandemic on food and nutrition security
        and development, including blog posts, publications, events, data tools and more.
    </div>
    <br><br>
    <div class="ui container">
        <div class="ui big header blue">
            FEATURED HIGHLIGHTS
        </div>
        <br>
        <div class="ui stackable grid">
            <div class="ui five wide column">

                <div class="ui card" style="border:1px solid aliceblue; box-sizing: border-box;">
                    <div class="ui tilte blue" style=" padding:10px;background:#CCE2FF">
                        <div class="ui header blue center aligned vertical aligned">
                            Abbreviated
                        </div>
                    </div>
                    <div class="content" style="padding: 20px;">
                        <a href="#" style="font-size:20px; font-weight:bold;" class="feature-link">
                            DEMAND FOR AFLATOXIN‐SAFE MAIZE IN KENYA
                        </a>
                        <br><br>
                        <div class="description">
                            Study finds consumers buy maize marked “aflatoxin-safe” during marketing campaigns, but
                            don’t stick with it after campaign ends.
                        </div>
                    </div>
                </div>

            </div>
            <div class="ui five wide column">

                <div class="ui card" style="border:1px solid aliceblue; box-sizing: border-box;">
                    <div class="ui tilte blue" style=" padding:10px;background:#CCE2FF">
                        <div class="ui header blue center aligned vertical aligned">
                            Abbreviated
                        </div>
                    </div>
                    <div class="content" style="padding: 20px;">
                        <a href="#" style="font-size:20px; font-weight:bold;" class="feature-link">
                            DEMAND FOR AFLATOXIN‐SAFE MAIZE IN KENYA
                        </a>
                        <br><br>
                        <div class="description">
                            Study finds consumers buy maize marked “aflatoxin-safe” during marketing campaigns, but
                            don’t stick with it after campaign ends.
                        </div>
                    </div>
                </div>

            </div>
            <div class="ui five wide column">

                <div class="ui card" style="border:1px solid aliceblue; box-sizing: border-box;">
                    <div class="ui tilte blue" style=" padding:10px;background:#CCE2FF">
                        <div class="ui header blue center aligned vertical aligned">
                            Abbreviated
                        </div>
                    </div>
                    <div class="content" style="padding: 20px;">
                        <a href="#" style="font-size:20px; font-weight:bold;" class="feature-link">
                            DEMAND FOR AFLATOXIN‐SAFE MAIZE IN KENYA
                        </a>
                        <br><br>
                        <div class="description">
                            Study finds consumers buy maize marked “aflatoxin-safe” during marketing campaigns, but
                            don’t stick with it after campaign ends.
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br><br>
        <div class="ui big header blue">
            FROM OUR BLOG
        </div>
        <br><br>

        <div class="ui stackable grid">
            <div class="ui eleven wide column">

                <div class="ui relaxed divided items">
                    <div class="item">
                        <div class="ui small image">
                            <img src="images/logo.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Content Header</a>
                            <div class="meta">
                                <a>Date</a>
                                <a>Category</a>
                            </div>
                            <div class="description">
                                A description which may flow for several lines and give context to the content.
                            </div>
                            <div class="extra">
                                <img class="ui circular tiny image avatar" src="images/logo.jpg"> Username
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="images/photo_2020-06-19_08-44-49.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Content Header</a>
                            <div class="meta">
                                <a>Date</a>
                                <a>Category</a>
                            </div>
                            <div class="description">
                                A description which may flow for several lines and give context to the content.
                            </div>
                            <div class="extra">
                                <div class="ui right floated primary button">
                                    Lire plus
                                    <i class="right chevron icon"></i>
                                </div>
                                <div class="ui label">Limited</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="images/photo_2020-06-19_08-44-49.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Content Header</a>
                            <div class="meta">
                                <a>Date</a>
                                <a>Category</a>
                            </div>
                            <div class="description">
                                A description which may flow for several lines and give context to the content.
                            </div>
                            <div class="extra">
                                <div class="ui right floated primary button">
                                    Lire plus
                                    <i class="right chevron icon"></i>
                                </div>
                                <div class="ui label">Limited</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="images/photo_2020-06-19_08-44-49.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Content Header</a>
                            <div class="meta">
                                <a>Date</a>
                                <a>Category</a>
                            </div>
                            <div class="description">
                                A description which may flow for several lines and give context to the content.
                            </div>
                            <div class="extra">
                                <div class="ui right floated primary button">
                                    Lire plus
                                    <i class="right chevron icon"></i>
                                </div>
                                <div class="ui label">Limited</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui small image">
                            <img src="images/photo_2020-06-19_08-47-09.jpg">
                        </div>
                        <div class="content">
                            <a class="header">Content Header</a>
                            <div class="meta">
                                <a>Date</a>
                                <a>Category</a>
                            </div>
                            <div class="description">
                                A description which may flow for several lines and give context to the content.
                            </div>
                            <div class="extra">
                                <div class="ui right floated primary button">
                                    Lire plus
                                    <i class="right chevron icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="ui five wide column">

                <div class="ui big header blue" style="font-weight: 900;">
                    VIDEO
                </div>

                <div class="ui header">
                    Virtual Event (April 28, 2020) | COVID-19: Final Remarks
                </div>

                <div class="ui">
                    COVID-19 is creating a range of new challenges for economic growth and social well being. IFPRI’s
                    experts look at what
                    to expect, and how developing countries can respond in ways that promote food security, nutrition,
                    and greater equity.
                </div>

                <div class="ui ten wide column">
                    <br>
                    <iframe style="border: 0px;" src="https://www.youtube.com/watch?v=JNeeXPddBmA"></iframe>
                </div>
                <hr>
                <div class="ui header">
                    <a href="#" style="font-size:20px; font-weight:bold;">
                        IEDCD dans les journaux
                    </a>
                    <br><br>
                    <a href="#" style="font-size:20px; font-weight:bold;color:black" class="feature-link">
                        DEMAND FOR AFLATOXIN‐SAFE MAIZE IN KENYA
                        PM-KISAN and the Adoption of Modern Agricultural Technologies (Economic and Political Weekly)
                    </a>
                    <br><br>
                    <span style="font-size:15px">10 juin 2020 </span>
                    <br><br>
                    <a href="#" style="font-size:20px; font-weight:bold;color:black" class="feature-link">
                        PM-KISAN and the Adoption of Modern Agricultural Technologies (Economic and Political Weekly)
                    </a>
                    <br><br>
                    <span style="font-size:15px">17 juin 2020 </span>
                </div>
                <hr>
                <div class="ui header">
                    <a href="#" style="font-size:20px; font-weight:bold;">
                        Bureaux
                    </a>
                    <br>
                    <div class="ui stackable grid">
                        <div class="ui row">
                            <a href="#" class="ui button blue large  wide column" style="margin:3px;">
                                <span style="float: left;">Afrique</span>
                                <i class="icon chevron right sixteen" style="float:right"></i>
                            </a>
                        </div>
                        <div class="ui row" style="margin-top: -30px;">
                            <a href="#" class="ui button blue large  wide column" style="margin:3px;">
                                <span style="float: left;">Afrique</span>
                                <i class="icon chevron right sixteen" style="float:right"></i>
                            </a>
                        </div>
                        <div class="ui row" style="margin-top: -30px;">
                            <a href="#" class="ui button blue large  wide column" style="margin:3px;">
                                <span style="float: left;">Afrique</span>
                                <i class="icon chevron right sixteen" style="float:right"></i>
                            </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .feature-link:hover {
            transition: ease-in 100ms;
            text-decoration: underline !important;
        }
    </style>
    <div class="ui inverted blue vertical footer segment">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="five wide column">
                    <h4 class="ui inverted header">Group 1</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Link One</a>
                        <a href="#" class="item">Link Two</a>
                    </div>
                </div>
                <div class="four wide column">
                    <h4 class="ui inverted header">Group 2</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Link One</a>
                        <a href="#" class="item">Link Two</a>
                        <a href="#" class="item">Link Three</a>
                        <a href="#" class="item">Link Four</a>
                    </div>
                </div>
                <div class="five wide column">
                    <h4 class="ui inverted header">JOIN OUR MAILING LIST</h4>
                    <br>
                    <div class="ui content">
                        Sign-up to receive email updates with latest news, publications, research results, events, and
                        policy seminars.
                    </div>
                    <form action="" method="post" class="ui form inverted">
                        <div class="ui field">
                            <div class="ui right input icon">
                                <i class="ui mail blue icon"></i>
                                <input type="mail" name="" id="" placeholder="Email adress">
                            </div>
                        </div>
                        <div class="ui field">
                            <div class="ui right input icon">
                                <i class="ui user blue icon"></i>
                                <input type="text" name="" id="" placeholder="First name">
                            </div>
                        </div>
                        <div class="ui field">
                            <div class="ui right input icon">
                                <i class="ui user blue icon"></i>
                                <input type="text" name="" id="" placeholder="Last name">
                            </div>
                        </div>
                        <div class="ui field">
                            <div class="ui left input icon">
                                <select name="MMERGE3" class="required" placeholder="Country" id="mce-MMERGE3">
                                    <option value="null">Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey  (Channel Islands)">Jersey (Channel Islands)</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Kosovo">Republic of Kosovo</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa (Independent)">Samoa (Independent)</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Saint Maarten">Saint Maarten</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                        South Sandwich Islands</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="ui left input icon" style="margin-top:20px">
                                <input type="checkbox" name="" id="Check">
                                <label for="Check">&nbsp;&nbsp;Yes, I want to receive regular email updates on latest
                                    news,
                                    publications, research results, and events from IFPRI</label>
                            </div>
                            <button class="ui teal left aligned button">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="ui inverted section divider"></div>
        <img src="./images/logo.jpg" class="ui centered image small">
        <div class="ui horizontal inverted small divided link list">
            <a href="#" class="item"></a>
            <a class="item" href="#">Site Map</a>
            <a class="item" href="#">Contact Us</a>
            <a class="item" href="#">Terms and Conditions</a>
            <a class="item" href="#">Privacy Policy</a>
        </div>
    </div>
    </div>
    <script src="js/slidesjs.js"></script>
</body>

</html>
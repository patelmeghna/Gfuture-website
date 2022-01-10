<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gfuture Tech</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

</head>

<body>

    <div class="loader-wrap">
        <div class="loader">
            <svg viewBox="0 0 80 80">
                <rect x="8" y="8" width="64" height="64"></rect>
            </svg>
        </div>
    </div>

    <!-- ============================ begin::navbar ============================ -->
    <nav>
        <a href="index.html"><img src="./assets/svg/logo.svg" alt="logo" class="logo"></a>

        <button type="button" onclick="mobileMenu()" class="button_container">
            <svg class="ham hamRotate ham7" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
            </svg>
        </button>

        <div class="hamburger_menu">
            <div class="nav-links">
                <ul>
                    <li class=""><a href="./services.html">Services</a></li>
                    <li><a href="./about-us.html">About</a></li>
                    <li><a href="./team.html">Team</a></li>
                    <li><a href="./career.html">Career</a></li>
                    <li class="active"><a href="./contact.html">Contact</a></li>
                </ul>
            </div>

            <a href="./contact.html" class="nav-btn infinite-text">
                <div class="text-loop">
                    <span></span> Let's Connect
                </div>
                <div class="text-loop">
                    <span></span> Let's Connect
                </div>
                <div class="text-loop">
                    <span></span> Let's Connect
                </div>
                <div class="text-loop">
                    <span></span> Let's Connect <span></span>
                </div>
            </a>
        </div>
    </nav>
    <!-- ============================ end::navbar ============================ -->

    <!-- ============================ begin::contact ============================ -->
    <section class="contact-banner">
        <div class="row">
            <div class="col-md-5 col-lg-5">
                <div class="contact-title d-flex align-items-center">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.58333 78.8333C7.11464 78.8333 9.16667 76.7813 9.16667 74.25C9.16667 71.7187 7.11464 69.6666 4.58333 69.6666C2.05203 69.6666 0 71.7187 0 74.25C0 76.7813 2.05203 78.8333 4.58333 78.8333Z"
                            fill="#386AE7" />
                        <path
                            d="M84.3338 31.4454C84.3338 18.1935 73.5754 7.43268 60.3268 7.43268H49.3692H29.1476C16.895 7.43268 7.03322 17.0975 6.63477 29.2533C7.83013 28.8548 7.83013 28.8548 6.63477 29.2533C6.63477 29.4526 6.63477 29.7515 6.63477 29.9508V53.9635V58.1483C6.63477 70.603 16.6958 80.6664 29.1476 80.6664H84.3338V53.8638V31.4454Z"
                            fill="#386AE7" />
                        <path opacity="0.1"
                            d="M48.2735 16.5C48.2735 13.3116 48.6719 10.2228 49.3692 7.33331H29.1476C16.9946 7.33331 7.03322 16.9982 6.63477 29.154C7.83013 28.7554 9.0255 28.5561 10.3205 28.5561C17.3931 28.5561 23.0711 34.3351 23.0711 41.509C23.0711 48.6829 17.3931 54.4619 10.3205 54.4619C9.0255 54.4619 7.73052 54.2627 6.63477 53.8641V57.9493C6.63477 70.404 16.6958 80.4674 29.1476 80.4674H84.3338V53.7645C64.4109 53.4656 48.2735 36.9257 48.2735 16.5Z"
                            fill="#131517" />
                        <path
                            d="M52.7301 44.1194C52.7301 46.0125 51.2981 47.5071 49.4843 47.5071H28.5778C26.764 47.5071 25.332 46.0125 25.332 44.1194C25.332 42.2263 26.764 40.7317 28.5778 40.7317H49.4843C51.2981 40.7317 52.7301 42.2263 52.7301 44.1194Z"
                            fill="white" />
                        <path
                            d="M62.4069 47.5072C60.4223 47.5072 58.8135 45.9013 58.8135 43.9203C58.8135 41.9392 60.4223 40.3333 62.4069 40.3333C64.3914 40.3333 66.0002 41.9392 66.0002 43.9203C66.0002 45.9013 64.3914 47.5072 62.4069 47.5072Z"
                            fill="#38E8DE" />
                        <path
                            d="M87.289 11L85.934 10.3841L86.5499 9.0291C86.7963 8.41319 86.5499 7.67408 85.934 7.42772C85.3181 7.18136 84.579 7.42772 84.3327 8.04362L83.7168 9.39862L82.3618 8.78272C81.7459 8.53636 81.0068 8.78272 80.7604 9.39862C80.5141 10.0145 80.7604 10.7536 81.3763 11L82.7314 11.6159L82.1154 12.9709C81.8691 13.5868 82.1154 14.3259 82.7314 14.5722C83.3473 14.8186 84.0863 14.5722 84.3327 13.9563L84.9486 12.6013L86.3035 13.2172C86.9194 13.4636 87.6586 13.2172 87.9049 12.6013C88.1513 11.9854 87.9049 11.2463 87.289 11Z"
                            fill="#386AE7" />
                    </svg>
                    <p class="text-72 text-white fw-bold ms-4">Let’s Talk!</p>
                </div>

                <div class="contact-text">
                    <p class="text-24">Tell us all about your project right here, or send us an email at <a
                            href="mailto:contact@gfuturetech.com" class="text-secondary">contact@gfuturetech.com</a>
                    </p>
                </div>

                <a href="tel:+919898998989" class="contact-detail text-24"><i class="fas fa-phone-alt"></i>
                    +91 98989 98989</a>

                <a href="skype:live.gfuturetech?chat" class="contact-detail text-24"><i class="fab fa-skype"></i>
                    live.gfuturetech</a>

                <a href="mailto:contact@gfuturetech.com" class="contact-detail text-24"><i class="fas fa-envelope"></i>
                    contact@gfuturetech.com</a>

                <a href="#" class="contact-detail text-24"><i class="fas fa-map-marker-alt"></i>
                    202 Signature Complex, ZYDUS Hospital Road, Thaltej, Ahmedabad-380059</a>
            </div>



            <div class="col-md-12 col-lg-7">
                <div class="form-area">
                    <?php
                    if (isset($_POST['submit-form'])) {
                        $name=$_POST['name'];
                        $company=$_POST['company'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $currency=$_POST['currency'];
                        $budget=$_POST['budget'];
                        $detail=$_POST['detail'];
                        $FromEmail="meghna@gfuturetech.com";
                        $ReplyTo=$email;
                        $toemail="patelmeghna2710@gmail.com";
                        $subject="Contact form submission";
                        $message='Name:-'.$name.'<br>Company Name:-'.$company.'<br>Email ID:-'.$email.'<br>Phone Number:-'.$phone.'<br>Budget:-'.$currency.''.$budget.'<br>Project Description:'.$detail;
                        $headers  = "From:".$FromEmail."<".$FromEmail.">\n";
                        $headers .= "X-Sender: testsite <".$FromEmail.">\n";
                        $headers .= "X-Mailer: PHP\n";
                        $headers .= "X-Priority: 1\n"; // Urgent message!
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="input-label">Full name</label>
                                <input type="text" class="input-area" name="name" placeholder="John Doe">
                            </div>

                            <div class="col-md-6">
                                <label class="input-label">Company name</label>
                                <input type="text" class="input-area" name="company" placeholder="Earth Inc">
                            </div>

                            <div class="col-md-6">
                                <label class="input-label">Email Address</label>
                                <input type="email" class="input-area" name="email" placeholder="you@yourcompany.com">
                            </div>

                            <div class="col-md-6">
                                <label class="input-label">Phone no</label>
                                <input type="number" class="input-area" name="phone" placeholder="+91 9876543210">
                            </div>

                            <div class="col-md-12 col-12">
                                <label class="input-label">Project Budget</label>
                                <div class="row">
                                    <div class="col-md-6 col-4">
                                        <select id="currency" name="currency" class="input-area">
                                            <option>Select currency</option>
                                            <option value="AFN">AFN - ؋</option>
                                            <option value="ALL">ALL - Lek</option>
                                            <option value="DZD">DZD - دج</option>
                                            <option value="AOA">AOA - Kz</option>
                                            <option value="ARS">ARS - $</option>
                                            <option value="AMD">AMD - ֏</option>
                                            <option value="AWG">AWG - ƒ</option>
                                            <option value="AUD">AUD - $</option>
                                            <option value="AZN">AZN - m</option>
                                            <option value="BSD">BSD - B$</option>
                                            <option value="BHD">BHD - .د.ب</option>
                                            <option value="BDT">BDT - ৳</option>
                                            <option value="BBD">BBD - Bds$</option>
                                            <option value="BYR">BYR - Br</option>
                                            <option value="BEF">BEF - fr</option>
                                            <option value="BZD">BZD - $</option>
                                            <option value="BMD">BMD - $</option>
                                            <option value="BTN">BTN - Nu.</option>
                                            <option value="BTC">BTC - ฿</option>
                                            <option value="BOB">BOB - Bs.</option>
                                            <option value="BAM">BAM - KM</option>
                                            <option value="BWP">BWP - P</option>
                                            <option value="BRL">BRL - R$</option>
                                            <option value="GBP">GBP - £</option>
                                            <option value="BND">BND - B$</option>
                                            <option value="BGN">BGN - Лв.</option>
                                            <option value="BIF">BIF - FBu</option>
                                            <option value="KHR">KHR - KHR</option>
                                            <option value="CAD">CAD - $</option>
                                            <option value="CVE">CVE - $</option>
                                            <option value="KYD">KYD - $</option>
                                            <option value="XOF">XOF - CFA</option>
                                            <option value="XAF">XAF - FCFA</option>
                                            <option value="XPF">XPF - ₣</option>
                                            <option value="CLP">CLP - $</option>
                                            <option value="CNY">CNY - ¥</option>
                                            <option value="COP">COP - $</option>
                                            <option value="KMF">KMF - CF</option>
                                            <option value="CDF">CDF - FC</option>
                                            <option value="CRC">CRC - ₡</option>
                                            <option value="HRK">HRK - kn</option>
                                            <option value="CUC">CUC - $, CUC</option>
                                            <option value="CZK">CZK - Kč</option>
                                            <option value="DKK">DKK - Kr.</option>
                                            <option value="DJF">DJF - Fdj</option>
                                            <option value="DOP">DOP - $</option>
                                            <option value="XCD">XCD - $</option>
                                            <option value="EGP">EGP - ج.م</option>
                                            <option value="ERN">ERN - Nfk</option>
                                            <option value="EEK">EEK - kr</option>
                                            <option value="ETB">ETB - Nkf</option>
                                            <option value="EUR">EUR - €</option>
                                            <option value="FKP">FKP - £</option>
                                            <option value="FJD">FJD - FJ$</option>
                                            <option value="GMD">GMD - D</option>
                                            <option value="GEL">GEL - ლ</option>
                                            <option value="DEM">DEM - DM</option>
                                            <option value="GHS">GHS - GH₵</option>
                                            <option value="GIP">GIP - £</option>
                                            <option value="GRD">GRD - ₯, Δρχ, Δρ</option>
                                            <option value="GTQ">GTQ - Q</option>
                                            <option value="GNF">GNF - FG</option>
                                            <option value="GYD">GYD - $</option>
                                            <option value="HTG">HTG - G</option>
                                            <option value="HNL">HNL - L</option>
                                            <option value="HKD">HKD - $</option>
                                            <option value="HUF">HUF - Ft</option>
                                            <option value="ISK">ISK - kr</option>
                                            <option value="INR">INR - ₹</option>
                                            <option value="IDR">IDR - Rp</option>
                                            <option value="IRR">IRR - ﷼</option>
                                            <option value="IQD">IQD - د.ع</option>
                                            <option value="ILS">ILS - ₪</option>
                                            <option value="ITL">ITL - L,£</option>
                                            <option value="JMD">JMD - J$</option>
                                            <option value="JPY">JPY - ¥</option>
                                            <option value="JOD">JOD - ا.د</option>
                                            <option value="KZT">KZT - лв</option>
                                            <option value="KES">KES - KSh</option>
                                            <option value="KWD">KWD - ك.د</option>
                                            <option value="KGS">KGS - лв</option>
                                            <option value="LAK">LAK - ₭</option>
                                            <option value="LVL">LVL - Ls</option>
                                            <option value="LBP">LBP - £</option>
                                            <option value="LSL">LSL - L</option>
                                            <option value="LRD">LRD - $</option>
                                            <option value="LYD">LYD - د.ل</option>
                                            <option value="LTL">LTL - Lt</option>
                                            <option value="MOP">MOP - $</option>
                                            <option value="MKD">MKD - ден</option>
                                            <option value="MGA">MGA - Ar</option>
                                            <option value="MWK">MWK - MK</option>
                                            <option value="MYR">MYR - RM</option>
                                            <option value="MVR">MVR - Rf</option>
                                            <option value="MRO">MRO - MRU</option>
                                            <option value="MUR">MUR - ₨</option>
                                            <option value="MXN">MXN - $</option>
                                            <option value="MDL">MDL - L</option>
                                            <option value="MNT">MNT - ₮</option>
                                            <option value="MAD">MAD - MAD</option>
                                            <option value="MZM">MZM - MT</option>
                                            <option value="MMK">MMK - K</option>
                                            <option value="NAD">NAD - $</option>
                                            <option value="NPR">NPR - ₨</option>
                                            <option value="ANG">ANG - ƒ</option>
                                            <option value="TWD">TWD - $</option>
                                            <option value="NZD">NZD - $</option>
                                            <option value="NIO">NIO - C$</option>
                                            <option value="NGN">NGN - ₦</option>
                                            <option value="KPW">KPW - ₩</option>
                                            <option value="NOK">NOK - kr</option>
                                            <option value="OMR">OMR - .ع.ر</option>
                                            <option value="PKR">PKR - ₨</option>
                                            <option value="PAB">PAB - B/.</option>
                                            <option value="PGK">PGK - K</option>
                                            <option value="PYG">PYG - ₲</option>
                                            <option value="PEN">PEN - S/.</option>
                                            <option value="PHP">PHP - ₱</option>
                                            <option value="PLN">PLN - zł</option>
                                            <option value="QAR">QAR - ق.ر</option>
                                            <option value="RON">RON - lei</option>
                                            <option value="RUB">RUB - ₽</option>
                                            <option value="RWF">RWF - FRw</option>
                                            <option value="SVC">SVC - ₡</option>
                                            <option value="WST">WST - SAT</option>
                                            <option value="SAR">SAR - ﷼</option>
                                            <option value="RSD">RSD - din</option>
                                            <option value="SCR">SCR - SRe</option>
                                            <option value="SLL">SLL - Le</option>
                                            <option value="SGD">SGD - $</option>
                                            <option value="SKK">SKK - Sk</option>
                                            <option value="SBD">SBD - Si$</option>
                                            <option value="SOS">SOS - Sh.so.</option>
                                            <option value="ZAR">ZAR - R</option>
                                            <option value="KRW">KRW - ₩</option>
                                            <option value="XDR">XDR - SDR</option>
                                            <option value="LKR">LKR - Rs</option>
                                            <option value="SHP">SHP - £</option>
                                            <option value="SDG">SDG - .س.ج</option>
                                            <option value="SRD">SRD - $</option>
                                            <option value="SZL">SZL - E</option>
                                            <option value="SEK">SEK - kr</option>
                                            <option value="CHF">CHF - CHf</option>
                                            <option value="SYP">SYP - LS</option>
                                            <option value="STD">STD - Db</option>
                                            <option value="TJS">TJS - SM</option>
                                            <option value="TZS">TZS - TSh</option>
                                            <option value="THB">THB - ฿</option>
                                            <option value="TOP">TOP - $</option>
                                            <option value="TTD">TTD - $</option>
                                            <option value="TND">TND - ت.د</option>
                                            <option value="TRY">TRY - ₺</option>
                                            <option value="TMT">TMT - T</option>
                                            <option value="UGX">UGX - USh</option>
                                            <option value="UAH">UAH - ₴</option>
                                            <option value="AED">AED - إ.د</option>
                                            <option value="UYU">UYU - $</option>
                                            <option value="USD">USD - $</option>
                                            <option value="UZS">UZS - лв</option>
                                            <option value="VUV">VUV - VT</option>
                                            <option value="VEF">VEF - Bs</option>
                                            <option value="VND">VND - ₫</option>
                                            <option value="YER">YER - ﷼</option>
                                            <option value="ZMK">ZMK - ZK</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-8">
                                        <input type="number" class="input-area" name="budget" placeholder="1000">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label class="input-label">Project Description</label>
                                <textarea rows="6" class="input-area" name="detail"
                                    placeholder="Type you detailed description here"></textarea>
                            </div>

                            <div class="col-md-4 col-4">
                                <button type="submit" name="submit-form" class="submit-btn">Send</button>
                            </div>
                            <div class="col-md-8 col-8">
                                <p class="message">We will get back to you withing 48 hours.</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ end::contact ============================ -->

    <footer>
        <div class="footer-menu">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-auto col-12">
                    <div class="footer-logo">
                        <img src="./assets/svg/logo.svg" alt="logo" width="140px">
                    </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-md-3 col-6 text-center">
                            <a href="./services.html" class="footer-link">Services</a>
                        </div>

                        <div class="col-md-3 col-6 text-center">
                            <a href="./about-us.html" class="footer-link">About</a>
                        </div>

                        <div class="col-md-3 col-6 text-center">
                            <a href="./career.html" class="footer-link">Career</a>
                        </div>

                        <div class="col-md-3 col-6 text-center">
                            <a href="./contact.html" class="footer-link">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                    <a href="mailto:Contact@gfuturetech.com" class="footer-link float-end"><i
                            class="fas fa-envelope"></i>
                        Contact@gfuturetech.com</a>
                </div>
            </div>

            <div class="footer-separator"></div>

            <div class="row">
                <div class="col-md-6 copyright">
                    <div class="row">
                        <div class="col-auto">
                            <p>© gfuturetech - 2022</p>
                        </div>

                        <div class="col-auto">
                            <p>Terms & Conditions</p>
                        </div>

                        <div class="col-auto">
                            <p>Privacy policy</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-right social">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="social-wrap"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-wrap"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-wrap"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
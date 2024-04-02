<?php
    include_once('../partials/hlheader.php');
?>   
    <div class="ikony">
        <div class="ikons">
            <div class="ikon">
                <img src="../pics/ryba.png" alt="NAŠE RYBY">
                <div class="ikon-text">
                    <h2>RYBY</h2>
                    <p>FOTKY O RYBÁCH</p>
                    <p>INFORMÁCIE O RYBÁCH</p>
                    <p></p>
                </div>
            </div>
            <div class="ikon">
                <img src="../pics/udica.png" alt="NAŠE NÁSTROJE">
                <div class="ikon-text">
                    <h2>NÁŠ NÁSTROJ</h2>
                    <p>UDICA,PODBERÁK,NAVIJÁK,</p>
                    <p>STOJAN,POLICAJT,SÁK,</p>
                    <p>KRMIVÁ,PUFFi,ČERVÍKY,</p>
                    <p>KUKURICA,PELETY,BOILY</p>
                </div>
            </div>
            <div class="ikon">
                <img src="../pics/rieka.png" alt="KAM BY SME MALI ÍSŤ">
                <div class="ikon-text">
                    <h2>RYBNÍKY,RIEKY</h2>
                    <p>VÁH | KRÁĽOVÁ NAD VÁHOM</p>
                    <p>RYBNÍK | KRÁĽOVÁ NAD VÁHOM</p>
                    <p>RYBNÍK | ŽIHAREC</p>
                    <p>RYBNÍK | KAJAL</p>
                </div>
            </div>
            <div class="ikon">
                <img src="../pics/location.png" alt="KDE NÁS NÁJDETE">
                <div class="ikon-text">
                    <h2>TU NÁS NÁJDETE</h2>
                    <p>KRÁĽOVÁ NAD VÁHOM,</p>
                    <p>PROLETÁRSKA, 105,</p>
                    <p>92591</p>
                </div>
            </div>
        </div>
    </div>
    <div class="motivacia">
        <div class="motivaciafotka">
            <h1 class="motivacianadpis">AKO UROBIŤ SI PLÁN?</h1>
            <img src="../pics/plan.png" alt="MOTIVACIAFOTKA" class="motivaciapic">
        </div>
        <div class="motivaciafotka">
            <h1 class="motivacianadpis">AKO ULOVIŤ RYBU?</h1>
            <img src="../pics/trick.png" alt="MOTIVACIAFOTKA" class="motivaciapic">
        </div>
        <div class="motivaciafotka">
            <h1 class="motivacianadpis">ČO S RYBOU KEĎ SME CHYTILI?</h1>
            <img src="../pics/ulovok.png" alt="MOTIVACIAFOTKA" class="motivaciapic">
        </div>
    </div>
    <div class="login">
        <div class="loginin">
            <img src="../pics/join.png" alt="STAŇTE SA AJ VY RYBÁROM" class="loginimg">
        </div>
        <div class="loginin">
            <h3 class="loginnadpis">AK SA VÁM ZAPÁČILA NÁŠ PROGRAM A CHCETE SNAMI CHYTAŤ RYBY POŠLETE NÁM EMAIL!</h3>
            <h1 class="loginnadpis2">REGISTRÁCIA</h1>
            <h1 class="loginnadpis2">PRIHLÁSENIE</h1>
            <button class="loginbutton">STAŇTE SA AJ VY.</button>
        </div>
        <div class="loginin">
            <img src="../pics/join2.png" alt="STAŇTE SA AJ VY RYBÁROM" class="loginimg">
        </div>
        <form id="registrationForm">
            <div class="register">
                <h1 class="registernadpis">TU SA MÔŽETE REGISTROVAŤ, AK MÁTE ÚČET <a href="" class="aregister">KLIKNITE
                        SEM</a>.</h1>
                <label>KRSTNÉ MENO</label>
                <input type="text" placeholder="ZADAJTE VAŠE KRSTNÉ MENO" class="registerinput">
                <label>PRIEZVISKO</label>
                <input type="text" placeholder="ZADAJTE VAŠE PRIEZVISKO" class="registerinput">
                <label>ADRESA</label>
                <input type="text" placeholder="ZADAJTE VAŠU ADRESU" class="registerinput">
                <label>TELEFÓNNE ČÍSLO</label>
                <input type="phone" placeholder="ZADAJTE VAŠU TELEFÓNNE ČÍSLO" class="registerinput">
                <label>EMAIL</label>
                <input type="email" placeholder="ZADAJTE VÁŠ EMAIL" class="registerinput">
                <label>HESLO</label>
                <input type="password" placeholder="ZADAJTE HESLO" class="registerinput">
                <label>OVEROVACIE HESLO</label>
                <input type="password" placeholder="ZADAJTE OVEROVACIE HESLO" class="registerinput">
                <label>
                    <input type="checkbox" id="consentCheckbox" required class="registerinput">
                    Súhlasím s spracovaním osobných údajov
                </label>
                <input type="submit" placeholder="ODOSLAŤ" class="registerinputbtn">
                <span class="zavriet">X</span>
            </div>
        </form>
        <form action="../html/loginpage.html">
            <div class="login-menu">
                <h1 class="loginNadpis">TU SA MÔŽETE PRIHLÁSIŤ, AK NEMÁTE ÚČET <a href="" class="alogin">KLIKNITE
                        SEM</a>.</h1>
                <label>EMAIL</label>
                <input type="email" placeholder="ZADAJTE VÁŠ EMAIL" class="logininput" required>
                <label>HESLO</label>
                <input type="password" placeholder="ZADAJTE HESLO" class="logininput" id="passwordInput">
                <input type="checkbox" onclick="showPassword()" class="checkbox">
                <label>UKÁZAŤ HESLO</label>
                <input type="submit" placeholder="ODOSLAŤ" class="logininputbtn">
        </form>
        <span class="zavriet2">X</span>
    </div>
    </div>


<?php
    include_once('../partials/hlfooter.php');
?>   
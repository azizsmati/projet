function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "orange";

   else
      champ.style.backgroundColor = "green";
}
function verifTitre(champ)
{
   if(champ.value.length < 10 || champ.value.length > 15 || champ.value!="")
   {
      surligne(champ, true);

      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function verifMessage(champ)
{
   if(champ.value.length < 100 || champ.value.length > 200 || champ.value!="")
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifType(champ)
{
   if(champ.value!="choix1" || champ.value != "choix3" || champ.value != "choix2" || champ.value != "choix3" || champ.value!="")
   {
      surligne(champ, true);
	  
	  return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
function getExtension(chemin)
{
   var regex = /[^.]*$/i;
   var resultats = chemin.match(regex);
   return resultats[0];
}

function verifImage(champ)
{
var unFichier = "D: /Wampserver/www/bez/bez/views/images/uneImage.png";
var ext = getExtension(unFichier).toLowerCase();
if(champ.ext != "png" || champ.ext != "jpg" || champ.ext != "jpeg")
{      surligne(champ, true);
	  
	  return false;}
	  else 
	  {surligne(champ, false);
      return true;}
}  
function verifForm(f)
{
   var pictureOk = verifImage(f.picture);
   var typeOk = veriftype(f.type);
   var titreOk = verifTitre(f.titre);
   var contenueOk = verifMessage(f.contenue);
   if(pictureOk && typeOk && titreOk && contenueOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}





              
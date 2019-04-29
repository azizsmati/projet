function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "red";

   else
      champ.style.backgroundColor = "";
}

function verifMessage(champ)
{
   if(champ.value.length < 20 || champ.value.length > 200 || champ.value!="")
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

function verifTitre(champ)
{
   if(champ.value.length < 4 || champ.value.length > 10 || champ.value!="")
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


function verifForm(f)
{
   var titreOk = verifTitre(f.titre);
   var messageOk = verifMessage(f.message);
   if(titreOk && messageOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}





                    
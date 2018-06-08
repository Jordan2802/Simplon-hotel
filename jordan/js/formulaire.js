/*stick nav////////////////////////////////////////////////////////////////*/

$(window).scroll(function (event) {
  // A chaque fois que l'utilisateur va scroller (descendre la page)
  var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical

  //si cette valeur > à 200 on ajouter la class
  if (y >= 350) {
    $('nav').addClass('fixed');
  } else {
    // sinon, on l'enlève
    $('nav').removeClass('fixed');
  }
});


/*verif formulaire remplis*/


function vide()
{
    var prenom = document.getElementById ('prenom').value;
    var nom = document.getElementById ('nom').value;
    var homme = document.getElementById ('homme').checked;
    var femme = document.getElementById ('femme').checked;
    var email = document.getElementById ('email').value;
    var tel = document.getElementById ('tel').value;
    if (homme =="" && femme =="")
    {
        alert('veuillez renseigner votre genre !');
        return false;
    }
    if(nom=="")
    {
        alert('veuillez renseigner votre nom !');
        document.getElementById('nom').focus();
        return false;
    }
    if(prenom=="")
    {
        alert('veuillez renseigner votre prenom !');
        document.getElementById('prenom').focus();
        return false;
    }
    if(email=="")
    {
        alert('veuillez renseigner votre adresse email !');
        document.getElementById('prenom').focus();
        return false;
    }



    else
        return true;
}

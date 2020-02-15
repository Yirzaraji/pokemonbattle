const pokemons = document.getElementsByClassName("card");

for (const pokemonCard of pokemons) {


  pokemonCard.addEventListener("click", event => {
   
    pokemonCard.classList.add("clicked");
    const clicked = document.getElementsByClassName("clicked");
    //console.log(clicked)
      

    if (clicked.length === 2) {

      const cardsNotClicked = document.querySelectorAll(".card:not(.clicked)");
      for (const cardNotClicked of cardsNotClicked) {
          
        cardNotClicked.hidden = true;
        console.log(cardNotClicked)
      }
    }


    

    const combat = document.getElementById('fight');

    if(clicked){

        combat.addEventListener("click", function() {
            const loadDom = document.getElementById('combat');
            loadDom.style.display="block";

            let name = pokemonCard.dataset.name;
            let life = pokemonCard.dataset.life;
            console.log(name, life);
          //document.write(<div id="pokbat">coucou</div>);
          

        });
        

    }
    else{

        console.log('purée ca marche pas');
    };


  });
}







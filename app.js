let div = document.getElementById("pokemonDiv")

function consultarPokemon(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
    .then(function(response){
        response.json()
        .then(function(pokemon){
               pokemonesHTML(pokemon)
        })
    })
}

function randomPokemones(){
    let randomPokemon = Math.round(Math.random() * 100)
    consultarPokemon(randomPokemon)
}

function pokemonesHTML(pokemon){
    let item = div.querySelector(`#pokemones`)

    let imagen = item.getElementsByTagName("img")[0]
    imagen.setAttribute("src", pokemon.sprites.front_default)

    let nombre = item.getElementsByTagName("p")[0]
    nombre.textContent = pokemon.name
}
randomPokemones()
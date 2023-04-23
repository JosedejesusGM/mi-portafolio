const pokemonName = document.querySelector('.pokemon__name');
const pokemonNumber = document.querySelector('.pokemon__number');
const pokemonImage = document.querySelector('.pokemon__image');

const form = document.querySelector('.form');
const input = document.querySelector('.input__search');
const buttonShiny = document.querySelector('.btn-shiny');
const buttonPrev = document.querySelector('.btn-prev');
const buttonNext = document.querySelector('.btn-next');

const nameListElement = document.querySelector('#name-list');

const colorShiny = document.getElementById('shiny');
const colorNormal = document.getElementById('normal');

let pokemonNamesList = [];
let shiny = 0;
let searchPokemon = 1;
let cont = 0;
let lengthBef = 0;
let scrollSkip = 0;

const fetchPokemon = async (pokemon) => {

    const APIResponse = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`);

    if(APIResponse.status == 200){
        const data = await APIResponse.json();
        return data;
    }
}

const renderPokemon = async (pokemon) => {
    
    pokemonNumber.innerHTML = '';
    pokemonName.innerHTML = 'Cargando...';

    const data = await fetchPokemon(pokemon);

    if(data) {
      pokemonImage.style.display = 'block';
      pokemonName.innerHTML = data.name;
      pokemonNumber.innerHTML = data.id;

      if(shiny == 0){
        pokemonImage.src = data['sprites']['versions']['generation-v']['black-white']['animated']['front_default'];
        colorNormal.style.color = 'orange';
        colorShiny.style.color = '#222';

        if (data['sprites']['versions']['generation-v']['black-white']['animated']['front_default'] == null) {

            pokemonImage.src = data['sprites']['versions']['generation-v']['black-white']['front_default'];
            console.log('entro');

            if (data['sprites']['versions']['generation-v']['black-white']['front_default'] == null) {

                pokemonImage.src = data['sprites']['versions']['generation-viii']['icons']['front_default'];
                console.log('entro');
                console.log(data['sprites']['versions']['generation-viii']['icons']['front_default']);
            }

        }

        console.log(pokemonImage.src);

      } else {
        pokemonImage.src = data['sprites']['versions']['generation-v']['black-white']['animated']['front_shiny'];
        colorShiny.style.color = 'orange';
        colorNormal.style.color = '#222';

        if (data['sprites']['versions']['generation-v']['black-white']['animated']['front_shiny'] == null) {

            pokemonImage.src = data['sprites']['versions']['generation-v']['black-white']['front_shiny'];

            if (data['sprites']['versions']['generation-v']['black-white']['front_shiny'] == null) {

                pokemonImage.src = data['sprites']['versions']['generation-viii']['icons']['front_shiny'];
                console.log('entro');
                console.log(data['sprites']['versions']['generation-viii']['icons']['front_shiny']);
            }

        }
      }
    
      input.value = '';
      nameListElement.innerHTML = '';
      /*console.log("entro final");*/
      searchPokemon = data.id;
    } else {
        pokemonImage.style.display = 'none';
        pokemonName.innerHTML = 'No existe';
        pokemonNumber.innerHTML = '';
    }

    
}

form.addEventListener('submit', (event) => {
    event.preventDefault();
    renderPokemon(input.value.toLowerCase());
});

buttonShiny.addEventListener('click', () => {
    if(shiny == 0) {
        shiny = 1;
    }else{
        shiny = 0;
    }
    renderPokemon(searchPokemon);
});

buttonPrev.addEventListener('click', () => {
    if(searchPokemon > 1) {
      searchPokemon -= 1;
      renderPokemon(searchPokemon);
    }
});

buttonNext.addEventListener('click', () => {
    searchPokemon += 1;
    renderPokemon(searchPokemon);
});

renderPokemon(searchPokemon);





























/* almacena los nombres de los pokemon y los ordena a-z */
fetchName();
function fetchName () {
    fetch(`https://pokeapi.co/api/v2/pokemon?limit=100000&offset=0`)
    .then((Response) => Response.json())
    .then((data) => {
        pokemonNamesList = data.results.map((x) => x.name);
        pokemonNamesList.sort();

        /*loadNames(pokemonNamesList, nameListElement);*/
        /*console.log(pokemonNamesList);*/
    });
}

/* Crea elementos en la lista (nombres de los pokemon)*/

function loadNames (data, element) {
    if(data) {
        element.innerHTML = '';
        let innerElement = '';
        data.forEach((item) => {
            innerElement += `
            <li onclick = "selectName(this)">${item}</li>`;
        });
        element.innerHTML = innerElement;
    }
}



/* filtra los nomres en base a lo que entre al input y quita los nombres que
contengan un guion (pokemones que no tienen imagen) */
function filterNames(data, searchText) {
    /*const firstfilter = data.filter((x) => x.toLowerCase().startsWith(searchText.toLowerCase()));
    return firstfilter.filter((x) => !x.includes("-"));*/
    return data.filter((x) => x.toLowerCase().startsWith(searchText.toLowerCase()));
} 

/*fetchName();*/

input.addEventListener('input', function() {
    const filterInputNames = filterNames(pokemonNamesList, input.value);
    /*console.log(filterInputNames);*/
    if (input.value == '') {
        input.classList.remove("active");
        nameListElement.innerHTML = '';
    }else{
        input.classList.add("active");
        loadNames(filterInputNames, nameListElement);
    }
});

function selectName(element) {
    let dataPokemonName = element.textContent;
    /*console.log(dataPokemonName);*/
    input.value = dataPokemonName;
}

const buttonSelection = (keyPress) => {
    const listChildren = nameListElement.children;
    if (listChildren.length > 0){
        if (lengthBef != listChildren.length) {
            cont = 0;
            lengthBef = listChildren.length;
        }
        switch (keyPress) {
            case 'ArrowUp':
                nameListElement.focus();
                if (cont > 0) {
                    /*nameListElement.scrollTop -= '2';*/
                    listChildren[cont].classList.remove('selection');
                    cont -= 1;
                    listChildren[cont].classList.add('selection');
                    listChildren[cont].focus();
                }
                break;
            
            case 'ArrowDown':
                if (cont < listChildren.length-1) {
                    /*nameListElement.scrollTo({top: 1, behavior: 'smooth'});
                    scrollSkip += 1;*/
                    console.log('scrollSkip: '+scrollSkip);

                    listChildren[cont].classList.remove('selection');
                    cont += 1;
                    listChildren[cont].classList.add('selection');
                    listChildren[cont].focus();
                }
                break;
        }
    }
}

window.addEventListener('keydown', (keyPress) => {
    let direction  = keyPress.key;

    buttonSelection(direction);
});


nameListElement.addEventListener('scroll', () => {
    const scrollHeight = nameListElement.scrollHeight;

    let op = (scrollHeight/nameListElement.children.length);

    /*op = parseInt(op);*/
    
    scrollSkip = op;

    console.log('altura: '+nameListElement.scrollTop);
    /*console.log('resultado: '+op);
    console.log('lista: '+nameListElement.children.length);
    console.log('resultado Final: '+scrollSkip);   */ 
});





























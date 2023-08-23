document.addEventListener('DOMContentLoaded', ()=>{
    // Definimos el array que va a contener todas las cartas
    var cartas = [
      {
        name: 'espana',
        img: 'img/image1.png'
      },
      {
        name: 'grecia',
        img: 'img/image2.png'
      },
      {
        name: 'alemania',
        img: 'img/image3.png'
      },
      {
        name: 'italia',
        img: 'img/image5.png'
      },
      {
        name: 'inglaterra',
        img: 'img/image6.png'
      },
      {
        name: 'portugal',
        img: 'img/image7.png'
      },
      {
        name: 'peru',
        img: 'img/image8.png'
      },
      {
        name: 'espana',
        img: 'img/image1.png'
      },
      {
        name: 'grecia',
        img: 'img/image2.png'
      },
      {
        name: 'alemania',
        img: 'img/image3.png'
      },
      {
        name: 'joker',
        img: 'img/image4.png'
      },
      {
        name: 'italia',
        img: 'img/image5.png'
      },
      {
        name: 'inglaterra',
        img: 'img/image6.png'
      },
      {
        name: 'portugal',
        img: 'img/image7.png'
      },
      {
        name: 'peru',
        img: 'img/image8.png'
      }
    ];

    //Declarar variables
    const tablero = document.getElementById('tablero');
    const contador = document.getElementById('contador');
    const vidas = document.getElementById('vidas');
    numAciertos = 0;
    numVidas = 3;
    let cartasSeleccionada = [];
    let idcartasEscogidas = [];

    //llamar funciones 
    barajearCartas();
    girarCartas();

    /*for(let i=0;i<cartas.length;i++){
      console.log(cartas[i].img);
    }*/
    
    function barajearCartas(){//Metodo para barajear las cartas
        cartas.sort(() => 0.5 - Math.random());
    }

    function girarCartas(){//Metodo para girar la carta   
      let imagenes = document.querySelectorAll("img");//coge todas las imagenes del tablero
      
      imagenes.forEach(img => {//recorre todas las imagenes 
        img.addEventListener('click', () =>{//le añade el evento click a las imagenes
          let idCartas = img.getAttribute('data-id');//coge los id de las imagenes
          let numCartas = cartas[idCartas].name;//coge el nombre del array de cartas a partir del id que tiene cada imagen

          cartasSeleccionada.push(numCartas);//metemos el name de las imagenes seleccionadas
          idcartasEscogidas.push(idCartas);//metemos el id de la carta seleccionada

          img.setAttribute('src',cartas[idCartas].img);//cambiamos la imagen por defecto por la img que tiene el array cartas

          if(numCartas == 'joker'){//comprobamos que si le da a la imagen joker que es la imagen de la bandera de francia se termina el juego
            setTimeout(gameOver, 500);//llamamos a la funcion cuando pase 1 segundo
          }
          if(cartasSeleccionada.length == 2){//comprobamos que si el array de las cartas seleccionadas tiene dos (se refiere a que ha seleccionado dos cartas para compararlas) se va al metodo comprobar coincidencia
            setTimeout(comprobarCoincidencia, 500);//llamamos a la funcion cuando pase 1 segundo
          }         
        })
      })      
    }

    function comprobarCoincidencia(){//funcion comprobar coincidencias
      let todasImg = document.querySelectorAll("img");//coge todas las imagenes del tablero
      const idprimera = idcartasEscogidas[0];//asigna a la constante idprimera el id de la primera carta seleccionada
      const idsegunda = idcartasEscogidas[1];//asigna a la constante idsegunda el id de la segunda carta seleccionada
      if(idprimera == idsegunda){//comprobamos que si selecciona la imagen dos veces quite una vida 
        todasImg[idprimera].setAttribute('src','img/pordefecto.jpg');//le ponemos la imagen por defecto
        numVidas--;//resta el numero de vidas
        numAciertos--;//resta el numero de aciertos
        alert("No le des a la misma carta dos veces, Una vida menos por listo");
      }
      if(cartasSeleccionada[0] === cartasSeleccionada[1]){//comprobamos si las dos cartas seleccionadas son iguales 
        todasImg[idprimera].removeEventListener('click',girarCartas);
        todasImg[idsegunda].removeEventListener('click',girarCartas);
        numAciertos++;//sumamos el numero de aciertos
        todasImg[idprimera].style.visibility = "hidden";
        todasImg[idsegunda].style.visibility = "hidden";
      }else if(cartasSeleccionada[0] != cartasSeleccionada[1]){//si no son iguales las dos cartas seleccionadas 
        todasImg[idprimera].setAttribute('src','img/pordefecto.jpg');//pone la foto por defecto
        todasImg[idsegunda].setAttribute('src','img/pordefecto.jpg');//pone la foto por defecto
        numVidas--;
        barajearCartas();
      }
      if(numVidas <= 0){//si el numero de vidas es 0 borra todo el tablero
        alert("Has perdido, te has acabado sin vidas");
        tablero.style.visibility = "hidden";
      }
      if(numAciertos == 3){//si el numero de aciertos son 3 has ganado 
        alert("Has ganado eres un máquina");
        location.reload();
      }
      cartasSeleccionada = [];
      idcartasEscogidas = [];
      vidas.innerHTML="Vidas: "+numVidas;
      contador.innerHTML="Aciertos: "+numAciertos;
    }

    function gameOver(){//funcion gameOver 
      let todasImges = document.querySelectorAll("img");
      const idprimera = idcartasEscogidas[0];
      const idsegunda = idcartasEscogidas[1];

      if(cartasSeleccionada[0] == "joker" || cartasSeleccionada[1] == "joker"){
          alert("Has perdido, te han invadido los franceses");
          tablero.style.visibility = "hidden";//borro el tablero entero
      }
    }
  });



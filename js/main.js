// MENU MOBILE
let contentGallery = document.getElementById('gallery'),
urlWeb = document.location.origin,
btnMenu = document.getElementById('btn-menu'),
menuDrop = document.querySelector('.menu-drop-mobile'),
countMenu = 0

btnMenu.addEventListener('click', function(){
    if(countMenu == 0){
        menuDrop.style.display = "block"
        countMenu = countMenu + 1
    }else if(countMenu == 1){
        menuDrop.style.display = "none"
        countMenu = countMenu - 1
    }
})
// MENU MOBILE

// SERVICES SCROLL
let contentservices = document.querySelectorAll('.content-services')
if(screen.width < 560){
    window.addEventListener('scroll', function(){
        let screenDoc = document.documentElement.scrollTop
    
        for(let i = 0; i < contentservices.length; i++){
            let heightContentServices = contentservices[i].offsetTop
            if(heightContentServices - 400 < screenDoc){
                contentservices[i].style.backgroundColor = "rgba(0,0,0,0.4)"
                contentservices[i].style.transition = "all .8s"
            }else{
                contentservices[i].style.backgroundColor = "rgba(0,0,0,1)"
                contentservices[i].style.transition = "all .8s"
            }
        }
    })
}
// SERVICES SCROLL

let contentMv = document.querySelectorAll('.content-mv')
if(contentMv){
    if(screen.width < 560){
        window.addEventListener('scroll', function(){
            let screenDoc = document.documentElement.scrollTop

            for(let i = 0; contentMv.length; i++){
                let heightContentServices = contentMv[i].offsetTop,
                img = contentMv[i].querySelector('img'),
                h2 = contentMv[i].querySelector('h2'),
                p = contentMv[i].querySelector('p')
                if(heightContentServices - 400 < screenDoc){
                    contentMv[i].style.backgroundColor = "rgba(0,0,0,1)"
                    contentMv[i].style.transition = "all .8s"
                    
                    img.classList.add('imgMiVi')
                    h2.classList.add('h2MiVi')
                    p.style.display = "block"
                    p.style.fontSize = "1em"
                    p.classList.add('pMiVi')
                }else{
                    contentMv[i].style.backgroundColor = "rgba(0,0,0,0.7)"
                    contentMv[i].style.transition = "all .8s"
                    img.classList.remove('imgMiVi')
                    h2.classList.remove('h2MiVi')
                    p.classList.remove('pMiVi')
                    p.style.display = "none"
                    p.style.fontSize = ".4em"
                }   
            }
        })
    }
}

// // SCRIPT CARD BENEFITS
// let btnBenefits = document.querySelectorAll('.btn-benefits'),
// textShowBenefits = document.querySelectorAll('.text-show-benefits')

// for(let a = 0; a < btnBenefits.length; a ++){
//     btnBenefits[a].onclick = function(){
//         if(textShowBenefits[a].style.display == "block"){
//             textShowBenefits[a].style.display = "none"    
//             textShowBenefits[a].classList.remove('animationSizeText')
//             textShowBenefits[a].classList.add('tex-small-benefits')
//         }else{
//             textShowBenefits[a].style.display = "block"
//             textShowBenefits[a].classList.add('animationSizeText')
//             textShowBenefits[a].style.transition = "all 1s"
//             setTimeout(function(){
//                 textShowBenefits[a].classList.remove('tex-small-benefits')
//             },30)
//         }
//     }
// }




// SCRIPT CARD BENEFITS

// LIGHT GALLERY
let popup = document.getElementById('popup'),
imagen = "",
imagenPopup = document.getElementById('imagenPopup'),
container = document.getElementById('container')
close = document.getElementById('close'),
left = document.getElementById('left'),
right = document.getElementById('right'),
containImg = document.querySelector('.contain-img'),
popupGallery = document.getElementById('popup-gallery'),
seeGallery = document.getElementById('see-galery'),
countImg = "",
totalImg = "",
x1 = 0,
x2 = 0,
autoMovCount = 0

if(containImg){
    setInterval(function(){
    
        autoMovCount = autoMovCount + 1
        let margin = 100 * autoMovCount
        if(autoMovCount < imagen.length){
            containImg.style.marginLeft = "-" + margin +"%"
            containImg.style.transition = "all .5s"
            setTimeout(function(){
                containImg.style.transition = "none"
            },300)
        }else{
            containImg.style.marginLeft = "0"
            containImg.style.transition = "all .5s"
            autoMovCount = 0
        }
    },8000)
}

// if(contentGallery){
//     const xhr = new XMLHttpRequest()
//     xhr.open('GET','./controller/galery.php', true)
//     xhr.addEventListener('load', e => {
//         let respuesta = e.target.responseText
        
//         renderizarImagenes(respuesta)
//     })
//     xhr.send()
// }
function renderizarImagenes(e){
    let imagenRespuesta = e
    
    const regex = /"([^"]*)"|'([^']*)'/g
    let grupo = "";
    resultado = []
    while((grupo = regex.exec(imagenRespuesta)) !== null){
       resultado.push(grupo[1] || grupo [2]) 
    }
    resultado.forEach(element => {
        let nuevaImagen = `<img class="img-gallery img-fluid" src="./assets/fotos/${element}" alt="Imagen de evento">`
        containImg.insertAdjacentHTML('afterbegin',nuevaImagen)
        
    })
    // for(let i = 0; i < imagenRespuesta.length; i++){
    //     if(imagenRespuesta[i] != '.' && imagenRespuesta[i] != '..'){
    //     }
    // }
}
setTimeout(function(){
    imagen = document.querySelectorAll('.img-gallery')
    totalImg = imagen.length
    for(let i = 0; i < totalImg; i++){
        imagen[i].onclick = function(){
            popup.style.display = "block"
            imagenPopup.src = this.src
            countImg = i
        }
    }
},300)
if(seeGallery){
    seeGallery.onclick = function(){
        popup.style.display = "block"
        imagenPopup.src = imagen[0].src
        countImg = 0
    }
}
if(close){
    close.onclick = function(){
        popup.style.display = "none"
    }
}
if(left){
    left.onclick = function(){
        countImg = countImg - 1
        if(countImg < 0){
            countImg = totalImg-1   
        }
        imagenPopup.src = imagen[countImg].src
    }
    right.onclick = function(){
        countImg = countImg + 1
        if(countImg > totalImg-1){
            countImg = 0
        }
        imagenPopup.src = imagen[countImg].src
    }
    imagenPopup.addEventListener('touchstart', function(e){
        let touch = e.changedTouches[0]
        x1 = parseInt(touch.clientX)
    })
    imagenPopup.addEventListener('touchend', function(e){
        let touch = e.changedTouches[0]
        x2 = parseInt(touch.clientX)

        if(x1 < x2){
            countImg = countImg - 1
            if(countImg < 0){
                countImg = totalImg-1
            }
            imagenPopup.src = imagen[countImg].src
        }else{
            countImg = countImg + 1
            if(countImg > totalImg-1){
                countImg = 0
            }
            imagenPopup.src = imagen[countImg].src
        }
    })
}

// SLIDER OF TEXT
let btnRadioSlid = document.querySelectorAll('.btn-radio-slid'),
btnRadioSlidTwo = document.querySelectorAll('.btn-radio-slid-two'),
btnRadioSlidBlack = document.querySelectorAll('.btn-radio-slid-black'),

btnFour = document.querySelectorAll('.btn-four'),
btnRadioSslidThree = document.querySelectorAll('.btn-radio-slid-three'),
contentTextBlack = document.querySelectorAll('.content-text-black'),
slideText = document.querySelectorAll('.slideText'),
contentText = document.querySelectorAll('.content-text'),

contentTextFour = document.querySelectorAll('.content-text-four'),
slideTextThree = document.querySelectorAll('.slideTextThree'),
auxRadioBtn = 0,
auxRadioBtnTwo = 0 ,
auxRadioThree = 0,
auxRadioFour = 0


if(btnFour){
    for(let i = 0; i < btnFour.length; i++){
        btnFour[i].onclick = function(){
            if(auxRadioFour == 0){
                contentTextFour[i-1].style.marginLeft = "-100%"
                contentTextFour[i-1].style.transition = "all .7s"
                setTimeout(function(){
                    contentTextFour[i-1].style.display ="none"
                    contentTextFour[i-1].style.transition = "none"
                    contentTextFour[i-1].style.marginLeft = "0"
                    contentTextFour[i].style.display ="block"
                },300)
                auxRadioFour = auxRadioFour + 1
            }else if(auxRadioFour == 1){
                contentTextFour[i+1].style.marginLeft = "+100%"
                contentTextFour[i+1].style.transition = "all .7s"
                setTimeout(function(){
                    contentTextFour[i+1].style.marginLeft = "0"
                    contentTextFour[i+1].style.transition = "none"
                    contentTextFour[i+1].style.display ="none"
                    contentTextFour[i].style.display ="block"
                },300)
                auxRadioFour = auxRadioFour - 1
            }               
        }
    }
}


if(btnRadioSslidThree){
    for(let i = 0; i < btnRadioSslidThree.length; i++){
        btnRadioSslidThree[i].onclick = function(){
            if(auxRadioThree == 0){
                slideTextThree[i-1].style.marginLeft = "-100%"
                slideTextThree[i-1].style.transition = "all .7s"
                setTimeout(function(){
                    slideTextThree[i-1].style.display ="none"
                    slideTextThree[i-1].style.transition = "none"
                    slideTextThree[i-1].style.marginLeft = "0"
                    slideTextThree[i].style.display ="block"
                },300)
                auxRadioThree = auxRadioThree + 1
            }else if(auxRadioThree == 1){
                slideTextThree[i+1].style.marginLeft = "+100%"
                slideTextThree[i+1].style.transition = "all .7s"
                setTimeout(function(){
                    slideTextThree[i+1].style.marginLeft = "0"
                    slideTextThree[i+1].style.transition = "none"
                    slideTextThree[i+1].style.display ="none"
                    slideTextThree[i].style.display ="block"
                },300)
                auxRadioThree = auxRadioThree - 1
            }               
        }
    }
}


if(btnRadioSlid){
    for(let i = 0; i < btnRadioSlid.length; i++){
        btnRadioSlid[i].onclick = function(){
            if(auxRadioBtn == 0){
                slideText[i-1].style.marginLeft = "-100%"
                slideText[i-1].style.transition = "all .7s"
                setTimeout(function(){
                    slideText[i-1].style.display ="none"
                    slideText[i-1].style.transition = "none"
                    slideText[i-1].style.marginLeft = "0"
                    slideText[i].style.display ="block"
                },300)
                auxRadioBtn = auxRadioBtn + 1
            }else if(auxRadioBtn == 1){
                slideText[i+1].style.marginLeft = "+100%"
                slideText[i+1].style.transition = "all .7s"
                setTimeout(function(){
                    slideText[i+1].style.marginLeft = "0"
                    slideText[i+1].style.transition = "none"
                    slideText[i+1].style.display ="none"
                    slideText[i].style.display ="block"
                },300)
                auxRadioBtn = auxRadioBtn - 1
            }               
        }
    }
}

if(btnRadioSlidTwo){
    for(let i = 0; i < btnRadioSlidTwo.length; i++){
        btnRadioSlidTwo[i].onclick = function(){
            if(auxRadioBtnTwo == 0){
                contentText[i-1].style.marginLeft = "-100%"
                contentText[i-1].style.transition = "all .7s"
                setTimeout(function(){
                    contentText[i-1].style.display ="none"
                    contentText[i-1].style.transition = "none"
                    contentText[i-1].style.marginLeft = "0"
                    contentText[i].style.display ="block"
                },300)
                auxRadioBtnTwo = auxRadioBtnTwo + 1
            }else if(auxRadioBtnTwo == 1){
                contentText[i+1].style.marginLeft = "+100%"
                contentText[i+1].style.transition = "all .7s"
                setTimeout(function(){
                    contentText[i+1].style.marginLeft = "0"
                    contentText[i+1].style.transition = "none"
                    contentText[i+1].style.display ="none"
                    contentText[i].style.display ="block"
                },300)
                auxRadioBtnTwo = auxRadioBtnTwo - 1
            }            
        }
    }
}

if(btnRadioSlidBlack){
    for(let i = 0; i < btnRadioSlidBlack.length; i++){
        btnRadioSlidBlack[i].onclick = function(){
            if(auxRadioBtn < i ){
                contentTextBlack[auxRadioBtn].style.marginLeft = "-100%"
            }else{
                contentTextBlack[auxRadioBtn].style.marginLeft = "+100%"
            }
            contentTextBlack[auxRadioBtn].style.transition = "all .7s"
            setTimeout(function(){
                contentTextBlack[auxRadioBtn].style.display ="none"
                contentTextBlack[auxRadioBtn].style.transition ="none"
                contentTextBlack[auxRadioBtn].style.marginLeft ="0"
                contentTextBlack[i].style.display = "block "
                auxRadioBtn = i
            },300)
        }
    }
}
// SLIDER OF TEXT

let carruselList = document.querySelector('.carrusel-list'),
carruselListItem = document.querySelectorAll('.carrusel-list-item'),
arrowLeft = document.querySelector('.arrow-left'),
arrowRight = document.querySelector('.arrow-right')
countList = 0

if(arrowLeft){
    arrowLeft.onclick = function(){
        if(countList == 0){
            carruselList.style.marginLeft = "-100%"
            carruselList.style.transition = "all .5s"
            setTimeout(function(){
                carruselListItem[countList].style.display = "none"
                carruselList.style.marginLeft = "0"
                carruselList.style.transition = "none"
                carruselListItem[4].style.display = "block"
                countList = 4
            },300)
        }else{
            carruselList.style.marginLeft = "-100%"
            carruselList.style.transition = "all .5s"
            setTimeout(function(){
                carruselListItem[countList].style.display = "none"
                carruselList.style.marginLeft = "0"
                carruselList.style.transition = "none"
                carruselListItem[countList - 1].style.display = "block"
                countList = countList - 1
            },300)
        }
    }
    arrowRight.onclick = function(){
        if(countList == 4){
            carruselList.style.marginLeft = "+100%"
            carruselList.style.transition = "all .5s"
            setTimeout(function(){
                carruselListItem[countList].style.display = "none"
                carruselList.style.marginLeft = "0"
                carruselList.style.transition = "none"
                carruselListItem[0].style.display = "block"
                countList = 0
            },300)
        }else{
            carruselList.style.marginLeft = "+100%"
            carruselList.style.transition = "all .5s"
            setTimeout(function(){
                carruselListItem[countList].style.display = "none"
                carruselList.style.marginLeft = "0"
                carruselList.style.transition = "none"
                carruselListItem[countList + 1].style.display = "block"
                countList = countList + 1
            },300)
        }
    }
}


let carruselText = document.querySelector('.carrusel-text'),
carruselTextItem = document.querySelectorAll('.carrusel-text-item'),
textItemLast = carruselTextItem[carruselTextItem.length - 1]

if(carruselText){
    carruselText.insertAdjacentElement('afterbegin', textItemLast)

    setInterval(function(){
        carruselTextItem = document.querySelectorAll('.carrusel-text-item')[0]
        carruselText.style.marginLeft = "-100%"
        carruselText.style.transition = "all 0.5s"
        setTimeout(function(){
            carruselText.style.marginLeft = "0"
        carruselText.style.transition = "none"
            carruselText.insertAdjacentElement('beforeend',carruselTextItem)
        },500)
    },3000)
}

function send(id){
    // // var form0 = $('#fr0');
    // // var form1 = $('#frart');
    let formulario = document.getElementById('formulario')
    
      
        const formdata = new FormData(formulario)

      const xhr = new XMLHttpRequest()
      xhr.open('POST','./controller/sendtome.php', true)
      xhr.addEventListener('load', e => {
          let respuesta = e.target.responseText
          if(respuesta == "enviado"){
              location.href = window.location.origin + "/gracias"
          }else{
              alert("Hubo un error intente más tarde")
              window.location.reload()
          }
      })
      xhr.send(formdata)
    }


    //   $.post("./controller/sendtome.php",{nomf:nomf, emaf:emaf, telf:telf, mssf:mssf, id:id},function(datos){
    //     if(datos==1){
    //      alert("Enviando mensaje...");
    //      $.post("controller/sendtoclient.php",{nomf:nomf, emaf:emaf, id:id},function(datos2){
    //       if(datos2==1){
    //         setTimeout(function(){
    //           location.href="gracias_registro1.html";          
    //           form0[0].reset(); return false;
    //         },2000);
    //       }
    //       else if (datos2==0){
    //         alert('¡Error!, mensaje no enviado.');
    //       }
    //     });
    //    }
    //    else if (datos==0){
    //     alertify.error('¡Error!, mensaje no enviado.');
    //   }
    

let botonResumen =document.getElementById("resumen")

botonResumen.addEventListener("click",()=>{
    let cantidad = document.getElementById("cantidad")
    let categoria= document.getElementById("categoria")
    let resumen=0
    
    if (categoria.value == "option1"){
        resumen=cantidad.value * (200- (200 * 0.8))
    }else if (categoria.value == "option2"){
        resumen=cantidad.value * (200-(200 * 0.5 ))
    }else if (categoria.value == "option3"){
        resumen=cantidad.value * (200-(200 * 0.15))
    }

    document.getElementById("total_pago").innerHTML = "Total a Pagar: $"+ resumen
})






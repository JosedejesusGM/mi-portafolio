const d = document,
w = window;

export function responsiveMedia(id,mq){
    let breakpoint = w.matchMedia(mq);
    console.log("Entro");
    console.log(mq);
    
    const responsive = (e)=>{
        if(e.matches){
            d.getElementById(id).innerHTML="Cambio";
            console.log("True");
        }else{
            d.getElementById(id).innerHTML="No Cambio";
            console.log("False");
        }
        console.log("E.matches Salida");
        console.log(e.matches);
    }
    /*breakpoint.addListener(responsive);*/
}
function salto(btn, value) {
    let myinput= document.getElementById("textfield"+value);
    let id = btn.getAttribute("id");
    let min = myinput.getAttribute("min");
    let max = myinput.getAttribute("max");
    let val = myinput.getAttribute("value");
    let step = myinput.getAttribute("step");
    let CalStep = (id == "incremento") ? (step * +1) : (step * -1);
    let newvalue = parseInt(val) + CalStep;

    if (newvalue >= min && newvalue <= max){
        myinput.setAttribute("value",newvalue);
    }
    console.log(btn,id,min,max,step,val,newvalue)
}
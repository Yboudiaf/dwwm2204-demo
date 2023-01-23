

var montantMax = 100000;
var capitalEmprunter = document.getElementById("capital_emprunter");
var input_capital_emprunter = document.getElementById("capital_emprunter");
function capital_emprunter_max(euros)
{
if (euros <= montantMax) {
    console.log("ok")
}
else
{
 console.log("montant trop élevée");
}
};

var btnSubmit = document.getElementById("btn_submit").addEventListener("click" ,function ()
{

    input_capital_emprunter.textContent="ok";
}
);
function isNumberKey(txt, evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46) {
      //Check if the text already contains the . character
      if (txt.value.indexOf('.') === -1) {
        return true;
      } else {
        return false;
      }
    } else {
      if (charCode > 31 &&
        (charCode < 48 || charCode > 57))
        return false;
    }
    return true;
  }

  // Double Period
    function DoubPer() {
        let i = document.getElementById("i").value;

        let result = 0.35 + (69 / i);

        if (i > 0) {
            document.getElementById('DP').value = result;
            return result;
        } else {
            document.getElementById('DP').value = "";
        }
    }

  // Future Value
    function FutVal() {
        let i = document.getElementById("i").value;
        let pv = document.getElementById("PV").value;
        let n = document.getElementById("n").value;

        if(i && pv && n){
            let result = pv * ((1 + i)**n);
            console.log(result);

            return document.getElementById('FV').value = result;
        } else {
            return document.getElementById('FV').value = "";
        }
    }

  // Present Value of an Immediate Annuity Certain
    function PVIAC() {
        let i = document.getElementById("i").value;
        let vn = document.getElementById("vn").value;
        let n = document.getElementById("n").value;

        if(i && n){
            let computed = 1 / ((1+i)**n);
            document.getElementById('vn').value = computed;
        }

        if(vn && i){
            let result = (1 -vn) / i;
            document.getElementById('an').value = result;
        } else {
            return document.getElementById('an').value = "";
        }
    }

    // Present Value of an Annuity Due
    function PVAD(){
        let i = document.getElementById("i").value;
        let an = document.getElementById("an").value;

        if(i && an){
            let result = (1 + i) * an;
            document.getElementById('ain').value = result;
        } else {
            return document.getElementById('ain').value = "";
        }
    }

    // Point Elasticity
    function PointElas(){
        let bq = document.getElementById("bq").value;
        let bp = document.getElementById("bp").value;
        let p = document.getElementById("p").value;
        let q = document.getElementById("q").value;

        if(bq && bq && p && q){
            let result = (bq/bp) * (p/q);
            document.getElementById('ep').value = result;
        } else {
            return document.getElementById('ep').value = "";
        }
    }

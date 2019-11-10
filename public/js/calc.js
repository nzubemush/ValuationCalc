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
        let i = parseInt(document.getElementById("i").value);

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
        let i = parseInt(document.getElementById("i").value);
        let pv = parseInt(document.getElementById("PV").value);
        let n = parseInt(document.getElementById("n").value);

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
        let i = parseInt(document.getElementById("i").value);
        let vn = parseInt(document.getElementById("vn").value);
        let n = parseInt(document.getElementById("n").value);

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
        let i = parseInt(document.getElementById("i").value);
        let an = parseInt(document.getElementById("an").value);

        if(i && an){
            let result = (1 + i) * an;
            document.getElementById('ain').value = result;
        } else {
            return document.getElementById('ain').value = "";
        }
    }

    // Point Elasticity
    function PointElas(){
        let bq = parseInt(document.getElementById("bq").value);
        let bp = parseInt(document.getElementById("bp").value);
        let p = parseInt(document.getElementById("p").value);
        let q = parseInt(document.getElementById("q").value);

        if(bq && bp && p && q){
            let result = (bq/bp) * (p/q);
            document.getElementById('ep').value = result;
        } else {
            return document.getElementById('ep').value = "";
        }
    }

    // Marginal Rate
    function MargRate(){
        let mux = parseInt(document.getElementById("mux").value);
        let muy = parseInt(document.getElementById("muy").value);

        if(mux && muy){
            let result = mux / muy;
            document.getElementById('mrsxy').value = result;
        } else {
            return document.getElementById('mrsxy').value = "";
        }
    }

    // Bugdet Constraint
    function BudgConst(){
        let bigX = parseInt(document.getElementById("bigX").value);
        let bigY = parseInt(document.getElementById("bigY").value);
        let px = parseInt(document.getElementById("px").value);
        let py = parseInt(document.getElementById("py").value);

        if(bigX && bigY && px && py){
            let result = (px*bigX) + (py*bigY);
            document.getElementById('bigI').value = result;
        } else {
            return document.getElementById('bigI').value = "";
        }
    }

    // Average product of labour
    function AvePro(){
        let tpl = parseInt(document.getElementById("tpl").value);
        let bigL = parseInt(document.getElementById("bigL").value);

        if(tpl && bigL){
            let result = tpl / bigL;
            document.getElementById('apl').value = result;
        } else {
            return document.getElementById('apl').value = "";
        }
    }

    // Marhinal product of labour
    function MargPro(){
        let atpl = parseInt(document.getElementById("atpl").value);
        let abigL = parseInt(document.getElementById("abigL").value);

        if(atpl && abigL){
            let result = atpl / abigL;
            document.getElementById('mpl').value = result;
        } else {
            return document.getElementById('mpl').value = "";
        }
    }

    // Future Value Financial
    function FutValFin() {
        let k = parseInt(document.getElementById("k").value);
        let pv = parseInt(document.getElementById("PV").value);
        let n = parseInt(document.getElementById("n").value);

        if(k && pv && n){
            let result = pv * ((1 + k)**n);

            return document.getElementById('fvn').value = result;
        } else {
            return document.getElementById('fvn').value = "";
        }
    }

    // Effective rate of interest
    function EffRateI(){
        let k = parseInt(document.getElementById("k").value);
        let m = parseInt(document.getElementById("m").value);

        if(k && m){
            let result = ((1 + (k/m))**m) - 1;
            document.getElementById('r').value = result;
        } else {
            return document.getElementById('r').value = "";
        }
    }

    // Rate of Return
    function RateRet(){
        let pt = parseInt(document.getElementById("pt").value);
        let pti = parseInt(document.getElementById("pti").value);
        let dt = parseInt(document.getElementById("dt").value);

        if(pt && pti && dt){
            let result = (dt + (pt - pti)) / pti;
            document.getElementById('k').value = result;
        } else {
            return document.getElementById('k').value = "";
        }
    }

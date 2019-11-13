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

  // Rounding to 2 decimal places
  function RoundCorrect(num, precision = 2) {
	// half epsilon to correct edge cases.
	var c = 0.5 * Number.EPSILON * num;
//	var p = Math.pow(10, precision); //slow
	var p = 1; while (precision--> 0) p *= 10;
	if (num < 0)
		p *= -1;
	return Math.round((num + c) * p) / p;
    }

  // Double Period
    function DoubPer() {
        let i = parseFloat(document.getElementById("i").value);

        let result = 0.35 + (69 / i);

        if (i > 0) {
            document.getElementById('DP').value = RoundCorrect(result, 2);
        } else {
            document.getElementById('DP').value = "";
        }
    }

  // Future Value
    function FutVal() {
        let i = parseFloat(document.getElementById("i").value);
        let pv = parseFloat(document.getElementById("PV").value);
        let n = parseFloat(document.getElementById("n").value);

        if(i && pv && n){
            let result = pv * ((1 + i)**n);
            console.log(result);

            return document.getElementById('FV').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('FV').value = "";
        }
    }

  // Present Value of an Immediate Annuity Certain
    function PVIAC() {
        let i = parseFloat(document.getElementById("i").value);
        let vn = parseFloat(document.getElementById("vn").value);
        let n = parseFloat(document.getElementById("n").value);

        if(i && n){
            let computed = 1 / ((1+i)**n);
            document.getElementById('vn').value = computed;
        }

        if(vn && i){
            let result = (1 -vn) / i;
            document.getElementById('an').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('an').value = "";
        }
    }

    // Present Value of an Annuity Due
    function PVAD(){
        let i = parseFloat(document.getElementById("i").value);
        let an = parseFloat(document.getElementById("an").value);

        if(i && an){
            let result = (1 + i) * an;
            document.getElementById('ain').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('ain').value = "";
        }
    }

    // Point Elasticity
    function PointElas(){
        let bq = parseFloat(document.getElementById("bq").value);
        let bp = parseFloat(document.getElementById("bp").value);
        let p = parseFloat(document.getElementById("p").value);
        let q = parseFloat(document.getElementById("q").value);

        if(bq && bp && p && q){
            let result = (bq/bp) * (p/q);
            document.getElementById('ep').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('ep').value = "";
        }
    }

    // Marginal Rate
    function MargRate(){
        let mux = parseFloat(document.getElementById("mux").value);
        let muy = parseFloat(document.getElementById("muy").value);

        if(mux && muy){
            let result = mux / muy;
            document.getElementById('mrsxy').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('mrsxy').value = "";
        }
    }

    // Bugdet Constraint
    function BudgConst(){
        let bigX = parseFloat(document.getElementById("bigX").value);
        let bigY = parseFloat(document.getElementById("bigY").value);
        let px = parseFloat(document.getElementById("px").value);
        let py = parseFloat(document.getElementById("py").value);

        if(bigX && bigY && px && py){
            let result = (px*bigX) + (py*bigY);
            document.getElementById('bigI').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('bigI').value = "";
        }
    }

    // Average product of labour
    function AvePro(){
        let tpl = parseFloat(document.getElementById("tpl").value);
        let bigL = parseFloat(document.getElementById("bigL").value);

        if(tpl && bigL){
            let result = tpl / bigL;
            document.getElementById('apl').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('apl').value = "";
        }
    }

    // Marhinal product of labour
    function MargPro(){
        let atpl = parseFloat(document.getElementById("atpl").value);
        let abigL = parseFloat(document.getElementById("abigL").value);

        if(atpl && abigL){
            let result = atpl / abigL;
            document.getElementById('mpl').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('mpl').value = "";
        }
    }

    // Future Value Financial
    function FutValFin() {
        let k = parseFloat(document.getElementById("k").value);
        let pv = parseFloat(document.getElementById("PV").value);
        let n = parseFloat(document.getElementById("n").value);

        if(k && pv && n){
            let result = pv * ((1 + k)**n);

            return document.getElementById('fvn').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('fvn').value = "";
        }
    }

    // Effective rate of interest
    function EffRateI(){
        let k = parseFloat(document.getElementById("k").value);
        let m = parseFloat(document.getElementById("m").value);

        if(k && m){
            let result = ((1 + (k/m))**m) - 1;
            document.getElementById('r').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('r').value = "";
        }
    }

    // Rate of Return
    function RateRet(){
        let pt = parseFloat(document.getElementById("pt").value);
        let pti = parseFloat(document.getElementById("pti").value);
        let dt = parseFloat(document.getElementById("dt").value);

        if(pt && pti && dt){
            let result = (dt + (pt - pti)) / pti;
            document.getElementById('k').value = RoundCorrect(result, 2);
        } else {
            return document.getElementById('k').value = "";
        }
    }

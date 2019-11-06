
    function DoubPer() {
        let i = document.getElementById("i").value;
        console.log(i);

        let result = 0.35 + (69 / i);
        console.log(result);

        if (i) {
            document.getElementById('DP').value = result;
            return result;
        } else {
            return document.getElementById('DP').value = "";
        }
    }


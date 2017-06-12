function gObj(B) {
    var A;
    if (document.all) {
        if (typeof B == "string") {
            return document.all(B)
        } else {
            return B.style
        }
    }
    if (document.getElementById) {
        if (typeof B == "string") {
            return document.getElementById(B)
        } else {
            return B.style
        }
    }
    return null
}

function showquickmsg(B, A) {
    if (A) {
        B = "<font color=red>" + B + "</font>"
    }
    gObj("coutput").innerHTML = B
}

function trimAll(A) {
    while (A.substring(0, 1) == " ") {
        A = A.substring(1, A.length)
    }
    while (A.substring(A.length - 1, A.length) == " ") {
        A = A.substring(0, A.length - 1)
    }
    return A
}

function getNum(A) {
    outputNum = 0;
    for (i = 0; i < A.length; i++) {
        outputNum += A.charCodeAt(i)
    }
    return outputNum
}

function calc() {
    showquickmsg("calculating...", true);
    cnameone = trimAll(gObj("cnameone").value);
    cnametwo = trimAll(gObj("cnametwo").value);
    if (cnameone.length < 1) {
        showquickmsg("please provide name one", true);
        return
    } else {
        if (cnametwo.length < 1) {
            showquickmsg("please provide name two", true);
            return
        }
    }
    cnameone = cnameone.toLowerCase();
    cnametwo = cnametwo.toLowerCase();
    totalNum = getNum(cnameone) * getNum(cnametwo);
    finalScore = totalNum % 100;
    if (finalScore > 75)
    {
    finalScore = "<h1><font color=green><b>" + finalScore + "%</b></font></h1> <h1><font color=orange>Best Pair</font></h1>";
    }
    else if(finalScore > 45 && finalScore < 75)  {
    finalScore = "<h1><font color=green><b>" + finalScore + "%</b></font></h1> <h1><font color=white>Good Pair</font></h1>";
  }else {
        finalScore = "<h1><font color=green><b>" + finalScore + "%</b></font></h1> <h1><font color=red>Ok Pair</font></h1>";
  }
    showquickmsg(finalScore, false)
};

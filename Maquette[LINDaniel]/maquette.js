document.getElementsByClassName("hov")[0].addEventListener("mouseover",() =>
            document.getElementsByClassName("dropdown-menu")[0].style.display ="block"
);

document.getElementsByClassName("hov")[0].addEventListener("onclick",() =>
            document.getElementsByClassName("dropdown-menu")[0].style.display ="block"
);

document.getElementsByTagName("main")[0].addEventListener("click",() =>
            document.getElementsByClassName("dropdown-menu")[0].style.display ="none"
);

document.getElementsByTagName("footer")[0].addEventListener("click",() =>
            document.getElementsByClassName("dropdown-menu")[0].style.display ="none"
);
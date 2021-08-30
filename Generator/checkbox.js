const checkYes = document.querySelector(".yes");
    const checkNo = document.querySelector(".no");

    let checkbox = null;

    checkYes.addEventListener("click", function() {
        let checkbox = 0;
        if(checkbox === 0) {
            checkNo.disabled = true;
        }
    });
    checkNo.addEventListener("click", function() {
        let checkbox = 0;
        if(checkbox === 0) {
            checkYes.disabled = true;
        }
    }); 
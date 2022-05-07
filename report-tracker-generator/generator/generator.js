

function abstractLFNumber() {
    const lernfeld = document.querySelectorAll(".lf");
    const datasets = document.querySelectorAll(".dataset");
    let newLfNum = [];


    // datasets.forEach(element => {
    //     const textContent = element.textContent;
    //     if(newLfNum.includes(textContent)) {
    //         const para = document.createElement("p");
    //         para.appendChild(textContent);

    //     }
    // });
    
    lernfeld.forEach(lfItem => {
        const charLfItem = lfItem.textContent;
        if(!newLfNum.includes(charLfItem)) {
            newLfNum.push(charLfItem);  
        } else {
            return null;
        }
        const container = document.querySelector(".container");

        const paragraph = document.createElement("p");
        for(let i = 0; i < newLfNum.length; i++) {
            paragraph.textContent = newLfNum[i];
            
        }
        container.appendChild(paragraph);
        console.log(newLfNum);
         
      

    });

    
   


    

    // IF LF new add to Template and arrange
    // console.log(newLfNum);
    // console.log(newLfChar);
    // IF not add to right LF
}


// function abstractDataset() {
//     let tmp = null;
//     const datasets = document.querySelectorAll(".dataset");
//     const getDatasetContent = datasets.textContent;
   
//     // console.log(getCharCount);
//     datasets.forEach(ContentItem => {
//        console.log(ContentItem.textContent.split(""));
//     });

// }

// abstractDataset()
abstractLFNumber();





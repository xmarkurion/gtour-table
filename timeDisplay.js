const dateTerminal = document.querySelector('.timeDisplay');

const timer = setInterval( () => {
    const now = new Date();
    dateTerminal.innerText = now.toLocaleString();
},1000);


const status_img_replace = document.querySelectorAll('.stat');

status_img_replace.forEach(data =>{
    if(data.innerText == 0){
        data.innerHTML = "<img src='media/red.svg' style='width: 29px;'>";
    }

    if(data.innerText == 1){
        data.innerHTML = "<img src='media/green.svg' style='width: 29px;'>";
    }
});








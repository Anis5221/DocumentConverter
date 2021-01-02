



let theme = localStorage.getItem('theme');

if(theme == null){
    setTheme('light')
}else{
    setTheme(theme)
}

let themedot = document.getElementsByClassName('theme-dots');

for(var i=0; themedot.length>i; i++){
    themedot[i].addEventListener('click', function(){
        let mode = this.dataset.mode;
        setTheme(mode)
    })
}

function setTheme(mode){
    if(mode == "light"){
        document.getElementById('theme-style').href = "http://127.0.0.1:8000/css/light.css"
    }
    if(mode == "blue"){
        document.getElementById('theme-style').href = "http://127.0.0.1:8000/css/blue.css"
    }
    if(mode == "green"){
        document.getElementById('theme-style').href = "http://127.0.0.1:8000/css/green.css"
    }
    if(mode == "gray"){
        document.getElementById('theme-style').href = "http://127.0.0.1:8000/css/gray.css"
    }

    localStorage.setItem('theme', mode)
}


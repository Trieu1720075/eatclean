var t = document.getElementById('slide');
        var buttons = document.getElementsByClassName('btn-slides');
        function changeBackground(n){
            if (n==1) t.style.backgroundImage = "url(images/slider-01.jpg)";
            else if (n==2) t.style.backgroundImage = "url(images/slider-02.jpg)";
            else t.style.backgroundImage = "url(images/slider-03.jpg)"; 
        }  
        for (var i=0;i<buttons.length;i++){
            buttons[i].addEventListener("click",function(){
                var id= this.id;
                for (var i=0;i<buttons.length;i++){
                    buttons[i].classList.remove("active");
                }
                this.className +=" active";
                if (id=="btn1") changeBackground(1);
                else if (id=="btn2") changeBackground(2);
                else changeBackground(3);
            })
        }  
       
changeBackground(1);
setInterval(function(){
    for (var i=0;i<buttons.length;i++){
        if (buttons[i].classList.contains('active')){
            buttons[i].classList.remove('active');
            i=i+1;
            if (i>2) i=0;
            buttons[i].className +=' active';
            var id = buttons[i].id;
            if (id=="btn1") changeBackground(1);
            else if (id=="btn2") changeBackground(2);
            else changeBackground(3);
            break;
        }
    }
},5000)
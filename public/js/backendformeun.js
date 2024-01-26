var 
    bu_meun = document.querySelector(".top .menu"),
    boxmeun = document.querySelector(".boxmeun"),
    boxmeun_link = document.querySelectorAll(".boxmeun li"),
    boxmeun_bkg = document.querySelector(".boxmeun .bkg"),
    web_content = document.querySelector('.web'),
    web_content_bkg = document.querySelector('.web .bkg'),
    layer       = document.querySelector('.layer'),
    layer_bkg   = document.querySelector('.layer .bkg'),
    bu_show     = document.querySelector('.top .bu_show'),
    bu_hide     = document.querySelector('.top .bu_hidden');

    layer_bkg.style.height = web_content.offsetHeight + "px";
    layer.style.height = web_content.offsetHeight + "px";
    web_content_bkg.style.height = web_content.offsetHeight + "px";
    boxmeun_bkg.style.height = window.innerHeight + "px";
    console.log(web_content.offsetHeight);
    // funtion for stop scroll
    var bloon = false;
    window.onscroll = function(){
        if(bloon === true){
            console.log(window.scrollY);
            window.scrollTo({
                top: 0,
                behavior: "auto",
            });
        } else {
            console.log("Run scroll again !");
        }
    }
    bu_show.addEventListener('click', function(){
        bloon = true;
        web_content.classList.add('web-effect'); 
        bu_show.style.transform = "scale(0.8)translateX(-30px)";
        bu_show.style.opacity = "0";
        setTimeout(function(){
            bu_show.style.display = "none";
            bu_hide.style.display = "block";
            setTimeout(function(){
                bu_hide.classList.add('bu_hidden_show');
                layer.style.display = "block";
                setTimeout(function(){
                    layer.classList.add('layer-effect');
                    boxmeun.style.display = 'block';
                    setTimeout(function(){
                        var i = 0;
                        boxmeun_link.forEach(link => {
                            i +=2;
                            link.style.transition = "'all 0." + i +"s ease-in'";
                            link.style.transform = 'translateX(-25px)';
                            link.style.opacity = '1';
                        });
                    },20);
                },20);
            },20);
        },80);
    });

    bu_hide.addEventListener('click', function(){
        bloon = false;
        var i = 0;
        boxmeun_link.forEach(link => {
            i +=2;
            link.style.transition = "'all 0." + i +"s ease-in'";
            link.style.transform = 'translateX(0px)';
            link.style.opacity = '0';
        });
        layer.classList.remove('layer-effect');
        setTimeout(function(){
            web_content.classList.remove('web-effect');
            bu_hide.classList.remove('bu_hidden_show');
            setTimeout(function(){
                bu_hide.style.display = "none";
                bu_show.style.display = "block";
                setTimeout(function(){
                    bu_show.style.transform = "scale(1)translateX(0px)";
                    bu_show.style.opacity = "1";
                    setTimeout(function(){
                        layer.style.display = "none";
                    }, 50);
                },20);
            },20);
        },20);
    });
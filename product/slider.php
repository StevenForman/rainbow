<?php session_start() ?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <link rel="stylesheet" href="../app/style/slider.css">
</head>
<body>
    <div id="bg" class="slider"></div>
    <div id="fg" class="slider"></div>
    <script>
        $.ajax({
                url: "../app/ajax/slider.php",
                type: "post",
                dataType: "html",
                data: {'idProduct': '<?php echo $_SESSION['idProduct']; ?>'},
                success: function (response) {
                    var result = JSON.parse(response);
                    var imgs = result['images']
                        n = imgs.length,
                        current = n-1,
                        closedWidth = Math.floor(window.innerWidth/10)
                    console.log(imgs);

                    for (var i=0; i<n; i++){

                        var bgImg = document.createElement('div');
                        bg.appendChild(bgImg);

                        gsap.set(bgImg, {
                            attr:{id:'bgImg'+i, class:'bgImg'},
                            width:'100%',
                            height:'100%',
                            backgroundImage:'url('+imgs[i]+')',
                            backgroundSize:'cover',
                            backgroundPosition:'center'
                        })

                        var b = document.createElement('div');
                        fg.appendChild(b);

                        gsap.fromTo(b, {
                            attr:{id:'b'+i, class:'box'},
                            innerHTML:'<p><sub>Fig.</sub> '+(i+1)+'</p>',
                            width:'100%',
                            height:'100%',
                            borderLeft:(i>0)?'solid 1px #eee':'',
                            backgroundColor:'rgba(250,250,250,0)',
                            left:i*closedWidth,
                            transformOrigin:'100% 100%',
                            x:'100%'
                        },{
                            duration:i*0.15,
                            x:0,
                            ease:'expo.inOut'
                        })

                        b.onmouseenter = b.onclick = (e)=>{
                            if (Number(e.currentTarget.id.substr(1))==current) return;

                            var staggerOrder = !!(current < Number(e.currentTarget.id.substr(1)));
                            current = Number(e.currentTarget.id.substr(1));
                            gsap.to('.box', {
                                duration:0.5,
                                ease:'elastic.out(0.3)',
                                left:(i)=>(i<=current)? i*closedWidth: window.innerWidth-((n-i)*closedWidth),
                                x:0,
                                stagger: staggerOrder? 0.05:-0.05
                            })

                            bg.appendChild( document.getElementById('bgImg'+current) )
                            gsap.fromTo('#bgImg'+current, {opacity:0}, {opacity:1, duration:0.3, ease:'power1.inOut'})
                            gsap.fromTo('#bgImg'+current, {scale:1.05, rotation:0.05}, {scale:1, rotation:0, duration:1.5, ease:'sine'})
                        }
                    }


                    window.onresize = (e)=>{
                        closedWidth = Math.floor(window.innerWidth/10)
                        gsap.set('.box', { x:0, left:(i)=> (i<=current)? i*closedWidth: window.innerWidth-((n-i)*closedWidth) })
                    }

                },
                error: function (response) {

                }
            }
        );

    </script>
</body>
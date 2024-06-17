<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="&lt;model-viewer&gt; template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia GC</title>
    <link rel="stylesheet" href="style1.css">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>
</head>

<body class="fondoPulsera" style="overflow: hidden;">
    <!--NAVBAR-->
    <div class="navbarExp navbar-normal">
        <img src="img/logoBlanco.png" alt ="Logo" class="navbar-logo" id="logo"alt  alt="logo" width="600"
        <div class="flexRow">
         
        </div>
      
    </div>

    <!--NAVBAR COMPACT-->
    <header class="navbar-compact">
        <img src="img/logo.png" alt="Logo" class="navbar-logo" id="logo">
        <img src="img/x.png" alt="" style="display: none;" class="btnBurger" id="btnBurgerClose">
        <img src="img/btnburger.png" alt="" class="btnBurger burgerExpandido" id="btnBurgerExpand">
    </header>
    <div class="navbarOpciones" id="navbar-opciones" style="display: none;">
        <a href="clientes.php#btnBajar" class="navbar-text-compact">Quiénes somos</a>
        <a href="experienciagc.php" class="navbar-text-compact">Experiencia GC</a>
        <a href="dancaceres.php" class="navbar-text-compact" id="headerMentor">El Mentor de los Seguros</a>
    </div>







    <div class="ovalo">
    </div>




















    <!--CONTENIDO-->


    <!-- <model-viewer> HTML element -->
    <!-- camera-controls poster="poster.webp" ATRIBUTO DE MODEL-VIEWER PARA PODER MOVERLO -->
    <model-viewer src="3d/pulseraGC.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls
        shadow-intensity="0.99" environment-image="legacy" shadow-softness="0.77" exposure="0.59 " auto-rotate
        camera-orbit="-87.4deg 82deg 3.300m" field-of-view="30deg" min-camera-orbit="auto 82deg 3.200m"
        max-camera-orbit="auto 82deg 3.500m" min-field-of-view="30deg">
        <button class="Hotspot" slot="hotspot-5"
            data-position="0.9669695995076579m 0.09840884663270995m 0.21058642076837197m"
            data-normal="0.9569404211286636m 0m 0.2902843957399297m" data-visibility-attribute="visible">
            <div class="HotspotAnnotation">Tu tipo de sangre</div>
        </button><button class="Hotspot" slot="hotspot-6"
            data-position="0.9269402576984859m 0.08648620258070093m -0.3425454449824453m"
            data-normal="0.956940421883433m 0m -0.290284393251786m" data-visibility-attribute="visible">
            <div class="HotspotAnnotation">Logo GC</div>
        </button><button class="Hotspot" slot="hotspot-7"
            data-position="-0.7668104384340201m 0.08664538664669194m 0.6206083358474848m"
            data-normal="-0.7730104177583447m 1.6920445957099236e-7m 0.6343933275476982m"
            data-visibility-attribute="visible">
            <div class="HotspotAnnotation">Tu nombre</div>
        </button><button class="Hotspot" slot="hotspot-8"
            data-position="-0.8695288920458621m 0.08132968029378872m -0.29653207489538164m"
            data-normal="0.9569402456137747m 0m 0.290284974334961m" data-visibility-attribute="visible">
            <div class="HotspotAnnotation">Número de emergencia</div>
        </button>
        <div class="progress-bar hide" slot="progress-bar">
            <div class="update-bar"></div>
        </div>
        <button slot="ar-button" id="ar-button">
            Ver 3D
        </button>
        <div id="ar-prompt">
            <img src="ar_hand_prompt.png">
        </div>
    </model-viewer>


    <div class="scroll-container">

        <div class="sectionExp" id="section1">
            <div style="width: 50%; background-color: red;"></div>
            <div class="divTxtExp">
        
            <button class="gr btnAzul" id="btnAgendarCita">OBTENER</button>
                <h1 class="gr">Preveé, protégete y presume.</h1>
            </div>
        </div>
        <div class="sectionExp" id="section2">
            <div style="width: 50%; background-color: red;"></div>
            <div class="divTxtExp">
                <h1 class="gr">Preveé</h1>
                <p>Si ya eres parte de nuestros clientes de vida, tendrás derecho a nuestro brazalete de seguridad.
                </p>
            </div>
        </div>
        <div class="sectionExp" id="section3">
            <div style="width: 50%; background-color: red;"></div>
            <div class="divTxtExp">
                <h1 class="gr">Protéjete</h1>
                <p>Un gran número de personas sufren accidentes y no son tratados debidamente, tu brazalete de
                    seguridad
                    muestra lo siguiente:<br></p>
                <p style="text-align: left;">
                    · Nombre<br>
                    · Número de emergencia<br>
                    · Tipo de sangre<br>
                    · Alergias<br>
                </p>
            </div>
        </div>
        <div class="sectionExp" id="section4">
            <div style="width: 50%; background-color: red;"></div>
            <div class="divTxtExp">
                <h1 class="gr">Presume</h1>
                <p>Estás en un nivel premium, presúmelo.</p>
            </div>
        </div>

    </div>






    <!-- Loads <model-viewer> for browsers: -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.2.0/model-viewer.min.js"></script>

    </div>


    <footer style="height: 0;">
        <link rel="stylesheet"
            href="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-button.css">
        <a id="robbu-whatsapp-button" target="_blank" href="https://wa.link/ud3f6y">
            <div class="rwb-tooltip" style="background-color: white;">WhatsApp!</div>
            <img src="https://cdn.positus.global/production/resources/robbu/whatsapp-button/whatsapp-icon.svg">
        </a>
    </footer>



</body>

<script src="scriptGeneral.js"></script>

<script type="text/javascript">



    // Handles loading the events for <model-viewer>'s slotted progress bar
    const onProgress = (event) => {
        const progressBar = event.target.querySelector('.progress-bar');
        const updatingBar = event.target.querySelector('.update-bar');
        updatingBar.style.width = `${event.detail.totalProgress * 100}%`;
        if (event.detail.totalProgress === 1) {
            progressBar.classList.add('hide');
            event.target.removeEventListener('progress', onProgress);
        } else {
            progressBar.classList.remove('hide');
        }
    };
    document.querySelector('model-viewer').addEventListener('progress', onProgress);
</script>

</html>
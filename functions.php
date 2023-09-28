function agregar_google_tag_manager() {
    ?>
    <!-- Inicia el código de Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','TU_ID_DE_GTM');
    </script>
    <!-- Termina el código de Google Tag Manager -->
    <?php
}

add_action('wp_head', 'agregar_google_tag_manager');

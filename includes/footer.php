    <footer>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo illum modi provident sequi ullam? Accusamus dolorum ratione repellendus unde vero. Facere illum iste qui ratione repudiandae? At non recusandae voluptatem.
    </footer>

    <script src="<?= node_modules_path() ?>/jquery/dist/jquery.min.js"></script>
    <script src="<?= node_modules_path() ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= node_modules_path() ?>/slick-carousel/slick/slick.min.js"></script>
    <script src="<?= node_modules_path() ?>/systemjs/dist/system.min.js"></script>

    <script>
        var templateUri = document.querySelector("meta[name=template-uri]").getAttribute('content');
        System.import(templateUri + "/dist/js/app.js");
    </script>
</body>
</html>

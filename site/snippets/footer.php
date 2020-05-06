
    <footer>
        <div class="footer">
            <span>
                ©2013-2016 BeMo Academic Consulting Inc. All rights reserved.
                <a style="color: #ff6600; font-weight: 400;" href="http://" target="_blank"
                    rel="noopener noreferrer">Disclaimer & Privacy Policy</a>
                <a style="color: #ff6600; font-weight: 400;" href="http://" target="_blank"
                    rel="noopener noreferrer">Contact Us</a>
            </span>
            <div style="float: right;">
            <?php if($image = $site->image('facebook.png')): ?>
                <img src="<?= $image->url() ?>" alt="social" srcset="" style="width: 30px; height: 30px;">
            <?php endif ?>
            <?php if($image = $site->image('twitter.png')): ?>
                <img src="<?= $image->url() ?>" alt="social" srcset="" style="width: 30px; height: 30px;">
            <?php endif ?>
            </div>
        </div>
    </footer>

    <script>
        let menu = document.getElementById('menu');
        let nav = document.getElementById('nav');
        let exit = document.getElementById('exit');

        menu.addEventListener('click', function (e) {
            nav.classList.toggle('hide-mobile');
            // e.preventDefault();
        });

        nav.addEventListener('click', function (e) {
            nav.classList.add('hide-mobile');
            // e.preventDefault();
        });
    </script>
</body>

</html>
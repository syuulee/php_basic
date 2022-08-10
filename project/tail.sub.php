<footer class="Footer">
            <div class="container">
                <div class="logo">
                    <img src="./img/logo01.png" alt="">
                </div>
                <address>
                    주소 :
                </address>
            </div>
        </footer>
    </div>


    <script src=" ./js/jquery-1.12.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        var pagenum = <?= $subnum?>;
        $('.Lnb li').eq(pagenum - 1).addClass('on')
    </script>
</body>

</html>
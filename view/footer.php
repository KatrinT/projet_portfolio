
  <!--lien vers les réseaux sociaux-->
<footer class="page-footer">
    <!--Btn top-->
    <div class="page-scroll marginbot-30">
        <a href="#intro" id="totop" class="btn btn-circle"><i class="fa fa-angle-double-up animated"></i></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Réseaux sociaux</h5>
            </div>

            <div class="col l4 offset-l2 s12">
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/catherine-tritz-35465232/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
                    <li><a class="grey-text text-lighten-3" href="https://twitter.com/CatherineTritz#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
  </div>

<!--Share reseaux sociaux-->
  <div>
      <a href="<?=$socialLinksPage->twitter->shareUrl?>">Twitter</a>
      <a href="<?=$socialLinksPage->linkedin->shareUrl?>">Linkedin</a>
  </div>

<!--Copyright-->
  <div class="footer-copyright">
    <div class="container">
        <p>© Copyright <?php echo date("Y"); ?></p>
    </div>
  </div>
</footer>
</body>
</html>

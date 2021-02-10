<footer class="footer_div">
    <div class="row bg-light">
        <div class="col home">
            <i class="fas fa-home"></i>
            <div>HOME</div>
        </div>
        <div class="col briefcase">
            <i class="fas fa-briefcase"></i>
            <div>ABOUT US</div>
        </div>
        <div class="col box_open">
            <i class="fas fa-box-open"></i>
            <div>PRODUCTS</div>
        </div>
        <div class="col feedback_i">
            <i class="fas fa-star feedback_i"></i>
            <div>FEEDBACK</div>
        </div>
        <div class="col comment_alt">
            <i class="fas fa-comment-alt"></i>
            <div>ENQUIRY</div>
        </div>
    </div>
</footer>
</body>

</html>

<script>
    $(document).ready(function() {
        $('div.home').click(function() {
            $('div#home_sec')[0].scrollIntoView();
        });
        $('div.briefcase').click(function() {
            $('div#abtus_sec')[0].scrollIntoView();
        });
        $('div.box_open').click(function() {
            $('div#prdt_sec')[0].scrollIntoView();
        });
        $('div.feedback_i').click(function() {
            $('div#fedbk_sec')[0].scrollIntoView();
        });
        $('div.comment_alt').click(function() {
            $('div#enqu_sec')[0].scrollIntoView();
        });
    });
</script>
<script src="js/index.js"></script>
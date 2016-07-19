<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

    <div class="divPanel">

        <div class="row-fluid">
            <div class="span3" id="footerArea1">

                <h3>About Company</h3>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>

                <p>
                    <a href="#" title="Terms of Use">Terms of Use</a><br />
                    <a href="#" title="Privacy Policy">Privacy Policy</a><br />
                    <a href="#" title="FAQ">FAQ</a><br />
                    <a href="#" title="Sitemap">Sitemap</a>
                </p>

            </div>
            <div class="span3" id="footerArea2">

                <h3>Recent Blog Posts</h3>
                <p>
                    <a href="#" title="">Lorem Ipsum is simply dummy text</a><br />
                    <span style="text-transform:none;">2 hours ago</span>
                </p>
                <p>
                    <a href="#" title="">Duis mollis, est non commodo luctus</a><br />
                    <span style="text-transform:none;">5 hours ago</span>
                </p>
                <p>
                    <a href="#" title="">Maecenas sed diam eget risus varius</a><br />
                    <span style="text-transform:none;">19 hours ago</span>
                </p>
                <p>
                    <a href="#" title="">VIEW ALL POSTS</a>
                </p>

            </div>
            <div class="span3" id="footerArea3">

                <h3>Sample Content</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.
                </p>

            </div>
            <div class="span3" id="footerArea4">

                <h3>Get in Touch</h3>

                <ul id="contact-info">
                    <li>
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        (123) 456 7890 / 456 7891
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:info@yourdomain.com" title="Email">info@yourdomain.com</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        123 Street<br />
                        12345 City, State<br />
                        Country
                    </li>
                </ul>

            </div>
        </div>

        <br /><br />
        <div class="row-fluid">
            <div class="span12">
                <p class="copyright">
                    Copyright © 2013 Your Company. All Rights Reserved.
                </p>

                <p class="social_bookmarks">
                    <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                    <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                    <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
                    <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                </p>
            </div>
        </div>

    </div>
</div>
</div>
<br /><br /><br />

<script src="<?php echo base_url(); ?>public/scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/scripts/default.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>
<script src="<?php echo base_url(); ?>public/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>
<script type="text/javascript">$('.ttip').tooltip();</script>
<script src="<?php echo base_url(); ?>public/scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="<?php echo base_url(); ?>public/scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>
</body>
</html>
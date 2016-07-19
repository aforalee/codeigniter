<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
<div class="row-fluid">
    <div class="span12">

        <div id="divLogo" class="pull-left">
            <a href="<?=base_url('pages');?>" id="divSiteTitle">Your Name</a><br />
            <a href="<?=base_url('pages');?>" id="divTagLine">Your Tag Line Here</a>
        </div>

        <div id="divMenuRight" class="pull-right">
            <div class="navbar">
                <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                    NAVIGATION <span class="icon-chevron-down icon-white"></span>
                </button>
                <div class="nav-collapse collapse">
                    <ul class="nav nav-pills ddmenu">
                        <li class="active"><a href="<?=base_url();
                            ?>">Home</a></li>
                        <li><a href="<?=base_url('pages/Submitproposal');
                            ?>">Post Proposal</a></li>
<!--                        <li class="dropdown">-->
<!--                            <a href="--><?//=base_url('pages/page');?><!--"-->
<!--                               class="dropdown-toggle">Page <b class="caret"></b></a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li><a href="--><?//=base_url('pages/pagefull');?><!--">Full Page</a></li>-->
<!--                                <li><a href="--><?//=base_url('pages/2-column');?><!--">Two Column</a></li>-->
<!--                                <li><a href="--><?//=base_url('pages/3-column');?><!--">Three Column</a></li>-->
<!--                                <li><a href="--><?//=base_url('pages/documentation/index.html');?><!--">Documentation</a></li>-->
<!--                                <li class="dropdown">-->
<!--                                    <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>-->
<!--                                    <ul class="dropdown-menu sub-menu">-->
<!--                                        <li><a href="#">Dropdown Item</a></li>-->
<!--                                        <li><a href="#">Dropdown Item</a></li>-->
<!--                                        <li><a href="#">Dropdown Item</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
                        <li class="dropdown">
                            <a href="<?=base_url('pages/page');?>"
                               class="dropdown-toggle">Boys proposal <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('pages/submit-proposal');
                                    ?>">Cast Restricted</a></li>
                                <li><a href="<?=base_url
                                    ('pages/submitboyproposal');
                                    ?>">No Cast Restricted</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?=base_url('pages/page');?>"
                               class="dropdown-toggle">Girls proposal <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url('pages/submit-proposal');
                                    ?>">Cast Restricted</a></li>
                                <li><a href="<?=base_url('pages/submit-proposal');
                                    ?>">No Cast Restricted</a></li>
                            </ul>
                        </li>
                        <li><a href="<?=base_url('pages/submit-proposal');?>">2nd Marriage Proposals</a></li>
<!--                        <li><a href="--><?//=base_url('pages/services');?><!--">Services</a></li>-->
<!--                        <li><a href="--><?//=base_url('pages/portfolio');?><!--">Portfolio</a></li>-->
<!--                        <li><a href="--><?//=base_url('pages/contact');?><!--">Contact</a></li>-->
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
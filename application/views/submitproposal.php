<div class="contentArea">

    <div class="divPanel notop page-content">

        <div class="breadcrumbs">
            <a href="index">Home</a> &nbsp;/&nbsp; <span><?php if ($cat !=
                    'no'
                ) { ?>
                    <a href="submitproposal">Post Proposal</a>&nbsp;/&nbsp;
                    <?php }
                echo $breadc;
                ?></span>
        </div>


        <div class="row-fluid">
            <div class="span12">

                <?php if ($cat == 'no') { ?>
                    <div>
                    <div class="page-header"><h1>Proposal categories</h1></div>
                    <div><p>Please select you category to proceed</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Male</th>
                                <th>Female</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="col-md-6">
                                    <h4>Single</h4>
                                    <a href="SubmitmaleCR" class="btn
                                    btn-primary
                 btn-md">Cast restricted</a>&nbsp;&nbsp;&nbsp;
                                    <a href="SubmitmaleNCR" class="btn
                                    btn-primary
                 btn-md">Not Cast restricted</a>
                                    <h4>2nd Marriage proposal</h4>
                                    <a href="SubmitmaleSM" class="btn
                                    btn-primary
                 btn-md"> Male</a></td>
                                <td class="col-md-6">
                                    <h4>Single</h4>
                                    <a href="SubmitfemaleCR" class="btn
                                    btn-primary
                 btn-md">Cast restricted</a>&nbsp;&nbsp;&nbsp;
                                    <a href="SubmitmaleNCR" class="btn btn-primary
                 btn-md">Not Cast restricted</a>
                                    <h4>2nd Marriage proposal</h4>
                                    <a href="SubmitmaleSM" class="btn btn-primary
                 btn-md"> Female</a></td>
                            </tr>
                            </tbody>
                        </table></div>
                    </div>
                <?php }
                elseif ($cat == 'maleNCR') {?>
                    <div>
                    <div class="page-header">
                        <h1><?php echo $title ?><small><?php echo $breadc;?></small></h1>
                    </div>
                    <div>
                        <p><b>Terms And Conditions for posting</b></p>
                        <p>Submit your details with great care. your profile
                            approval depends on data.</p>
                    </div>
                    <br/>
                    <div id="myModal" class="modal hide fade" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        <h3 id="myModalLabel">Enter your data</h3>
                    </div>
                    <div class="modal-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open("pages/SubmitmaleNCR"); ?>
                        <label for="name">Name</label>
                        <input class="input-large" type="text" name="name"
                               placeholder="Your name" required>
                        <label for="name">Name</label>
                        <input class="input-large" type="text" name="name"
                               placeholder="Your name" required>

                        <label for="fathername">Father/Guardian Name</label>
                        <input class="input-large" type="text"  name="fathername"
                               placeholder="father/Guardian name">


                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal">Close
                            </button>
                            <input class="btn btn-primary" type="submit"
                                   name="submit" value="Submit" />
                            </form>
                        </div>
                        </div>
                        <div id="disagreeModal" class="modal hide fade"
                             tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <h3 id="myModalLabel">Required</h3>
                            </div>
                            <div class="modal-body">
                                <p>Please click "Accept" to proceed.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                        <div style=" text-align: right;">
                            <a data-toggle="modal" href="#disagreeModal" style="
                    text-align: left;"> Decline</a>&nbsp;&nbsp;&nbsp;
                            <a data-toggle="modal" href="#myModal" class="btn btn-primary
             btn-large">Accept</a>

                            <br/><br/>

                        </div>
                        </div>
                <?php }  elseif ($cat == 'maleCR') {?>
                    <div>
                        <div class="page-header">
                            <h1><?php echo $title ?><small><?php echo $breadc;?></small></h1>
                        </div>
                        <div>
                            <p><b>Terms And Conditions for posting</b></p>
                            <p>Submit your details with great care. your profile
                                approval depends on data.</p>
                        </div>
                        <br/>
                        <div id="myModal" class="modal hide fade" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                <h3 id="myModalLabel">Modal Heading</h3>
                            </div>
                            <div class="modal-body">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open($cat); ?>
                                <label for="name">Name</label>
                                <input type="input"  name="name" placeholder="Your name">

                                <br/>
                                <br/>
                                <label class="checkbox">
                                    <input type="checkbox"> Check If male
                                </label>

                                <br/>

                                <label class="radio">
                                    <input type="radio" name="optionsRadios"
                                           id="optionsRadios1" value="option1" checked>
                                    Option one is this and that&mdash;be sure to include
                                    why it's great
                                </label>
                                <label class="radio">
                                    <input type="radio" name="optionsRadios"
                                           id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it
                                    will deselect option one
                                </label>

                                <br/>

                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox1"
                                           value="option1"> Option
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox2"
                                           value="option2"> Option
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" id="inlineCheckbox3"
                                           value="option3"> Option
                                </label>

                                <br/><br/>

                                <input class="input-mini" type="text"
                                       placeholder=".input-mini">
                                <input class="input-small" type="text"
                                       placeholder=".input-small">
                                <input class="input-medium" type="text"
                                       placeholder=".input-medium">
                                <input class="input-large" type="text"
                                       placeholder=".input-large">
                                <input class="input-xlarge" type="text"
                                       placeholder=".input-xlarge">
                                <input class="input-xxlarge" type="text"
                                       placeholder=".input-xxlarge">
                                <input type="submit" name="submit" value="Submit" />

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">Close
                                </button>
                                <button class="btn btn-primary">Save changes
                                </button>
                            </div>
                        </div>
                        <div id="disagreeModal" class="modal hide fade"
                             tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <h3 id="myModalLabel">Required</h3>
                            </div>
                            <div class="modal-body">
                                <p>Please click "Accept" to proceed.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                        <div style=" text-align: right;">
                            <a data-toggle="modal" href="#disagreeModal" style="
                    text-align: left;"> Decline</a>&nbsp;&nbsp;&nbsp;
                            <a data-toggle="modal" href="#myModal" class="btn btn-primary
             btn-large">Accept</a>

                            <br/><br/>

                        </div>
                    </div>
                <?php } ?>

            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>
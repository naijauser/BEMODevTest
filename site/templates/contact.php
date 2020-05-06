<?php snippet('header') ?>

    </div>
        <?php if($image = $page->image('contact-us.png')): ?>
            <img src="<?= $image->url() ?>" alt="" srcset="" style="width: 100%;">
        <?php endif ?>
        <!-- <section>
            <img src="images/contact-us.png" alt="" srcset="" style="width: 100%;">
        </section> -->
  <div class="container">
      <div style="color: #726f6f;">
      <section>

        <div id="padding" class="article_body">
            <div class="message-text"><span style="font-size:17px; font-weight:bold; letter-spacing: 2px; ">BeMo Academic Consulting
                    Inc. </span><br /><span><span style="font-size:13px; font-weight:bold; letter-spacing: 2px;  "><u>Toll
                            Free</u></span><span style="font-size:13px; ">: </span><span
                        style="font-size:14px; " letter-spacing: 2px; >1-855-900-BeMo (2366)</span><span
                        style="font-size:13px; "><br /></span><span
                        style="font-size:13px; font-weight:bold; letter-spacing: 2px;"><u>Email</u></span><span
                        style="font-size:13px; ">: </span><span
                        style="font-size:14px; letter-spacing: 2px;">info@bemoacademicconsulting.com</span>
            </div><br />


            <div class="form">
                <?php if (isset($alert['error'])): ?>
                    <div style="color: red;"><?= $alert['error'] ?></div>
                <?php endif ?>

                <?php if (isset($alert['name'])): ?>
                    <div style="color: red;"><?= $alert['name'] ?></div>
                <?php endif ?>
                <?php if (isset($alert['email'])): ?>
                    <div style="color: red;"><?= $alert['email'] ?></div>
                <?php endif ?>
                <?php if (isset($alert['message'])): ?>
                    <div style="color: red;"><?= $alert['message'] ?></div>
                <?php endif ?>

                <form  method="post" action="<?= $page->url() ?>" enctype="multipart/form-data">
                    <div>
                        <label>Name:</label> *<br />
                        <input class="form-input-field" type="text" name="name" value="<?= $data['name'] ?? '' ?>"
                            size="40" /><br /><br />

                        <label>Email Address:</label> *<br />
                        <input class="form-input-field" type="text" name="email" value="<?= $data['email'] ?? '' ?>"
                            size="40" /><br /><br />

                        <label>How can we help you?</label> *<br />
                        <textarea class="form-input-field" name="message" rows="8" value="<?= $data['message'] ?? '' ?>"
                            cols="38"></textarea><br /><br />

                        <div style="display: none;">
                            <label>Spam Protection: Please don't fill this in:</label>
                            <textarea name="comment" rows="1" cols="1"></textarea>
                        </div>
                        <input type="hidden" name="form_token" value="19403672875eb1c60f156f3" />
                        <input class="form-input-button" type="reset" name="resetButton" value="Reset" />
                        <input class="form-input-button" type="submit" name="submit" value="Submit" />
                    </div>
                </form>
            </div>

            <br />
            <div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span
                    style="font-size:15px; ">: If you are having difficulties with our contact us form above,
                    send us an email to info@bemoacademicconsulting.com (copy & paste the email
                    address)</span><span style="font-size:13px; "><br /></span></div><br />

        </div>

        </section>
      </div>
  </div>    

<?php snippet('footer') ?>

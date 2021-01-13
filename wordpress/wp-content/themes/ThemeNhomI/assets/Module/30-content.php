<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-30">
    <div class="container details">
        <div class="row">
            <form method="post" id="sub">
                <div class="col-md-8 col-md-offset-2">
                    <!-- col-md-offset-2 lui vào trong khoang bang 2 col-md -->
                    <div class="box_style_details">
                        <div class="form_title_sub">
                            <h3>
                                <strong>1</strong>
                                Your details
                            </h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="form_sub">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form_group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form_group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form_group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form_group">
                                        <label>Confrim Email</label>
                                        <input type="text" class="form-control" name="confirmemail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form_group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" name="telephone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form_title_sub">
                            <h3>
                                <strong>2</strong>
                                Choose a plan
                            </h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="form_sub">
                            <div class="plan">
                                <select class="form-control" name="months_plan" id="plan">
                                    <option selected>Select</option>
                                    <option value="6_Months_plan"> 6 Months plan $39</option>
                                    <option value="3_Months_plan">3 Months plan $15</option>
                                    <option value="1_Months_plan"> 1 Months plan $10</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form_title_sub">
                            <h3>
                                <strong>3</strong>
                                Payment info
                            </h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="form_sub">
                            <div class="plan">
                                <select class="form-control" name="payment" id="payment">
                                    <option selected>Select</option>
                                    <option value="Creditcard"> Credit card</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Cash">Cash</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form_title_sub">
                            <h3>
                                <strong>4</strong>
                                Security question
                            </h3>
                            <p>
                                Mussum ipsum cacilds, vidis litro abertis.
                            </p>
                        </div>
                        <div class="form_sub security">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <label>Are you human? 3 + 1 =</label>
                                        <input type="text" class="form-control" id="verify">
                                    </div>
                                </div>
                            </div>
                            <div id="mess"></div>
                        </div>
                    </div>
                      <p class="submitplan">
                            <input name="subscribe" type="submit"  class="button" value="Subscribe plan" id="submit_plan">
                        </p>
                </div>
            </form>
        </div>
    </div>
</div>
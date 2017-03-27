<form name="sentMessage" id="contactForm" method="post" novalidate="">
    <div class="row">
        <div class="col-md-6">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <input type="text" class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
                    <p class="help-block"></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <input type="email" class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address.">
                    <p class="help-block"></p>
                </div>
            </div> 
        </div>
    </div>
    
    <div class="row control-group">
        <div class="form-group col-xs-12 controls">
            <textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block"></p>
        </div>
    </div>
           
    <div id="success"></div>
        <div class="row">
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-skin btn-lg">Send Message</button>
            </div>
        </div>
</form>
<div class="span9" itemscope itemtype="http://schema.org/ContactPage">
    <form method="post" name="contact_form" id="contact_form" action="/contact/sendmail" class="clearfix">
        <fieldset class="contact_info">
            <legend>Get in Touch</legend><br>
            <label for="name">Name: <input name="name" type="text" class="text" id="name" autofocus required/></label>
            <label for="email">Email: <input type="email" name="email" class="text" id="email" required/></label>
            <label for="subject">Subject: <input type="text" name="subject" class="text" id="subject"/></label>
            <label for="message">Comments: <textarea name="message" id="message" rows="2" cols="1" required></textarea></label>
            <input class="btn" name="reset" type="reset" /> <input class="btn" type="submit" id="send" value="Send"/>
    	</fieldset>
    </form>
</div>
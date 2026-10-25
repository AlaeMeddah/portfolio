<section id="contact" class="contact">
    <h1>contact</h1>
    <div>
        <h3>envoyez moi un message</h3>
        <form id="contact_form" action="action/send_mail.php" method="post">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required>
            <label for="fname">First name *</label>
            <input type="text" id="fname" name="fname" required>
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" max="99" min="3">
            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" maxlength="10" minlength="10">
            <label for="message">Your message *</label>
            <textarea name="message" id="message" placeholder="Enter your message here" required></textarea>
            <input type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" style="position: absolute; left: -9999px;">
            <p>fields marked with a (*) are mandatory</p>
            <p id="form_status" role="status" aria-live="polite" hidden></p>
            <button type="submit">Send</button>
        </form>
    </div>
</section>
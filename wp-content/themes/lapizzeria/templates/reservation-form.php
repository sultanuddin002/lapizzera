<div class="reservation-info">
    <form method="post" class="reservation-form">
        <h2>Make a Reservation</h2>
            <div class="field">
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="field">
                <input type="datetime-local" name="date" placeholder="Date" step="300" required>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="E-Mail" required>
            </div>
            <div class="field">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="field">
                <textarea name="message" placeholder="Message" requird ></textarea>
            </div>

            <div class="g-recaptcha" data-sitekey="6Le35VIUAAAAALzM-8HEELy_x7dIAum7VT6OvLF1"></div>

            <input type="submit" name="reservation" class="button" value="Send" >

            <input type="hidden" name="hidden" value="1" >
    </form>
</div>
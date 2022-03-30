<form action="" method = "get">
      <div class="row fname g-3 mt-5">
        <div class="col-sm ">
          <input
            aria-label="First name"
            class="form-control"
            id="firstname"
            name="user_name"
            placeholder="First name"
            type="text">
        </div>
        <div class="col-sm">
          <input aria-label="Email"
                 class="form-control"
                 id="email"
                 name="user_email"
                 placeholder="Email"
                 type="text">
        </div>
      </div>
        <br>
        <textarea class="form-control"
                  id="text" name="message"
                  placeholder="Message"
                  rows="7"></textarea>
        <br>
        <br>
        <div class="d-flex justify-content-end">
          <button class="btn btn-send text-white px-4 fw-bold"
          type="submit"
          name = "send_message">Send Message
          </button>
          <p id="wait"></p>
          <p class="text-center text-muted" id="result"></p>
        </div>
      </form>
<?php
if(isset)

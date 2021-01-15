<template>
  <div class="section contact">
    <h1 class="title">
      Contact us and find out mroe
    </h1>
    <div
      data-w-id="c36be232-2469-61b6-d533-7b48fe753c19"
      style="opacity: 1;"
      class="hero contact"
    >
      <div class="hero_text">
        <h1 class="title_hero contact">
          <strong class="bold-text-13 contact">Contact us</strong>
        </h1>
        <p class="paragraph_heroblue paragraph_white testemoniale contact">
          Contact us today to learn more about Digital Marketing App.<br />Let's
          discuss your challenges and how to improve your workflows and
          processes.<br />
        </p>
        <div class="w-form">
          <form
            action="contact.php"
            id="email-form-4"
            name="email-form-4"
            data-name="Email Form 4"
            method="POST"
          >
            <label for="name-3" class="contact-lable">Name</label
            ><input
              type="text"
              class="text-field-2 cont w-input"
              maxlength="256"
              name="fullName"
              data-name="Name 3"
              placeholder=""
              id="name-3"
              required=""
            /><label for="email-5" class="contact-lable">Email</label
            ><input
              type="email"
              class="text-field-2 cont w-input"
              maxlength="256"
              name="email"
              data-name="Email 5"
              placeholder=""
              id="email-5"
              required=""
            /><label for="Message-2" class="contact-lable">Message</label
            ><input
              type="text"
              class="text-field-2 contact message w-input"
              maxlength="256"
              name="userText"
              data-name="Message"
              placeholder=""
              id="Message-2"
            /><input
              type="submit"
              value="Send message"
              data-wait="Please wait..."
              class="btn btn_orange w-button"
            />
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="con_photo">
        <img
          src="../assets/socialformula.jpg"
          sizes="(max-width: 479px) 100vw, 62vw"
          alt=""
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Contact"
};
</script>

<style lang="scss" scoped>
.section.contact {
  display: flex;
  flex-direction: column;
  height: auto;
  min-width: auto;
  margin-top: 0px;
  margin-right: 0px;
  margin-left: auto;
  padding: 66px 0;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  background-color: #f7fafc;
}
.hero {
  width: 100%;
  max-width: 1300px;
  position: static;
  display: flex;
  margin-top: 100px;
  margin-bottom: 100px;
  -webkit-box-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  align-items: center;
  text-align: left;
}
.hero_text {
  display: flex;
  width: 40%;
  max-width: 1300px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: start;
  align-items: flex-start;
}
.con_photo {
  display: block;
}
img {
  max-width: 100%;
  vertical-align: middle;
  display: inline-block;
}
.title_hero.contact {
  margin-bottom: 20px;
  text-align: left;
  font-size: 44px;
}
.title {
  margin-bottom: 40px;
  font-size: 44px;
  line-height: 52px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
}
.title_hero {
  width: 100%;
  max-width: 900px;
  margin-top: 0px;
  padding-top: 20px;
  font-family: "Tt firs neue", sans-serif;
  color: #000;
  line-height: 44px;
  font-weight: 600;
  text-align: left;
  letter-spacing: 2px;
}
.bold-text-13.contact {
  margin-right: auto;
  margin-left: auto;
  text-align: center;
}
.paragraph_heroblue.paragraph_white.testemoniale.contact {
  display: flex;
  max-width: 600px;
  margin-bottom: 20px;
  font-family: Roboto, sans-serif;
  font-weight: 400;
  text-align: left;
  color: #000;
  font-size: 16px;
  line-height: 24px;
}
.w-form {
  margin: 0 0 15px;
}
form {
  display: block;
  margin-top: 0em;
}
.contact-lable {
  display: block;
  margin-bottom: 5px;
  color: #9b9b9b;
  font-size: 12px;
  font-weight: 400;
}
.text-field-2.cont {
  height: 34px;
}
.text-field-2 {
  min-width: 280px;
  border-radius: 4px;
  background-color: #f7fafc;
  transition: all 200ms ease;
}
.w-form {
  width: 100%;
}
.w-input,
.w-select {
  display: block;
  width: 100%;
  height: 38px;
  padding: 8px 12px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333333;
  border: 1px solid #cccccc;
}
.contact-lable {
  font-family: Roboto, sans-serif;
  color: #9b9b9b;
  font-size: 12px;
  font-weight: 400;
}
label {
  display: block;
  margin-bottom: 5px;
}
.text-field-2.contact.message {
  min-height: 120px;
}
.text-field-2.contact {
  min-width: 360px;
}
.btn.btn_orange {
  margin-top: 20px;
  padding: 10px 40px;
  border-style: solid;
  border-color: transparent;
  background-color: orange;
  color: #fff;
}
.w-form-done {
  display: none;
  padding: 20px;
  text-align: center;
  background-color: #dddddd;
}
.w-form-fail {
  display: none;
  margin-top: 10px;
  padding: 10px;
  background-color: #ffdede;
}
@media screen and (max-width: 479px) {
  .hero_text {
    width: 90%;
    margin-top: 10px;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
  }
  .text-field-2.contact {
    min-width: 260px;
  }
  .btn.btn_orange {
    display: flex;
    margin-right: auto;
    margin-left: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    -webkit-box-pack: center;
    justify-content: center;
    text-align: center;
  }
  .title {
    margin-top: 40px;
    margin-bottom: 0px;
    font-size: 28px;
    line-height: 36px;
    text-align: left;
  }
  .hero.contact {
    margin-top: 80px;
  }
  .hero {
    flex-direction: column-reverse;
  }
  .con_photo {
    width: 100%;
  }
  .section .contact {
    max-height: 1000px;
    padding-bottom: 20px;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    background-color: #f7fafc;
  }
}
@media screen and (max-width: 991px) {
  .section.contact {
    height: auto;
    margin-top: 0px;
    padding-top: 0px;
    -webkit-box-pack: start;
    justify-content: flex-start;
  }
}
</style>

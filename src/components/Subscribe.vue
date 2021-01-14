<template>
  <div id="subscribe" class="section section_blue">
    <div class="container">
      <div class="text_holder">
        <div>
          <h2 class="title title_white">
            <strong class="bold-text-8">Subscribe</strong>
          </h2>

          <p class="paragraph paragraph_white">
            Experience data visibility and oversight with every task, edit and
            input in one easy-to-track workflow.&nbsp;<br />
          </p>
          <form action="insert.php" method="post">
            <input
              type="text"
              placeholder="Your name"
              outlined
              name="name"
              bg-color="white"
              filled
              class="q-my-sm"
            />
            <input
              type="text"
              placeholder="Email address"
              outlined
              name="email"
              bg-color="white"
              filled
              required
              class="q-my-sm"
            />
            <input
              action="insert.php"
              method="post"
              label="Subscribe"
              @click="modalAlert"
              class="btn btn_subscribe"
              type="submit"
              value="Subscribe"
            />
          </form>
        </div>
        <div class="subscribe">
          <p>
            <small
              >By entering your email address, you agree to receive emails from
              The Social Formula. Collected information will not be shared with
              any third party and complies with our stated
              <a
                class="q-item-link"
                href="https://www.thesocialformula.net/privacy-policy/"
                >Privacy Policy</a
              >.</small
            >
          </p>
        </div>
      </div>
    </div>
    <q-dialog v-model="alert">
      <q-card>
        <q-card-section>
          <div class="text-h6">Subscribed</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
          Thank you for subscribing. You will be the first to know about new
          releases and special promotions. Stay tuned!
        </q-card-section>

        <q-card-actions align="right">
          <q-btn flat label="OK" color="primary" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
export default {
  name: "Subscribe",
  data() {
    return {
      alert: false,
      textName: "",
      textEmail: ""
    };
  },
  methods: {
    modalAlert() {
      let nameLength = this.textName;
      let emailLength = this.textEmail;
      if (nameLength.length > 2 || emailName.length > 2) {
        this.alert = true;
      }
    }
  }
};
</script>

<style lang="scss" scoped>
.subscribe {
  display: flex;
  max-width: 500px;
  flex-direction: column;
  align-items: flex-end;
  color: #fff;
}
.section {
  width: 100%;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
}
.section.section_blue {
  background-image: url("../assets/cool.png");
  background-position: 50% 50%;
  background-size: cover;
  background-repeat: no-repeat;
  margin-bottom: 5rem;
  margin-top: 5rem;
  padding-bottom: 5rem;
  padding-top: 5rem;
}
.text_holder {
  padding-left: 1rem;
  padding-right: 1rem;
}
.container {
  width: 100%;
  max-width: 1300px;
  margin-right: auto;
  margin-left: auto;
}
.text_holder {
  display: flex;
  max-width: 1300px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-align: start;
  align-items: flex-end;
  color: #fff;
}
.title .title_white {
  max-width: 1200px;
  margin-top: 40px;
  color: #fff;
  font-weight: 600;
  text-align: left;
}
.bold-text-15 {
  font-weight: 500;
}
.bold-text-8 {
  font-size: 36px;
  line-height: 22px;
  font-weight: 500;
}
.paragraph {
  margin-bottom: 16px;
  font-weight: 300;
  text-decoration: none;
}
.paragraph.paragraph_white {
  max-width: 500px;
  color: #fff;
  font-size: 24px;
  line-height: 34px;
}
.btn.btn_orange {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 10px;
  border-style: solid;
  border-color: transparent;
  background-color: #fecdcc;
  color: #fff;
  border-radius: 4px;
  font-weight: 500;
  border-width: 1px;
  transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  border: 0;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
  text-align: center;
  width: 35%;
  margin-left: 5px;
}
.btn_subscribe {
  display: inline-block;
  margin-top: 20px;
  border-style: solid;
  border-color: transparent;
  background-color: #9ec9eb;
  color: #fff;
  border-radius: 4px;
  font-weight: 500;
  border-width: 1px;
  transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  border: 0;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
  text-align: center;
  width: 100%;
}
.btn_subscribe:hover {
  background-color: #fecdcc;
}
input[type="text"],
input[type="submit"] {
  width: 60%;
  padding: 8px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.q-item-link {
  color: #fecdcc;
}
@media screen and (max-width: 480px) {
  input[name="name"] {
    width: 60%;
  }
  input[name="email"] {
    width: 100%;
  }
}
</style>

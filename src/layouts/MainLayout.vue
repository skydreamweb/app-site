<template>
  <q-layout view="hHh lpR fff">
    <q-header elevated class="bg-custom text-white" height-hint="98">
      <q-toolbar class="custom-margin-toolbar">
        <q-toolbar-title>
          <q-item to="/">
            <q-img
              class="custom-margin q-ml-lg gt-md"
              src="../assets/logo.png"
              style="height: 60px; max-width: 170px"/>
            <q-img
              class="logo-sm q-my-sm lt-md"
              src="../assets/logo-sm.png"
              style="height: 60px; max-width: 170px"
              contain
          /></q-item>
        </q-toolbar-title>

        <q-tabs align="center">
          <q-route-tab to="/" dense label="Home" class="q-mx-sm" />
          <q-route-tab
            to="/product"
            dense
            label="The Product"
            class="q-mx-sm"
          />
          <q-route-tab to="/contact" dense label="Contact" class="q-mx-sm" />
        </q-tabs>
      </q-toolbar>
    </q-header>

    <q-page-container>
      <router-view />
    </q-page-container>

    <q-footer elevated class="bg-custom text-white">
      <div class="flex justify-center q-mt-lg" style="width: 100%">
        <q-list separator class="footer-1">
          <q-item v-ripple>
            <q-item-section class="text-xl">Company</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>The Product</q-item-label>
            </q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>Jobs</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>For the records</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>

        <q-list separator class="footer-2">
          <q-item v-ripple>
            <q-item-section>Communities</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>For Agencies</q-item-label>
            </q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>For Influencers</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>For Artists</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>For Freelancers</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>

        <q-list separator class="footer-3">
          <q-item v-ripple>
            <q-item-section>Useful Link</q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>Help</q-item-label>
            </q-item-section>
          </q-item>

          <q-item clickable v-ripple>
            <q-item-section>
              <q-item-label>Web Player</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
        <div class="bottom-line">
          <q-img
            class="q-my-lg q-mx-lg top-logo desktop-only"
            src="../assets/logo.png"
          />
          <div
            class="social-icons text-white q-gutter-md"
            style="font-size: 2em"
          >
            <q-icon
              tag="a"
              target="_blank"
              href="https://www.facebook.com/TheSocialFormula101"
              class="fab fa-facebook-f"
              style="font-size: 2rem;"
            />
            <q-icon
              tag="a"
              target="_blank"
              href="https://www.instagram.com/social_formula/"
              class="fab fa-instagram"
              style="font-size: 2rem;"
            />
            <q-icon
              tag="a"
              target="_blank"
              href="https://www.linkedin.com/company/the-social-formula/"
              class="fab fa-linkedin-in"
              style="font-size: 2rem;"
            />
            <q-icon
              tag="a"
              target="_blank"
              href="https://twitter.com/social_formula1"
              class="fab fa-twitter"
              style="font-size: 2rem;"
            />
            <q-icon
              tag="a"
              target="_blank"
              href="https://www.pinterest.com/thesocialformula/_created/"
              class="fab fa-pinterest"
              style="font-size: 2rem;"
            />
          </div>
        </div>
      </div>
      <div class="copy">
        <p>
          Copyright © 2020 The Social Formula - Powered by
          <a href="https://thesocialformula.net"> The Social Formula</a>
        </p>
      </div>
    </q-footer>
  </q-layout>
</template>

<script>
export default {
  data() {
    return {};
  }
};
</script>

<script>
import EssentialLink from "components/EssentialLink.vue";

const linksData = [
  {
    title: "Docs",
    caption: "quasar.dev",
    icon: "school",
    link: "https://quasar.dev"
  },
  {
    title: "Github",
    caption: "github.com/quasarframework",
    icon: "code",
    link: "https://github.com/quasarframework"
  }
];

export default {
  name: "MainLayout",
  components: { EssentialLink },
  data() {
    return {
      leftDrawerOpen: false,
      essentialLinks: linksData
    };
  }
};
</script>

<style lang="scss">
.copy {
  text-align: center;
  margin-top: 2rem;
}
.copy a {
  color: #000;
  text-decoration: none;
}
.footer-1,
.footer-2,
.footer-3 {
  margin-left: 3rem;
  margin-right: 3rem;
}
.custom-margin {
  margin-top: 1rem;
  margin-bottom: 1rem;
}
.custom-margin-toolbar {
  margin-left: 2rem;
  margin-right: 2rem;
}
@media only screen and (max-width: 600px) {
  .footer-1,
  .footer-2,
  .footer-3 {
    margin-left: 0;
    margin-right: 0;
  }
  .bottom-line {
    margin-top: 2rem;
  }
  .custom-margin-toolbar {
    margin-left: 0;
    margin-right: 2rem;
  }
}
.text-lg {
  font-size: 18px;
}
.q-toolbar__title {
  flex: 0 50%;
}
body {
  font-family: "Cabin", sans-serif;
}
.bg-custom {
  background-color: #9ec9eb;
}
.top-logo {
  height: 60px;
  max-width: 170px;
}
.social-icons a {
  color: white;
  text-decoration: none;
}
.social-icons a:hover {
  color: #fecdcc;
  text-decoration: none;
  cursor: pointer;
}

@media screen and (max-width: 600px) {
  .social-icons {
    text-align: center;
    margin: 1rem auto;
  }
}
</style>

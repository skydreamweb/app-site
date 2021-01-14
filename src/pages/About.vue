<template>
  <div class="section section_second">
    <h1 class="title">
      Manage all your digital platforms in one place
    </h1>
    <q-btn
      type="a"
      class="qbtn"
      color="secondary"
      icon="circle"
      size="20px"
      href="/about#pricing"
      label="Pricing"
    />
    <div class="card_row">
      <q-item class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/clipboard.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text-2">Everything in one place</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div></q-item
      ><q-item class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/presentation.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text">Monitor your stats in real time</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div></q-item
      ><q-item href="/#" class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/digital-marketing.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text-3">Make decisions instantly</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div></q-item
      ><q-item href="/#" class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/ads.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text-4">Optimize your ads budget</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div></q-item
      ><q-item class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/analytics.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text-5">Eye-catching chart design</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div></q-item
      ><q-item href="/#" class="card w-inline-block"
        ><div class="card_top">
          <img src="../assets/notification.svg" alt="" class="card_icon" />
          <h3 class="card_title">
            <strong class="bold-text-6">Smart Notification Intelligence</strong>
          </h3>
        </div>
        <div class="card_linkholder">
          <div class="card_plusholder">
            <img
              src="https://uploads-ssl.webflow.com/5e6a000cb4923cc6a9c8a0a9/5e6a02fb33b11301925e81b7_%2B.svg"
              alt=""
              class="card_plus"
            />
          </div>
          <div class="card_separator"></div></div
      ></q-item>
    </div>

    <Subscribe></Subscribe>
    <div id="pricing">
      <Pricing></Pricing>
    </div>
  </div>
</template>

<script>
import Pricing from "../components/Pricing";
import Subscribe from "../components/Subscribe";
export default {
  name: "about",
  components: {
    Pricing,
    Subscribe
  }
};
</script>

<style lang="scss" scoped>
.section {
  display: flex;
  align-items: center;
  max-width: 100%;
  padding: 96px 0;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
}
.title {
  width: 100%;
  max-width: 900px;
  margin-top: 0px;
  margin-bottom: 40px;
  font-family: "Tt firs neue", sans-serif;
  font-size: 44px;
  line-height: 52px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
}
.card_row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  max-width: 1160px;
  margin-top: 48px;
  -webkit-box-pack: justify;
  flex-wrap: wrap;
  align-content: stretch;
  transform-style: preserve-3d;
}
.card {
  display: flex;
  width: 44%;
  max-width: 386px;
  min-height: 366px;
  margin-bottom: 60px;
  padding: 24px 32px 32px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  border: 1px solid transparent;
  border-radius: 1px;
  background-color: #fff;
  transition: all 250ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  color: #000;
  text-decoration: none;
}
.card_linkholder {
  display: flex;
  margin-top: 20px;
  -webkit-box-align: center;
  align-items: center;
}
.card_plusholder {
  display: flex;
  height: 100%;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
}
.card_title {
  margin-top: 0px;
  margin-bottom: 24px;
  font-family: "Tt firs neue", sans-serif;
  font-size: 28px;
  line-height: 34px;
  font-weight: 500;
  letter-spacing: 0.5px;
}
.card_icon {
  margin-bottom: 32px;
  text-align: center;
}
img {
  max-width: 150px;
  vertical-align: middle;
  display: inline-block;
}
.paragraph {
  margin-bottom: 16px;
  font-family: Roboto, sans-serif;
  color: #000;
  font-size: 15px;
  line-height: 24px;
  font-weight: 300;
  text-decoration: none;
}
.card_plus {
  width: 22px;
}
.card_link {
  margin-left: 16px;
  -webkit-box-flex: 0;
  flex: 0 0 auto;
  color: #4a90e2;
  font-size: 14px;
  line-height: 18px;
}
.card_separator {
  width: 100%;
  height: 1px;
  max-width: 160px;
  margin-top: auto;
  margin-left: 20px;
  padding-left: 0px;
  background-color: #4a90e2;
}
.btn {
  margin-top: 40px;
  padding: 10px 40px;
  border-style: solid;
  border-width: 1px;
  border-color: #d6e0e9;
  border-radius: 4px;
  background-color: #fff;
  -webkit-transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  font-family: "Tt firs neue", sans-serif;
  color: orange;
  font-weight: 500;
}
.card:hover {
  border-style: dotted;
  border-width: 1px;
  border-color: #4a90e2;
  border-radius: 4px;
  -webkit-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
}
@media screen and (max-width: 479px) {
  .section {
    padding-top: 50px;
  }
  .card {
    width: 50%;
    padding-right: 5px;
    padding-left: 5px;
    margin-bottom: 20px;
    padding: 10px 5px 10px;
  }
  .card_row {
    display: flex;
  }
  .section h1 {
    font-size: 2.75rem;
  }
  .card_top {
    text-align: center;
  }
  img.card_icon {
    width: 100%;
  }
  .card_title {
    font-size: 20px;
  }
  .pricing h2 {
    font-size: 2.75rem;
  }
  .title {
    letter-spacing: 0;
  }
}
</style>

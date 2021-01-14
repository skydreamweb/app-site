<template>
  <div class="middle-section whats-new" id="why-tsf">
    <div class="container">
      <h2 class="text-center">Why The Social Formula App</h2>
      <div class="q-pa-md row items-start q-gutter-md">
        <div class="row">
          <div class="col-xs-12 col-md-3 four-up">
            <div class="circle-img first">
              <q-img class="qimg" src="../assets/bar-chart.svg"></q-img>
            </div>
            <h3>Your favorite stats.</h3>
            <p>
              Learn about your brand’s statistics in an easy & user-friendly
              way.
            </p>
          </div>

          <div class="col-xs-12 col-md-3 four-up">
            <div class="circle-img second">
              <q-img class="qimg" src="../assets/startup.svg"></q-img>
            </div>
            <h3>Boost your business.</h3>
            <p>We’ll help you optimize your budget.</p>
          </div>

          <div class="col-xs-12 col-md-3 four-up">
            <div class="circle-img third">
              <q-img class="qimg" src="../assets/monitor.svg"></q-img>
            </div>
            <h3>Personalize your dashboard.</h3>
            <p>
              Completely adjustable application design to fit your needs
              specifically.
            </p>
          </div>

          <div class="col-xs-12 col-md-3 four-up">
            <div class="circle-img fourth">
              <q-img class="qimg" src="../assets/chat.svg"></q-img>
            </div>
            <h3>Our excellent support.</h3>
            <p>
              We will provide you with a reliable customer support 24/7 no
              matter what.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MiddleSection"
};
</script>

<style lang="scss" scoped>
.four-up {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.four-up p {
  font-size: 16px;
}
.whats-new {
  padding-top: 60px;
  padding-bottom: 60px;
  text-align: center;
  background-color: #fff;
}
.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}
.middle-section {
  height: 700px;
}
.col-md-3 {
  width: 25%;
}
.circle-img {
  width: 172px;
  height: 172px;
  border-radius: 172px;
}
.circle-img {
  background: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(-20%, #ffbf6d),
    color-stop(130%, #4001f5)
  );
  background: linear-gradient(#9ec9eb -20%, #d2edf4 130%);
  margin: 0 auto;
  position: relative;
}
h3 {
  margin-top: 36px;
  font-size: 24px;
  letter-spacing: -0.01em;
  font-weight: 900;
  line-height: 1.4;
  margin-bottom: 12px;
}
p {
  margin: 0;
  color: #616467;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.whats-new .circle-img.fourth .svg-icon,
.circle-img.third .svg-icon,
.circle-img.second .svg-icon,
.circle-img.first .svg-icon,
.circle-img .qimg {
  width: 64px;
  height: 64px;
  left: 52px;
  top: 52px;
  position: absolute;
}
.row {
  margin: 0 auto;
}
@media screen and (max-width: 600px) {
  #why-tsf {
    margin-top: 25vh;
  }
  .middle-section {
    height: auto;
  }
  .row {
    display: block;
  }
  .col-md-3 {
    width: 100%;
  }
  .container h2,
  .container h3 {
    font-size: 2.75rem;
  }
  .text-h3 {
    font-size: 2.75rem;
  }
  .four-up {
    margin-top: 2rem;
  }
  .circle-img h3 {
    margin-top: 10px;
  }
}
</style>

<template>
  <div class="">
    <vue-particles
      class="particles"
      color="#ffffff"
      :particleOpacity="0.7"
      :particlesNumber="80"
      shapeType="circle"
      :particleSize="4"
      linesColor="#fff"
      :linesWidth="1"
      :lineLinked="true"
      :lineOpacity="0.4"
      :linesDistance="150"
      :moveSpeed="3"
      :hoverEffect="true"
      hoverMode="grab"
      :clickEffect="true"
      clickMode="remove"
    >
      <div class="second-middle-section">
        <div class="text-hero">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h2 class="h1">Ready to play?</h2>
                <p class="h1 q-pt-sm">
                  No credit card required for 14 days trial.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </vue-particles>

    <div>
      <div class="flex">
        <div class="row fit">
          <q-img
            id="hand"
            src="../assets/iphone.png"
            spinner-color="white"
            class="only-large-screen col-4"
            style="height: 600px; max-width: 100%; z-index: 999;"
          />
          <div class="container col-7 right-div" style="z-index: 999;">
            <div class="row">
              <div class="top-headline">
                <h1>
                  The Social Formula<br />
                  to make your life easier
                </h1>
                <a
                  class="btn btn-white"
                  href="#subscribe"
                  id="free-download-app"
                  >GET FREE APP TRIAL</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "TopSection"
};
</script>

<style lang="scss" scoped>
.particles {
  width: 100%;
  height: 600px;
  position: absolute;
  z-index: 99;
  background: rgb(99, 50, 113);
  background: linear-gradient(
    180deg,
    rgba(254, 204, 203, 1) 0%,
    rgba(247, 222, 215, 1) 35%,
    rgba(254, 204, 203, 1) 100%
  );
}
#top-bck {
  position: absolute;
}
#hand {
  width: 356px;
  height: 573px;
  bottom: -68px;
  left: 11%;
}
.container {
  // width: 700px;
  position: relative;
  padding-top: 110px;
  padding-bottom: 60px;
}

.top-headline {
  @media only screen and (min-width: 992px) {
    margin-left: 40%;
  }
  @media only screen and (min-width: 600px) {
    margin-left: 30%;
  }
}
.only-large-screen {
  @media only screen and (max-width: 600px) {
    display: none;
  }
}

.top-headline h1 {
  color: #fff;
  // width: 50vw;
  font-size: 64px;
  font-weight: 900;
  letter-spacing: -0.04em;
  line-height: 1.15;
  margin-bottom: 32px;
  letter-spacing: 3px;
}
.btn-scroll:not(.pull-left):not(.pull-right) {
  -webkit-transform: translate3d(-50%, 0, 0);
  transform: translate3d(-50%, 0, 0);
  display: inline-block;
  left: 0;
  margin-left: 50%;
  position: absolute;
}
.btn-white {
  color: #000;
  background-color: #fff;
  font-size: 14px;
  line-height: 1;
  border-radius: 500px;
  padding: 16px 48px 18px;
  text-decoration: none;
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 700;
  text-align: center;
  vertical-align: middle;
}
.qbtn {
  left: 50%;
  margin-top: -25px;
  font-size: 20px;
}
@media only screen and (max-width: 970px) {
  .right-div {
    width: 100%;
  }
}
@media only screen and (max-width: 600px) {
  .top-headline h1 {
    font-size: 44px;
  }
  .top-headline {
    padding-left: 2rem;
  }
  #particles-js {
    height: 93vh;
  }
  .qbtn {
    left: 40%;
    margin-top: 20vh;
  }
}
</style>

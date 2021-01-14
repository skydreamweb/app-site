<template>
  <div class="second-middle-section">
    <div class="text-hero">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 q-mx-auto text-center">
            <h2 class="h1">Ready?</h2>
            <p class="h1 q-pt-sm">Let’s play.</p>
            <a
              class="btn btn-white q-mt-xl"
              href="#subscribe"
              id="free-download-app"
            >
              START YOUR FREE TRAIL
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SecondMiddleSection"
};
</script>

<style lang="scss" scoped>
.text-hero .container {
  padding-top: 190px;
  padding-bottom: 190px;
}
.btn-white {
  text-decoration: none;
  font-size: 14px;
  line-height: 1;
  border-radius: 500px;
  padding: 16px 48px 18px;
  display: inline-block;
  font-weight: 700;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  user-select: none;
  background-color: #fff;
}
.col-xs-12 {
  width: 100%;
}
.second-middle-section {
  height: 600px;
  background: rgb(99, 50, 113);
  background: linear-gradient(
    180deg,
    rgba(254, 204, 203, 1) 0%,
    rgb(255, 216, 215) 35%,
    rgba(247, 222, 215, 1) 100%
  );
}
.text-hero .h1 {
  text-align: center;
  color: #fff;
  margin-top: 0;
  margin-bottom: 0;
  font-weight: 900;
  letter-spacing: -0.02em;
  line-height: 1.2;
  letter-spacing: 1.5px;
}
@media (min-width: 992px) {
  h1,
  .h1 {
    font-size: 48px;
  }
}
@media screen and (max-width: 600px) {
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

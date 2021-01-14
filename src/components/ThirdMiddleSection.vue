<template>
  <div class="second-middle-section">
    <div class="text-hero">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="h1">It's free to try.</h2>
            <p class="h1 q-pt-sm">No credit card required for 14 days trial.</p>
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

.col-xs-12 {
  width: 100%;
}
.second-middle-section {
  height: 600px;
  background-image: url("../assets/cool.png");
  background-repeat: no-repeat;
  background-size: cover;
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

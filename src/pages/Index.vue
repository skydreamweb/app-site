<template>
  <q-page class="">
    <div class="floating-btn">
      <q-btn
        type="a"
        class="qbtn"
        round
        color="secondary"
        href="#why-tsf"
        icon="expand_more"
        size="20px"
        style="z-index: 99;"
      />
    </div>
    <top-section></top-section>
    <middle-section></middle-section>
    <Subscribe></Subscribe>
    <second-middle-section></second-middle-section>
  </q-page>
</template>

<script>
import TopSection from "../components/TopSection";
import MiddleSection from "../components/MiddleSection";
import SecondMiddleSection from "../components/SecondMiddleSection";
import ThirdMiddleSection from "../components/ThirdMiddleSection";
import Subscribe from "../components/Subscribe";

export default {
  name: "PageIndex",
  components: {
    TopSection,
    MiddleSection,
    SecondMiddleSection,
    Subscribe
  }
};
</script>

<style lang="scss">
q-page {
  overflow: hidden;
}
.floating-btn {
  position: absolute;
  z-index: 999;
  margin-top: 60vh;
  left: 50%;
}
@media only screen and (max-width: 600px) {
  .floating-btn {
    position: absolute;
    z-index: 9999;
    margin-top: 80vh;
    left: 43%;
  }
}
</style>

<template>
  <div
    class="container block fit row wrap justify-center text-center items-center content-center"
  >
    <div class="text-h5">
      <h3>
        Thank you for writing to us! <br />
        We will make sure to write back very soon.
      </h3>
    </div>
    <q-btn
      to="/"
      class="qbtn"
      color="secondary"
      icon="home"
      size="20px"
      label="Home"
      exact
    />
  </div>
</template>

<script>
export default {
  name: "Mail"
};
</script>

<style scoped>
.container {
  max-width: 100%;
  background: linear-gradient(
    180deg,
    rgba(254, 204, 203, 1) 0%,
    rgb(255, 216, 215) 35%,
    rgba(247, 222, 215, 1) 100%
  );
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-top: 5rem;
}
.text-h5 {
  max-width: 1160px;
  text-align: center;
  margin: 0 auto;
}
.text-h5 h3 {
  font-size: 1.5rem;
}
.qbtn {
  text-align: center;
}
</style>

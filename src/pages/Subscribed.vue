<template>
  <div
    class="container block fit row wrap justify-center text-center items-center content-center"
  >
    <div class="text-h5">
      <h3>
        Thank you for signing up. You will be among the first to test our beta
        version of the software and app. <br />
        We will keep you tuned
      </h3>
    </div>
    <q-btn
      to="/contact"
      class="qbtn"
      color="secondary"
      icon="email"
      size="20px"
      label="Contact Us"
    />
  </div>
</template>

<script>
export default {};
</script>

<style>
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

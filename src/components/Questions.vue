<template>
  <div class="container">
    <h2 class="text-center">Got questions?</h2>
    <div class="q-pa-md q-mx-auto" style="max-width: 1170px">
      <q-list bordered class="rounded-borders">
        <q-expansion-item
          expand-separator
          icon="radio_button_checked"
          label="How to register?"
          header-class="text-orange-10"
          class="font-h2 q-py-lg"
        >
          <q-card>
            <q-card-section class="font-h3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
              eius reprehenderit eos corrupti commodi magni quaerat ex numquam,
              dolorum officiis modi facere maiores architecto suscipit iste
              eveniet doloribus ullam aliquid.
            </q-card-section>
          </q-card>
        </q-expansion-item>

        <q-expansion-item
          expand-separator
          icon="radio_button_checked"
          label="What is the best package for me?"
          header-class="text-orange-10"
          class="font-h2 q-py-lg"
        >
          <q-card>
            <q-card-section class="font-h3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
              eius reprehenderit eos corrupti commodi magni quaerat ex numquam,
              dolorum officiis modi facere maiores architecto suscipit iste
              eveniet doloribus ullam aliquid.
            </q-card-section>
          </q-card>
        </q-expansion-item>

        <q-expansion-item
          expand-separator
          icon="radio_button_checked"
          label="Do I need a credit card for trial?"
          header-class="text-orange-10"
          class="font-h2 q-py-lg"
        >
          <q-card>
            <q-card-section class="font-h3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
              eius reprehenderit eos corrupti commodi magni quaerat ex numquam,
              dolorum officiis modi facere maiores architecto suscipit iste
              eveniet doloribus ullam aliquid.
            </q-card-section>
          </q-card>
        </q-expansion-item>

        <q-expansion-item
          expand-separator
          icon="radio_button_checked"
          label="How many brands I can add?"
          header-class="text-orange-10"
          class="font-h2 q-py-lg"
        >
          <q-card>
            <q-card-section class="font-h3">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
              eius reprehenderit eos corrupti commodi magni quaerat ex numquam,
              dolorum officiis modi facere maiores architecto suscipit iste
              eveniet doloribus ullam aliquid.
            </q-card-section>
          </q-card>
        </q-expansion-item>
      </q-list>
    </div>
  </div>
</template>

<script>
export default {
  name: "Questions"
};
</script>

<style lang="scss" scoped>
.container {
  margin-bottom: 5rem;
}
.font-h2 {
  font-size: 28px;
}
.font-h3 {
  font-size: 20px;
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

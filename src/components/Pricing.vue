<template>
  <div id="pricing" class="section pricing">
    <h2 class="title title_white title_white_center">
      Choose the plan that is right for you and your brand.
    </h2>
    <div class="card_row pricing">
      <div class="pricing_block free">
        <div class="pricing_text up">Free trial</div>
        <div class="pricing_text pricing_text_small">
          14 days<br />Advanced package
        </div>
        <div class="card_separator_pricing two"></div>
        <div class="pricing_text pricing_text_small">
          <em class="italic-text-3">-<br />-</em><br />
          <em class="italic-text-3">-<br />-</em><br />
          <em class="italic-text-3">-<br />-</em><br />
        </div>
        <div class="pricing_text price">
          <strong class="bold-text-18">0 €</strong>
          <div class="monthly">*One time</div>
        </div>
        <a
          v-on:click.prevent
          href="#"
          data-w-id="ed0d8718-9b95-97da-2963-0df87ad7dba8"
          class="btn btn_orange pricinr free w-button"
          ><strong class="bold-text-15">Coming soon</strong></a
        >
        <div class="no-card">
          <em class="italic-text-5">No credit card required</em>
        </div>
      </div>
      <div class="pricing_block">
        <div class="pricing_text up">Basic</div>
        <div class="pricing_text pricing_text_small">
          Small business<br />3 brands
        </div>
        <div class="card_separator_pricing two">Google Analytics</div>
        <div class="card_separator_pricing two">Social Media</div>
        <div class="card_separator_pricing two">A.I.</div>
        <div class="pricing_text pricing_text_small">
          <em class="italic-text-3">-<br />-</em><br />
        </div>
        <div class="pricing_text price">
          <strong class="bold-text-18">34 €</strong>
          <div class="monthly">*Monthly</div>
        </div>
        <a
          v-on:click.prevent
          href="#"
          data-w-id="e0af717b-3ec5-5799-2672-e28fd50ebb02"
          class="btn btn_orange pricinr w-button"
          ><strong class="bold-text-15">Coming soon</strong></a
        >
        <div class="no-card">
          <em class="italic-text-5">No credit card required</em>
        </div>
      </div>
      <div class="pricing_block">
        <div class="pricing_text up">Advanced</div>
        <div class="pricing_text pricing_text_small">
          Medium business<br />5 brands
        </div>
        <div class="card_separator_pricing two">E-commerce</div>
        <div class="card_separator_pricing two">Google Analytics</div>
        <div class="card_separator_pricing two">Social Media</div>
        <div class="card_separator_pricing two">Newsletters</div>
        <div class="card_separator_pricing two">(Mailchimp, Klaviyo)</div>
        <div class="pricing_text price">
          <strong class="bold-text-17">95 €</strong>
          <div class="monthly">*Monthly</div>
        </div>
        <a
          v-on:click.prevent
          data-w-id="f5a23841-0e2a-3268-86c5-ee2fa5b0e365"
          href="#"
          class="btn btn_orange pricinr w-button"
          ><strong class="bold-text-15">Coming soon</strong></a
        >
        <div class="no-card">
          <em class="italic-text-5">No credit card required</em>
        </div>
      </div>
      <div class="pricing_block">
        <div class="pricing_text up">Professional</div>
        <div class="pricing_text pricing_text_small">
          8 brands<br />includes Advanced package
        </div>
        <div class="card_separator_pricing two">E-commerce</div>
        <div class="card_separator_pricing two">Google Analytics</div>
        <div class="card_separator_pricing two">Social Media</div>
        <div class="card_separator_pricing two">Newsletters</div>
        <div class="card_separator_pricing two">(Mailchimp, Klaviyo)</div>
        <div class="pricing_text price">
          <strong class="bold-text-17">145 €</strong>
          <div class="monthly">*Monthly</div>
        </div>
        <a
          v-on:click.prevent
          data-w-id="f5a23841-0e2a-3268-86c5-ee2fa5b0e365"
          href="#"
          class="btn btn_orange pricinr w-button"
          ><strong class="bold-text-15">Coming soon</strong></a
        >
        <div class="no-card">
          <em class="italic-text-5">No credit card required</em>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Pricing"
};
</script>

<style lang="scss" scoped>
.title {
  width: 100%;
  max-width: 900px;
  margin-top: 0px;
  margin-bottom: 40px;
  font-size: 44px;
  line-height: 52px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
  color: #fff;
}

.section {
  max-width: 1160px;
  background: linear-gradient(
    180deg,
    rgba(254, 204, 203, 1) 0%,
    rgb(255, 216, 215) 35%,
    rgba(247, 222, 215, 1) 100%
  );
}
.section .pricing {
  display: flex;
  padding: 36px 32px;
}
.title.title_white.title_white_center {
  font-size: 36px;
  font-weight: 600;
  text-align: center;
}
.title.title_white {
  max-width: 1200px;
  margin-top: 40px;
}
.title {
  width: 100%;
  margin-bottom: 40px;
  font-family: "Tt firs neue", sans-serif;
  line-height: 52px;
  letter-spacing: 2px;
}
.card_row.pricing {
  position: relative;
  display: flex;
  max-width: 1300px;
  margin-top: 60px;
  -webkit-box-orient: horizontal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-pack: justify;
  justify-content: space-between;
  flex-wrap: nowrap;
  background-color: transparent;
}
.card_row {
  width: 100%;
  align-content: stretch;
  transform-style: preserve-3d;
}
.pricing_block.free {
  border-style: solid;
  border-width: 4px;
  border-color: orange;
  border-radius: 13px;
  background-color: #f7fafc;
}
.pricing_block.free {
  border-style: solid;
  border-width: 4px;
  border-color: orange;
  border-radius: 13px;
  background-color: #f7fafc;
}
.pricing_block {
  display: flex;
  width: 31%;
  max-width: 360px;
  min-height: 450px;
  margin-right: 20px;
  padding-right: 16px;
  padding-left: 16px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
  border-style: solid;
  border-width: 1px;
  border-color: #d6e0e9;
  border-radius: 4px;
  background-color: #fff;
  transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.pricing_text.up {
  margin-top: 40px;
  color: #000;
  font-size: 30px;
}
.pricing_text {
  margin-bottom: 10px;
  text-align: center;
}
.pricing_text .pricing_text_small {
  margin-top: 10px;
  margin-bottom: 0px;
  font-family: Roboto, sans-serif;
  color: #000;
  font-size: 21px;
  line-height: 32px;
  font-weight: 300;
}
.card_separator_pricing .two {
  width: 80%;
  max-width: 60%;
  background-color: #d6e0e9;
}
.card_separator_pricing {
  height: auto;
  margin-top: 5px;
  padding-left: 0px;
  text-align: center;
}
.pricing_text.price {
  margin-top: 20px;
  margin-bottom: 0px;
  font-size: 44px;
}
.bold-text-18 {
  font-size: 24px;
  font-weight: 600;
}
.italic-text-3 {
  font-size: 16px;
  line-height: 16px;
  font-style: normal;
}
.italic-text-5 {
  color: #9b9b9b;
  font-size: 14px;
  font-style: normal;
}
.btn.btn_orange .pricinr .free {
  background-color: #4a90e2;
}
.btn .btn_orange .pricinr {
  min-width: 180px;
  margin-top: 40px;
  text-align: center;
}
.btn.btn_orange {
  margin-top: 20px;
  padding: 10px 40px;
  border-style: solid;
  border-color: transparent;
  background-color: orange;
  color: #fff;
}
.btn {
  border-width: 1px;
  border-radius: 4px;
  transition: all 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
  font-family: "Tt firs neue", sans-serif;
  font-weight: 500;
}
.btn .btn_orange .pricinr .free {
  background-color: $secondary;
}
.w-button {
  display: inline-block;
  padding: 9px 15px;
  color: white;
  border: 0;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
  border-radius: 0;
}
.bold-text-15 {
  font-weight: 500;
}
.bold-text-16 {
  font-size: 24px;
  font-weight: 600;
}
.bold-text-17 {
  font-size: 24px;
  font-weight: 600;
}
.no-card {
  margin-top: 20px;
  margin-bottom: 20px;
}
.pricing_text .up {
  margin-top: 40px;
  color: #000;
  font-size: 30px;
}
.button-6 {
  min-width: 180px;
  margin-top: 40px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-style: solid;
  border-width: 1px;
  border-color: orange;
  border-radius: 4px;
  background-color: orange;
  transition: all 200ms ease;
  font-weight: 500;
  text-align: center;
}
.btn.btn_orange.pricinr.free {
  background-color: $secondary;
}
.btn.btn_orange.pricinr {
  min-width: 180px;
  margin-top: 40px;
  text-align: center;
}
.monthly {
  font-size: 14px;
}
@media screen and (max-width: 479px) {
  .card {
    width: 100%;
    padding-right: 16px;
    padding-left: 16px;
  }
  .card_row.pricing {
    display: block;
    margin-top: 5px;
  }
  .pricing_block {
    width: 100%;
    margin: 1rem auto;
  }
  .section .pricing {
    padding: 10px 10px;
  }
}
</style>

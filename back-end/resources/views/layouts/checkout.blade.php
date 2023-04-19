@extends('empty')
@section('title')
checkout
@endsection
@section('content')
<div class="row  padding-section">
      <div class="col-75">
        <div class="container container-checkout">
          <form action="/action_page.php">
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"> <i class="fa fa-user"></i>Full Name</label>
                <input
                class="inputText"
                  type="text"
                  id="fname"
                  name="Firstname"
                  placeholder="Ahmed"
                />

                <label for="email"> <i class="fa fa-envelope"></i>Email</label>
                <input
                class="inputText"
                  type="text"
                  id="email"
                  name="email"
                  placeholder="Ahmed@example.com"
                />

                <label for="adr">
                  <i class="fa fa-address-card-o"></i>Address</label
                >
                <input
                class="inputText"
                  type="text"
                  id="adr"
                  name="Address"
                  placeholder="Somewhere Street"
                />

                <label for="City">
                  <i class="fa fa-institution"></i>Address</label
                >

                <input type="text"
                class="inputText"id="City" name="City" placeholder="Cairo" />
                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input
                    class="inputText"
                      type="text"
                      id="State"
                      name="State"
                      placeholder="NY"
                    />

                    <div class="row">
                      <div class="col-50">
                        <label for="zip">Zip</label>
                        <input
                        class="inputText"
                          type="text"
                          id="zip"
                          name="Zip"
                          placeholder="11389"
                        />

                        <div class="col-50">
                          <h3>Payment</h3>
                          <label for="fname">Accepted Cards</label>
                          <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color: navy"></i>
                            <i class="fa fa-cc-amex" style="color: blue"></i>
                            <i
                              class="fa fa-cc-mastercard"
                              style="color: red"
                            ></i>
                            <i
                              class="fa fa-cc-discover"
                              style="color: orange"
                            ></i>
                          </div>
                          <label for="cname">Name on Card</label>
                          <input
                          class="inputText"
                            type="text"
                            id="cname"
                            name="cardname"
                            placeholder="Ahmed Mohamed Ali"
                          />

                          <label for="ccnum">Credit Card Number</label>
                          <input
                          class="inputText"
                            type="text"
                            id="ccnum"
                            name="cardnumber"
                            placeholder="xxxx-xxxx-xxxx-xxxx"
                          />

                          <label for="expmonth">Expier Month</label>
                          <input
                          class="inputText"
                            type="text"
                            id="expmonth"
                            name="expmonth"
                            placeholder="March"
                          />

                          <div class="row">
                            <div class="col-50">
                              <label for="expyear">Expier Year</label>
                              <input
                              class="inputText"
                                type="text"
                                id="expyear"
                                name="expyear"
                                placeholder="2023"
                              />
                            </div>

                            <div class="col-50">
                              <label for="cvv">Cvv</label>
                              <input
                              class="inputText"
                                type="text"
                                id="cvv"
                                name="cvv"
                                placeholder="356"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <label for="billing">
                    <input
                        type="checkbox"
                        checked="checked"
                        name="sameadr"
                        id="billing"
                      />
                      Shipping Address same as Billing
                    </label>
                    <input
                      type="submit"
                      value="Continue to Checkout"
                      class="bttn"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-25">
        <div class="container container-checkout">
          <h4>
            Cart
            <span class="price" style="color: black">
              <i class="fa fa-shopping-cart"></i> <b>4</b>
            </span>
          </h4>
          <p><a href="#">Product 01</a> <span class="price">$100</span></p>
          <p><a href="#">Product 02</a> <span class="price">$50</span></p>
          <p><a href="#">Product 03</a> <span class="price">$25</span></p>
          <p><a href="#">Product 04</a> <span class="price">$10</span></p>
          <hr />
          <p>
            Total <span class="price" style="color: black"> <b>$185</b> </span>
          </p>
        </div>
      </div>
    </div>
@endsection
